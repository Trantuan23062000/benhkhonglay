<?php

namespace App\Http\Controllers;

use App\Models\xa;
use Illuminate\Http\Request;

class xa_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xa=xa::paginate(20);
        return view('admin.xa.index',compact('xa'));
    }
    public function loaddata(Request $request){
        if($request->ajax() || 'NULL'){
            $xa=xa::search()->paginate(10);
            return response()->json($xa);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\xa  $xa
     * @return \Illuminate\Http\Response
     */
    public function show(xa $xa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\xa  $xa
     * @return \Illuminate\Http\Response
     */
    public function edit(xa $xa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\xa  $xa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, xa $xa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\xa  $xa
     * @return \Illuminate\Http\Response
     */
    public function destroy(xa $xa)
    {
        //
    }
}
