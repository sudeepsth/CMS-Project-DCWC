<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\AdminUserMailAdd;
use Validator;
use App\admin\AdminEmailCategory;


class AdminUserMailAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $useremail = AdminUserMailAdd::getEmailList();
        
        $result = array(
            'useremail'      => $useremail,
            'page_header'    => 'Email List' ,
        );
        return view('admin.email.list', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $category = AdminEmailCategory::getCategoryList();
        $result = array(
            'page_header'       =>'Add Email',
            'category'       =>$category,
        );
        return view('admin.email.create',compact('result'));
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
        'email'   => 'required|email',
    ]);

        $email = new AdminUserMailAdd;
        $email->name = $request->name;
        $email->email = $request->email;
        $email->title = $request->categoryid;
        $email->country = $request->country;
        $email->phone = $request->phone;
        $email->address = $request->address;
        $email->status = $request->status;
        $email->save();

        return redirect(route('useremail.index'))->with('success','New Member Added');
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
        $category = AdminEmailCategory::getCategoryList();
        $email = AdminUserMailAdd::findOrFail($id);
        $result = array(
            'page_header'       =>'Add Email',
            'record'            =>$email,
            'category'            =>$category,
        );
        return view('admin.email.edit',compact('result'));
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
            'email'   => 'required|email',
        ]);
        $email = AdminUserMailAdd::findOrFail($id);
        $email->name = $request->name;
        $email->email = $request->email;
        $email->title = $request->categoryid;
        $email->country = $request->country;
        $email->phone = $request->phone;
        $email->address = $request->address;
        $email->status = $request->status;
        $email->save();
        return redirect(route('useremail.index'))->with('success','Member Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $email = AdminUserMailAdd::findOrFail($id);
        $email->delete();
        return redirect(route('useremail.index'))->with('success','Member Deleted');
    }
}
