<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bacsi extends Model
{
    use HasFactory;
    protected $table='bacsi';
    public $timestamps=false;
    protected $primaryKey='MABS';
    protected $fillable = ['MABS','TEN_BS','CHUC_DANH','TEN_KHOA'];
    public function canlamsang(){
        return $this->hasMany(canlamsang::class,'TEN_BS_CHI_DINH','MABS');
    }
}

