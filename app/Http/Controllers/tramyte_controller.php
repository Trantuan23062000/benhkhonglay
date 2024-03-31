<?php

namespace App\Http\Controllers;

use App\Models\tramyte;
use App\Models\ttyte;
use Illuminate\Http\Request;
use Validator;
use App\Imports\tramyteimport;
use Excel;

class tramyte_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tramyte=tramyte::paginate(10);
        $ttyte=ttyte::all();
        return view('admin.tramyte.index',compact('tramyte','ttyte'));
    }
    public function loaddata(Request $request){
        if($request->ajax() || 'NULL'){
            $tramyte=tramyte::paginate(10);
            return response()->json($tramyte);
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
        $val = Validator::make($request->all(), [
            'TEN_TRAM_Y_TE' => 'required|max:255|unique:tramyte',
            'DIA_CHI' => 'required|max:255',
            'SDT' => 'required|numeric|unique:tramyte',
            'TRUNG_TAM_Y_TE_ID' => 'required',
        ], [
            'TEN_TRAM_Y_TE.required' => 'Tên cơ sở y tế không được bỏ trống !',
            'TEN_TRAM_Y_TE.max' => 'Tên cơ sở y tế tối đa 255 kí tự !',
            'TEN_TRAM_Y_TE.unique' => 'Tên cơ sở y tế đã tồn tại !',
            'DIA_CHI.required' => 'Địa chỉ không được bỉ trống !',
            'DIA_CHI.max' => 'Địa chỉ tối đa 255 kí tự !',
            'SDT.unique' => 'SDT y tế đã tồn tại !',
            'SDT.numeric' => 'Không được nhập chữ !',
            'SDT.required' => 'Số điện thoại không được bỏ trống !',
            'TRUNG_TAM_Y_TE_ID'=>'Trung tâm y tế không được bỏ trống !'

        ]);
        if ($val->passes()) {
            $tramyte = new tramyte;
            $tramyte->TEN_TRAM_Y_TE = $request->TEN_TRAM_Y_TE;
            $tramyte->DIA_CHI = $request->DIA_CHI;
            $tramyte->SDT = $request->SDT;
            $tramyte->EMAIL = $request->EMAIL;
            $tramyte->TRUNG_TAM_Y_TE_ID = $request->TRUNG_TAM_Y_TE_ID;
            $tramyte->save();
            return response()->json(
                [
                    'code' => 200,
                    'mess' => 'Thêm trạm y tế thành công',
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
     * @param  \App\Models\tramyte  $tramyte
     * @return \Illuminate\Http\Response
     */
    public function show(tramyte $tramyte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tramyte  $tramyte
     * @return \Illuminate\Http\Response
     */
    public function edit($ID)
    {
        $ttyte=ttyte::all();
        $tramyte=tramyte::find($ID);
        return view('admin.tramyte.edit',compact('ttyte','tramyte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tramyte  $tramyte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ID)
    {
        $val = Validator::make($request->all(), [
            'DIA_CHI' => 'required|max:255',
            'TEN_TRAM_Y_TE' => 'required|max:255',
            'SDT' => 'required|numeric',
        ], [
            'TEN_TRAM_Y_TE.required' => 'Tên trạm y tế không được bỏ trống !',
            'TEN_TRAM_Y_TE.max' => 'Tên trạm y tế tối đa 255 kí tự !',
            'DIA_CHI.required' => 'Địa chỉ không được bỉ trống !',
            'DIA_CHI.max' => 'Địa chỉ tối đa 255 kí tự !',
            'SDT.numeric' => 'Không được nhập chữ !',
            'SDT.required' => 'Số điện thoại không được bỏ trống !',
        ]);
        if ($val->passes()) {
            $tramyte = tramyte::find($ID);
            $tramyte->TEN_TRAM_Y_TE = $request->TEN_TRAM_Y_TE;
            $tramyte->DIA_CHI = $request->DIA_CHI;
            $tramyte->SDT = $request->SDT;
            $tramyte->EMAIL = $request->EMAIL;
            $tramyte->TRUNG_TAM_Y_TE_ID = $request->TRUNG_TAM_Y_TE_ID;
            if ($tramyte->save()) {
                return response()->json(
                    [
                        'code' => 200,
                        'mess' => 'Update đữ liệu thành công',
                    ]
                );
            }
            return response()->json(['error'=>$val->errors()->all()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tramyte  $tramyte
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID)
    {
        $tramyte = tramyte::find($ID);
        if ($tramyte->delete()) {
            
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
    public function postNhap(Request $request)
    {
        Excel::import(new tramyteimport(), $request->file('file'));

        return redirect()->back();
    }
}
