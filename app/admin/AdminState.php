<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminState extends Model
 {

    protected $table = 'state';
    protected $guarded = ['id'];

    public static function getStateList(){
        $data = DB::table('state')
                -> orderBy('created_at', 'DESC')
    			-> get();

    	return $data; 
    }

}
