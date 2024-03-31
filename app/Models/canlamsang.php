<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class canlamsang extends Model
{
    use HasFactory;
    protected $table='chidinhcanlamsang';
    public $timestamps=false;
    protected $primaryKey='MA_PHIEU_CLS';
    public function cskcb()
    {
        return $this->hasOne(cskcb::class, 'MCSKCB', 'MCSKCB_ID');
    }
    public function bacsi()
    {
        return $this->hasOne(bacsi::class, 'MABS', 'TEN_BS_CHI_DINH');
    }
    public function thongtinbenhan()
    {
        return $this->hasOne(thongtinbenhan::class, 'MA_PHIEU_CLS', 'MA_PHIEU_CLS');
    }

}
