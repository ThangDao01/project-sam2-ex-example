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

    public function Authlogin(){
        $admin_id = Session::get('account');
        if ($admin_id != null && $admin_id <= UserRole::Admin){
            return Redirect::to('/admin');
        }else{
            return Redirect::to('/admin/login')->send();
        }
    }
}
