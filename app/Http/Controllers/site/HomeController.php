<?php
namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\site\Home;
use App\admin\AdminCharityTrek;


class HomeController extends Controller {


	public function index(){
		$ongoing = Home::getOngoingProject();
		$blogs = Home::getLatestBlogs();
		$slider = Home::getSliderList();
		$partners = Home::getPartnersList();
		$popup = Home::getPopUpList();
        $result = array(
			'ongoing'		=>$ongoing,
			'blogs'			=>$blogs,
			'slider'		=>$slider,
			'partners'		=>$partners,
			'popup'			=>$popup,
		);
   		return view('site.home',compact('result'));
	}

	public function introduction(){
		return view('site.pages.introduction');
	}

	public function hospital(){
		return view('site.pages.hospital');
	}

	public function team(){
		return view('site.pages.team');
	}

	public function partners(){
		return view('site.pages.partners');
	}
	public function activitiesInside($slug){
		$activities = Home::where('slug',$slug)->first();
		$result = array(
			'activities'		=>$activities,
		);
		return view('site.projects.activitiesinside',compact('result'));
	}

	public function blogs(){
		$blogs = Home::getBlogs();
		$result = array(
			'blogs'		=>$blogs,
		);
		return view('site.blogs.bloggrid',compact('result'));
	}

	public function news(){
		$blogs = Home::getBlogNews();
		$result = array(
			'blogs'		=>$blogs,
		);
		return view('site.blogs.bloggrid',compact('result'));
	}

	public function events(){
		$blogs = Home::getBlogEvents();
		$result = array(
			'blogs'		=>$blogs,
		);
		return view('site.blogs.bloggrid',compact('result'));
	}

	public function blogDetails($slug){
		$blog = Home::getBlogDetail($slug);
		$latest = Home::getLatestBlog();
		$result = array(
			'blog'		=>$blog,
			'latest'	=>$latest,
		);
		return view('site.blogs.blogdetail',compact('result'));
	}

	public function pages($page){
		$detail = Home::getPagesDetail($page);
		return view('site.pages.details',compact('detail'));
	}
 
	public function charity(){
		$list = Home::getCharityList();
		
		return view('site.pages.charity',compact('list'));
	}


	public function charityDetail($slug){
		$charity = AdminCharityTrek::where('slug',$slug)->where('status','1')->first();
		$result = array(
			'charity'		=>$charity,
		);
		
		return view('site.pages.charitydetail',compact('result'));
	}

	public function accomplished(){
		$slug = 'accomplished';
		$category = Home::getProjectCategory();
		$list = Home::getAccomplishedProjects();
		$year = HOme::getYearList();
		$district = Home::getDistrictList();
		$state = Home::getStateList();
		$detail = Home::getProgramDetail($slug);
		$result = array(
			'list'			=>$list,
			'category'		=>$category,
			'page_header'	=>'Accomplished Program',
			'page_header_1'	=>'Accomplished List',
			'year'			=>$year,
			'district'		=>$district,
			'state'			=>$state,
			'detail'		=>$detail,
		);
		return view('site.projects.projectlist',compact('result'));
	}

	public function ongoing(){
		$slug = 'ongoing';
		$list = Home::getOngoingProjectList();
		$category = Home::getProjectCategory();
		$year = HOme::getYearList();
		$district = Home::getDistrictList();
		$state = Home::getStateList();
		$detail = Home::getProgramDetail($slug);
		$result = array(
			'list'			=>$list,
			'category'		=>$category,
			'page_header'	=>'Ongoing Program',
			'page_header_1'	=>'Ongoing List',
			'year'			=>$year,
			'district'		=>$district,
			'state'			=>$state,
			'detail'		=>$detail,
		);
		return view('site.projects.projectlist',compact('result'));
	}

	public function future(){
		$slug = 'future';
		$category = Home::getProjectCategory();
		$list = Home::getFutureProjectList();
		$year = HOme::getYearList();
		$district = Home::getDistrictList();
		$state = Home::getStateList();
		$detail = Home::getProgramDetail($slug);
		$result = array(
			'list'			=>$list,
			'category'		=>$category,
			'page_header'	=>'Future Program',
			'page_header_1'	=>'Future Plan List',
			'year'			=>$year,
			'district'		=>$district,
			'state'			=>$state,
			'detail'		=>$detail,
		);
		return view('site.projects.projectlist',compact('result'));
	}

	public function projectCategory($slug){
		
		$list = Home::getCategoryProjectList($slug);
		$year = Home::getYearList();
		$district = Home::getDistrictList();
		$state = Home::getStateList();
		$category=null;
		if($list->count()==0){
			$category=Home::getCategoryList($slug);
		}
		$result = array(
			'list'			=>$list,
			'page_header'	=>($list->count()>0)?$list[0]->category_name:$category->category_name,
			'page_header_1'	=>($list->count()>0)?$list[0]->category_name:$category->category_name . ' Category List',
			'year'			=>$year,
			'slug'			=>$slug,
			'district'		=>$district,
			'state'			=>$state,
		);
		return view('site.projects.projectcategorylist',compact('result'));
	}

	public function projectCategoryDetail($slug,$id){
		
		$list = Home::getCategoryProjectSummaryList($slug,$id);
		$district = Home::getDistrictList();
		$state = Home::getStateList();
		$category=null;
		if($list->count()==0){
			$category=Home::getCategoryList($slug);
		}
		$year = Home::getYearList();
		$result = array(
			'list'			=>$list,
			'page_header'	=>($list->count()>0)?$list[0]->category_name:$category->category_name,
			'page_header_1'	=>($list->count()>0)?$list[0]->category_name:$category->category_name . ' Category List',
			'year'			=>$year,
			'slug'			=>$slug,
			'id'			=>$id,		
			'district'		=>$district,
			'state'			=>$state,	
		);
		return view('site.projects.projectcategoryDetaillist',compact('result'));
	}

	public function ajaxproject(Request $request){
		if ($request->ajax()) {
			$list = Home::getYearProjectList($request->year_id,$request->project_id,$request->category_id,$request->district_id,$request->state_id);
			$result = array(
				'list'        	 =>$list,
			);
        echo view('site.ajax.ajax_project', compact('result'));
        exit();
    }else{
        $error = array(
            'status'    => 'error', 
            'message'   => 'Please try again.'
        );
        return response()->json($error);
    }    
	}

	public function ajaxprojectcategory(Request $request){
		if ($request->ajax()) {
			$list = Home::getProjectCategoryList($request->year_id,$request->project,$request->category,$request->district_id,$request->state_id);
			$result = array(
				'list'        	 =>$list,
			);
        echo view('site.ajax.ajax_project', compact('result'))->render();
        exit();
    }else{
        $error = array(
            'status'    => 'error', 
            'message'   => 'Please try again.'
        );
        return response()->json($error);
    }    
	}

}
