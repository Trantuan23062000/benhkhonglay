<?php

use App\Http\Controllers\soyte_controller;
use Illuminate\Support\Facades\Route;
Route::get('/', 'Home_Controller@index')->name('Home.index');

Route::get('Admin/login', 'Admin_controller@login')->name('Admin.login');
Route::post('Admin/Postlogin','Admin_controller@postlogin')->name('Admin.postlogin');
Route::get('/Admin/Logout', 'Admin_Controller@logout')->name('Admin.Logout');

Route::prefix('Admin')->middleware('admin_middleware')->group(function () {
    Route::get('/', 'Admin_controller@index')->name('Admin.index');
    Route::get('xa/loaddata', 'xa_controller@loaddata')->name('xa.loaddata');
    Route::get('thuoc/data', 'thuoc_controller@data')->name('thuoc.data');
    Route::get('huyen/loaddata', 'huyen_controller@loaddata')->name('huyen.loaddata');
    Route::get('soyte/loaddata', 'soyte_controller@loaddata')->name('soyte.loaddata');
    Route::get('ttyte/loaddata', 'ttyte_controller@loaddata')->name('ttyte.loaddata');
    Route::get('tinh/loaddata', 'tinh_controller@loaddata')->name('tinh.loaddata');
    Route::get('canlamsang/loaddata', 'canlamsang_controller@loaddata')->name('canlamsang.loaddata');
    Route::get('tramyte/loaddata', 'tramyte_controller@loaddata')->name('tramyte.loaddata');
    Route::get('cskcb/loaddata', 'cskcb_controller@loaddata')->name('cskcb.loaddata');
    Route::get('nghenghiep/loaddata', 'nghenghiep_controller@loaddata')->name('nghenghiep.loaddata');
    Route::get('dvkt/loaddata', 'dvkt_controller@loaddata')->name('dvkt.loaddata');
    Route::get('chitietphieucanlamsang/loaddata', 'chitietphieucanlamsang_controller@loaddata')->name('chitietphieucanlamsang.loaddata');
    Route::get('dantoc/loaddata', 'dantoc_controller@loaddata')->name('dantoc.loaddata');
    Route::get('doituongmacbenh/loaddata', 'doituongmacbenh_controller@loaddata')->name('doituongmacbenh.loaddata');
    Route::get('soyte/edit/{ID}', 'soyte_controller@edit')->name('soyte.edit');
    Route::get('ttyte/edit/{ID}', 'ttyte_controller@edit')->name('ttyte.edit');
    Route::get('tramyte/edit/{ID}', 'tramyte_controller@edit')->name('tramyte.edit');
    Route::get('cskcb/edit/{ID}', 'cskcb_controller@edit')->name('cskcb.edit');
    Route::get('dantoc/edit/{MA_DAN_TOC}', 'dantoc_controller@edit')->name('dantoc.edit');
    Route::get('nghenghiep/edit/{MA_NGHE_NGHIEP}', 'nghenghiep_controller@edit')->name('nghenghiep.edit');
    Route::get('benhkhonglayttyte/doituongmacbenh/edit/{ID}', 'doituongmacbenh_controller@edit')->name('doituongmacbenh.edit');
    Route::get('canlamsang/edit/{ID}', 'canlamsang_controller@edit')->name('canlamsang.edit');
    Route::get('cskcb/view/{MCSKCB}', 'cskcb_controller@view')->name('cskcb.view');
    Route::get('doituongmacbenh/tim/huyen/{id}', 'doituongmacbenh_controller@timhuyen')->name('tim.huyen');
    Route::get('doituongmacbenh/tim/xa/{id}', 'doituongmacbenh_controller@timxa')->name('tim.xa');
    Route::get('cskcb/tim/ttyte/{id}', 'cskcb_controller@timttyte')->name('tim.timttyte');
    Route::get('cskcb/tim/tramyte/{id}', 'cskcb_controller@timtramyte')->name('tim.timtramyte');
    Route::get('doituongmacbenh/tim/loadhuyen/{id}', 'doituongmacbenh_controller@loadhuyen')->name('loadhuyen');
    Route::get('doituongmacbenh/tim/loadxa/{id}', 'doituongmacbenh_controller@loadxa')->name('loadxa');
    Route::post('soyte/nhap', 'soyte_controller@postNhap')->name('soyte.nhap');
    Route::post('ttyte/nhap', 'ttyte_controller@postNhap')->name('ttyte.nhap');
    Route::post('tramyte/nhap', 'tramyte_controller@postNhap')->name('tramyte.nhap');
    Route::get('soyte/ttyte/{id}', 'Admin_controller@soyte_ttyte_index')->name('soyte.ttyte');
    Route::get('ttyte/tramyte/{id}', 'Admin_controller@ttyte_tramyte_index')->name('soyte.tramyte');
    Route::get('tt/tramyte/{id}', 'Admin_controller@ttyte_tram_y_te')->name('soyte.ttyte_tram_y_te');
    Route::get('benhkhonglaysoyte', 'Admin_controller@benhkhonglaysoyte')->name('benhkhonglaysoyte');
    Route::get('benhkhonglayttyte', 'Admin_controller@benhkhonglayttyte')->name('benhkhonglayttyte');
    Route::get('soyte/trungtamyte/tramyte/{ttyte}/{tramyte}', 'Admin_controller@soyte_ttyte_tramyte_index')->name('soyte.soyte_ttyte_tramyte_index');
    Route::get('bacsi/data', 'bacsi_controller@data')->name('bacsi.data');
    Route::get('doituongmacbenh/data', 'doituongmacbenh_controller@data')->name('doituongmacbenh.data');
    Route::get('canlamsang/data', 'canlamsang_controller@data')->name('canlamsang.data');
    Route::get('thongtinbenhan/data', 'thongtinbenhan_controller@data')->name('thongtinbenhan.data');
    Route::get('tieusubenhtat/data', 'tieusubenhtat_controller@data')->name('tieusubenhtat.data');
    Route::get('tintuc/data', 'tintuc_controller@data')->name('tintuc.data');
    Route::get('donthuoc/data', 'donthuoc_controller@data')->name('donthuoc.data');
    Route::get('tiensubenhan/data', 'tiensubenhan_controller@data')->name('tiensubenhan.data');
    Route::get('doituongmacbenh/view/{ID}', 'doituongmacbenh_controller@view')->name('doituongmacbenh.view');
    Route::get('canlamsang/view/{MA_PHIEU_CLS}', 'canlamsang_controller@view')->name('canlamsang.view');
    Route::get('thuoc/tim/thuoc/{id}', 'donthuoc_controller@lieudung')->name('tim.lieudung');
    Route::get('thuoc/tim/dongia/{id}', 'donthuoc_controller@thuoc')->name('tim.thuoc');
    Route::get('thuoc/chonthuoc/{soluong}', 'donthuoc_controller@chonthuoc')->name('chonthuoc');
    Route::get('thongtinbenhan/timdoituong/{id}', 'thongtinbenhan_controller@doituong')->name('doituong');


    Route::resources([
        'dantoc' => 'dantoc_controller',
        'soyte' => 'soyte_controller',
        'ttyte' => 'ttyte_controller',
        'tinh' => 'tinh_controller',
        'tramyte' => 'tramyte_controller',
        'huyen' => 'huyen_controller',
        'xa' => 'xa_controller',
        'cskcb' => 'cskcb_controller',
        'nghenghiep' => 'nghenghiep_controller',
        'doituongmacbenh' => 'doituongmacbenh_controller',
        'dvkt' => 'dvkt_controller',
        'chitietphieucanlamsang'=>'chitietphieucanlamsang_controller',
        'canlamsang'=>'canlamsang_controller',
        'bacsi'=>'bacsi_controller',
        'tiensubenhan'=>'tiensubenhan_controller',
        'donthuoc'=>'donthuoc_controller',
        'thuoc'=>'thuoc_controller',
        'thongtinbenhan'=>'thongtinbenhan_controller',
        'tintuc'=>'tintuc_controller',
    ]);
});

