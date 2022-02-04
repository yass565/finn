<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'firstname', 'lastname', 'email', 'password','profile', 'phone','address', 'pin_code', 'date_birth', 'gender','status'
        'id', 'entreprise_id', 'firstname', 'lastname', 'email', 'profile', 'phone','address', 'pin_code', 'date_birth', 'gender','status', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'

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
}
