<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\admin\AdminState;
use Illuminate\Http\Request;

class AdminStateController extends Controller
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
        $state = AdminState::getStateList();
        $result = array(
            'state'      => $state,
            'page_header'   => 'List of State',
        );
        return view('admin.state.list', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = array(
            'page_header'   => 'Add State',
        );
        return view('admin.state.create', compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $state = new AdminState;
        $state->state = $request->state;
        $state->status = $request->status;
        $state->save();
        //return redirect('my-admin/state');
        return redirect(route('state.index'));
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
        $state = AdminState::findOrFail($id);
        $result = array(
            'page_header'   => 'Add State Details',
            'record'        => $state,
        );
        return view('admin.state.edit', compact('result'));
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
        $state = AdminState::findOrFail($id);
        $state->state = $request->state;
        $state->status = $request->status;
        $state->save();
        //return redirect('my-admin/state');
        return redirect(route('state.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $state = AdminState::findOrFail($id);
        $state->delete();
        return redirect(route('state.index'));
    }
}
