<?php

namespace App\Http\Controllers;

use App\Models\doituongmacbenh;
use App\Models\huyen;
use App\Models\xa;
use App\Models\tinh;
use App\Models\dantoc;
use App\Models\nghenghiep;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;

class doituongmacbenh_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $doituongmacbenh = doituongmacbenh::all();
        // $dantoc = dantoc::all();
        // $tinh = tinh::all();
        // $huyen = huyen::all();
        // $xa = xa::all();
        // $nghenghiep = nghenghiep::all();
        // return view('admin.benhkhonglaysoyte.index', compact('doituongmacbenh', 'tinh', 'xa', 'huyen', 'dantoc', 'nghenghiep'));
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
    public function data()
    {
        $doituongmacbenh = doituongmacbenh::all();
        return view('admin.benhkhonglaysoyte.thongtinbenhnhandata', compact('doituongmacbenh'));
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
            'MA_DINH_DANH_V20' => 'required|numeric|unique:doituongmacbenh',
            'MA_DOI_TUONG' => 'required',
            'HO_TEN' => 'required',
            'SO_CMND' => 'required|numeric',
            'SO_DIEN_THOAI' => 'required|numeric',
            'MA_DAN_TOC' => 'required',
            'NGAY_SINH' => 'required',
            'GIOI_TINH' => 'required',
            'MA_NGHE_NGHIEP_ID' => 'required',
            'MA_TINH_HO_KHAU' => 'required',
            'MA_HUYEN_HO_KHAU' => 'required',
            'MA_XA_HO_KHAU' => 'required',
            'HO_KHAU_DIA_CHI' => 'required',
            'MA_TINH_TAM_TRU' => 'required',
            'MA_HUYEN_TAM_TRU' => 'required',
            'MA_XA_TAM_TRU' => 'required',
            'TAM_TRU_DIA_CHI' => 'required',
            'NOI_LAM_VIEC' => 'required',
            'MA_HO_SO' => 'required|numeric|unique:doituongmacbenh',
            'SO_BHYT' => 'required|numeric|unique:doituongmacbenh',
            'HSD_BHYT' => 'required',
            'HO_TEN_NGUOI_THAN' => 'required',
            'NGAY_SINH_NGUOI_THAN' => 'required',
            'SDT_NGUOI_THAN' => 'required|numeric',
            'NGHE_NGHIEP_NGUOI_THAN' => 'required',
            'NOI_LAM_VIEC_NT' => 'required',



        ], [
            'MA_DINH_DANH_V20.required' => 'Mã định danh không được bỏ trống !',
            'MA_DINH_DANH_V20.unique' => 'Đối tượng mắc bệnh không được bỏ trống !',
            'MA_DINH_DANH_V20.numeric' => 'mã định danh không được nhập chữ !',
            'MA_DOI_TUONG.required' => 'Mã đối tượng không được bỏ trống !',
            'HO_TEN.required' => 'Họ và tên không được bỏ trống !',
            'SO_CMND.required' => 'Số chứng minh nhân dân không được bỏ trống !',
            'SO_DIEN_THOAI.required' => 'Số điện thoại không được bỏ trống !',
            'MA_NGHE_NGHIEP_ID.required' => 'Mã nghề nghiệp không được bỏ trống !',
            'MA_DAN_TOC.required' => 'Mã dân tộc không được bỏ trống !',
            'SO_CMND.required' => 'Số chứng minh nhân dân không được bỏ trống !',
            'NGAY_SINH.required' => 'Ngày sinh không được bỏ trống !',
            'GIOI_TINH.required' => 'Giới tính không được bỏ trống !',
            'MA_TINH_TAM_TRU.required' => 'Mã tĩnh tạm trú không được bỏ trống !',
            'MA_HUYEN_TAM_TRU.required' => 'Mã huyện tạm trú không được bỏ trống !',
            'MA_XA_TAM_TRU.required' => 'Mã xã tạm trú không được bỏ trống !',
            'HO_KHAU_DIA_CHI.required' => 'Địa chỉ tạm trú không được bỏ trống !',
            'MA_TINH_HO_KHAU.required' => 'Mã tĩnh hộ khẩu không được bỏ trống !',
            'MA_HUYEN_HO_KHAU.required' => 'Mã huyện hộ khẩu không được bỏ trống !',
            'MA_XA_HO_KHAU.required' => 'Mã xã hộ khẩu không được bỏ trống !',
            'TAM_TRU_DIA_CHI.required' => 'Tạm trú địa chỉ không được bỏ trống !',
            'NOI_LAM_VIEC.required' => 'Nơi làm việc không được bỏ trống !',
            'MA_HO_SO.required' => 'Mã hồ sơ không được bỏ trống !',
            'MA_HO_SO.numeric' => 'Mã hồ sơ không được nhập chữ !',
            'SO_BHYT.required' => 'Số bảo hiểm y tế không được bỏ trống !',
            'SO_BHYT.numeric' => 'Số bảo hiểm y tế không được nhập chữ !',
            'HSD_BHYT.required' => 'Hạn sử dụng bảo hiểm y tế không được bỏ trống !',
            'HO_TEN_NGUOI_THAN.required' => 'Họ tên người thân không được bỏ trống !',
            'NGAY_SINH_NGUOI_THAN.required' => 'Ngày sinh người thân không được bỏ trống !',
            'SDT_NGUOI_THAN.required' => 'Số điện thoại người thân không được bỏ trống !',
            'SDT_NGUOI_THAN.numeric' => 'Số điện thoại người thân không được nhập chữ !',
            'NGHE_NGHIEP_NGUOI_THAN.required' => 'Nghề nghiệp người thân không được bỏ trống !',
            'NOI_LAM_VIEC_NT.required' => 'Nơi làm việc người thân không được bỏ trống !',
            'SO_BHYT.unique' => 'Số bảo hiểm y tế đã tồn tại hoặc đã sử dụng !',
            'MA_HO_SO.unique' => 'Mã hồ sơ đã tồn tại trên hệ thống !',
            'SO_DIEN_THOAI.numeric' => 'Số điện thoại không được nhập chữ !',
            'SO_CMND.numeric' => 'Số chứng minh nhân dân không được nhập chữ !',


        ]);
        if ($val->passes()) {
            $doituongmacbenh = new doituongmacbenh();
            $doituongmacbenh->MA_DINH_DANH_V20 = $request->MA_DINH_DANH_V20;
            $doituongmacbenh->MA_DOI_TUONG = $request->MA_DOI_TUONG;
            $doituongmacbenh->HO_TEN = $request->HO_TEN;
            $doituongmacbenh->MCSKCB = Auth::user()->MCSKCB;
            $doituongmacbenh->GIOI_TINH = $request->GIOI_TINH;
            $doituongmacbenh->NGAY_SINH = $request->NGAY_SINH;
            $doituongmacbenh->SO_DIEN_THOAI = $request->SO_DIEN_THOAI;
            $doituongmacbenh->MA_NGHE_NGHIEP_ID = $request->MA_NGHE_NGHIEP_ID;
            $doituongmacbenh->MA_DAN_TOC = $request->MA_DAN_TOC;
            $doituongmacbenh->SO_CMND = $request->SO_CMND;
            $doituongmacbenh->MA_TINH_HO_KHAU = $request->MA_TINH_HO_KHAU;
            $doituongmacbenh->MA_HUYEN_HO_KHAU = $request->MA_HUYEN_HO_KHAU;
            $doituongmacbenh->MA_XA_HO_KHAU = $request->MA_XA_HO_KHAU;
            $doituongmacbenh->HO_KHAU_DIA_CHI = $request->HO_KHAU_DIA_CHI;
            $doituongmacbenh->MA_TINH_TAM_TRU = $request->MA_TINH_TAM_TRU;
            $doituongmacbenh->MA_HUYEN_TAM_TRU = $request->MA_HUYEN_TAM_TRU;
            $doituongmacbenh->MA_XA_TAM_TRU = $request->MA_XA_TAM_TRU;
            $doituongmacbenh->TAM_TRU_DIA_CHI = $request->TAM_TRU_DIA_CHI;
            $doituongmacbenh->NOI_LAM_VIEC = $request->NOI_LAM_VIEC;
            $doituongmacbenh->MA_HO_SO = $request->MA_HO_SO;
            $doituongmacbenh->SO_BHYT = $request->SO_BHYT;
            $doituongmacbenh->HSD_BHYT = $request->HSD_BHYT;
            $doituongmacbenh->DIA_CHI = $request->DIA_CHI;
            $doituongmacbenh->HO_TEN_NGUOI_THAN = $request->HO_TEN_NGUOI_THAN;
            $doituongmacbenh->NGAY_SINH_NGUOI_THAN = $request->NGAY_SINH_NGUOI_THAN;
            $doituongmacbenh->SDT_NGUOI_THAN = $request->SDT_NGUOI_THAN;
            $doituongmacbenh->NGHE_NGHIEP_NGUOI_THAN = $request->NGHE_NGHIEP_NGUOI_THAN;
            $doituongmacbenh->NOI_LAM_VIEC_NT = $request->NOI_LAM_VIEC_NT;
            $doituongmacbenh->BENH_KLN_DANG_MAC = json_encode($request->BENH_KLN_DANG_MAC);
            $doituongmacbenh->CHUAN_DOAN_NAM = $request->CHUAN_DOAN_NAM;
            $doituongmacbenh->CHUAN_DOAN_TAI_CO_SO = $request->CHUAN_DOAN_TAI_CO_SO;
            $doituongmacbenh->BENH_KHAC=$request->BENH_KHAC;
            $doituongmacbenh->save();
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
     * @param  \App\Models\doituongmacbenh  $doituongmacbenh
     * @return \Illuminate\Http\Response
     */
    public function show(doituongmacbenh $doituongmacbenh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\doituongmacbenh  $doituongmacbenh
     * @return \Illuminate\Http\Response
     */
    public function edit($ID)
    {
        $doituongmacbenh = doituongmacbenh::find($ID);
        $nghenghiep = nghenghiep::all();
        $dantoc = dantoc::all();
        $tinh = tinh::all();
        $huyen = huyen::where('MA_TINH', $doituongmacbenh->MA_TINH_HO_KHAU)->get();
        $xa = xa::where('MA_HUYEN', $doituongmacbenh->MA_HUYEN_HO_KHAU)->get();
        $huyen1 = huyen::where('MA_TINH', $doituongmacbenh->MA_TINH_TAM_TRU)->get();
        $xa1 = xa::where('MA_HUYEN', $doituongmacbenh->MA_HUYEN_TAM_TRU)->get();
        return view('admin.benhkhonglaysoyte.hosobenhanedit', compact('doituongmacbenh', 'nghenghiep', 'dantoc', 'tinh', 'huyen', 'xa', 'huyen1', 'xa1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\doituongmacbenh  $doituongmacbenh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ID)
    {

        $val = Validator::make($request->all(), [
            'MA_DINH_DANH_V20' => 'required',
            'MA_DOI_TUONG' => 'required',
            'HO_TEN' => 'required',
            'SO_CMND' => 'required',
            'SO_DIEN_THOAI' => 'required',
            'MA_DAN_TOC' => 'required',
            'NGAY_SINH' => 'required',
            'GIOI_TINH' => 'required',
            'MA_NGHE_NGHIEP_ID' => 'required',
            'MA_TINH_HO_KHAU' => 'required',
            'MA_HUYEN_HO_KHAU' => 'required',
            'MA_XA_HO_KHAU' => 'required',
            'HO_KHAU_DIA_CHI' => 'required',
            'MA_TINH_TAM_TRU' => 'required',
            'MA_HUYEN_TAM_TRU' => 'required',
            'MA_XA_TAM_TRU' => 'required',
            'TAM_TRU_DIA_CHI' => 'required',
            'MA_HO_SO' => 'required',
            'SO_BHYT' => 'required|numeric',
            'HSD_BHYT' => 'required',
            'DIA_CHI' => 'required',
            'HO_TEN_NGUOI_THAN' => 'required',
            'NGAY_SINH_NGUOI_THAN' => 'required',
            'SDT_NGUOI_THAN' => 'required|numeric',
            'NGHE_NGHIEP_NGUOI_THAN' => 'required',
            'NOI_LAM_VIEC_NT' => 'required',



        ], [
            'MA_DINH_DANH_V20.required' => 'Mã định danh không được bỏ trống !',
            'MA_DOI_TUONG.required' => 'Mã đối tượng không được bỏ trống !',
            'HO_TEN.required' => 'Họ và tên không được bỏ trống !',
            'SO_CMND.required' => 'Số chứng minh nhân dân không được bỏ trống !',
            'SO_DIEN_THOAI.required' => 'Số điện thoại không được bỏ trống !',
            'MA_NGHE_NGHIEP_ID.required' => 'Mã nghề nghiệp không được bỏ trống !',
            'MA_DAN_TOC.required' => 'Mã dân tộc không được bỏ trống !',
            'SO_CMND.required' => 'Số chứng minh nhân dân không được bỏ trống !',
            'NGAY_SINH.required' => 'Ngày sinh không được bỏ trống !',
            'GIOI_TINH.required' => 'Giới tính không được bỏ trống !',
            'MA_TINH_TAM_TRU.required' => 'Mã tĩnh tạm trú không được bỏ trống !',
            'MA_HUYEN_TAM_TRU.required' => 'Mã huyện tạm trú không được bỏ trống !',
            'MA_XA_TAM_TRU.required' => 'Mã xã tạm trú không được bỏ trống !',
            'HO_KHAU_DIA_CHI.required' => 'Địa chỉ tạm trú không được bỏ trống !',
            'MA_TINH_HO_KHAU.required' => 'Mã tĩnh hộ khẩu không được bỏ trống !',
            'MA_HUYEN_HO_KHAU.required' => 'Mã huyện hộ khẩu không được bỏ trống !',
            'MA_XA_HO_KHAU.required' => 'Mã xã hộ khẩu không được bỏ trống !',
            'TAM_TRU_DIA_CHI.required' => 'Tạm trú địa chỉ không được bỏ trống !',
            'MA_HO_SO.required' => 'Mã hồ sơ không được bỏ trống !',
            'SO_BHYT.required' => 'Số bảo hiểm y tế không được bỏ trống !',
            'SO_BHYT.numeric' => 'Số bảo hiểm y tế không được nhập chữ !',
            'HSD_BHYT.required' => 'Hạn sử dụng bảo hiểm y tế không được bỏ trống !',
            'DIA_CHI.required' => 'Địa chỉ không được bỏ trống !',
            'HO_TEN_NGUOI_THAN.required' => 'Họ tên người thân không được bỏ trống !',
            'NGAY_SINH_NGUOI_THAN.required' => 'Ngày sinh người thân không được bỏ trống !',
            'SDT_NGUOI_THAN.required' => 'Số điện thoại người thân không được bỏ trống !',
            'SDT_NGUOI_THAN.numeric' => 'Số điện thoại người thân không được nhập chữ !',
            'NGHE_NGHIEP_NGUOI_THAN.required' => 'Nghề nghiệp người thân không được bỏ trống !',
            'NOI_LAM_VIEC_NT.required' => 'Nơi làm việc người thân không được bỏ trống !',
        ]);

        if ($val->passes()) {
            $doituongmacbenh = doituongmacbenh::find($ID);
            $doituongmacbenh->MA_DINH_DANH_V20 = $request->MA_DINH_DANH_V20;
            $doituongmacbenh->MCSKCB = Auth::user()->MCSKCB;
            $doituongmacbenh->MA_DOI_TUONG = $request->MA_DOI_TUONG;
            $doituongmacbenh->HO_TEN = $request->HO_TEN;
            $doituongmacbenh->GIOI_TINH = $request->GIOI_TINH;
            $doituongmacbenh->NGAY_SINH = $request->NGAY_SINH;
            $doituongmacbenh->SO_DIEN_THOAI = $request->SO_DIEN_THOAI;
            $doituongmacbenh->MA_NGHE_NGHIEP_ID = $request->MA_NGHE_NGHIEP_ID;
            $doituongmacbenh->MA_DAN_TOC = $request->MA_DAN_TOC;
            $doituongmacbenh->SO_CMND = $request->SO_CMND;
            $doituongmacbenh->MA_TINH_HO_KHAU = $request->MA_TINH_HO_KHAU;
            $doituongmacbenh->MA_HUYEN_HO_KHAU = $request->MA_HUYEN_HO_KHAU;
            $doituongmacbenh->MA_XA_HO_KHAU = $request->MA_XA_HO_KHAU;
            $doituongmacbenh->HO_KHAU_DIA_CHI = $request->HO_KHAU_DIA_CHI;
            $doituongmacbenh->MA_TINH_TAM_TRU = $request->MA_TINH_TAM_TRU;
            $doituongmacbenh->MA_HUYEN_TAM_TRU = $request->MA_HUYEN_TAM_TRU;
            $doituongmacbenh->MA_XA_TAM_TRU = $request->MA_XA_TAM_TRU;
            $doituongmacbenh->TAM_TRU_DIA_CHI = $request->TAM_TRU_DIA_CHI;
            $doituongmacbenh->MA_HO_SO = $request->MA_HO_SO;
            $doituongmacbenh->SO_BHYT = $request->SO_BHYT;
            $doituongmacbenh->HSD_BHYT = $request->HSD_BHYT;
            $doituongmacbenh->DIA_CHI = $request->DIA_CHI;
            $doituongmacbenh->HO_TEN_NGUOI_THAN = $request->HO_TEN_NGUOI_THAN;
            $doituongmacbenh->NGAY_SINH_NGUOI_THAN = $request->NGAY_SINH_NGUOI_THAN;
            $doituongmacbenh->SDT_NGUOI_THAN = $request->SDT_NGUOI_THAN;
            $doituongmacbenh->NGHE_NGHIEP_NGUOI_THAN = $request->NGHE_NGHIEP_NGUOI_THAN;
            $doituongmacbenh->NOI_LAM_VIEC_NT = $request->NOI_LAM_VIEC_NT;
            $doituongmacbenh->BENH_KLN_DANG_MAC = $request->BENH_KLN_DANG_MAC;
            $doituongmacbenh->CHUAN_DOAN_NAM = $request->CHUAN_DOAN_NAM;
            $doituongmacbenh->CHUAN_DOAN_TAI_CO_SO = $request->CHUAN_DOAN_TAI_CO_SO;
            $doituongmacbenh->BENH_KHAC=$request->BENH_KHAC;
            if ($doituongmacbenh->save()) {
                return response()->json(
                    [
                        'code' => 200,
                        'mess' => 'Update đữ liệu thành công',
                    ]
                );
            }
        }
        return response()->json(['error' => $val->errors()->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\doituongmacbenh  $doituongmacbenh
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID)
    {
        $doituongmacbenh = doituongmacbenh::find($ID);
        if ($doituongmacbenh->delete()) {

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
    public function timhuyen($ID)
    {
        $huyen = huyen::where('MA_TINH', $ID)->get();
        return view('admin.benhkhonglaysoyte.huyen', compact('huyen'));
    }
    public function timxa($ID)
    {
        $xa = xa::where('MA_HUYEN', $ID)->get();
        return view('admin.benhkhonglaysoyte.xa', compact('xa'));
    }
    public function loaddata()
    {
        $doituongmacbenh = doituongmacbenh::all();
        return response()->json($doituongmacbenh);
    }
    public function view($ID)
    {
        $doituongmacbenh = doituongmacbenh::find($ID);
        $nghenghiep = nghenghiep::all();
        $dantoc = dantoc::all();
        $tinh = tinh::all();
        $huyen = huyen::where('MA_TINH', $doituongmacbenh->MA_TINH_HO_KHAU)->get();
        $xa = xa::where('MA_HUYEN', $doituongmacbenh->MA_HUYEN_HO_KHAU)->get();
        $huyen1 = huyen::where('MA_TINH', $doituongmacbenh->MA_TINH_TAM_TRU)->get();
        $xa1 = xa::where('MA_HUYEN', $doituongmacbenh->MA_HUYEN_TAM_TRU)->get();
        return view('admin.benhkhonglaysoyte.hosobenhnhan', compact('doituongmacbenh', 'nghenghiep', 'dantoc', 'tinh', 'huyen', 'xa', 'huyen1', 'xa1'));
    }
}
