<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soyte extends Model
{
    use HasFactory;
    protected $table = 'soyte';
    public $timestamps=false;
    protected $fillable = ['ID','TEN_SO_Y_TE','DIA_CHI','SDT','EMAIL'];
    protected $primaryKey='ID';
    public function ttyte(){
        return $this->hasMany(ttyte::class,'SO_Y_TE_ID','ID');
    }
}
