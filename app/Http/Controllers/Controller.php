<?php

namespace App\Http\Controllers;

use App\Enums\UserRole;
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

    public function authlogin(){
        $admin_Role = Session::get('account');
        if ($admin_Role == null || $admin_Role->Role > UserRole::Author){
            return false;
        }else {
            return true;
        }
    }

    public function pathLogin() {
        Session::flash('message', 'Bạn cần quyền của Admin hoặc manage để vào admin ');
        Session::flash('type-message', 'danger');
       return Redirect::to('/admin/login');
    }
}
