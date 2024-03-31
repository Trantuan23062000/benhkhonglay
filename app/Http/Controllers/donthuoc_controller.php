<?php

namespace App\Http\Controllers;

use App\Models\donthuoc;
use App\Models\thuoc;
use App\Models\thuoc_donthuoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;

class donthuoc_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('admin.benhkhonglaysoyte.index',compact('donthuoc','thuoc'));
    }

    public function data(){
        $donthuoc=donthuoc::all();
        return view('admin.benhkhonglaysoyte.donthuocdata',compact('donthuoc'));
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
            'MA_TOA_THUOC'=>'required|unique:thongtindonthuoc',
            'TOA_KE_DEN'=>'required',
            'MA_THUOC'=>'required',
            'SO_LUONG'=>'required',
            'MA_LAN_KHAM'=>'required', 
            'TYLE_TT'=>'required',   

        ], [
            'MA_TOA_THUOC.required'=>'Mã toa thuốc không được bỏ trống !',
            'MA_TOA_THUOC.unique'=>'Mã toa thuốc đã tồn tài !',
            'SO_LUONG.required'=>'Số lượng không được bỏ trống !',
            'TOA_KE_DEN.required'=>'Toa kê đến không được bỏ trống !',
            'MA_LAN_KHAM.required'=>'Mã lần khám không được bỏ trống',
            'MA_THUOC.required'=>'Mã thuốc không được bỏ trống !',
            'TYLE_TT.required'=>'Tỷ lệ thanh toán không được bỏ trống !'
        ]);
        if ($val->passes()) {
            $donthuoc = new donthuoc();
            $donthuoc->MA_TOA_THUOC = $request->MA_TOA_THUOC;
            $donthuoc->MA_CSKCB=Auth::user()->MCSKCB;
            $donthuoc->NGAY_KE=Carbon::now();
            $donthuoc->TOA_KE_DEN = $request->TOA_KE_DEN;
           
            $donthuoc->SO_LUONG = json_encode($request->SO_LUONG);
            $donthuoc->GHI_CHU=$request->GHI_CHU;
            $donthuoc->MA_LAN_KHAM=$request->MA_LAN_KHAM;
            $donthuoc->save();
            $stt=0;
            foreach($request->MA_THUOC as $item ){
                $tim=thuoc::find($item);
                $dongia=$tim->DON_GIA*$request->SO_LUONG[$stt];
                $thuoc_donthuoc= new thuoc_donthuoc();
                $thuoc_donthuoc->ID_DON_THUOC=$request->MA_TOA_THUOC;
                $thuoc_donthuoc->ID_THUOC=$item;
                $thuoc_donthuoc->GIA_TIEN=$dongia;
                $thuoc_donthuoc->save();
                $stt++;
            }
            $timdt=donthuoc::find($request->MA_TOA_THUOC);
            if($request->TYLE_TT==100){
               $timdt->THANH_TIEN=0;
            }
            else{
                $timdt->THANH_TIEN=thuoc_donthuoc::where('ID_DON_THUOC',$request->MA_TOA_THUOC)->get()->sum('GIA_TIEN');
            }
          
            $timdt->save();
            return response()->json(
                [
                    'code' => 200,
                    'mess' => 'Thêm thông tin đơn thuốc thành công !',
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
     * @param  \App\Models\donthuoc  $donthuoc
     * @return \Illuminate\Http\Response
     */
    public function show(donthuoc $donthuoc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\donthuoc  $donthuoc
     * @return \Illuminate\Http\Response
     */
    public function edit(donthuoc $donthuoc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\donthuoc  $donthuoc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, donthuoc $donthuoc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\donthuoc  $donthuoc
     * @return \Illuminate\Http\Response
     */
    public function destroy($MA_TOA_THUOC)
    {
        $donthuoc = donthuoc::find($MA_TOA_THUOC);
        if ($donthuoc->delete()) {
            
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
    public function lieudung($ID)
    {
        $thuoc = thuoc::where('MA_THUOC', $ID)->first();
        return response()->json($thuoc);
    }
    public function thuoc($ID)
    {
        $thuoc = thuoc::where('MA_THUOC', $ID)->get();
        return response()->json($thuoc);
    }
    public function chonthuoc($sl){
          $thuoc=thuoc::all();
          return view('admin.benhkhonglaysoyte.chonthuoc',compact('thuoc','sl'));
    }
}
