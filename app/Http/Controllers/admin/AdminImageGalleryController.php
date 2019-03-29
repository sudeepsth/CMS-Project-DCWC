<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\AdminImageGallery;

class AdminImageGalleryController extends Controller
{
    public function index()
    {
        $images = AdminImageGallery::orderBy('created_at','DESC')->get();
        $result = array(
            'images'     =>$images,
            'page_header'   =>'Slider Gallery',
        );
    	return view('admin.gallery.images',compact('result'));
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = new AdminImageGallery;
        $path = "images/";

        $year_folder = $path . date("Y");
        $month_folder = $year_folder . '/' . date("m");
        
        !file_exists($year_folder) && mkdir($year_folder , 0777);
        !file_exists($month_folder) && mkdir($month_folder, 0777);
        
        $image_name = time().'.'.$request->image->getClientOriginalExtension();
        $path = $month_folder . '/' . $image_name;
        $request->image->move(public_path($month_folder), $image_name);

        $image->title = $request->title;
        $image->image = $path;
        $image->save();

    	return back()
    		->with('success','Image Uploaded successfully.');
    }


    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	AdminImageGallery::findOrFail($id)->delete();
    	return back()
    		->with('success','Image removed successfully.');	
    }

    public function uploadImage(Request $request){
        
        $path = "images/";
        $year_folder = $path . date("Y");
        $month_folder = $year_folder . '/' . date("m");
        !file_exists($year_folder) && mkdir($year_folder , 0777);
        !file_exists($month_folder) && mkdir($month_folder, 0777);
        
        $image_name = time().'.'.$request->file->getClientOriginalExtension();
        $path = $month_folder . '/' . $image_name;
        $request->file->move(public_path($month_folder), $image_name);

      
        return json_encode(['location' => $path ]);


    }
}
