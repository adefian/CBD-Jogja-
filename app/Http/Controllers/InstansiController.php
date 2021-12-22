<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstansiController extends Controller
{
    public function index()
    {
        return view('instansi.dashboard');
    }
    public function pengajuan()
    {
        return view('instansi.pengajuan.index');
    }
   
}
