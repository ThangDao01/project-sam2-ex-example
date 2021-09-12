<?php

namespace App\Http\Controllers;

use App\Enums\UserRole;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $this->Authlogin();
    }

    private function Authlogin(){
        $admin_Role = Session::get('account');
        if ($admin_Role == null || $admin_Role->Role > UserRole::Author){
            return Redirect::to('/admin/login');
        }
    }
}
