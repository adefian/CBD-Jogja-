<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CagarBudaya;
use App\Province;

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
            'kabupaten' => $request->kabupaten,
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
            'periodesasi' => $request->periodesasi,
            'kondisi' => $request->kondisi,
            'sejarah' => $request->sejarah,
            'deskripsi' => $request->deskripsi
            
        ];

        if ($file = $request->foto){

            $nama_file = "Foto_CBBenda_".time(). ".jpeg";
            $file->move(public_path() . '/Images/cagar_budaya/', $nama_file);  
            $data['foto'] = $nama_file;
        }

        CagarBudaya::create($data);

        toast('Berhasil Menambahkan Data Cagar Budaya Benda', 'success');
        return back();
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
            'kabupaten' => $request->kabupaten,
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
            'periodesasi' => $request->periodesasi,
            'kondisi' => $request->kondisi,
            'sejarah' => $request->sejarah,
            'deskripsi' => $request->deskripsi
            
        ];

        if ($file = $request->foto){

            $nama_file = "Foto_CBBenda_".time(). ".jpeg";
            $file->move(public_path() . '/Images/cagar_budaya/', $nama_file);  
            $data['foto'] = $nama_file;
        }

        $cb_benda->update($data);

        toast('Berhasil Mengedit Data Cagar Budaya Benda', 'success');
        return redirect()->route('cagarbudaya_benda'); 
    }

    public function editlokasi_benda(Request $request, $id)
    {
        $cb_benda = CagarBudaya::find($id);

        $data = [
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ];

        $cb_benda->update($data);

        toast ('Berhasil Mengedit Lokasi Data Cagar Budaya Benda', 'success');
        return back();
    }

    public function hapus_benda($id)
    {
        $cb_benda = CagarBudaya::find($id);

        $cb_benda->delete();

        toast('Berhasil Menghapus Data Cagar Budaya Benda', 'success');
        return back();
    }
// ================================= END CB BENDA ==============================

// ================================= CB BANGUNAN ==============================

    public function bangunan()
    {
        $data = CagarBudaya::where('kategori', 'bangunan')->orderBy('id', 'desc')->get();

        return view('admin.cagarbudaya.bangunan.index', compact('data'));
    }

    public function create_bangunan(Request $request)
    {
        $data[] = $request->all();

        if ($file = $request->foto){
            
            $nama_file = "Foto_CBBangunan_".time(). ".jpeg";
            $file->move(public_path() . '/Images/cagar_budaya/', $nama_file);  
            $data[0]['foto'] = $nama_file;
            $data[0]['kategori'] = 'bangunan';
        }

        CagarBudaya::create($data[0]);

        toast('Berhasil Menambahkan Data Cagar Budaya Bangunan', 'success');
        return back();
    }

    public function edit_bangunan(Request $request, $id)
    {
        $data = CagarBudaya::find($id);

        return view('admin.cagarbudaya.bangunan.edit', compact('data'));
    }

    public function update_bangunan(Request $request, $id)
    {
        $cb_bangunan = CagarBudaya::find($id);

        $data[] = $request->all();

        if ($file = $request->foto){

            $nama_file = "Foto_CBBangunan_".time(). ".jpeg";
            $file->move(public_path() . '/Images/cagar_budaya/', $nama_file);  
            $data[0]['foto'] = $nama_file;
        }

        $cb_bangunan->update($data[0]);

        toast('Berhasil Mengedit Data Cagar Budaya Bangunan', 'success');
        return redirect()->route('cagarbudaya_bangunan'); 
    }

    public function editlokasi_bangunan(Request $request, $id)
    {
        $cb_bangunan = CagarBudaya::find($id);

        $data = [
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ];

        $cb_bangunan->update($data);

        toast ('Berhasil Mengedit Lokasi Data Cagar Budaya Bangunan', 'success');
        return back();
    }

    public function hapus_bangunan($id)
    {
        $cb_bangunan = CagarBudaya::find($id);

        $cb_bangunan->delete();

        toast('Berhasil Menghapus Data Cagar Budaya Bangunan', 'success');
        return back();
    }
// ================================= END CB BANGUNAN ==============================

// ================================= CB STRUKTUR ==============================

    public function struktur()
    {
        $data = CagarBudaya::where('kategori', 'struktur')->orderBy('id', 'desc')->get();

        return view('admin.cagarbudaya.struktur.index', compact('data'));
    }

    public function create_struktur(Request $request)
    {
        $data[] = $request->all();

        if ($file = $request->foto){
            
            $nama_file = "Foto_CBStruktur_".time(). ".jpeg";
            $file->move(public_path() . '/Images/cagar_budaya/', $nama_file);  
            $data[0]['foto'] = $nama_file;
            $data[0]['kategori'] = 'struktur';
        }

        CagarBudaya::create($data[0]);

        toast('Berhasil Menambahkan Data Cagar Budaya Struktur', 'success');
        return back();
    }

    public function edit_struktur(Request $request, $id)
    {
        $data = CagarBudaya::find($id);

        return view('admin.cagarbudaya.Struktur.edit', compact('data'));
    }

    public function update_struktur(Request $request, $id)
    {
        $cb_struktur = CagarBudaya::find($id);

        $data[] = $request->all();

        if ($file = $request->foto){

            $nama_file = "Foto_CBStruktur_".time(). ".jpeg";
            $file->move(public_path() . '/Images/cagar_budaya/', $nama_file);  
            $data[0]['foto'] = $nama_file;
        }

        $cb_struktur->update($data[0]);

        toast('Berhasil Mengedit Data Cagar Budaya Struktur', 'success');
        return redirect()->route('cagarbudaya_struktur'); 
    }

    public function editlokasi_struktur(Request $request, $id)
    {
        $cb_struktur = CagarBudaya::find($id);

        $data = [
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ];

        $cb_struktur->update($data);

        toast ('Berhasil Mengedit Lokasi Data Cagar Budaya Struktur', 'success');
        return back();
    }

    public function hapus_struktur($id)
    {
        $cb_struktur = CagarBudaya::find($id);

        $cb_struktur->delete();

        toast('Berhasil Menghapus Data Cagar Budaya Struktur', 'success');
        return back();
    }
