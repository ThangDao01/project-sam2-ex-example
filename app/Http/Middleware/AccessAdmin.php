<?php

namespace App\Http\Middleware;

use App\Models\Account;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AccessAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $admin;
    public function _cunstruct(Account $admin){
        $this->admin = $admin;
    }

    public function handle(Request $request, Closure $next)
    {
        $actions = Route::getCurrentRoute()->getAction();
        $roles = isset($actions['roles']) ? $actions['roles'] : null;
        if ($this->admin->hasRole($roles) || $roles){
            return $next($request);
        }else{
            return abort(401);
        }
    }
}
