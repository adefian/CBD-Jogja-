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

    public function pengajuan_proses($id)
    {
        $pengajuan = Pengajuan::where('id', $id)->first();

        $data = [
            'status' => 1
        ];

        $pengajuan->update($data);
        alert()->success('Success', 'Selamat Berhasil Merubah Pengajuan ');
        return back();
    }

    public function pengajuan_setuju($id)
    {
        $pengajuan = Pengajuan::where('id', $id)->first();

        $data = [
            'status' => 2
        ];

        $pengajuan->update($data);
        alert()->success('Success', 'Selamat Berhasil Menyetujui Pengajuan ');
        return back();
    }
    public function pengajuan_tolak($id)
    {
        $pengajuan = Pengajuan::where('id', $id)->first();
        
        $data = [
            'status' => 3
        ];

        $pengajuan->update($data);

        alert()->success('Success', 'Selamat Berhasil Menolak Pengajuan ');
        return back();
    }
   
}
