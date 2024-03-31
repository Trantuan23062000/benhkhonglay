<?php

namespace App\Http\Controllers;

use App\Models\thongtinbenhan;
use App\Models\tiensubenhan;
use App\Models\doituongmacbenh;
use Illuminate\Http\Request;
use App\Models\canlamsang;
use Validator;
use App\Models\donthuoc;
use Carbon\Carbon;

class thongtinbenhan_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.benhkhonglaysoyte.index');
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
            'MA_BENH_AN' => 'required|unique:chitietlankham',
            'DOI_TUONG_MAC_BENH_ID' => 'required',
            'LI_DO_KHAM' => 'required',
            'NGAY_KET_THUC_KHAM' => 'required',
            'QUA_TRINH_BENH_LY' => 'required',
            'TIEN_SU_BAN_THAN_ID' => 'required',
            'TRIEU_CHUNG' => 'required',
            'CHIEU_CAO' => 'required',
            'HUYET_AP_CAO' => 'numeric',
            'HUYET_AP_THAP' => 'numeric',
            'CAN_NANG' => 'required|numeric',
            'MACH' => 'required|numeric',
            'BMI' => 'required',
            'NHIET_DO' => 'required|numeric',
            'NHIP_THO' => 'required',
            'DUONG_MAU' => 'required',
            'VONG_EO' => 'required|numeric',
            'NON_DO_CHAT_BEO' => 'required|numeric',
            'CHUAN_DOAN_KHAM_BENH' => 'required',
            'HUONG_GIAI_QUYET' => 'required',
            'MA_PHIEU_CLS' => 'required',
            'MA_TOA_THUOC' => 'required',
            'NGAY_BAT_DAU_DEU_TRI' => 'required',
            'LI_DO_DEU_TRI' => 'required',
            'LI_DO_KET_THUC_DEU_TRI' => 'required',
            'CHUAN_DOAN_KET_THUC_DEU_TRI' => 'required',
            'KET_QUA_DEU_TRI' => 'required',
            'TINH_TRANG_RA_VIEN' => 'required',
        ], [
            'MA_BENH_AN.required' => 'Mã bệnh án không được bỏ trống !',
            'MA_BENH_AN.unique' => 'Mã bệnh án đã tồn tại !',
            'DOI_TUONG_MAC_BENH_ID.required' => 'Mã đối tượng mắc bệnh không được bỏ trống !',
            'LI_DO_KHAM.required' => 'Lí do khám không được bỏ trống !',
            'NGAY_KET_THUC_KHAM.required' => 'Ngày kết thúc khám không được bỏ trống !',
            'QUA_TRINH_BENH_LY.required' => 'Quá trình bệnh lý không được bỏ trống !',
            'TIEN_SU_BAN_THAN_ID.required' => 'Tiền sử bản thân không được bỏ trống !',
            'TRIEU_CHUNG.required' => 'Triệu chứng không được bỏ trống !',
            'CHIEU_CAO.required' => 'Chiều cao không được bỏ trống !',
            'HUYET_AP_CAO.numeric' => 'Huyết áp cao không được nhập chữ !',
            'HUYET_AP_THAP.numeric' => 'Huyết áp thấp không được nhập chữ !',
            'CAN_NANG.required' => 'Cân nặng không được bỏ trống !',
            'CAN_NANG.numeric' => 'Cân nặng không được nhập chữ !',
            'MACH.required' => 'Mạch không được bỏ trống !',
            'MACH.numeric' => 'Mạch không được nhập chữ !',
            'BMI.required' => 'BMI không được bỏ trống !',
            'NHIET_DO.required' => 'Nhiệt độ không được bỏ trống !',
            'NHIP_THO.required' => 'Nhịp thở không được bỏ trống !',
            'DUONG_MAU.required' => 'Đường máu không được bỏ trống !',
            'VONG_EO.required' => 'Vòng eo không được bỏ trống !',
            'VONG_EO.numeric' => 'Vòng eo không được nhập chữ !',
            'NON_DO_CHAT_BEO.required' => 'Nồng độ chất béo không được bỏ trống !',
            'NONG_DO_CHAT_BEO.numeric' => 'Nồng độ chất béo không được nhập chữ !',
            'CHUAN_DOAN_KHAM_BENH.required' => 'Chuẩn đoán khám bệnh không được bỏ trống !',
            'HUONG_GIAI_QUYET.required' => 'Hướng giải quyết không được bỏ trống !',
            'MA_PHIEU_CLS.required' => 'Mã phiếu cận lâm sàng không được bỏ trống !',
            'MA_TOA_THUOC.required' => 'Mã toa thuốc không được bỏ trống !',
            'NGAY_BAT_DAU_DEU_TRI.required' => 'Ngày bắt đầu đều trị không được bỏ trống !',
            'LI_DO_DEU_TRI.required' => 'Lí do đều trị không được bỏ trống !',
            'LI_DO_KET_THUC_DEU_TRI.required' => 'Lí do kết thúc đều trị không được bỏ trống !',
            'CHUAN_DOAN_KET_THUC_DEU_TRI.required' => 'Chuẩn đoán kết thúc đều trị không được bỏ trống !',
            'KET_QUA_DEU_TRI.required' => 'Kết quả đều trị không được bỏ trống !',
            'TINH_TRANG_RA_VIEN.required' => 'Tình trang ra viện không được bỏ trống !',


        ]);
        if ($val->passes()) {
            //dd($thongtinbenhan->all()) ; 
            $thongtinbenhan = new thongtinbenhan();
            $thongtinbenhan->THOI_GIAN_KHAM_BENH = Carbon::now();
            $thongtinbenhan->MA_BENH_AN = $request->MA_BENH_AN;
            $thongtinbenhan->DOI_TUONG_MAC_BENH_ID = $request->DOI_TUONG_MAC_BENH_ID ;
            $thongtinbenhan->LI_DO_KHAM = $request->LI_DO_KHAM;
            $thongtinbenhan->NGAY_KET_THUC_KHAM = $request->NGAY_KET_THUC_KHAM;
            $thongtinbenhan->QUA_TRINH_BENH_LY = $request->QUA_TRINH_BENH_LY;
            $thongtinbenhan->TIEU_SU_BAN_THAN_ID = $request->TIEU_SU_BAN_THAN_ID;
            $thongtinbenhan->TRIEU_CHUNG = $request->TRIEU_CHUNG;
            $thongtinbenhan->CHIEU_CAO = $request->CHIEU_CAO;
            $thongtinbenhan->HUYET_AP_CAO = $request->HUYET_AP_CAO;
            $thongtinbenhan->HUYET_AP_THAP = $request->HUYET_AP_THAP;
            $thongtinbenhan->CAN_NANG = $request->CAN_NANG;
            $thongtinbenhan->MACH = $request->MACH;
            $thongtinbenhan->BMI = $request->BMI;
            $thongtinbenhan->NHIET_DO = $request->NHIET_DO;
            $thongtinbenhan->NHIP_THO = $request->NHIP_THO;
            $thongtinbenhan->DUONG_MAU = $request->DUONG_MAU;
            $thongtinbenhan->VONG_EO = $request->VONG_EO;
            $thongtinbenhan->NON_DO_CHAT_BEO = $request->NON_DO_CHAT_BEO;
            $thongtinbenhan->CHUAN_DOAN_KHAM_BENH = $request->CHUAN_DOAN_KHAM_BENH;
            $thongtinbenhan->HUONG_GIAI_QUYET = $request->HUONG_GIAI_QUYET;
            $thongtinbenhan->MA_PHIEU_CLS = $request->MA_PHIEU_CLS;
            $thongtinbenhan->MA_TOA_THUOC = $request->MA_TOA_THUOC;
            $thongtinbenhan->NGAY_BAT_DAU_DEU_TRI = $request->NGAY_BAT_DAU_DEU_TRI;
            $thongtinbenhan->NGAY_KET_THUC_DEU_TRI = $request->NGAY_KET_THUC_DEU_TRI;
            $thongtinbenhan->LI_DO_DEU_TRI = $request->LI_DO_DEU_TRI;
            $thongtinbenhan->LI_DO_KET_THUC_DEU_TRI = $request->LI_DO_KET_THUC_DEU_TRI;
            $thongtinbenhan->CHUAN_DOAN_KET_THUC_DEU_TRI = $request->CHUAN_DOAN_KET_THUC_DEU_TRI;
            $thongtinbenhan->KET_QUA_DEU_TRI = $request->KET_QUA_DEU_TRI;
            $thongtinbenhan->TINH_TRANG_RA_VIEN = $request->TINH_TRANG_RA_VIEN;
            $thongtinbenhan->save();
            return response()->json(
                [
                    'code' => 200,
                    'mess' => 'Thêm thông tin bệnh nhân thành công !',
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
     * @param  \App\Models\thongtinbenhan  $thongtinbenhan
     * @return \Illuminate\Http\Response
     */
    public function show(thongtinbenhan $thongtinbenhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\thongtinbenhan  $thongtinbenhan
     * @return \Illuminate\Http\Response
     */
    public function edit($MA_BENH_AN)
    {
        $thongtinbenhan=thongtinbenhan::find($MA_BENH_AN);
        $doituongmacbenh=doituongmacbenh::all();
        $tiensubenhan=tiensubenhan::all();
        $canlamsang=canlamsang::all();
        $donthuoc=donthuoc::all();
        return view('admin.benhkhonglaysoyte.thongtinbenhanedit',compact('thongtinbenhan','doituongmacbenh','tiensubenhan','canlamsang','donthuoc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\thongtinbenhan  $thongtinbenhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$MA_BENH_AN)
    {
        $val = Validator::make($request->all(), [
            'MA_BENH_AN' => 'required',
            'DOI_TUONG_MAC_BENH_ID' => 'required',
            'LI_DO_KHAM' => 'required',
            'NGAY_KET_THUC_KHAM' => 'required',
            'QUA_TRINH_BENH_LY' => 'required',
            'TIEN_SU_BAN_THAN_ID' => 'required',
            'TRIEU_CHUNG' => 'required',
            'CHIEU_CAO' => 'required',
            'HUYET_AP_CAO' => 'numeric',
            'HUYET_AP_THAP' => 'numeric',
            'CAN_NANG' => 'required|numeric',
            'MACH' => 'required|numeric',
            'BMI' => 'required',
            'NHIET_DO' => 'required|numeric',
            'NHIP_THO' => 'required',
            'DUONG_MAU' => 'required',
            'VONG_EO' => 'required|numeric',
            'NON_DO_CHAT_BEO' => 'required|numeric',
            'CHUAN_DOAN_KHAM_BENH' => 'required',
            'HUONG_GIAI_QUYET' => 'required',
            'MA_PHIEU_CLS' => 'required',
            'MA_TOA_THUOC' => 'required',
            'NGAY_BAT_DAU_DEU_TRI' => 'required',
            'LI_DO_DEU_TRI' => 'required',
            'LI_DO_KET_THUC_DEU_TRI' => 'required',
            'CHUAN_DOAN_KET_THUC_DEU_TRI' => 'required',
            'KET_QUA_DEU_TRI' => 'required',
            'TINH_TRANG_RA_VIEN' => 'required',
        ], [
            'MA_BENH_AN.required' => 'Mã bệnh án không được bỏ trống !',
            'DOI_TUONG_MAC_BENH_ID.required' => 'Mã đối tượng mắc bệnh không được bỏ trống !',
            'LI_DO_KHAM.required' => 'Lí do khám không được bỏ trống !',
            'NGAY_KET_THUC_KHAM.required' => 'Ngày kết thúc khám không được bỏ trống !',
            'QUA_TRINH_BENH_LY.required' => 'Quá trình bệnh lý không được bỏ trống !',
            'TIEN_SU_BAN_THAN_ID.required' => 'Tiền sử bản thân không được bỏ trống !',
            'TRIEU_CHUNG.required' => 'Triệu chứng không được bỏ trống !',
            'CHIEU_CAO.required' => 'Chiều cao không được bỏ trống !',
            'HUYET_AP_CAO.numeric' => 'Huyết áp cao không được nhập chữ !',
            'HUYET_AP_THAP.numeric' => 'Huyết áp thấp không được nhập chữ !',
            'CAN_NANG.required' => 'Cân nặng không được bỏ trống !',
            'CAN_NANG.numeric' => 'Cân nặng không được nhập chữ !',
            'MACH.required' => 'Mạch không được bỏ trống !',
            'MACH.numeric' => 'Mạch không được nhập chữ !',
            'BMI.required' => 'BMI không được bỏ trống !',
            'NHIET_DO.required' => 'Nhiệt độ không được bỏ trống !',
            'NHIP_THO.required' => 'Nhịp thở không được bỏ trống !',
            'DUONG_MAU.required' => 'Đường máu không được bỏ trống !',
            'VONG_EO.required' => 'Vòng eo không được bỏ trống !',
            'VONG_EO.numeric' => 'Vòng eo không được nhập chữ !',
            'NON_DO_CHAT_BEO.required' => 'Nồng độ chất béo không được bỏ trống !',
            'NONG_DO_CHAT_BEO.numeric' => 'Nồng độ chất béo không được nhập chữ !',
            'CHUAN_DOAN_KHAM_BENH.required' => 'Chuẩn đoán khám bệnh không được bỏ trống !',
            'HUONG_GIAI_QUYET.required' => 'Hướng giải quyết không được bỏ trống !',
            'MA_PHIEU_CLS.required' => 'Mã phiếu cận lâm sàng không được bỏ trống !',
            'MA_TOA_THUOC.required' => 'Mã toa thuốc không được bỏ trống !',
            'NGAY_BAT_DAU_DEU_TRI.required' => 'Ngày bắt đầu đều trị không được bỏ trống !',
            'LI_DO_DEU_TRI.required' => 'Lí do đều trị không được bỏ trống !',
            'LI_DO_KET_THUC_DEU_TRI.required' => 'Lí do kết thúc đều trị không được bỏ trống !',
            'CHUAN_DOAN_KET_THUC_DEU_TRI.required' => 'Chuẩn đoán kết thúc đều trị không được bỏ trống !',
            'KET_QUA_DEU_TRI.required' => 'Kết quả đều trị không được bỏ trống !',
            'TINH_TRANG_RA_VIEN.required' => 'Tình trang ra viện không được bỏ trống !',
        ]);
        if ($val->passes()) {
            $thongtinbenhan = thongtinbenhan::find($MA_BENH_AN);
            $thongtinbenhan->THOI_GIAN_KHAM_BENH = Carbon::now();
            $thongtinbenhan->MA_BENH_AN = $request->MA_BENH_AN;
            $thongtinbenhan->DOI_TUONG_MAC_BENH_ID = $request->DOI_TUONG_MAC_BENH_ID ;
            $thongtinbenhan->LI_DO_KHAM = $request->LI_DO_KHAM;
            $thongtinbenhan->NGAY_KET_THUC_KHAM = $request->NGAY_KET_THUC_KHAM;
            $thongtinbenhan->QUA_TRINH_BENH_LY = $request->QUA_TRINH_BENH_LY;
            $thongtinbenhan->TIEU_SU_BAN_THAN_ID = $request->TIEU_SU_BAN_THAN_ID;
            $thongtinbenhan->TRIEU_CHUNG = $request->TRIEU_CHUNG;
            $thongtinbenhan->CHIEU_CAO = $request->CHIEU_CAO;
            $thongtinbenhan->HUYET_AP_CAO = $request->HUYET_AP_CAO;
            $thongtinbenhan->HUYET_AP_THAP = $request->HUYET_AP_THAP;
            $thongtinbenhan->CAN_NANG = $request->CAN_NANG;
            $thongtinbenhan->MACH = $request->MACH;
            $thongtinbenhan->BMI = $request->BMI;
            $thongtinbenhan->NHIET_DO = $request->NHIET_DO;
            $thongtinbenhan->NHIP_THO = $request->NHIP_THO;
            $thongtinbenhan->DUONG_MAU = $request->DUONG_MAU;
            $thongtinbenhan->VONG_EO = $request->VONG_EO;
            $thongtinbenhan->NON_DO_CHAT_BEO = $request->NON_DO_CHAT_BEO;
            $thongtinbenhan->CHUAN_DOAN_KHAM_BENH = $request->CHUAN_DOAN_KHAM_BENH;
            $thongtinbenhan->HUONG_GIAI_QUYET = $request->HUONG_GIAI_QUYET;
            $thongtinbenhan->MA_PHIEU_CLS = $request->MA_PHIEU_CLS;
            $thongtinbenhan->MA_TOA_THUOC = $request->MA_TOA_THUOC;
            $thongtinbenhan->NGAY_BAT_DAU_DEU_TRI = $request->NGAY_BAT_DAU_DEU_TRI;
            $thongtinbenhan->NGAY_KET_THUC_DEU_TRI = $request->NGAY_KET_THUC_DEU_TRI;
            $thongtinbenhan->LI_DO_DEU_TRI = $request->LI_DO_DEU_TRI;
            $thongtinbenhan->LI_DO_KET_THUC_DEU_TRI = $request->LI_DO_KET_THUC_DEU_TRI;
            $thongtinbenhan->CHUAN_DOAN_KET_THUC_DEU_TRI = $request->CHUAN_DOAN_KET_THUC_DEU_TRI;
            $thongtinbenhan->KET_QUA_DEU_TRI = $request->KET_QUA_DEU_TRI;
            $thongtinbenhan->TINH_TRANG_RA_VIEN = $request->TINH_TRANG_RA_VIEN;
            $thongtinbenhan->save();
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
     * @param  \App\Models\thongtinbenhan  $thongtinbenhan
     * @return \Illuminate\Http\Response
     */
    public function destroy($MA_BENH_AN)
    {
        $thongtinbenhan = thongtinbenhan::find($MA_BENH_AN);
        if ($thongtinbenhan->delete()) {

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
    public function doituong($ID)
    {
        $doituongmacbenh = doituongmacbenh::where('MA_DOI_TUONG', $ID)->get();
        return view('admin.benhkhonglaysoyte.doituong', compact('doituongmacbenh'));
    }
    public function data(){
        $thongtinbenhan=thongtinbenhan::all();
        return view('admin.benhkhonglaysoyte.thongtinbenhandata',compact('thongtinbenhan'));
    }
}

