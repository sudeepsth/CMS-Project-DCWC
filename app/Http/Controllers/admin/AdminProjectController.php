<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\AdminProject;
use App\admin\AdminProjectImages;
use App\admin\AdminCategory;
use App\admin\AdminYear;
use App\admin\AdminDistrict;
use App\admin\AdminState;
use Illuminate\Support\Facades\DB;
use App\admin\AdminNewsEvent;
use Illuminate\Mail\Message;
use Mail;
use App\admin\AdminEmailCategory;


class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = AdminProject::get();
        $result = array(
            'page_header'       => 'List of All Projects',
            'project'          =>$project,
        );
        return view('admin.project.list',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $email = AdminEmailCategory::getCategoryList();
        $category = AdminCategory::getCategoryList();
        $district = AdminDistrict::orderBy('district','ASC')->get();
        $state = AdminState::orderBy('state','ASC')->get();
        $year = AdminYear::getYearList();
        $result = array(
            'page_header'       => 'Add New Project',
            'category'         =>$category,
            'email'            =>$email,
            'year'             =>$year,
            'district'         =>$district,
            'state'            =>$state,
            'date'             => date('Y-m-d H:i:s'),
        );
        return view('admin.project.create',compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_1'   => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $project = new AdminProject;
        $featured = $request->file('image');
        $path=null;
        if(isset($featured)){
            $path = "images/";
            $year_folder = $path . date("Y");
            $month_folder = $year_folder . '/' . date("m");
                $path = "images/";
                $image_name = time().'.'.$featured->getClientOriginalName();
                $path = $month_folder . '/' . $image_name;
                $featured->move(public_path($month_folder), $image_name);
        }

        $featured_1 = $request->file('image_1');
        $path_1=null;
        if(isset($featured_1)){
            $path_1 = "images/";
            $year_folder = $path . date("Y");
            $month_folder = $year_folder . '/' . date("m");
                $path_1 = "images/";
                $image_name = time().'.'.$featured_1->getClientOriginalName();
                $path_1 = $month_folder . '/' . $image_name;
                $featured_1->move(public_path($month_folder), $image_name);
        }
        $project->title = $request->title;
        $project->description = $request->description;
        $project->year_id = $request->year_id;
        $project->project = $request->project;
        $project->images = $path;
        $project->homepage = $request->homepage;
        $project->district_id = $request->district_id;
        $project->state_id = $request->state_id;
        $project->images_1 = $path_1;
        $project->status = $request->status;
        $project->published_date = $request->published_date;
        $project->save();
        $project->category()->sync($request->category);

        $photos = $request->file('photos');
        
        if(isset($photos)){
            $path = "images/";
            $year_folder = $path . date("Y");
            $month_folder = $year_folder . '/' . date("m");
            $records = array();
            foreach($photos as $photo){
                $path = "images/";
                $image_name = time().'.'.$photo->getClientOriginalName();
                $path = $month_folder . '/' . $image_name;
                $photo->move(public_path($month_folder), $image_name);
    
                $record['project_id'] = $project->id;
                $record['image'] = $path;
                array_push($records, $record);
            }
            DB::table('rel_project_gallery')->insert($records);
        }
        
        $emailtype=null;
        if(isset($request->email)){
            foreach($request->email as $item){
            
                if($item == 0 ){
                    $emailtype=1;
                    break;
                }else{
                    $emailtype=2;
                    break;
                }
            }
        }
        
        if($emailtype == 1){
            $useremail = AdminNewsEvent::getUserEmailAddress();
        }
        if($emailtype == 2){
            $useremail = AdminNewsEvent::getCategoryUserEmailAddress($request->email);
        }

        if(isset($emailtype)){
           
            foreach($useremail as $email){
                $data = array (
                    'name'              => $email->name,
                    'email'             => $email->email,
                    'subject'           =>'New Project "'.$request->title. '" Added',
                    'title'             =>$request->title,
                    'url'               =>route('activitiesinside',$project->slug),
                    'description'       =>'New Project "'.$request->title. '" has been added.'
                );
                try{
                Mail::send('admin.email.message', $data, function (Message $message)use ($data) {
                    $message->from(env('MAIL_USERNAME', 'info@dcwcnepal.org.np'), 'DCWCNEPAL');
                    $message->to($data['email'], $data['name']);
                    $message->subject($data['subject'] );
                    $message->priority(3);
        
                });
            } catch (\Exception $e) {
                Log::error("Cannot send welcome mail for user.", ['email' => $data['email'], 'exception' => $e]);
            }
            }
        }
        

        return redirect(route('project.index'))->with('success','Project Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = AdminProject::findOrFail($id);
        $category = AdminCategory::getCategoryList();
        $year = AdminYear::getYearList();
        $district = AdminDistrict::orderBy('district','ASC')->get();
        $state = AdminState::orderBy('state','ASC')->get();
        $email = AdminEmailCategory::getCategoryList();
        $result = array(
            'page_header'      => 'Edit New Project',
            'project'          =>$project,
            'category'         =>$category, 
            'year'             =>$year, 
            'email'            =>$email,
            'district'         =>$district,
            'state'            =>$state,
            'date'             => date('Y-m-d H:i:s'),
        );
        return view('admin.project.edit',compact('result'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_1'   => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $project = AdminProject::findOrFail($id);
        $featured = $request->file('image');
        $path=null;
        if(isset($featured)){
            $path = "images/";
            $year_folder = $path . date("Y");
            $month_folder = $year_folder . '/' . date("m");
                $image_name = time().'.'.$featured->getClientOriginalName();
                $path = $month_folder . '/' . $image_name;
                $featured->move(public_path($month_folder), $image_name);
        }
        $featured_1 = $request->file('image_1');
        $path_1=null;
        if(isset($featured_1)){
            $path_1 = "images/";
            $year_folder = $path . date("Y");
            $month_folder = $year_folder . '/' . date("m");
                $path_1 = "images/";
                $image_name = time().'.'.$featured_1->getClientOriginalName();
                $path_1 = $month_folder . '/' . $image_name;
                $featured_1->move(public_path($month_folder), $image_name);
        }

        if (isset($path)) {
            $project->images = $path;
        } else {
            $project->images = $request->image_file;
        }
        if (isset($path_1)) {
            $project->images_1 = $path_1;
        } else {
            $project->images_1 = $request->image_file_1;
        }

        $project->title = $request->title;
        $project->description = $request->description;
        $project->year_id = $request->year_id;
        $project->project = $request->project;
        $project->homepage = $request->homepage;
        $project->district_id = $request->district_id;
        $project->state_id = $request->state_id;
        $project->status = $request->status;
        $project->published_date = $request->published_date;
        $project->save();
        $project->category()->sync($request->category);

        $photos = $request->file('photos');
        
        if(isset($photos)){
            $path = "images/";
            $year_folder = $path . date("Y");
            $month_folder = $year_folder . '/' . date("m");
            $records = array();
            foreach($photos as $photo){
                $path = "images/";
                $image_name = time().'.'.$photo->getClientOriginalName();
                $path = $month_folder . '/' . $image_name;
                $photo->move(public_path($month_folder), $image_name);

                $record['project_id'] = $project->id;
                $record['image'] = $path;
                array_push($records, $record);
            }
            DB::table('rel_project_gallery')->insert($records);
        }

        $emailtype=null;
        if(isset($request->email)){
            foreach($request->email as $item){
            
                if($item == 0 ){
                    $emailtype=1;
                    break;
                }else{
                    $emailtype=2;
                    break;
                }
            }
        }
        
        if($emailtype == 1){
            $useremail = AdminNewsEvent::getUserEmailAddress();
        }
        if($emailtype == 2){
            $useremail = AdminNewsEvent::getCategoryUserEmailAddress($request->email);
        }

        if(isset($emailtype)){
           
            foreach($useremail as $email){
                $data = array (
                    'name'              => $email->name,
                    'email'             => $email->email,
                    'subject'           =>'Project "'.$request->title. '" has been Updated',
                    'title'             =>$request->title,
                    'url'               =>route('activitiesinside',$project->slug),
                    'description'       =>'Project "'.$request->title. '" has been updated.'
                );

            try {
                Mail::send('admin.email.message', $data, function (Message $message)use ($data) {
                    $message->from(env('MAIL_USERNAME', 'info@dcwcnepal.org.np'), 'DCWCNEPAL');
                    $message->to($data['email'], $data['name']);
                    $message->subject($data['subject'] );
                    $message->priority(3);
        
                });
                } catch (\Exception $e) {
                    Log::error("Cannot send welcome mail for user.", ['email' => $data['email'], 'exception' => $e]);
                }
            }
        }


        return redirect(route('project.index'))->with('sucess','Project Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = AdminProject::findOrFail($id);
        $project->delete();
        return redirect(route('project.index'));
    }


    public function galleryDestroy($id)
    {
        $gallery = AdminProjectImages::findOrFail($id);
        $gallery->delete();
        return back()->with('succes','Project deleted');
    }
    
}
