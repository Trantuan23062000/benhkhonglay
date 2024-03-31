<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nghenghiep extends Model
{
    use HasFactory;
    protected $table = 'nghenghiep';
    public $timestamps=false;
    protected $fillable = ['MA_NGHE_NGHIEP','TEN_NGHE_NGHIEP',];
    protected $primaryKey='MA_NGHE_NGHIEP';
    public function doituongmacbenh()
    {
        return $this->hasMany(doituongmacbenh::class, 'MA_NGHE_NGHIEP', 'ID');
    }

}
