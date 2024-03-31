<?php

namespace App\Http\Controllers;

use App\Models\dvkt;
use Illuminate\Http\Request;

class dvkt_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dvkt=dvkt::all();
        return view('admin.dvkt.index',compact('dvkt'));
    }
    public function loaddata()
    {
        $dvkt = dvkt::all();
        return response()->json($dvkt);
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
     * @param  \App\Models\dvkt  $dvkt
     * @return \Illuminate\Http\Response
     */
    public function show(dvkt $dvkt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dvkt  $dvkt
     * @return \Illuminate\Http\Response
     */
    public function edit(dvkt $dvkt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dvkt  $dvkt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dvkt $dvkt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dvkt  $dvkt
     * @return \Illuminate\Http\Response
     */
    public function destroy(dvkt $dvkt)
    {
        //
    }
}
