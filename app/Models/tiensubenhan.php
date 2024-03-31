<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiensubenhan extends Model
{
    use HasFactory;
    protected $table = 'tieusubenhtat';
    public $timestamps=false;
    protected $fillable = ['ID','HO_TEN','THOI_GIAN_GHI_NHAN','SO_NGOAI_TRU','MA_YT','TIEN_SU_BAN_THAN','NAM_CHUAN_DOAN','YEU_TO_NGUY_CO','NAM_CHUAN_DOAN_NGUY_CO','TIEN_SU_GIA_DINH'];
    protected $primaryKey='ID';
    public function thongtinbenhan()
    {
        return $this->hasMany(thongtinbenhan::class, 'MA_BENH_AN', 'ID');
    }
}
