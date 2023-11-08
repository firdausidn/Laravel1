<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputDosenController extends Controller
{
    public function dosen(){
        return view('input.dosen');
    }
}
