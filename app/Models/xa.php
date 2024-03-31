<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xa extends Model
{
    use HasFactory;
    protected $table = 'xa';
    public $timestamps=false;
    protected $fillable = ['MA_XA','TEN_XA','MA_HUYEN'];
    protected $primaryKey='MA_XA';
    public function huyen()
    {
        return $this->hasOne(huyen::class, 'MA_XA', 'MA_HUYEN');
    }
    public function scopeSearch($query){
        if($tukhoa=request()->tukhoa){
          $query=$query->where('TEN_XA','like','%'.$tukhoa.'%');
        }
        return $query;
  
    }
    public function doituongmacbenh()
    {
      return $this->hasMany(doituongmacbenh::class, 'MA_XA_HO_KHAU', 'MA_XA_TAM_TRU', 'ID');
    }
}
