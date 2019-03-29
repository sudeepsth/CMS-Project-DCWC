<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminDistrict extends Model
 {

    protected $table = 'district';
    protected $guarded = ['id'];

    public static function getDistrictList(){
        $data = DB::table('district')
                -> orderBy('created_at', 'DESC')
    			-> get();

    	return $data; 
    }

}
