<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CagarBudaya;

class CagarBudayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // ================================= CB BENDA ==============================
    public function benda()
    {
        $data = CagarBudaya::where('kategori', 'benda')->orderBy('id', 'desc')->get();

        return view('admin.cagarbudaya.benda.index', compact('data'));
    }

    public function create_benda(Request $request)
    {
        $data = [
            'kategori' => 'benda',
            'nama' => $request->nama,
            'tempat_penyimpanan' => $request->tempat_penyimpanan,
            'alamat' => $request->alamat,
            'kabupaten_id' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'kodepos' => $request->kodepos,
            'pemilik' => $request->pemilik,
            'riwayat' => $request->riwayat,
            'pengelola' => $request->pengelola,
            'panjang' => $request->panjang,
            'lebar' => $request->lebar,
            'tinggi' => $request->tinggi,
            'tebal' => $request->tebal,
            'diameter' => $request->diameter,
            'berat' => $request->berat,
            'bahan' => $request->bahan,
            'warna' => $request->warna,
            'periodesasi_id' => $request->periodesasi,
            'keterawatan_id' => $request->kondisi,
            'sejarah' => $request->sejarah,
            'deskripsi' => $request->deskripsi
            
        ];

        if ($file = $request->foto){

            $nama_file = "Foto_CBBenda_".time(). ".jpeg";
            $file->move(public_path() . '/Images/cagar_budaya/benda/', $nama_file);  
            $data['foto'] = $nama_file;
        }

        CagarBudaya::create($data);

        return back()->with('success', 'Berhasil Menambahkan Data Cagar Budaya Benda');
    }

    public function edit_benda(Request $request, $id)
    {
        $data = CagarBudaya::find($id);

        return view('admin.cagarbudaya.benda.edit', compact('data'));
    }

    public function update_benda(Request $request, $id)
    {
        $cb_benda = CagarBudaya::find($id);

        $data = [
            'kategori' => 'benda',
            'nama' => $request->nama,
            'tempat_penyimpanan' => $request->tempat_penyimpanan,
            'alamat' => $request->alamat,
            'kabupaten_id' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'kodepos' => $request->kodepos,
            'pemilik' => $request->pemilik,
            'riwayat' => $request->riwayat,
            'pengelola' => $request->pengelola,
            'panjang' => $request->panjang,
            'lebar' => $request->lebar,
            'tinggi' => $request->tinggi,
            'tebal' => $request->tebal,
            'diameter' => $request->diameter,
            'berat' => $request->berat,
            'bahan' => $request->bahan,
            'warna' => $request->warna,
            'periodesasi_id' => $request->periodesasi,
            'keterawatan_id' => $request->kondisi,
            'sejarah' => $request->sejarah,
            'deskripsi' => $request->deskripsi
            
        ];

        if ($file = $request->foto){

            $nama_file = "Foto_CBBenda_".time(). ".jpeg";
            $file->move(public_path() . '/Images/cagar_budaya/benda/', $nama_file);  
            $data['foto'] = $nama_file;
        }

        $cb_benda->update($data);

        return back()->with('success', 'Berhasil Mengedit Data Cagar Budaya Benda');
    }

    public function editlokasi_benda(Request $request, $id)
    {
        $cb_benda = CagarBudaya::find($id);

        $data = [
            'latitude' => $request->latitude,
            'longitude' => $request->longitude

        ];

        $cb_benda->update($data);

        return back()->with('success', 'Berhasil Mengedit Lokasi Data Cagar Budaya Benda');
    }
    // ================================= END CB BENDA ==============================

    public function bangunan()
    {
        return view('admin.cagarbudaya.bangunan.index');
    }
    public function struktur()
    {
        return view('admin.cagarbudaya.struktur.index');
    }
    public function situs()
    {
        return view('admin.cagarbudaya.situs.index');
    }
    public function kawasan()
    {
        return view('admin.cagarbudaya.kawasan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}