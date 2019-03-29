<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\AdminNewsEvent;
use Illuminate\Mail\Message;
use App\admin\AdminEmailCategory;
use Mail;
use Illuminate\Support\Facades\Log;

class AdminNewsEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsevent = AdminNewsEvent::get();
        $result = array(
            'page_header'       => 'List of Blogs',
            'newsevent'          =>$newsevent,
        );
        return view('admin.news_event.list',compact('result'));
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
            'page_header'       => 'Add New Blog',
            'email'             =>$email,
            'date'              => date('Y-m-d H:i:s'),
        );
        return view('admin.news_event.create',compact('result'));
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
             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
        $news = new AdminNewsEvent;
        $path=null;
        $photos = $request->file('image');
        if(isset($photos)){
            $path = "images/";
            $year_folder = $path . date("Y");
            $month_folder = $year_folder . '/' . date("m");
                $path = "images/";
                $image_name = time().'.'.$photos->getClientOriginalName();
                $path = $month_folder . '/' . $image_name;
                $photos->move(public_path($month_folder), $image_name);
        }
        $news->title = $request->title;
        $news->description = $request->description;
        $news->category = $request->category;
        $news->images = $path;
        $news->published_date = $request->published_date;
        $news->status = $request->status;
        $news->save();
        
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
                    'subject'           =>'New Blog "'.$request->title. '" Added',
                    'title'             =>$request->title,
                    'url'               =>route('blogdetail',$news->slug),
                    'description'       =>'New Blog "'.$request->title. '" has been added.'
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
        
        return redirect(route('news-event.index'))->with('success','New Blog has been saved');
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
        $newsevent = AdminNewsEvent::findOrFail($id);
        $email = AdminEmailCategory::getCategoryList();
        $result = array(
            'page_header'       => 'Edit New Blog',
            'newsevent'         =>$newsevent,
            'date'              => date('Y-m-d H:i:s'),
            'email'             =>$email,
        );
        return view('admin.news_event.edit',compact('result'));


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
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $newsevent = AdminNewsEvent::findOrFail($id);
        
        $path=null;
        $photos = $request->file('image');
        if(isset($photos)){
            $path = "images/";
            $year_folder = $path . date("Y");
            $month_folder = $year_folder . '/' . date("m");
                $path = "images/";
                $image_name = time().'.'.$photos->getClientOriginalName();
                $path = $month_folder . '/' . $image_name;
                $photos->move(public_path($month_folder), $image_name);
        }
        if (isset($path)) {
            $newsevent->images = $path;
        } else {
            $newsevent->images = $request->image_file;
        }
        $newsevent->title = $request->title;
        $newsevent->slug = $request->slug;
        $newsevent->description = $request->description;
        $newsevent->category = $request->category;
        $newsevent->status = $request->status;
        $newsevent->published_date = $request->published_date;
        $newsevent->save();

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
                    'subject'           =>'Blog "'.$request->title. '" has been Updated',
                    'title'             =>$request->title,
                    'url'               =>route('blogdetail',$newsevent->slug),
                    'description'       =>'Blog "'.$request->title. '" has been updated.'
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
        return redirect(route('news-event.index'))->with('success','Blog Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsevent = AdminNewsEvent::findOrFail($id);
        $newsevent->delete();
        return redirect(route('news-event.index'))->with('success','Blog Deleted');
    }
}
