<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\Account;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    //
    public function index()
    {
        parent::index();
        if ($this->authlogin()){
            return View('admin.index');
        }else {
            return $this->pathLogin();
        }
    }

    public function loginView(Request $request)
    {
        //
        return view('admin.Account.login');
    }

    public function logout_auth()
    {
        Auth::logout();
        $account = Account::find(Session::get('account')->id);
        $account->Status = 1;
        $account->save();
        Session::forget('account');
        return redirect('/admin/login');
    }

    public function AdminLogin(Request $request)
    {
        $email = $request->get('Email');
        $password = $request->get('password');
        $salt = DB::table('accounts')->where('Email', $email)->value('Salt');
        $dataAccount = DB::table('accounts')->where('Email', $email)->first();
        $PasswordHash = DB::table('accounts')->where('Email', $email)->value('PasswordHash');
        if (Hash::check($password.$salt, $PasswordHash)) {
            // The passwords match...
            if (Session::has("account")){
                Session::pull("account");
            }
            $this->Visitors();
            $account = Account::find($dataAccount->id);
            $account->Status = 2;
            $account->save();
            Session::put("account",$dataAccount);
            return redirect('/admin');
        } else {
            Session::flash('message', 'Tên người dùng hoặc mật khẩu không hợp lệ. vui lòng nhập lại');
            Session::flash('type','error');
            return redirect('/admin/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerView()
    {
        //
        return view('admin.Account.register');
    }

    function incrementalHash()
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $result = '';
        for ($i = 0; $i < 5; $i++)
            $result .= $characters[mt_rand(0, 61)];
        return $result;
    }

    public function AdminRegister(AccountRequest $request)
    {
        $email = $request->get('Email');
        $accountCheck = DB::table('accounts')->where('Email', $email)->first();
        if ($accountCheck) {
            Session::flash('message', 'Invalid email try another email');
            Session::flash('type-message', 'danger');
            return redirect('/admin/register');
        }
        $salt = $this->incrementalHash();
//        $email = new EmailController();
//        $email->CheckingMail($salt,$email,$request->get('LastName'));

        $request->validated();
        $account = new Account();
        $account->Email = $email;
        $account->FirstName = $request->get('FirstName');
        $account->LastName = $request->get('LastName');
        $account->PhoneNumber = $request->get('PhoneNumber');
        $account->Salt = $salt;
        $account->Age = $request->get('Age');
        $account->Role = 2;
        $account->PasswordHash = Hash::make($request->get('password') . $account->Salt, [
            'rounds' => 12,
        ]);
        $account->created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $account->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $account->save();
        Session::flash('message', 'Account successfully created Please Login to continue');
        Session::flash('type-message', 'success');
        return redirect('/admin/login');
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $obj = Account::find($id);
        if ($obj == null) {
            return view('error.404', ['msg' => 'không tìm thấy tin tức']);
        }
        return view('admin.Account.edit', ['obj' => $obj]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $obj = Account::find($id);
        if ($obj == null) {
            return view('error.404', ['msg' => 'không tìm thấy tin tức']);
        }
        $obj->delete();
        return view('admin/account/list');
    }
}
