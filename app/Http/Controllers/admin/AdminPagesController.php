<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\AdminPages;

class AdminPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = AdminPages::get();
        $result = array(
            'page_header'       => 'List of Pages',
            'pages'          =>$pages,
        );
        return view('admin.pages.list',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = array(
            'page_header'       => 'Add New Pages',
        );
        return view('admin.pages.create',compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pages = new AdminPages;
        $pages->title = $request->title;
        $pages->description = $request->description;
        $pages->meta_description = $request->meta_description;
        $pages->status = $request->status;
        $pages->save();
       
        
        return redirect(route('pages.index'))->with('success','New Page Created');
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
        $pages = AdminPages::findOrFail($id);
        $result = array(
            'page_header'       => 'Edit Pages',
            'pages'          =>$pages,
        );
        return view('admin.pages.edit',compact('result'));


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
        $pages = AdminPages::findOrFail($id);
        $pages->title = $request->title;
        $pages->slug = $request->slug;
        $pages->description = $request->description;
        $pages->meta_description = $request->meta_description;
        $pages->status = $request->status;
        $pages->save();
        return redirect(route('pages.index'))->with('success','Page Upadted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pages = AdminPages::findOrFail($id);
        $pages->delete();
        return redirect(route('pages.index'))->with('success','Page Deleted');
    }
}
