<?php

namespace App\Http\Controllers;

use App\Models\canlamsang;
use App\Models\chitietphieucanlamsang;
use App\Models\cskcb;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Str;
class canlamsang_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'TEN_BS_CHI_DINH'=>'required',
            'MA_DVKT'=>'required',
            'SO_LUONG'=>'required|numeric',
            'DON_GIA'=>'required|numeric',
            'SINH_HOA_MAU'=>'required',
            'XET_NGHIEM_NT'=>'required',
            'DIEN_TIM'=>'required',
            'X_QUANG_PHOI'=>'required',
            'CHUC_NANG_HO_HAP'=>'required',
            'LUU_LUONG_DINH'=>'required',
            'CHUAN_DOAN'=>'required',

            
        ], [
           'TEN_BS_CHI_DINH.required'=>'Tên bác sĩ chỉ định không được bỏ trống !',
           'MA_DVKT.required'=>'Mã đơn vị kĩ thuật không được bỏ trống !',
           'SO_LUONG.required'=>'Số lượng không được bỏ trống !',
           'SO_LUONG.numeric'=>'Số lượng không được nhập chữ !',
           'DON_GIA.required'=>'Đơn giá không được bỏ trống !',
           'DON_GIA.numeric'=>'Đơn giá không được nhập chữ !',
           'SINH_HOA_MAU.required'=>'Sinh hóa máu không được bỏ trống !',
           'XET_NGHIEM_NT.required'=>'Xét nghiệm nước tiểu không được bỏ trống !',
           'DIEN_TIM.required'=>'Điện tim không được bỏ trống !',
           'X_QUANG_PHOI.required'=>'X quang phổi không được bỏ trống !',
           'CHUC_NANG_HO_HAP.required'=>'Chức năng phổi không được bỏ trống !',
           'LUU_LUONG_DINH.required'=>'Lưu lượng định không được bỏ trống !',
           'CHUAN_DOAN.required'=>'Chuẩn đoán không được bỏ trống !',


        ]);
        if ($val->passes()) {
            $canlamsang = new canlamsang();
            $canlamsang->MA_PHIEU_CLS =$request->MA_PHIEU_CLS;
            $canlamsang->NGAY_CHI_DINH=Carbon::now();
            $canlamsang->MCSKCB_ID=Auth::user()->MCSKCB;
            $canlamsang->TEN_BS_CHI_DINH=$request->TEN_BS_CHI_DINH;
            $canlamsang->SINH_HOA_MAU = json_encode($request->SINH_HOA_MAU);
            $canlamsang->XET_NGHIEM_NT = json_encode($request->XET_NGHIEM_NT);
            $canlamsang->XET_NGHIEM_KHAC = json_encode($request->XET_NGHIEM_KHAC);
            $canlamsang->DIEN_TIM = json_encode($request->DIEN_TIM);
            $canlamsang->DIEN_TIM_KHAC = json_encode($request->DIEN_TIM_KHAC);
            $canlamsang->X_QUANG_PHOI = json_encode($request->X_QUANG_PHOI);
            $canlamsang->KET_QUA_KHAC = json_encode($request->KET_QUA_KHAC);
            $canlamsang->CHUC_NANG_HO_HAP = json_encode($request->CHUC_NANG_HO_HAP);
            $canlamsang->HO_HAP_KHAC = json_encode($request->HO_HAP_KHAC);
            $canlamsang->LUU_LUONG_DINH = json_encode($request->LUU_LUONG_DINH);
            $canlamsang->CLS_KHAC = json_encode($request->CLS_KHAC);
            $canlamsang->CHUAN_DOAN = json_encode($request->CHUAN_DOAN);
            $canlamsang->CHUAN_DOAN_KHAC = json_encode($request->CHUAN_DOAN_KHAC);
            $canlamsang->save();
            
            $chitietphieucanlamsang=new chitietphieucanlamsang();
            $chitietphieucanlamsang->MA_PHIEU_CLS= $request->MA_PHIEU_CLS;
            $chitietphieucanlamsang->MA_DVKT=$request->MA_DVKT;
            $chitietphieucanlamsang->SO_LUONG=$request->SO_LUONG;
            $chitietphieucanlamsang->DON_GIA=$request->DON_GIA; 
            $chitietphieucanlamsang->THANH_TIEN=$request->SO_LUONG*$request->DON_GIA;
           // $chitietphieucanlamsang->KET_QUA=$request->KET_QUA;
            $chitietphieucanlamsang->save();
            return response()->json(
                [
                    'code' => 200,
                    'mess' => 'Thêm dữ liệu thành công !',
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
     * @param  \App\Models\canlamsang  $canlamsang
     * @return \Illuminate\Http\Response
     */
    public function show(canlamsang $canlamsang)
    {
        //
    }
    public function data(){
        $canlamsang=canlamsang::all();
        return view('admin.benhkhonglaysoyte.canlamsangdata',compact('canlamsang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\canlamsang  $canlamsang
     * @return \Illuminate\Http\Response
     */
    public function edit($MA_PHIEU_CLS)
    {
        $canlamsang=canlamsang::find($MA_PHIEU_CLS);
        $cskcb=cskcb::all();
        return view('admin.benhkhonglaynhiem.edit',compact('canlamsang','cskcb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\canlamsang  $canlamsang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, canlamsang $canlamsang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\canlamsang  $canlamsang
     * @return \Illuminate\Http\Response
     */
    public function destroy($MA_PHIEU_CLS)
    {
        $canlamsang = canlamsang::find($MA_PHIEU_CLS);
        if ($canlamsang->delete()) {

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
    public function loaddata()
    {
        $canlamsang = canlamsang::all();
        return response()->json($canlamsang);
    }
    public function delete($MA_PHIEU_CLS){
        $chitietphieucanlamsang=chitietphieucanlamsang::where('MA_PHIEU_CLS',$MA_PHIEU_CLS)->delete();
        $canlamsang=canlamsang::find($MA_PHIEU_CLS)->delete();
        return redirect()->back();
    }

    public function view($MA_PHIEU_CLS)
    {
        $canlamsang = canlamsang::find($MA_PHIEU_CLS);
        $chitietphieucanlamsang=chitietphieucanlamsang::find($MA_PHIEU_CLS);
        return view('admin.benhkhonglaysoyte.canlamsang',compact('canlamsang','chitietphieucanlamsang'));
    }
}
