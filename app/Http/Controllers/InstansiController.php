<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengajuan;

class InstansiController extends Controller
{
    public function index()
    {
        return view('instansi.dashboard');
    }
    public function pengajuan()
    {
        $pengajuan = Pengajuan::orderBy('id', 'desc')->get();
        // return $pengajuan;
        return view('instansi.pengajuan.index', compact('pengajuan'));
    }

    public function pengajuan_setuju($id)
    {
        $pengajuan = Pengajuan::where('id_users', $id)->first();
        
        $data = [
            'status' => 2
        ];

        $pengajuan->update($data);
        alert()->success('Success', 'Selamat Berhasil Menyetujui Pengajuan ');
        return back();
    }
    public function pengajuan_ditolak($id)
    {
        $pengajuan = Pengajuan::where('id_users', $id)->first();
        
        $data = [
            'status' => 3
        ];

        $pengajuan->update($data);

        alert()->success('Success', 'Selamat Berhasil Menyetujui Ditolak ');
        return back();
    }
   
}
