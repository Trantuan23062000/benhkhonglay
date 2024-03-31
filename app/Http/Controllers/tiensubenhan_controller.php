<?php

namespace App\Http\Controllers;

use App\Models\tiensubenhan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Validator;

class tiensubenhan_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tiensubenhan=tiensubenhan::all();
        // return view('admin.benhkhonglaysoyte.tieusubenhnhandata',compact('tiensubenhan'));
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
    public function data(){
        $tiensubenhan=tiensubenhan::all();
        return view('admin.benhkhonglaysoyte.tieusubenhnhandata',compact('tiensubenhan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $mang1=[
            'Tang huyet ap',
            'Dai thao duong',
            'Dai thao duong thai ky',
            'Dau thac lung',
            'Dot quy',
            'Benh DMV/Nhoi mau co tim',
            'Benh than mang suy than',
            'Suy tim',
            'Hen phe quan',
            'Tram cam', 
        ];
        // $mang2=$request->TIEN_SU_BAN_THAN;
        // $stt=0;
        // foreach($mang1 as $m1){
        //     if($m1==$mang2[$stt]){
        //         printf($m1);
        //     }
        //    $stt++;
        // }
        
        $val = Validator::make($request->all(), [
            'HO_TEN' => 'required',
            'SO_NGOAI_TRU'=>'required|numeric',
            'MA_YT'=>'required|numeric',
        ], [
            'HO_TEN.required'=>'Họ tên không được bỏ trống !',
            'SO_NGOAI_TRU.required'=>'Số ngoại trú không được bỏ trống !',
            'SO_NGOAI_TRU.numeric'=>'Số ngoại trú không được nhập chữ !',
            'MA_YT.required'=>'Mã y tế không được bỏ trống !',
            'MA_YT.numeric'=>'Mã y tế không được nhập chữ !',
            
        ]);
        if ($val->passes()) {
            $tiensubenhan = new tiensubenhan();
            $tiensubenhan->HO_TEN = $request->HO_TEN;
            $tiensubenhan->THOI_GIAN_GHI_NHAN=Carbon::now();
            $tiensubenhan->SO_NGOAI_TRU=$request->SO_NGOAI_TRU;
            $tiensubenhan->MA_YT=$request->MA_YT;
            $tiensubenhan->TIEN_SU_BAN_THAN = json_encode($request->TIEN_SU_BAN_THAN);
            $tiensubenhan->NAM_CHUAN_DOAN = json_encode($request->NAM_CHUAN_DOAN);
            $tiensubenhan->YEU_TO_NGUY_CO = json_encode($request->YEU_TO_NGUY_CO);
            $tiensubenhan->NAM_CHUAN_DOAN_NGUY_CO = json_encode($request->NAM_CHUAN_DOAN_NGUY_CO);
            $tiensubenhan->TIEU_SU_GIA_DINH = json_encode($request->TIEU_SU_GIA_DINH);
            $tiensubenhan->save();
            return response()->json(
                [
                    'code' => 200,
                    'mess' => 'Thêm tiểu sử bệnh nhân thành công !',
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
     * @param  \App\Models\tiensubenhan  $tiensubenhan
     * @return \Illuminate\Http\Response
     */
    public function show(tiensubenhan $tiensubenhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tiensubenhan  $tiensubenhan
     * @return \Illuminate\Http\Response
     */
    public function edit($ID)
    {
        $tiensubenhan=tiensubenhan::find($ID);
        return view('admin.benhkhonglaysoyte.tiensubenhanedit',compact('tiensubenhan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tiensubenhan  $tiensubenhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tiensubenhan $tiensubenhan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tiensubenhan  $tiensubenhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(tiensubenhan $tiensubenhan)
    {
        //
    }
}
