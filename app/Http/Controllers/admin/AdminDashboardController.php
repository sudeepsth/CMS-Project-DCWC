<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\AdminDashboard;

class AdminDashboardController extends Controller
{

    public function dashboard(){
        $district = AdminDashboard::getDistrictProjectList();
        $project = AdminDashboard::geProjectCategoryList();
        return view('admin.home',compact('district','project'));

    }
}
