<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengajuan;
use App\CagarBudaya;
use DB;

class RekapController extends Controller
{
    public function rekap_perizinan()
    {
        $data = Pengajuan::whereYear('updated_at', date('Y'))->select([
            DB::raw('count(id) as `count`'), 
            DB::raw('MONTH(updated_at) as month')
        ])->groupBy('month')
        ->get();
    
        $data2 = Pengajuan::whereYear('updated_at', date('Y'))->select([
            DB::raw('count(id) as `count`'), 
            DB::raw('MONTH(updated_at) as month')
        ])->groupBy('month')
        ->get();
    
        // return $data;
        $bulan = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember',
        ];

        foreach($bulan as $key => $value){
            $b[] = $value;

            $jumlah_pengajuan = Pengajuan::whereYear('updated_at', date('Y'))->whereMonth('updated_at', $key)->count(); 
        
            if($jumlah_pengajuan == 0){
                $jumlah_pengajuan = '-';
            }
            $data_rekap[] = [
                'bulan' => $value,
                'jumlah' => $jumlah_pengajuan
            ];
        }
    
        return view('user_umum.rekap', compact('data','data_rekap', 'data2', 'bulan', 'b'));
    }

    public function rekap_cagarbudaya()
    {
        $jumlah_benda = CagarBudaya::whereYear('updated_at', date('Y'))->where('kategori', 'benda')->count();
        $jumlah_bangunan = CagarBudaya::whereYear('updated_at', date('Y'))->where('kategori', 'bangunan')->count();
        $jumlah_struktur = CagarBudaya::whereYear('updated_at', date('Y'))->where('kategori', 'struktur')->count();
        $jumlah_situs = CagarBudaya::whereYear('updated_at', date('Y'))->where('kategori', 'situs')->count();
        $jumlah_kawasan = CagarBudaya::whereYear('updated_at', date('Y'))->where('kategori', 'kawasan')->count();

        if ($jumlah_benda >= 1) {
            $nilai[] = [
                'kategori' => 'Benda',
                'nilai' => $jumlah_benda
            ];
        } else {
            $nilai[] = [
                'kategori' => 'Benda',
                'nilai' => '-'
            ];
        }
        if ($jumlah_bangunan >= 1) {
            $nilai[] = [
                'kategori' => 'Bangunan',
                'nilai' => $jumlah_bangunan
            ];
        } else {
            $nilai[] = [
                'kategori' => 'Bangunan',
                'nilai' => '-'
            ];
        }
        if ($jumlah_struktur >= 1) {
            $nilai[] = [
                'kategori' => 'Struktur',
                'nilai' => $jumlah_struktur
            ];
        } else {
            $nilai[] = [
                'kategori' => 'Struktur',
                'nilai' => '-'
            ];
        }
        if ($jumlah_situs >= 1) {
            $nilai[] = [
                'kategori' => 'Situs',
                'nilai' => $jumlah_situs
            ];
        } else {
            $nilai[] = [
                'kategori' => 'Situs',
                'nilai' => '-'
            ];
        }
        if ($jumlah_kawasan >= 1) {
            $nilai[] = [
                'kategori' => 'Kawasan',
                'nilai' => $jumlah_kawasan
            ];
        } else {
            $nilai[] = [
                'kategori' => 'Kawasan',
                'nilai' => '-'
            ];
        }


        $data2 = CagarBudaya::whereYear('updated_at', date('Y'))->select([
            DB::raw('count(id) as `count`'), 
            DB::raw('MONTH(updated_at) as month')
        ])->groupBy('month')
        ->get();

        $bulan = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember',
        ];

        foreach($bulan as $key => $value){
            $b[] = $value;
        }

        foreach($data2 as $key => $value){
            $nilai2[] = $value->count;
        }

        return view('user_umum.rekap_cagarbudaya', compact('bulan', 'b', 'nilai', 'nilai2'));

    }
}
