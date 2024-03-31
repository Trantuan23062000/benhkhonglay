<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dantoc extends Model
{
    use HasFactory;
    protected $table='dantoc';
    public $timestamps=false;
    protected $primaryKey='MA_DAN_TOC';
    public function doituongmacbenh()
    {
        return $this->hasOne(doituongmacbenh::class, 'MA_DAN_TOC', 'MA_DAN_TOC');
    }

}
