<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminUserMailAdd extends Model
{
    protected $table = 'user_mail';
    protected $guarded = ['id'];


    public static function getEmailList() {
        $data = DB::table('user_mail AS UM')
                ->join('email_category AS EC','UM.title','EC.id')
                ->select('name','email','category_name','UM.status','UM.id')
                ->orderBy('UM.created_at','DESC')
                -> get();
        return $data;
    }
   
}
