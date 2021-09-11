<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Account extends Authenticatable
{


    public $timestamps = false;
    protected $fillable = [
        'FirstName','LastName','Email','PhoneNumber','PasswordHash','Age','Role','Salt'
    ];
    protected $primaryKey = 'id';
    protected $table = 'accounts';
    public function roles()
    {
        return $this->belongsToMany('App\Models\Roles');
    }

    public function getAuthPassword()
    {
        return $this->PasswordHash;
    }
    public function hasAnyRoles($roles){
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }

    public function hasRole($role){
        return null !== $this->roles()->where('name', $role)->first();
    }
}
