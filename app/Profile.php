<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
         protected $guarded = array('id');

    // 以下課題部分
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
}
