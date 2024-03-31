<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cskcb extends Model
{
    use HasFactory;
    protected $table = 'cskcb';
    public $timestamps=false;
    protected $primaryKey='MCSKCB';
    public function soyte()
    {
        return $this->hasOne(soyte::class, 'ID', 'soyte_id');
    }
    public function ttyte()
    {
        return $this->hasOne(ttyte::class, 'ID', 'ttyte_id');
    }
    public function tramyte()
    {
        return $this->hasOne(tramyte::class, 'ID', 'tramyte_id');
    }
    public function canlamsang()
    {
        return $this->hasOne(canlamsang::class, 'MCSKCB', 'MCSKCB_ID');
    }
    public function doituongmacbenh()
    {
        return $this->hasOne(doituongmacbenh::class, 'MCSKCB', 'MCSKCB');
    }
}
