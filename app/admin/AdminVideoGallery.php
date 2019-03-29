<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class AdminVideoGallery extends Model
{
    protected $table = 'videos';
    protected $guarded = ['id'];
}
