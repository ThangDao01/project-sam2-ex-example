<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use function PHPUnit\Framework\stringContains;

class AdminUserController extends Controller
{
    //
    public function index()
    {
        parent::index();
        if ($this->authlogin()){
            $list = Account::with('roles')->orderBy('id','ASC')->paginate(10);
            return view('admin.Account.list')->with(compact('list'));
        }else {
            return $this->pathLogin();
        }
    }
    public function impersonate($id){
        $user = Account::where('id',$id)->first();
        if($user){
            session()->put('impersonate',$user->id);
        }
        return redirect('/admin/account/list');
    }

    public function impersonate_destroy(){
        session()->forget('impersonate');
        return redirect('/admin/account/list');
    }

    public function add_users(){
        return view('admin.Account.register');
    }

    public function delete_user_roles($id){
        if(Auth::id()==$id){
            return redirect()->back()->with('message','Bạn không được quyền xóa chính mình');
        }
        $admin = Account::find($id);
        if($admin){
            $admin->roles()->detach();
            $admin->delete();
        }
        return redirect()->back()->with('message','Xóa user thành công');

    }

    public function assign_roles(Request $request){
        $data = $request->all();
        if(Auth::id()==$request->id){
            return redirect()->back()->with('message','Bạn không được phân quyền chính mình');
        }
        $user = Account::where('Email',$data['Email'])->first();
        $user->roles()->detach();
        if($request['author_role']){
            $user->roles()->attach(Roles::where('name','author')->first());
        }
        if($request['user_role']){
            $user->roles()->attach(Roles::where('name','user')->first());
        }
        if($request['admin_role']){
            $user->roles()->attach(Roles::where('name','admin')->first());
        }
        return redirect()->back()->with('message','Cấp quyền thành công');
    }
    public function store_users(Request $request){
        $data = $request->all();
        $admin = new Account();
        $admin->FirstName = $data['FirstName'];
        $admin->LastName = $data['LastName'];
        $admin->Email = $data['Email'];
        $admin->Salt = 1;
        $admin->PhoneNumber = $data['PhoneNumber'];
        $admin->PasswordHash = $data['PasswordHash'];
        $admin->Age = $data['Age'];
        $admin->Role = 1;
        $admin->roles()->attach(Roles::where('name','user')->first());
        $admin->save();
        Session::put('message','Thêm users thành công');
        return Redirect::to('/admin/account/list');
    }
}
