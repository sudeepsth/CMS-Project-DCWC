<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\admin\AdminDistrict;
use Illuminate\Http\Request;

class AdminDistrictController extends Controller
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
        $district = AdminDistrict::getDistrictList();
        $result = array(
            'district'      => $district,
            'page_header'   => 'List of District',
        );
        return view('admin.district.list', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = array(
            'page_header'   => 'Add District',
        );
        return view('admin.district.create', compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $district = new AdminDistrict;
        $district->district = $request->district;
        $district->status = $request->status;
        $district->save();
        //return redirect('my-admin/district');
        return redirect(route('district.index'));
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
        $district = AdminDistrict::findOrFail($id);
        $result = array(
            'page_header'   => 'Add District Details',
            'record'        => $district,
        );
        return view('admin.district.edit', compact('result'));
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
        $district = AdminDistrict::findOrFail($id);
        $district->district = $request->district;
        $district->status = $request->status;
        $district->save();
        //return redirect('my-admin/district');
        return redirect(route('district.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $district = AdminDistrict::findOrFail($id);
        $district->delete();
        return redirect(route('district.index'));
    }
}
