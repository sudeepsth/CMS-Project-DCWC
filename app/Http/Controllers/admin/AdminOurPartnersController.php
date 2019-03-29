<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\AdminOurPartners;

class AdminOurPartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = AdminOurPartners::orderBy('ordering','ASC')->get();
        $result = array(
            'page_header'       => 'List of Blogs',
            'partners'          =>$partners,
        );
        return view('admin.partners.list',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = array(
            'page_header'       => 'Add New Partner',
        );
        return view('admin.partners.create',compact('result'));
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
        $partners = new AdminOurPartners;
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

        $partners->title = $request->title;
        $partners->ordering = $request->ordering;
        $partners->image = $path;
        $partners->save();
       
        
        return redirect(route('partners.index'))->with('success','New Partner Added');
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
        $partners = AdminOurPartners::findOrFail($id);
        $result = array(
            'page_header'       => 'Edit New Partner',
            'partners'          =>$partners,
        );
        return view('admin.partners.edit',compact('result'));


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
        $partners = AdminOurPartners::findOrFail($id);
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
            $partners->image = $path;
        } else {
            $partners->image = $request->image_file;
        }
        $partners->title = $request->title;
        $partners->ordering = $request->ordering;
        $partners->save();
        return redirect(route('partners.index'))->with('success','Partners Logo Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partners = AdminOurPartners::findOrFail($id);
        $partners->delete();
        return redirect(route('partners.index'))->with('success','Partners Logo Deleted');
    }
}
