<?php

namespace App\site;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Home extends Model
{
  protected $table = 'project';
  protected $guarded = ['id'];

  public static function getOngoingProject(){
      return DB::table('project')
        ->where('project',2)
        ->where('status','1')
        ->where('homepage','1')
        ->orderBy('ordering','DESC')
        ->limit(3)
        ->get();
  }

  public static function getLatestBlogs(){
    return DB::table('news_events')
      ->where('status','1')
      ->orderBy('published_date','DESC')
      ->limit(3)
      ->get();
}

  public static function getSliderList(){
    return DB::table('gallery')
      ->orderBy('created_at','DESC')
      ->get();
}

  public static function getDistrictList(){
    return DB::table('district')
      ->where('status','1')
      ->orderBy('district','ASC')
      ->get();
}

  public static function getStateList(){
    return DB::table('state')
      ->where('status','1')
      ->orderBy('state','ASC')
      ->get();
}
  public static function getPopUpList(){
    return DB::table('popup')
      ->where('status','1')
      ->orderBy('created_at','DESC')
      ->first();
}
  public static function getPartnersList(){
    return DB::table('partners')
        ->orderBy('ordering','ASC')
         ->get();
}

  public static function getActivitiesDetails($slug){
    return DB::table('project')
        ->where('id',$slug)
        ->get();
}

public static function getPagesDetail($page){
  return DB::table('pages')
      ->where('slug',$page)
      ->where('status',1)
      ->first();
}

public static function getBlogs(){
    return DB::table('news_events')
          ->where('status','1')
          ->orderBy('published_date','DESC')
          ->paginate(12);
}

public static function getBlogNews(){
  return DB::table('news_events')
        ->where('category','1')
        ->where('status','1')
        ->orderBy('published_date','DESC')
        ->paginate(12);
}

public static function getBlogEvents(){
  return DB::table('news_events')
        ->where('category','2')
        ->where('status','1')
        ->orderBy('published_date','DESC')
        ->paginate(12);
}

public static function getBlogDetail($slug){
  return DB::table('news_events')
        ->where('slug',$slug)
        ->where('status','1')
        ->first();
}

public static function getCharityImages($slug){
  return DB::table('charity_trek AS CT')
        ->join('rel_charity_gallery AS CG','CT.id','CG.charity_id')
        ->select('CG.image')
        ->where('slug',$slug)
        ->where('CT.status','1')
        ->get();
}

public static function getCharityDays($slug){
  return DB::table('charity_trek AS CT')
        ->join('rel_charity_record AS CR','CT.id','CR.charity_id')
        ->select('CR.title','CR.description')
        ->where('slug',$slug)
        ->where('CR.status','1')
        ->get();
}

public static function getCharityList(){
  return DB::table('charity_trek')
        ->where('status','1')
        ->orderBy('created_at','DESC')
        ->get();
}

public static function getLatestBlog(){
  return DB::table('news_events')
        ->where('status',1)
        ->orderBy('published_date','DESC')
        ->limit(5)
        ->get();
}

public static function getYearList(){
    return DB::table('year')
          ->orderBy('year','DESC')
          ->get();
}

public static function getProjectCategory(){
  return DB::table('category')
        ->orderBy('category_name','ASC')
        ->get();
}

public static function getAccomplishedProjects(){
  return DB::table('project')
        ->where('project','1')
        ->where('status','1')
        ->orderBy('ordering','DESC')
        ->paginate(9);

}

public static function getOngoingProjectList(){
  return DB::table('project')
        ->where('project','2')
        ->where('status','1')
        ->orderBy('ordering','DESC')
        ->paginate(9);

}

public static function getFutureProjectList(){
  return DB::table('project')
        ->where('project','3')
        ->where('status','1')
        ->orderBy('ordering','DESC')
        ->paginate(9);

}

public static function getYearProjectList($year_id,$project_id,$category_id,$district_id,$state_id){
  $query = DB::table('project AS P')
        ->join('rel_project_category AS PC','P.id','PC.admin_project_id')
        ->select('P.*');
      if(isset($category_id)){
        $query =  $query->where('PC.admin_category_id',$category_id);
      }
      if(isset($project_id)){
        $query =  $query->where('project',$project_id);
      }
      if(isset($year_id)){ 
        $query =   $query->where('year_id',$year_id);
      }
      if(isset($district_id)){ 
        $query =   $query->where('district_id',$district_id);
      }
      if(isset($state_id)){ 
        $query =   $query->where('state_id',$state_id);
      }
      $query =  $query->where('status','1')
        ->orderBy('P.ordering','DESC')
        ->paginate(9);
    return $query;

}

public static function getProjectCategoryList($year_id,$project,$category,$district_id,$state_id){
  $query = DB::table('project AS P')
        ->join('rel_project_category AS PC','P.id','PC.admin_project_id')
        ->join('category AS C','C.id','PC.admin_category_id')
        ->select('P.*');
      if(isset($category)){
        $query =  $query->where('C.slug',$category);
      }
      if(isset($project)){
        $query =  $query->where('P.project',$project);
      }
      if(isset($year_id)){ 
        $query =   $query->where('year_id',$year_id);
      }
      if(isset($district_id)){ 
        $query =   $query->where('district_id',$district_id);
      }
      if(isset($state_id)){ 
        $query =   $query->where('state_id',$state_id);
      }
      $query =  $query->where('P.status','1')
        ->orderBy('P.ordering','DESC')
        ->paginate(9);
    return $query;

}

public static function getCategoryProjectList($slug){
  return DB::table('rel_project_category AS PC')
        ->join('project AS P','P.id','PC.admin_project_id')
        ->join('category AS C','C.id','PC.admin_category_id')
        ->select('P.*','C.category_name')
        ->where('C.slug',$slug)
        ->where('P.status','1')
        ->orderBy('ordering','DESC')
        ->paginate(9);

}

public static function getCategoryList($slug){
  return DB::table('category')
          ->select('category_name')
          ->where('slug',$slug)
          ->first();
}

public static function getCategoryProjectSummaryList($slug,$id){
  $project=0;
  if($id=='accomplished')
    {
      $project=1;
    }
  if($id=='ongoing')
    {
      $project=2;
    }
  if($id=='future-plan')
    {
      $project=3;
    }
    if($project==0){
      exit();
    }

  return DB::table('rel_project_category AS PC')
        ->join('project AS P','P.id','PC.admin_project_id')
        ->join('category AS C','C.id','PC.admin_category_id')
        ->select('P.*','C.category_name')
        ->where('C.slug',$slug)
        ->where('P.project',$project)
        ->where('P.status','1')
        ->orderBy('ordering','DESC')
        ->paginate(9);

}

public function gallery(){
  $data = $this->hasMany(ProjectImages::Class,'project_id');
  return $data;
}

public static function getProgramDetail($slug){
    return DB::table('program_description')
          ->where('slug',$slug)
          ->first();
}
}
