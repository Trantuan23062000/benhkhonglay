<?php

namespace App\Http\Controllers;

use App\Imports\ttyteimport;
use App\Models\soyte;
use App\Models\ttyte;
use Illuminate\Http\Request;
use Validator;
use Excel;

class ttyte_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ttyte=ttyte::all();
        $soyte=soyte::all();
        return view('admin.ttyte.index',compact('ttyte','soyte'));
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
            'TEN_TRUNG_TAM_Y_TE' => 'required|max:255|unique:ttyte',
            'DIA_CHI' => 'required|max:255',
            'SDT' => 'required|numeric|unique:ttyte',
            'EMAIL' => 'required|max:255|unique:ttyte',
            'SO_Y_TE_ID' => 'required',
        ],[
            'TEN_TRUNG_TAM_Y_TE.required' => 'Tên trung tâm y tế không được bỏ trống !',
            'TEN_TRUNG_TAM_Y_TE.max' => 'Tên trung tâm y tế tối đa 255 kí tự !',
            'TEN_TRUNG_TAM_Y_TE.unique' => 'Tên trung tâm y tế đã tồn tại !',
            'DIA_CHI.required' => 'Địa chỉ không được bỏ trống !',
            'DIA_CHI.max' => 'Địa chỉ tối đa 255 kí tự !',
            'SDT.unique' => 'SDT trung tâm y tế đã tồn tại !',
            'SDT.numeric' => 'Không được nhập chữ hoặc đễ khoảnh trắng !',
            'SDT.required' => 'Số điện thoại không được bỏ trống !',
            'EMAIL.required' => 'EMAIL không được bỏ trống !',
            'SO_Y_TE_ID.required' => 'Sở y tế không được bỏ trống !',
            

        ]);
        if ($val->passes()) {
            $ttyte = new ttyte;
            $ttyte->TEN_TRUNG_TAM_Y_TE = $request->TEN_TRUNG_TAM_Y_TE;
            $ttyte->DIA_CHI = $request->DIA_CHI;
            $ttyte->SDT= $request->SDT;
            $ttyte->EMAIL = $request->EMAIL;
            $ttyte->SO_Y_TE_ID = $request->SO_Y_TE_ID;
            $ttyte->save();
            return response()->json(
                [
                    'code' => 200,
                    'mess' => 'Thêm trung tâm y tế thành công',
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
     * @param  \App\Models\ttyte  $ttyte
     * @return \Illuminate\Http\Response
     */
    public function show(ttyte $ttyte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ttyte  $ttyte
     * @return \Illuminate\Http\Response
     */
    public function edit($ID)
    {
        $ttyte = ttyte::find($ID);
        $soyte=soyte::all();
        return view('admin.ttyte.edit',compact('ttyte','soyte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ttyte  $ttyte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$ID)
    {
       
        $val = Validator::make($request->all(), [
            'DIA_CHI' => 'required|max:255',
            'SDT' => 'required|numeric',
            'TEN_TRUNG_TAM_Y_TE'=>'required|max:255',
        ], [
            'TEN_TRUNG_TAM_Y_TE.required' => 'Tên trung tâm y tế không được bỏ trống !',
            'TEN_TRUNG_TAM_Y_TE.max' => 'Tên cơ sở y tế tối đa 255 kí tự !',
            
            'DIA_CHI.required' => 'Địa chỉ không được bỏ trống !',
            'DIA_CHI.max' => 'Địa chỉ tối đa 255 kí tự !',
            'SDT.numeric' => 'Không được nhập chữ !',
            'SDT.required' => 'Số điện thoại không được bỏ trống !',
        ]);
        if ($val->passes()) {
            $ttyte = ttyte::find($ID);
            $ttyte->TEN_TRUNG_TAM_Y_TE = $request->TEN_TRUNG_TAM_Y_TE;
            $ttyte->DIA_CHI = $request->DIA_CHI;
            $ttyte->SDT = $request->SDT;
            $ttyte->EMAIL = $request->EMAIL;
            $ttyte->SO_Y_TE_ID = $request->SO_Y_TE_ID;
            if($ttyte->save()){
                return response()->json(
                    [
                        'code' => 200,
                        'mess' => 'Thêm trung tâm y tế thành công',
                    ]
                );
            }
            
        }
        return response()->json(['error'=>$val->errors()->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ttyte  $ttyte
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID)
    {
        $ttyte = ttyte::find($ID);
        if ($ttyte->delete()) {
            
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
    public function loaddata(){
        $ttyte = ttyte::all();
        return response()->json($ttyte);
    }
    public function postNhap(Request $request)
    {
        Excel::import(new ttyteimport, $request->file('file'));

        return redirect()->back();
    }
}
