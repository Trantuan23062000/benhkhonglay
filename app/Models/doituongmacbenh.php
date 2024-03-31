<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class doituongmacbenh extends Model
{
    use HasFactory;
    protected $table = 'doituongmacbenh';
    public $timestamps=false;
    protected $primaryKey='ID';
    protected $fillable = ['ID','MA_DINH_DANH_v20','MA_HO_SO','HO_TEN','GIOI_TINH','NGAY_SINH','SO_DIEN_THOAI','MA_NGHE_NGHIEP_ID','NOI_LAM_VIEC','MA_DAN_TOC','SO_CMND','MA_DOI_TUONG','SO_BHYT','HSD_BHYT','MA_TINH_HO_KHAU','MA_HUYEN_HO_KHAU','MA_XA_HO_KHAU','HO_KHAU_DIA_CHI','MA_TINH_TAM_TRU','MA_HUYEN_TAM_TRU','MA_XA_TAM_TRU','TAM_TRU_DIA_CHI','MCSKCB','HO_TEN_NGUOI_THAN','NGAY_SINH_NGUOI_THAN','DIA_CHI','SDT_NGUOI_THAN','NGHE_NGHIEP_NGUOI_THAN','NOI_LAM_VIEC_NT','BENH_KLN_DANG_MAC','BENH_KHAC','CHUAN_DOAN_NAM','CHUAN_DOAN_TAI_CO_SO'];
    public function tinh()
    {
        return $this->hasOne(tinh::class, 'MA_TINH', 'MA_TINH_TAM_TRU','MA_TINH_HO_KHAU');
    }
    public function huyen()
    {
        return $this->hasOne(huyen::class, 'MA_HUYEN', 'MA_HUYEN_HO_KHAU','MA_HUYEN_TAM_TRU');
    }
    public function xa()
    {
        return $this->hasOne(xa::class, 'MA_XA', 'MA_XA_HO_KHAU','MA_XA_TAM_TRU');
    }
    public function doituong()
    {
        return $this->hasOne(doituong::class, 'ID', 'MA_DOI_TUONG');
    }
    public function nghenghiep()
    {
        return $this->hasOne(nghenghiep::class, 'MA_NGHE_NGHIEP', 'MA_NGHE_NGHIEP_ID','NGHE_NGHIEP_NGUOI_THAN');
    }
    public function dantoc()
    {
        return $this->hasOne(dantoc::class, 'MA_DAN_TOC', 'MA_DAN_TOC');
    }
    public function quyen()
    {
        return $this->hasOne(quyen::class, 'ID', 'QUYEN_ID');
    }
    public function cskcb()
    {
        return $this->hasOne(cskcb::class, 'MCSKCB', 'MCSKCB');
    }
    public function donthuoc()
    {
        return $this->hasOne(donthuoc::class, 'ID', 'MA_LAN_KHAM');
    }
    
}
