<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\admin\AdminYear;
use Illuminate\Http\Request;

class AdminYearController extends Controller
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
        $year = AdminYear::getYearList();
        $result = array(
            'year'      => $year,
            'page_header'   => 'List of Year',
        );
        return view('admin.year.list', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = array(
            'page_header'   => 'Add Year',
        );
        return view('admin.year.create', compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $year = new AdminYear;
        $year->year = $request->year;
        $year->save();
        //return redirect('my-admin/year');
        return redirect(route('year.index'));
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
        $year = AdminYear::findOrFail($id);
        $result = array(
            'page_header'   => 'Add Year Details',
            'record'        => $year,
        );
        return view('admin.year.edit', compact('result'));
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
        $year = AdminYear::findOrFail($id);
        $year->year = $request->year;
        $year->save();
        //return redirect('my-admin/year');
        return redirect(route('year.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $year = AdminYear::findOrFail($id);
        $year->delete();
        return redirect(route('year.index'));
    }
}
