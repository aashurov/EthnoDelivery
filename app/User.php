<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'role','avatar', 'role_id', 'address', 'status', 'remember_token'

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
    public function role()
    {
        return $this->hasOne(Role::class);
    }
    
    public function isAdmin()
    {   
        return $this->role == 'Administrator';
    }

    public function isManager()
    {
        return $this->role == 'Manager';
    }
    public function isCourier()
    {
        return $this->role == 'Courier';
    }
    public function isDirector()
    {
        return $this->role == 'Director';
    }
    public function isStaff()
    {
        return $this->role == 'Staff';
    }
    public function isCustomer()
    {
        return $this->role == 'Customer';
    }
}
