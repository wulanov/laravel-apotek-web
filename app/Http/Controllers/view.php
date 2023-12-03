<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view extends Controller
{
    function cetak(){
        return view('cetak');
    }

    function tampil(){
        return view('tampil');
    }

}
