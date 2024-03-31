<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    use HasFactory;
    protected $table='tintuc';
    public $timestamps=false;
    protected $primaryKey='ID';
    protected $fillable = ['ID','TIN_THUONG','THOI_GIAN_DANG','TEN_TIN_TUC','IMAGE_TIN_THUONG','TRANG_THAI'];
    
}
