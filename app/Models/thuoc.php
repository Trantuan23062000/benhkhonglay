<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thuoc extends Model
{
    use HasFactory;
    protected $table = 'thuoc';
    public $timestamps=false;
    protected $fillable = ['MA_THUOC','MA_NHOM','TEN_THUOC','DON_VI_TINH','HAM_LUONG','DUONG_DUNG','LIEU_DUNG','SO_DANG_KY','TT_THAU','PHAM_VI','SO_LUONG','DON_GIA','MUC_HUONG','THANH_TIEN'];
    protected $primaryKey='MA_THUOC';
    public function donthuoc()
    {
        return $this->hasMany(donthuoc::class, 'MA_THUOC', 'MA_TOA_THUOC');
    }
}
