<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quyen extends Model
{
    use HasFactory;
    protected $table = 'quyen';
    public $timestamps=false;
    protected $fillable = ['ID','TEN_QUYEN','QUYEN'];
    protected $primaryKey='ID';
}
