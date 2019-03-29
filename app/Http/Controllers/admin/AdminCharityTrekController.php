<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\AdminCharityTrek;
use App\admin\AdminCharityImages;
use App\admin\AdminCharityDetails;
use Illuminate\Support\Facades\DB;
use App\admin\AdminEmailCategory;
use App\admin\AdminNewsEvent;
use Mail;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Log;

class AdminCharityTrekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $charity = AdminCharityTrek::get();
        $result = array(
            'page_header'       => 'List of All Charity Trek',
            'charity'          =>$charity,
        );
        return view('admin.charity.list',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $email = AdminEmailCategory::getCategoryList();
        $result = array(
            'page_header'       => 'Add New Charity Trek',
            'email'             =>$email,
        );
        return view('admin.charity.create',compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $charity = new AdminCharityTrek;
        $path=null;
        $featured = $request->file('image');
        if(isset($featured)){
            $path = "images/";
            $year_folder = $path . date("Y");
            $month_folder = $year_folder . '/' . date("m");
                $path = "images/";
                $image_name = time().'.'.$featured->getClientOriginalName();
                $path = $month_folder . '/' . $image_name;
                $featured->move(public_path($month_folder), $image_name);
        }

        $charity->title = $request->title;
        $charity->top_description = $request->top_description;
        $charity->description = $request->description;
        $charity->images = $path;
        $charity->status = $request->status;
        $charity->save();

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
    
                $record['charity_id'] = $charity->id;
                $record['image'] = $path;
                array_push($records, $record);
            }
            DB::table('rel_charity_gallery')->insert($records);
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
            $useremail = AdminNewsEvent::getUserEmailAddress();
            foreach($useremail as $email){
                $data = array (
                    'name'              => $email->name,
                    'email'             => $email->email,
                    'subject'           =>'New Charity Trek "'.$request->title. '" Added',
                    'title'             =>$request->title,
                    'url'               =>route('charitydetail',$charity->slug),
                    'description'       =>'New Charity Trek "'.$request->title. '" has been added.'
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
        return redirect(route('charity.index'))->with('success','New Charity Trek Created');
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
        $charity = AdminCharityTrek::findOrFail($id);
        $email = AdminEmailCategory::getCategoryList();
        $result = array(
            'page_header'      => 'Edit Charity Trek',
            'charity'          => $charity,
            'email'             =>$email,
        );
        return view('admin.charity.edit',compact('result'));


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
        $charity = AdminCharityTrek::findOrFail($id);
        $path=null;
        $featured = $request->file('image');
        
        if(isset($featured)){
            $path = "images/";
            $year_folder = $path . date("Y");
            $month_folder = $year_folder . '/' . date("m");
                $path = "images/";
                $image_name = time().'.'.$featured->getClientOriginalName();
                $path = $month_folder . '/' . $image_name;
                $featured->move(public_path($month_folder), $image_name);
        }
        if (isset($path)) {
            $charity->images = $path;
        } else {
            $charity->images = $request->image_file;
        }

        $charity->title = $request->title;
        $charity->top_description = $request->top_description;
        $charity->description = $request->description;
        $charity->status = $request->status;
        $charity->save();
        
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
    
                $record['charity_id'] = $charity->id;
                $record['image'] = $path;
                array_push($records, $record);
            }
            DB::table('rel_charity_gallery')->insert($records);
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
            $useremail = AdminNewsEvent::getUserEmailAddress();
            foreach($useremail as $email){
                $data = array (
                    'name'              => $email->name,
                    'email'             => $email->email,
                    'subject'           =>'Charity Trek "'.$request->title. '" has been Updated',
                    'title'             =>$request->title,
                    'url'               =>route('charitydetail',$charity->slug),
                    'description'       =>'Charity Trek "'.$request->title. '" has been updated.'
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

        return redirect(route('charity.index'))->with('success','Charity Trek Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $charity = AdminCharityTrek::findOrFail($id);
        $charity->delete();
        return redirect(route('charity.index'))->with('success','Charity Trek Deleted');
        
    }

    public function galleryDestroy($id)
    {
        $gallery = AdminCharityImages::findOrFail($id);
        $gallery->delete();
        return back();
    }

    public function charityDetail($id)
    {
        $charity = AdminCharityTrek::findOrFail($id);
        $result = array(
            'charity'           =>$charity,
            'page_header'       =>'Charity Trek Details'
        );
        return view('admin.charity.detaillist',compact('result'));
        
    }

    

    public function charityDetailCreate($id){
        $result = array(
            'page_header'       =>' Add New Charity Trek Detail',
            'id'                =>$id,
        );
        return view('admin.charity.detailcreate',compact('result'));

    }

    public function charityDetailStore(Request $request){
        $record['charity_id'] = $request->id;
        $record['title'] = $request->title;
        $record['description'] = $request->description;
        $record['status'] = $request->status;
        DB::table('rel_charity_record')->insert($record);

         return redirect(route('charity.detail',$request->id))->with('success','Chairty Trek Detail Created');

    }

    public function charityDetailEdit($id){
        $charitydetail = AdminCharityDetails::findOrFail($id);
        $result = array(
            'page_header'       =>' Edit Charity Trek Detail',
            'charity'           =>$charitydetail,
        );
        return view('admin.charity.detailedit',compact('result'));

    }

    public function charityDetailUpdate(Request $request, $id){
        $record['charity_id'] = $request->charity_id;
        $record['title'] = $request->title;
        $record['description'] = $request->description;
        $record['status'] = $request->status;
        DB::table('rel_charity_record')->where('id',$id)->update($record);

        return redirect(route('charity.index'))->with('success','Charity Trek Detail Updated');

    }

    public function charityDetailDestroy($id)
    {
        $charitydetail = AdminCharityDetails::findOrFail($id);
        $charitydetail->delete();
        return back()->with('success','Charity Trek Detail Deleted');
        
    }
     
}
