<?php

namespace App\Http\Controllers;

use App\Models\chitietphieucanlamsang;
use App\Models\dvkt;
use Illuminate\Http\Request;
use Validator;

class chitietphieucanlamsang_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     $val = Validator::make($request->all(), [
    //         'MA_PHIEU_CLS' => 'required|max:50|unique:chitietphieucanlamsang',
    //         'MA_DVKT' => 'required',
    //         'SO_LUONG' => 'required|numeric',
    //         'DON_GIA' => 'required|numeric',
    //         'THANH_TIEN' => 'required|numeric',
    //         'KET_QUA' => 'required',
            
    //     ], [
    //        'MA_PHIEU_CLS.required'=>'Mã phiếu cận lâm sàng không được bỏ trống !',
    //        'MA_PHIEU_CLS.max'=>'Mã phiếu cận lâm sàng tối đa 50 kí tự !',
    //        'MA_PHIEU_CLS.unique'=>'Mã phiếu cận lâm sàng đã tồn tại!',
    //        'MA_DVKT.required'=>'Mã đơn vị kĩ thuật không được bỏ trống !',
    //        'SO_LUONG.required'=>'Số lượng không được bỏ trống !',
    //        'SO_LUONG.numeric'=>'Số lượng không được nhập chữ !',
    //        'THANH_TIEN.required'=>'Thành tiền không được bỏ trống !',
    //        'THANH_TIEN.numeric'=>'Thành tiền không được nhập chữ!',
    //        'KET_QUA.required'=>'Kết quả không được bỏ trống !',

    //     ]);
    //     if ($val->passes()) {
    //         $chitietphieucanlamsang = new chitietphieucanlamsang();
    //         $chitietphieucanlamsang->MA_PHIEU_CLS = $request->MA_PHIEU_CLS;
    //         $chitietphieucanlamsang->MA_DVKT = $request->MA_DVKT;
    //         $chitietphieucanlamsang->SO_LUONG = $request->SO_LUONG;
    //         $chitietphieucanlamsang->DON_GIA = $request->DON_GIA;
    //         $chitietphieucanlamsang->THANH_TIEN = $request->THANH_TIEN;
    //         $chitietphieucanlamsang->KET_QUA = $request->KET_QUA;
    //         $chitietphieucanlamsang->save();
    //         return response()->json(
    //             [
    //                 'code' => 200,
    //                 'mess' => 'Thêm dữ liệu thành công !',
    //             ]
    //         );
    //     }
    //     return response()->json([
    //         'error' => $val->errors()->all(),
    //     ]);
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chitietphieucanlamsang  $chitietphieucanlamsang
     * @return \Illuminate\Http\Response
     */
    public function show(chitietphieucanlamsang $chitietphieucanlamsang)
    {
        //
    }
    public function loaddata()
    {
        $chitietphieucanlamsang = chitietphieucanlamsang::all();
        return response()->json($chitietphieucanlamsang);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chitietphieucanlamsang  $chitietphieucanlamsang
     * @return \Illuminate\Http\Response
     */
    public function edit(chitietphieucanlamsang $chitietphieucanlamsang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chitietphieucanlamsang  $chitietphieucanlamsang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chitietphieucanlamsang $chitietphieucanlamsang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chitietphieucanlamsang  $chitietphieucanlamsang
     * @return \Illuminate\Http\Response
     */
    public function destroy($MA_PHIEU_CLS)
    {
        $chitietphieucanlamsang = chitietphieucanlamsang::find($MA_PHIEU_CLS);
        if ($chitietphieucanlamsang->delete()) {

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
