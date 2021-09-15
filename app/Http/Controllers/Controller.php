<?php

namespace App\Http\Controllers;

use App\Enums\UserRole;
use App\Models\Config;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){

    }

    public function online(){
        $account = Session::get('account');
        $account->Status = 2;
        $account->save();
    }
    public function Visitors(){
        $account = Config::all()->first();
        $account->Visitors = $account->Visitors+1;
        $account->save();
    }

    public function authlogin(){
        $admin_Role = Session::get('account');
        if ($admin_Role == null || $admin_Role->Role > UserRole::Author){
            return false;
        }else {
            return true;
        }
    }
    public function userLogin(){

        if (Session::has('account')){
           return true;
        }else {
            Session::flash('message', 'Bạn cần đăng nhập để sử dụng chức năng này');
            Session::flash('type', 'danger');
            return Redirect::to('/login');
        }
    }

    public function pathLogin() {

        Session::flash('message', 'Bạn cần có quyền truy cập để vào trang dành cho admin');
        Session::flash('type', 'danger');
       return Redirect::to('/admin/login');
    }
}
