<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tramyte extends Model
{
    use HasFactory;
    protected $table = 'tramyte';
    public $timestamps=false;
    protected $fillable = ['ID','TEN_TRAM_Y_TE','DIA_CHI','SDT','EMAIL','TRUNG_TAM_Y_TE_ID'];
    protected $primaryKey='ID';
    public function ttyte()
    {
        return $this->hasOne(ttyte::class, 'ID', 'TRUNG_TAM_Y_TE_ID');
    }

}
