<?php

namespace App\Http\Controllers;

use App\Models\tinh;
use Illuminate\Http\Request;

class tinh_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tinh=tinh::paginate(10);
        return view('admin.tinh.index',compact('tinh'));
    }
    public function loaddata(Request $request){
        if($request->ajax() || 'NULL'){
            $tinh=tinh::search()->paginate(10);
            return response()->json($tinh);
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
     * @param  \App\Models\tinh  $tinh
     * @return \Illuminate\Http\Response
     */
    public function show(tinh $tinh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tinh  $tinh
     * @return \Illuminate\Http\Response
     */
    public function edit(tinh $tinh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tinh  $tinh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tinh $tinh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tinh  $tinh
     * @return \Illuminate\Http\Response
     */
    public function destroy(tinh $tinh)
    {
        //
    }
}
