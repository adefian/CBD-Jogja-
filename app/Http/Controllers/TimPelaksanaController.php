<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TimPelaksana;
use App\Kegiatan;
use App\TimKegiatan;

class TimPelaksanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TimPelaksana::orderBy('id', 'DESC')->get();
        return view('admin.tim_pelaksana.index', compact('data'));
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
        $data = $request->all();

        TimPelaksana::create($data);

        toast('Berhasil Menambahkan Data Tim Pelaksana', 'success');
        return back();
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
        $data = TimPelaksana::find($id);

        $kegiatan = Kegiatan::orderBy('nama_kegiatan', 'ASC')->get();

        $tim_kegiatan = TimKegiatan::where('id_timpelaksana', $id)->get();

        return view('admin.tim_pelaksana.edit', compact('data', 'kegiatan', 'tim_kegiatan'));
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
        $tim_pelaksana = TimPelaksana::find($id);
        $data = $request->all();

        $tim_pelaksana->update($data);
        toast('Berhasil Mengedit Data Tim Pelaksana', 'success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tim_pelaksana = TimPelaksana::find($id);

        $tim_pelaksana->delete();

        toast('Berhasil Mengubah Data Tim Pelaksana', 'success');
        return back();
    }

    public function timkegiatan_update(Request $request, $id)
    {
        $tim_kegiatan = TimKegiatan::where('id_timpelaksana', $id)
                    ->where('id_kegiatan', $request->id_kegiatan)->first();

        
        if($tim_kegiatan){
            toast('Sudah Terdaftar dalam kegiatan tersebut', 'error');
            return back();
        }
        $data = [
            'id_timpelaksana' => $id,
            'id_kegiatan' => $request->id_kegiatan
        ];

        TimKegiatan::create($data);

        toast('Berhasil Menambahkan Data Tim Kegiatan', 'success');
        return back();
    }
}