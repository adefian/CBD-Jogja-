<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     //membuat fungsi isInstansi untuk Instansi
    public function isInstansi(){
        //jika role_name=instansi maka benar
        if($this->role == 'instansi'){
            return true;
        }
            return false;
    }
    public function isAdmin(){
        //jika role_name=Admin maka benar
        if($this->role == 'admin'){
            return true;
        }
            return false;
    }
    public function isMasyarakat(){
        //jika role_name=Masyarakat maka benar
        if($this->role == 'masyarakat'){
            return true;
        }
            return false;
    }
}
