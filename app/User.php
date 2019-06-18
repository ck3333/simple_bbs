<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'picture',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public static $rules = array(
        'name' => 'required|max:100',
        'email' => 'required|max:255|unique:members',
        'password' => 'required|min:4',
    );

    public static $edit_rules = array(
        'name' => 'required|max:100',
        'email' => 'required|max:255|unique:members',
        'password' => 'nullable|min:4',
    );

}
