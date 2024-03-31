<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tintuc;

class Home_Controller extends Controller
{
    public function index(){
        $tintuc=tintuc::all();
       return view('layout.home',compact('tintuc'));
    }
}
