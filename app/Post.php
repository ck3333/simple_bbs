<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'message' => 'required|max:140',
    );


    // リレーション
    public function user()
    {
        return $this->belongsTo('App\User', 'member_id');
    }
}