<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thongtinbenhan extends Model
{
    use HasFactory;
    protected $table='chitietlankham';
    public $timestamps=false;
    protected $primaryKey='MA_BENH_AN';
    public function tiensubenhtat()
    {
        return $this->hasOne(tiensubenhtat::class, 'MA_BENH_AN', 'ID');
    }
    public function canlamsang()
    {
        return $this->hasMany(canlamsang::class, 'MA_PHIEU_CLS', 'MA_PHIEU_CLS');
    }
    public function donthuoc()
    {
        return $this->hasOne(donthuoc::class, 'MA_TOA_THUOC', 'MA_BENH_AN');
    }
    public function doituongmacbenh()
    {
        return $this->hasOne(doituongmacbenh::class, 'DOI_TUONG_MAC_BENH_ID', 'ID');
    }

    
}
