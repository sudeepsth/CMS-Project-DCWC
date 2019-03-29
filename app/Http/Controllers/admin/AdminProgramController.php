<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\admin\AdminProgram;
use Illuminate\Http\Request;

class AdminProgramController extends Controller
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
        $program = AdminProgram::GetProgramList();
        $result = array(
            'program'      => $program,
            'page_header'   => 'List of Program',
        );
        return view('admin.program.list', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = array(
            'page_header'   => 'Add Program Details',
        );
        return view('admin.program.create', compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $program = new AdminProgram;
        $program->program_name = $request->program_name;
        $program->description = $request->description;
        $program->status = $request->status;
        $program->save();
        //return redirect('my-admin/program');
        return redirect(route('program.index'))->with('success','Program Saved');
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
        $program = AdminProgram::findOrFail($id);
        $result = array(
            'page_header'   => 'Add Program Details',
            'record'        => $program,
        );
        return view('admin.program.edit', compact('result'));
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
        $program = AdminProgram::findOrFail($id);
        $program->program_name = $request->program_name;
        $program->slug = $request->slug;
        $program->description = $request->description;
        $program->status = $request->status;
        $program->save();
        //return redirect('my-admin/program');
        return redirect(route('program.index'))->with('success','Program Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = AdminProgram::findOrFail($id);
        $program->delete();
        return redirect(route('program.index'))->with('success','Program Deleted');
    }
}
