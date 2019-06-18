<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required|max:100',
        'email' => 'required|max:255|unique:members',
        'password' => 'required|min:4',
    );
}
