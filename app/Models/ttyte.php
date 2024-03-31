<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ttyte extends Model
{
    use HasFactory;
    protected $table = 'ttyte';
    public $timestamps=false;
    protected $fillable = ['ID','TEN_TRUNG_TAM_Y_TE','DIA_CHI','SDT','EMAIL','SO_Y_TE_ID'];
    protected $primaryKey='ID';
    public function soyte()
    {
        return $this->hasOne(soyte::class, 'ID', 'SO_Y_TE_ID');
    }
}
