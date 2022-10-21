<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $data = "LAYUNG";
        return view('mahasiswa', ['name'=> $data]);
    }
}
