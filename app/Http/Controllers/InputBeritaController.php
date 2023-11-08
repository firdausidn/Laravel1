<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputBeritaController extends Controller
{
    public function berita(){
        return view('input.berita');
    }

    public function dosen(){
        return view('input.dosen');
    }
}
