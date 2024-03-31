<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donthuoc extends Model
{
    use HasFactory;
    protected $table='thongtindonthuoc';
    public $timestamps=false;
    protected $primaryKey='MA_TOA_THUOC';
    protected $fillable = ['MA_TOA_THUOC','TOA_KE_TU','TOA_KE_DEN','NGAY_KE','GHI_CHI1','MA_THUOC','MA_NHOM','TEN_THUOC','DON_VI_TINH','HAM_LUONG','DUONG_DUNG','LIEU_DUNG','SO_DANG_KI','TT_THAU','PHAM_VI','TYLE_TT','SO_LUONG','DON_GIA','THANH_TIEN','MUC_HUONG','QUY_CACH_DONG_GOI','HOAT_CHAT','SO_LO','BIET_DUOC','HAN_DUNG','GHI_CHU','MA_LAN_KHAM','MA_CSKCB'];
    public function cskcb()
    {
        return $this->hasOne(cskcb::class, 'MA_CSKCB', 'MCSKCB');
    }
    public function doituongmacbenh()
    {
        return $this->hasOne(doituongmacbenh::class, 'ID', 'MA_LAN_KHAM');
    }
    public function thuoc()
    {
        return $this->hasOne(doituongmacbenh::class, 'MA_TOA_THUOC', 'MA_THUOC');
    }
}
