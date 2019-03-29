<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\AdminVideoGallery;

class AdminVideoGalleryController extends Controller
{
    public function index()
    {
        $videos = AdminVideoGallery::get();
        $result = array(
            'videos'     =>$videos,
            'page_header'   =>'VIdeo Gallery',
        );
    	return view('admin.gallery.videos',compact('result'));
    }


    /**
     * Upload image function
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required',
            // 'video' => 'required|video|mimes:mov,mp4,3gp,mpeg|max:2048',
        ]);

        $video = new AdminVideoGallery;
        $path = "videos/";
        
        $year_folder = $path . date("Y");
        $month_folder = $year_folder . '/' . date("m");
        
        !file_exists($year_folder) && mkdir($year_folder , 0777);
        !file_exists($month_folder) && mkdir($month_folder, 0777);

        $video_name = time().'.'.$request->video->getClientOriginalExtension();
        $path = $month_folder . '/' . $video_name;

        $request->video->move(public_path($month_folder), $video_name);

        $video->title = $request->title;
        $video->video = $path;
        $video->save();

    	return back()
    		->with('success','Video Uploaded successfully.');
    }


    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	AdminVideoGallery::findOrFail($id)->delete();
    	return back()
    		->with('success','Video removed successfully.');	
    }
}
