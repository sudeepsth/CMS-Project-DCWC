<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminCharityDetails extends Model
{
    protected $table = 'rel_charity_record';
    protected $guarded = ['id'];

}
