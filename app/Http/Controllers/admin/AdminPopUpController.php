<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\AdminPopUp;

class AdminPopUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popup = AdminPopUp::orderBy('created_at','DESC')->get();
        $result = array(
            'page_header'       => 'List of Pop Up',
            'popup'             =>$popup,
        );
        return view('admin.popup.list',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = array(
            'page_header'       => 'Add New Pop Up',
        );
        return view('admin.popup.create',compact('result'));
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
            'title' =>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $popup = new AdminPopUp;
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

        $popup->title = $request->title;
        $popup->status = $request->status;
        // $popup->ordering = $request->ordering;
        $popup->image = $path;
        $popup->save();
       
        
        return redirect(route('popup.index'))->with('success','New Pop Up Added');
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
        $popup = AdminPopUp::findOrFail($id);
        $result = array(
            'page_header'       => 'Edit Pop Up',
            'popup'          =>$popup,
        );
        return view('admin.popup.edit',compact('result'));


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
            'title' =>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $popup = AdminPopUp::findOrFail($id);
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
            $popup->image = $path;
        } else {
            $popup->image = $request->image_file;
        }
        $popup->title = $request->title;
        $popup->status = $request->status;
        // $popup->ordering = $request->ordering;
        $popup->save();
        return redirect(route('popup.index'))->with('success','Pop Up Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $popup = AdminPopUp::findOrFail($id);
        $popup->delete();
        return redirect(route('popup.index'))->with('success','Pop Up Deleted');
    }
}
