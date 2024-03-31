<?php

namespace App\Http\Controllers;

use App\Models\thuoc;
use Illuminate\Http\Request;
use Validator;

class thuoc_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thuoc=thuoc::all();
        return view('admin.thuoc.index',compact('thuoc'));
    }
    public function data(){
        $thuoc=thuoc::all();
        return view('admin.thuoc.data',compact('thuoc'));
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
            'MA_THUOC' => 'required|max:50|unique:thuoc',
            'MA_NHOM'=>'required',
            'TEN_THUOC'=>'required',
            'HAM_LUONG' => 'required',
            'DON_VI_TINH'=>'required',
            'HAM_LUONG'=>'required',
            'DUONG_DUNG'=>'required',
            'LIEU_DUNG'=>'required',
            'SO_DANG_KY'=>'required',
            'TT_THAU'=>'required',
            'PHAM_VI'=>'required',
            'SO_LUONG'=>'required|numeric',
            'DON_GIA'=>'required|numeric',
            'MUC_HUONG'=>'required|numeric',
        ], [
            'MA_THUOC.required' => 'Mã thuốc không được bỏ trống !',
            'MA_THUOC.unique'=>'Mã thuốc đã tồn tại!',
            'TEN_THUOC.required'=>'Tên thuốc không được bỏ trống !',
            'DON_VI_TINH.required'=>'Đơn vịn tính không được bỏ trống !',
            'HAM_LUONG.required'=>'Hàm lượng không được bỏ trống !',
            'DUONG_DUNG.required'=>'Đường dùng không được bỏ trống !',
            'LIEU_DUNG.required'=>'Liều dùng không được bỏ trống !',
            'SO_DANG_KY.required'=>'Số đăng kí không được bỏ trống !',
            'TT_THAU.required'=>'Thông tin thầu không được bỏ trống !',
            'PHAM_VI.required'=>'Phạm vi không được bỏ trống !',
            'SO_LUONG.required'=>'Số lượng không được bỏ trống !',
            'SO_LUONG.numeric'=>'Số lượng không được nhập chữ !',
            'DON_GIA.required'=>'Đơn giá không được bỏ trống !',
            'DON_GIA.required'=>'Đơn giá không được nhập chữ !',
            'MUC_HUONG.required'=>'Mức hưởng không được bỏ trống !',
            'MUC_HUONG.numeric'=>'Mức hưởng không được nhập chữ !',
        ]);
        if ($val->passes()) {
            $thuoc = new thuoc;
            $thuoc->MA_THUOC = $request->MA_THUOC;
            $thuoc->MA_NHOM = $request->MA_NHOM;
            $thuoc->TEN_THUOC = $request->TEN_THUOC;
            $thuoc->DON_VI_TINH = $request->DON_VI_TINH;
            $thuoc->HAM_LUONG = $request->HAM_LUONG;
            $thuoc->DUONG_DUNG=$request->DUONG_DUNG;
            $thuoc->LIEU_DUNG=$request->LIEU_DUNG;
            $thuoc->SO_DANG_KY=$request->SO_DANG_KY;
            $thuoc->TT_THAU=$request->TT_THAU;
            $thuoc->PHAM_VI=$request->PHAM_VI;
            $thuoc->SO_LUONG=$request->SO_LUONG;
            $thuoc->DON_GIA=$request->DON_GIA;
            $thuoc->MUC_HUONG=$request->MUC_HUONG;
            if($request->MUC_HUONG==0){
                $thuoc->THANH_TIEN=$request->SO_LUONG*$request->DON_GIA;
            }
            else{
                $thuoc->THANH_TIEN=($request->SO_LUONG*$request->DON_GIA)-($request->SO_LUONG*$request->DON_GIA*$request->MUC_HUONG)/100;
            }
           // dd($thuoc->THANH_TIEN);
            $thuoc->save();
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
     * @param  \App\Models\thuoc  $thuoc
     * @return \Illuminate\Http\Response
     */
    public function show(thuoc $thuoc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\thuoc  $thuoc
     * @return \Illuminate\Http\Response
     */
    public function edit($MA_THUOC)
    {
        $thuoc=thuoc::find($MA_THUOC);
        return view('admin.thuoc.edit',compact('thuoc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\thuoc  $thuoc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$MA_THUOC)
    {
        $val = Validator::make($request->all(), [
            'MA_THUOC' => 'required',
            'MA_NHOM'=>'required',
            'TEN_THUOC'=>'required',
            'HAM_LUONG' => 'required',
            'DON_VI_TINH'=>'required',
            'HAM_LUONG'=>'required',
            'DUONG_DUNG'=>'required',
            'LIEU_DUNG'=>'required',
            'SO_DANG_KY'=>'required',
            'TT_THAU'=>'required',
            'PHAM_VI'=>'required',
            'SO_LUONG'=>'required|numeric',
            'DON_GIA'=>'required|numeric',
            'MUC_HUONG'=>'required|numeric',
        ], [
            'MA_THUOC.required' => 'Mã thuốc không được bỏ trống !',
            'TEN_THUOC.required'=>'Tên thuốc không được bỏ trống !',
            'DON_VI_TINH.required'=>'Đơn vịn tính không được bỏ trống !',
            'HAM_LUONG.required'=>'Hàm lượng không được bỏ trống !',
            'DUONG_DUNG.required'=>'Đường dùng không được bỏ trống !',
            'LIEU_DUNG.required'=>'Liều dùng không được bỏ trống !',
            'SO_DANG_KY.required'=>'Số đăng kí không được bỏ trống !',
            'TT_THAU.required'=>'Thông tin thầu không được bỏ trống !',
            'PHAM_VI.required'=>'Phạm vi không được bỏ trống !',
            'SO_LUONG.required'=>'Số lượng không được bỏ trống !',
            'SO_LUONG.numeric'=>'Số lượng không được nhập chữ !',
            'DON_GIA.required'=>'Đơn giá không được bỏ trống !',
            'DON_GIA.required'=>'Đơn giá không được nhập chữ !',
            'MUC_HUONG.required'=>'Mức hưởng không được bỏ trống !',
            'MUC_HUONG.numeric'=>'Mức hưởng không được nhập chữ !',
            'MA_NHOM.required'=>'Mã nhóm không được bỏ trống !',
        ]);
        if ($val->passes()) {
            $thuoc = thuoc::find($MA_THUOC);
            $thuoc->MA_THUOC = $request->MA_THUOC;
            $thuoc->MA_NHOM = $request->MA_NHOM;
            $thuoc->TEN_THUOC = $request->TEN_THUOC;
            $thuoc->DON_VI_TINH = $request->DON_VI_TINH;
            $thuoc->HAM_LUONG = $request->HAM_LUONG;
            $thuoc->DUONG_DUNG=$request->DUONG_DUNG;
            $thuoc->LIEU_DUNG=$request->LIEU_DUNG;
            $thuoc->SO_DANG_KY=$request->SO_DANG_KY;
            $thuoc->TT_THAU=$request->TT_THAU;
            $thuoc->PHAM_VI=$request->PHAM_VI;
            $thuoc->SO_LUONG=$request->SO_LUONG;
            $thuoc->DON_GIA=$request->DON_GIA;
            $thuoc->MUC_HUONG=$request->MUC_HUONG;
            if($request->MUC_HUONG==0){
                $thuoc->THANH_TIEN=$request->SO_LUONG*$request->DON_GIA;
            }
            else{
                $thuoc->THANH_TIEN=($request->SO_LUONG*$request->DON_GIA)-($request->SO_LUONG*$request->DON_GIA*$request->MUC_HUONG)/100;
            }
            $thuoc->save();
            return response()->json([
                'code' => 200,
                'message' => 'Đã cập nhật thành công !.'
            ]);

            
        }
        return response()->json(['error'=>$val->errors()->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\thuoc  $thuoc
     * @return \Illuminate\Http\Response
     */
    public function destroy($MA_THUOC)
    {
        $thuoc = thuoc::find($MA_THUOC);
        if ($thuoc->delete()) {

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
