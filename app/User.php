<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function isDisabled ()
    {
        return $this->role == 99;
    }

    public function isAdmin ()
    {
        return $this->role == 0;
    }

    public function isHeadManager ()
    {
        return $this->role == 1;
    }

    public function isManager ()
    {
        return $this->role == 2;
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
