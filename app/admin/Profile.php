<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    protected $guarded = ['id'];

    // public function user(){
    // 	return $this->belongsTo('App\User');
    //  }
}
