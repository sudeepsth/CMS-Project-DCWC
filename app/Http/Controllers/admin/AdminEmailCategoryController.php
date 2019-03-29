<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\admin\AdminEmailCategory;
use Illuminate\Http\Request;

class AdminEmailCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // $this->middleware('userrole');
    }
    
    public function index()
    {
        $emailcategory = AdminEmailCategory::GetCategoryList();
        $result = array(
            'emailcategory'      => $emailcategory,
            'page_header'   => 'List of Email Category',
        );
        return view('admin.emailcategory.list', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = array(
            'page_header'   => 'Add Email Category Details',
        );
        return view('admin.emailcategory.create', compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emailcategory = new AdminEmailCategory;
        $emailcategory->category_name = $request->category_name;
        $emailcategory->slug = str_slug($request->category_name,'-');
        $emailcategory->status = $request->status;
        $emailcategory->save();
        //return redirect('my-admin/emailcategory');
        return redirect(route('emailcategory.index'))->with('success','Member Type Created');
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
        $emailcategory = AdminEmailCategory::findOrFail($id);
        $result = array(
            'page_header'   => 'Add Email Category Details',
            'record'        => $emailcategory,
        );
        return view('admin.emailcategory.edit', compact('result'));
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
        $emailcategory = AdminEmailCategory::findOrFail($id);
        $emailcategory->category_name = $request->category_name;
        $emailcategory->slug = $request->slug;
        $emailcategory->status = $request->status;
        $emailcategory->save();
        //return redirect('my-admin/emailcategory');
        return redirect(route('emailcategory.index'))->with('success','Member Type Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emailcategory = AdminEmailCategory::findOrFail($id);
        $emailcategory->delete();
        return redirect(route('emailcategory.index'))->with('success','Member Type Deleted');
    }
}
