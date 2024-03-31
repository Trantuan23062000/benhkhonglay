<?php

namespace App\Http\Controllers;

use App\Models\huyen;
use Illuminate\Http\Request;

class huyen_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $huyen=huyen::paginate(10);
        return view('admin.huyen.index',compact('huyen'));

    }
    public function loaddata(Request $request){
        if($request->ajax() || 'NULL'){
            $huyen=huyen::search()->paginate(10);
            return response()->json($huyen);
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
     * @param  \App\Models\huyen  $huyen
     * @return \Illuminate\Http\Response
     */
    public function show(huyen $huyen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\huyen  $huyen
     * @return \Illuminate\Http\Response
     */
    public function edit(huyen $huyen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\huyen  $huyen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, huyen $huyen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\huyen  $huyen
     * @return \Illuminate\Http\Response
     */
    public function destroy(huyen $huyen)
    {
        //
    }
}
