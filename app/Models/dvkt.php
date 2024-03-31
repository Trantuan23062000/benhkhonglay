<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dvkt extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'donvikithuat';
    public $timestamps=false;
    protected $fillable = ['MA_DVKT','TEN_DVKT'];
    protected $primaryKey='MA_DVKT';
}
