<?php

namespace App\site;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProjectImages extends Model
{
    protected $table = 'rel_project_gallery';
    protected $guarded = ['id'];

} 
