<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminDashboard extends Model
 {

    public static function getDistrictProjectList(){
        return DB::table('project AS P')
                ->join('district AS D','D.id','P.district_id')
                ->select(DB::raw('count(*) as total'), 'D.*')
                 ->orderBy('D.district', 'ASC')
                ->groupBy('P.district_id')
    			->get();
    }

    public static function geProjectCategoryList(){
        return DB::table('project AS P')
                ->join('rel_project_category AS PC','PC.admin_project_id','P.id')
                ->join('category AS C','PC.admin_category_id','C.id')
                ->select(DB::raw('count(*) as total'), 'C.*')
                ->orderBy('C.category_name', 'ASC')
                ->groupBy('C.category_name')
    			->get();
    }

}
