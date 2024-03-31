<?php

namespace App\Http\Controllers;

use App\Models\bacsi;
use Illuminate\Http\Request;
use Validator;

class bacsi_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bacsi=bacsi::all();
        return view('admin.bacsi.index',compact('bacsi'));
    }
    public function data(){
        $bacsi=bacsi::all();
        return view('admin.bacsi.data',compact('bacsi'));
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
        $val = Validator::make($request->all(), [
            'MABS' => 'required|max:50|unique:bacsi',
            'TEN_BS'=>'required|max:255',
            'CHUC_DANH'=>'required',
            'TEN_KHOA' => 'required',
            //'IMAGE'=>'required',
        ], [
            'MABS.required' => 'Mã bác sĩ không được bỏ trống !',
            'MABS.max'=>'Mã bác sĩ tối đa 50 kí tự !',
            'MABS.unique'=>'Mã bác sĩ đã tồn tại !',
            'TEN_BS'=>'Tên bác sĩ không được bỏ trống !',
            'TEN_BS'=>'Tên bác sĩ không được bỏ trống !',
            'CHUC_DANH.required'=>'Chức danh không được bỏ trống !',
            'TEN_KHOA.required'=>'Tên khoa không được bỏ trống !',


        ]);
        if ($val->passes()) {
            $bacsi = new bacsi;
            $bacsi->MABS = $request->MABS;
            $bacsi->TEN_BS = $request->TEN_BS;
            $bacsi->CHUC_DANH = $request->CHUC_DANH;
            $bacsi->TEN_KHOA = $request->TEN_KHOA;
            $bacsi->save();
            return response()->json(
                [
                    'code' => 200,
                    'mess' => 'Thêm thành công !',
                ]
            );
        }
        return response()->json([
            'error' => $val->errors()->all(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bacsi  $bacsi
     * @return \Illuminate\Http\Response
     */
    public function show(bacsi $bacsi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bacsi  $bacsi
     * @return \Illuminate\Http\Response
     */
    public function edit($MABS)
    {
        $bacsi=bacsi::find($MABS);
        return view('admin.bacsi.edit',compact('bacsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bacsi  $bacsi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$MABS)
    {
        $val = Validator::make($request->all(), [
            'MABS' => 'required|max:255|numeric',
            'TEN_BS' => 'required',
            'CHUC_DANH' => 'required',
            'TEN_KHOA' => 'required',
        ], [
            'MABS.required' => 'Mã bác sĩ không được bỏ trống !',
            'MABS.max'=>'Mã bác sĩ tối đa 255 kí tự !',
            'MABS.numeric'=>'Mã bác sĩ không được bỏ trống !',
            'TEN_BS.required'=>'Tên bác sĩ không được bỏ trống !',
            'CHUC_DANH.required'=>'Chức danh không được bỏ trống !',
            'TEN_KHOA.required'=>'Tên khoa không được bỏ trống !'


           
        ]);
        if ($val->passes()) {
            $bacsi = bacsi::find($MABS);
            $bacsi->MABS = $request->MABS;
            $bacsi->TEN_BS = $request->TEN_BS; 
            $bacsi->CHUC_DANH = $request->CHUC_DANH;
            $bacsi->TEN_KHOA = $request->TEN_KHOA;    
            if ($bacsi->save()) {
                return response()->json(
                    [
                        'code' => 200,
                        'mess' => 'Update đữ liệu thành công',
                    ]
                );
            }
            
        }
        return response()->json(['error'=>$val->errors()->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bacsi  $bacsi
     * @return \Illuminate\Http\Response
     */
    public function destroy($MABS)
    {
        $bacsi = bacsi::find($MABS);
        if ($bacsi->delete()) {

            return response()->json([
                'code' => 200,
                'message' => 'Đã xóa thành công.'
            ]);
        }

        return response()->json([
            'code' => 400,
            'message' => 'Xóa không thành công.'
        ]);
    }
}