// ================================= END CB STRUKTUR ==============================

// ================================= CB SITUS ==============================
    public function situs()
    {
        $data = CagarBudaya::where('kategori', 'situs')->orderBy('id', 'desc')->get();

        return view('admin.cagarbudaya.situs.index', compact('data'));
    }

    public function create_situs(Request $request)
    {
        $data[] = $request->all();

        if ($file = $request->foto){
            
            $nama_file = "Foto_CBSitus_".time(). ".jpeg";
            $file->move(public_path() . '/Images/cagar_budaya/', $nama_file);  
            $data[0]['foto'] = $nama_file;
            $data[0]['kategori'] = 'situs';
        }

        CagarBudaya::create($data[0]);

        toast('Berhasil Menambahkan Data Cagar Budaya Situs', 'success');
        return back();
    }

    public function edit_situs(Request $request, $id)
    {
        $data = CagarBudaya::find($id);

        return view('admin.cagarbudaya.situs.edit', compact('data'));
    }

    public function update_situs(Request $request, $id)
    {
        $cb_situs = CagarBudaya::find($id);

        $data[] = $request->all();

        if ($file = $request->foto){

            $nama_file = "Foto_CBSitus_".time(). ".jpeg";
            $file->move(public_path() . '/Images/cagar_budaya/', $nama_file);  
            $data[0]['foto'] = $nama_file;
        }

        $cb_situs->update($data[0]);

        toast('Berhasil Mengedit Data Cagar Budaya Situs', 'success');
        return redirect()->route('cagarbudaya_situs'); 
    }

    public function editlokasi_situs(Request $request, $id)
    {
        $cb_situs = CagarBudaya::find($id);

        $data = [
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ];

        $cb_situs->update($data);

        toast ('Berhasil Mengedit Lokasi Data Cagar Budaya Situs', 'success');
        return back();
    }

    public function hapus_situs($id)
    {
        $cb_situs = CagarBudaya::find($id);

        $cb_situs->delete();

        toast('Berhasil Menghapus Data Cagar Budaya Situs', 'success');
        return back();
    }
// ================================= END CB SITUS ==============================

// ================================= CB SITUS ==============================
    public function kawasan()
    {
        $data = CagarBudaya::where('kategori', 'kawasan')->orderBy('id', 'desc')->get();

        return view('admin.cagarbudaya.kawasan.index', compact('data'));
    }

    public function create_kawasan(Request $request)
    {
        $data[] = $request->all();

        if ($file = $request->foto){
            
            $nama_file = "Foto_CBKawasan_".time(). ".jpeg";
            $file->move(public_path() . '/Images/cagar_budaya/', $nama_file);  
            $data[0]['foto'] = $nama_file;
            $data[0]['kategori'] = 'Kawasan';
        }

        CagarBudaya::create($data[0]);

        toast('Berhasil Menambahkan Data Cagar Budaya Kawasan', 'success');
        return back();
    }

    public function edit_kawasan(Request $request, $id)
    {
        $data = CagarBudaya::find($id);

        return view('admin.cagarbudaya.Kawasan.edit', compact('data'));
    }

    public function update_kawasan(Request $request, $id)
    {
        $cb_kawasan = CagarBudaya::find($id);

        $data[] = $request->all();

        if ($file = $request->foto){

            $nama_file = "Foto_CBKawasan_".time(). ".jpeg";
            $file->move(public_path() . '/Images/cagar_budaya/', $nama_file);  
            $data[0]['foto'] = $nama_file;
        }

        $cb_kawasan->update($data[0]);

        toast('Berhasil Mengedit Data Cagar Budaya Kawasan', 'success');
        return redirect()->route('cagarbudaya_kawasan'); 
    }

    public function editlokasi_kawasan(Request $request, $id)
    {
        $cb_kawasan = CagarBudaya::find($id);

        $data = [
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ];

        $cb_kawasan->update($data);

        toast ('Berhasil Mengedit Lokasi Data Cagar Budaya Kawasan', 'success');
        return back();
    }

    public function hapus_kawasan($id)
    {
        $cb_kawasan = CagarBudaya::find($id);

        $cb_kawasan->delete();

        toast('Berhasil Menghapus Data Cagar Budaya Kawasan', 'success');
        return back();
    }
// ================================= END CB KAWASAN ==============================


}