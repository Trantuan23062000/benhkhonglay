<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitietphieucanlamsang extends Model
{
    use HasFactory;
    protected $table='chitietphieucanlamsang';
    public $timestamps=false;
    protected $primaryKey='MA_PHIEU_CLS';
    protected $fillable = ['MA_PHIEU_CLS','MA_DVKT','SO_LUONG','DON_GIA','THANH_TIEN','KET_QUA'];
    public function dvkt()
    {
        return $this->hasOne(dvkt::class, 'MA_PHIEU_CLS','MA_DVKT');
    }
    

}
