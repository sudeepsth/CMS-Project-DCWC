<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminSendMail extends Model
{

    protected $table = 'sent_email';
    protected $guarded = ['id'];


}
