<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminYear extends Model
 {

    protected $table = 'year';
    protected $guarded = ['id'];

    public static function getYearList(){
        $data = DB::table('year')
                -> orderBy('year', 'DESC')
    			-> get();

    	return $data; 
    }

}
