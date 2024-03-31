<?php

namespace App\Http\Controllers;

use App\Models\cskcb;
use App\Models\soyte;
use App\Models\ttyte;
use App\Models\tramyte;
use App\Models\quyen;
use Illuminate\Http\Request;
use Validator;
use File;

class cskcb_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cskcb=cskcb::all();
        $soyte=soyte::all();
        $tramyte=tramyte::all();
        $ttyte=ttyte::all();
        $quyen=quyen::all();
        return view('admin.cskcb.index',compact('cskcb','tramyte','soyte','ttyte','quyen'));
    }
    public function loaddata(){
        $cskcb = cskcb::all();
        return response()->json($cskcb);
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
            'MCSKCB' => 'required|max:50|unique:cskcb',
            'TEN_DANG_NHAP'=>'required|max:255|unique:cskcb',
            'PASSWORD'=>'required|min:8',
            'TEN_CSKCB' => 'required|max:255|unique:cskcb',
            'DIACHI' => 'required|max:255',
            'SDT' => 'required|numeric|unique:cskcb',
            'QUYEN_ID'=>'required',
            //'IMAGE'=>'required',
        ], [
            'MCSKCB.required' => 'MCSKCB không được bỏ trống !',
            'MCSKCB.max' => 'MCSKCB tối đa 50 kí tự !',
            'MCSKCB.unique' => 'MCSKCB đã tồn tại !',
            'TEN_CSKCB.required' => 'Tên cơ sở kcb không được bỏ trống !',
            'TEN_CSKCB.max' => 'Tên cơ sở kcb tối đa 255 kí tự !',
            'TEN_CSKCB.unique' => 'Tên cơ sở kcb đã tồn tại !',
            'DIACHI.required' => 'Địa chỉ không được bỉ trống !',
            'DIACHI.max' => 'Địa chỉ tối đa 255 kí tự !',
            'SDT.unique' => 'SDT y tế đã tồn tại !',
            'SDT.numeric' => 'Không được nhập chữ !',
            'SDT.required' => 'Số điện thoại không được bỏ trống !',
            'TEN_DANG_NHAP'=>'Tên đăng nhập không được bỏ trống !',
            'TEN_DANG_NHAP'=>'Tên đăng nhập đã tồn tại !',
            'TEN_DANG_NHAP'=>'Tên đăng nhập tối đa 255 kí tự !',
            'PASSWORD'=>'Password không được bỏ trống',
            'PASSWORD'=>'Password tối đa 8 kí tự bao gồm cả số !',
            //'IMAGE'=>'Hình ảnh không được bỏ trống !',
            'QUYEN_ID'=>'Quyền ID không được bỏ trống'

        ]);
        if ($val->passes()) {
            $cskcb = new cskcb;
            $cskcb->MCSKCB = $request->MCSKCB;
            $cskcb->TEN_CSKCB = $request->TEN_CSKCB;
            $cskcb->DIACHI = $request->DIACHI;
            $cskcb->SDT = $request->SDT;
            $cskcb->EMAIL = $request->EMAIL;
            $cskcb->soyte_id = $request->soyte_id;
            $cskcb->ttyte_id = $request->ttyte_id;
            $cskcb->tramyte_id = $request->tramyte_id;
            $cskcb->TEN_DANG_NHAP=$request->TEN_DANG_NHAP;
            $cskcb->PASSWORD=bcrypt($request->PASSWORD);
            $cskcb->QUYEN_ID=$request->QUYEN_ID;
            $cskcb->save();
            return response()->json(
                [
                    'code' => 200,
                    'mess' => 'Thêm cơ sở y tế thành công',
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
     * @param  \App\Models\cskcb  $cskcb
     * @return \Illuminate\Http\Response
     */
    public function show($MCSKCB)
    {
        
    }
    public function view($MCSKCB){
        $ttyte = ttyte::all();
        $soyte=soyte::all();
        $tramyte=tramyte::all();
        $cskcb=cskcb::find($MCSKCB);
        return view('admin.cskcb.view',compact('ttyte','soyte','tramyte','cskcb'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cskcb  $cskcb
     * @return \Illuminate\Http\Response
     */
    public function edit($MCSKCB)
    {
        $ttyte = ttyte::all();
        $soyte=soyte::all();
        $tramyte=tramyte::all();
        $cskcb=cskcb::find($MCSKCB);
        return view('admin.cskcb.edit',compact('ttyte','soyte','tramyte','cskcb'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cskcb  $cskcb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$MCSKCB)
    {
        $val = Validator::make($request->all(), [
            'DIACHI' => 'required|max:255',
            'TEN_DANG_NHAP'=>'required|max:255',
            'PASSWORD'=>'required|min:8',
            'SDT' => 'required|numeric',
        ], [
            'DIACHI.required' => 'Địa chỉ không được bỏ trống !',
            'DIACHI.max' => 'Địa chỉ tối đa 255 kí tự !',
            'SDT.numeric' => 'Không được nhập chữ !',
            'SDT.required' => 'Số điện thoại không được bỏ trống !',
        ]);
        if ($val->passes()) {
            $cskcb = cskcb::find($MCSKCB);
            $cskcb->MCSKCB = $request->MCSKCB;
            $cskcb->TEN_CSKCB = $request->TEN_CSKCB;
            $cskcb->DIACHI = $request->DIACHI;
            $cskcb->SDT = $request->SDT;
            $cskcb->EMAIL = $request->EMAIL;
            $cskcb->soyte_id = $request->soyte_id;
            $cskcb->ttyte_id = $request->ttyte_id;
            $cskcb->tramyte_id = $request->tramyte_id;
            $cskcb->TEN_DANG_NHAP=$request->TEN_DANG_NHAP;
            $cskcb->PASSWORD=$request->PASSWORD;
           
            if ($cskcb->save()) {
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
     * @param  \App\Models\cskcb  $cskcb
     * @return \Illuminate\Http\Response
     */
    public function destroy($MCSKCB)
    {
        $cskcb = cskcb::find($MCSKCB);
        if ($cskcb->delete()) {
            
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
    public function timttyte($ID)
    {
        $ttyte=ttyte::where('SO_Y_TE_ID',$ID)->get();
        return view('admin.cskcb.ttyte',compact('ttyte'));
    }
    public function timtramyte($ID)
    {
        $tramyte=tramyte::where('TRUNG_TAM_Y_TE_ID',$ID)->get();
        return view('admin.cskcb.tramyte',compact('tramyte'));
    }
}
