<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tinh extends Model
{
  use HasFactory;
  protected $table = 'tinh';
  public $timestamps = false;
  protected $fillable = ['MA_TINH', 'TEN_TINH'];
  protected $primaryKey = 'MA_TINH';

  public function scopeSearch($query)
  {
    if ($tukhoa = request()->tukhoa) {
      $query = $query->where('TEN_TINH', 'like', '%' . $tukhoa . '%');
    }
    return $query;
  }
  public function doituongmacbenh()
  {
    return $this->hasMany(doituongmacbenh::class, 'MA_TINH_HO_KHAU', 'MA_TINH_TAM_TRU', 'ID');
  }
}
