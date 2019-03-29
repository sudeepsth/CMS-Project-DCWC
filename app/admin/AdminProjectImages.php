<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminProjectImages extends Model
{
    protected $table = 'rel_project_gallery';
    protected $guarded = ['id'];

}
