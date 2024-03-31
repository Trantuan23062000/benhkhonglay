<?php

namespace App\Http\Controllers;

use App\Models\soyte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\dantoc;
use App\Models\dvkt;
use App\Models\ttyte;
use App\Models\thuoc;
use App\Models\tramyte;
use App\Models\nghenghiep;
use App\Models\tinh;
use App\Models\huyen;
use App\Models\xa;
use App\Models\canlamsang;
use App\Models\cskcb;
use App\Models\bacsi;
use App\Models\doituongmacbenh;
use App\Models\donthuoc;
use App\Models\tiensubenhan;


class Admin_controller extends Controller
{
    public function index()
    {
        if (Auth::user()->QUYEN_ID === 1) {
            $soyte = soyte::all();
            return view('admin.trangchu.admin', compact('soyte'));
        }
        if (Auth::user()->QUYEN_ID === 2) {
            $soyte=Auth::user()->soyte_id;
            $ttyte = ttyte::where('SO_Y_TE_ID',$soyte)->get();
            return view('admin.trangchu.soyte', compact('ttyte'));
        }
        if (Auth::user()->QUYEN_ID === 3) {
            $ttyte=Auth::user()->ttyte_id;
            $tramyte = tramyte::where('TRUNG_TAM_Y_TE_ID',$ttyte)->get();
            return view('admin.trangchu.trungtamyte', compact('tramyte'));
        }
        if (Auth::user()->QUYEN_ID === 4) {
            $tramyte = Auth::user();
            return view('admin.trangchu.tramyte', compact('tramyte'));
        }
        return view('layout.admin');
    }
    public function login()
    {
        return view('admin.login');
    }
    public function postlogin(Request $request)
    {


        $val = Validator::make($request->all(), [
            'TEN_DANG_NHAP' => 'required',
            'PASSWORD' => 'required|min:8',

        ], [
            'TEN_DANG_NHAP.required' => 'Tên đăng nhập không được bỏ trống !',
            'PASSWORD.required' => 'Mật khẩu không được bỏ trống !',
            'PASSWORD.min' => 'Mật khẩu tối đa 8 kí tự !',

        ]);
        if ($val->passes()) {
            if (Auth::attempt(['TEN_DANG_NHAP' => $request->TEN_DANG_NHAP, 'password' => $request->PASSWORD])) {

                return response()->json(
                    [
                        'code' => 200,
                        'mess' => 'Đăng nhập thành công liệu thành công',
                    ]
                );
            } else {
                return response()->json(
                    [
                        'code' => 400,
                        'error' => 'Tên tài khoản hoặc mật khẩu không đúng !',
                    ]
                );
            }
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('Admin/login');
    }
    public function soyte_ttyte_index($ID){
        if(Auth::user()->QUYEN_ID===2){
            $soyte=Auth::user()->soyte_id;
            $ttyte=ttyte::where('ID',$ID)->where('SO_Y_TE_ID',$soyte)->first();
            
            $tramyte=tramyte::where('TRUNG_TAM_Y_TE_ID',$ttyte->ID)->get();
            if($ttyte==null){
                return abort(404);
            }
            return view('admin.homesoyte.ttyte',compact('ttyte','tramyte'));
        }
        return abort(404);
    }
    public function soyte_ttyte_tramyte_index($ttyte,$tramyte){
      //dd($ttyte,$tramyte);
      
        if(Auth::user()->QUYEN_ID===2){
            $soyte=Auth::user()->soyte_id;
            $ttyte=ttyte::where('ID',$ttyte)->where('SO_Y_TE_ID',$soyte)->first();
            $tramyte=tramyte::where('ID',$tramyte)->where('TRUNG_TAM_Y_TE_ID',$ttyte->ID)->first();
            //dd($tramyte);
            if($tramyte==null){
                return abort(404);
            }
            return view('admin.homesoyte.tramyte',compact('tramyte','ttyte'));
        }
        return abort(404);
    }
    // public function ttyte_tram_y_te($id){
    //     if(Auth::user()->QUYEN_ID===3){
    //         $ttyte=Auth::user()->ttyte_id;
    //         $tramyte=tramyte::where('ID',$id)->where('TRUNG_TAM_Y_TE_ID',$ttyte)->get();
    //         if($tramyte==null){
    //             return abort(404);
    //         }
    //         return view('admin.homettyte.tramyte',compact('tramyte','ttyte'));
    //     }
    //     return abort(404);
    // }
    // public function tramyte_index($id){
    //     if(Auth::user()->QUYEN_ID===4){
    //         $tramyte=Auth::user()->tramyte_id;
    //         if($tramyte==null){
    //             return abort(404);
    //         }
    //         return view('admin.homettyte.tramyte',compact('tramyte','ttyte'));
    //     }
    //     return abort(404);
    // }
    public function benhkhonglaysoyte(){
        $dantoc=dantoc::all();
        $nghenghiep=nghenghiep::all();
        $tinh=tinh::all();
        $huyen=huyen::all();
        $xa=xa::all();
        $dvkt=dvkt::all();
        $canlamsang=canlamsang::all();
        $cskcb=cskcb::all();
        $bacsi=bacsi::all();
        $doituongmacbenh=doituongmacbenh::all();
        $thuoc=thuoc::all();
        $tiensubenhan=tiensubenhan::all();
        $donthuoc=donthuoc::all();
        return view('admin.benhkhonglaysoyte.index',compact('dantoc','nghenghiep','tinh','huyen','xa','dvkt','canlamsang','cskcb','bacsi','doituongmacbenh','thuoc','tiensubenhan','donthuoc'));
    }
    public function benhkhonglayttyte(){
        $dantoc=dantoc::all();
        $nghenghiep=nghenghiep::all();
        $tinh=tinh::all();
        $huyen=huyen::all();
        $xa=xa::all();
        $dvkt=dvkt::all();
        $canlamsang=canlamsang::all();
        $cskcb=cskcb::all();
        $doituongmacbenh=doituongmacbenh::all();
        return view('admin.benhkhonglayttyte.index',compact('dantoc','nghenghiep','tinh','huyen','xa','dvkt','canlamsang','cskcb','doituongmacbenh'));
    }

}
