<?php

namespace App\Http\Controllers;

use App\Models\nghenghiep;
use Illuminate\Http\Request;
use Validator;

class nghenghiep_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nghenghiep=nghenghiep::all();
        return view('admin.nghenghiep.index',compact('nghenghiep'));
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
            'MA_NGHE_NGHIEP' => 'required|max:255|unique:nghenghiep',
            'TEN_NGHE_NGHIEP' => 'required|max:255',
           
        ], [
            'MA_NGHE_NGHIEP.required'=>'Mã nghề nghiệp không được bỏ trống !',
            'MA_NGHE_NGHIEP.max'=>'Mã nghề nghiệp tối đa 255 kí tự !',
            'MA_NGHE_NGHIEP.unique'=>'Mã nghề nghiệp đã tồn tại !',
            'TEN_NGHE_NGHIEP.unique'=>'Tên nghề nghiệp không được bỏ trống !',
            'TEN_NGHE_NGHIEP.max'=>'Tên nghề nghiệp tối đa 255 kí tự !'


        ]);
        if ($val->passes()) {
            $nghenghiep = new nghenghiep();
            $nghenghiep->MA_NGHE_NGHIEP = $request->MA_NGHE_NGHIEP;
            $nghenghiep->TEN_NGHE_NGHIEP = $request->TEN_NGHE_NGHIEP;
            $nghenghiep->save();
            return response()->json(
                [
                    'code' => 200,
                    'mess' => 'Thêm dữ liệu thành công',
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
     * @param  \App\Models\nghenghiep  $nghenghiep
     * @return \Illuminate\Http\Response
     */
    public function show(nghenghiep $nghenghiep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nghenghiep  $nghenghiep
     * @return \Illuminate\Http\Response
     */
    public function edit($MA_NGHE_NGHIEP)
    {
        $nghenghiep=nghenghiep::find($MA_NGHE_NGHIEP);
        return view('admin.nghenghiep.edit',compact('nghenghiep'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nghenghiep  $nghenghiep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $MA_NGHE_NGHIEP)
    {
        $val = Validator::make($request->all(), [
            'MA_NGHE_NGHIEP' => 'required|max:255|numeric',
            'TEN_NGHE_NGHIEP' => 'required',
        ], [
            'MA_NGHE_NGHIEP.required' => 'Mã nghề nghiệp không được bỏ trống !',
            'MA_NGHE_NGHEP.max' => 'Mã nghề nghiệp tối đa 255 kí tự !',
            'TEN_NGHE_NGHIEP.required' => 'Tên nghề nghiệp không được bỏ trống !',
            'MA_NGHE_NGHEP.numeric' => 'Không được nhập số!',

           
        ]);
        if ($val->passes()) {
            $nghenghiep = nghenghiep::find($MA_NGHE_NGHIEP);
            $nghenghiep->MA_NGHE_NGHIEP = $request->MA_NGHE_NGHIEP;
            $nghenghiep->TEN_NGHE_NGHIEP = $request->TEN_NGHE_NGHIEP;     
            if ($nghenghiep->save()) {
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
     * @param  \App\Models\nghenghiep  $nghenghiep
     * @return \Illuminate\Http\Response
     */
    public function destroy($MA_NGHE_NGHIEP)
    {
        $nghenghiep = nghenghiep::find($MA_NGHE_NGHIEP);
        if ($nghenghiep->delete()) {
            
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
        $nghenghiep = nghenghiep::all();
        return response()->json($nghenghiep);
    }
}
