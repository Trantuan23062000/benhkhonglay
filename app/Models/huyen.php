<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class huyen extends Model
{
    use HasFactory;
    protected $table = 'huyen';
    public $timestamps = false;
    protected $fillable = ['MA_HUYEN', 'TEN_HUYEN', 'MA_TINH'];
    protected $primaryKey = 'MA_HUYEN';
    public function tinh()
    {
        return $this->hasOne(tinh::class, 'MA_TINH', 'MA_TINH');
    }
    public function scopeSearch($query)
    {
        if ($tukhoa = request()->tukhoa) {
            $query = $query->where('TEN_HUYEN', 'like', '%' . $tukhoa . '%');
        }
        return $query;
    }
    public function doituongmacbenh()
    {
        return $this->hasMany(doituongmacbenh::class, 'MA_HUYEN_HO_KHAU', 'MA_HUYEN_TAM_TRU', 'ID');
    }
}
