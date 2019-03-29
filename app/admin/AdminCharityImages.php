<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminCharityImages extends Model
{
    protected $table = 'rel_charity_gallery';
    protected $guarded = ['id'];

}
