<?php
namespace App\helper;
use PhpParser\Builder\Function_;
 class TienThuoc{
     public $tienthuoc=[];
     public $soluong=0;
     public $gia=0;
     public $tylett=0;
     public $tonggia=0;

     public function __construct()
     {
         $this->tienthuoc = session('tien') ? session('tien') : [];
         $this->soluong = $this->tongsoluong();
         $this->gia = $this->tonggia();
         $this->tonggia=$this->tongtienthuoc();
     }
     public function tongtienthuoc()
     {
         $t = 0;
         foreach ($this->tienthuoc as $item) {
             $t += ($item['DON_GIA'] * $item['SO_LUONG'])-($item['DON_GIA'] * $item['SO_LUONG']*$item['TY_LE_TT']*0.01);
         }
         return $t;
     }
     public function tonggia()
    {
        $t = 0;
        foreach ($this->tienthuoc as $item) {
            $t += $item['DON_GIA'] * $item['SO_LUONG'];
        }
        return $t;
    }
     public function tongsoluong()
    {
        $t = 0;
        foreach ($this->tienthuoc as $item) {
            $t += $item['SO_LUONG'];
        }
        return $t;
    }

 }
