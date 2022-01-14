<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Masyarakat;
use App\Pengajuan;

class UserMasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard($id)
    {
        $user = User::find($id);

        $masyarakat = Masyarakat::where('id_users', $id)->first();

        return view('user_umum.profil.dashboard', compact('user', 'masyarakat'));
    }

    public function pengajuan($id)
    {
        $user = User::find($id);

        $masyarakat = Masyarakat::where('id_users', $id)->first();

        $pengajuan = Pengajuan::where('id_users', $id)->orderBy('id', 'ASC')->get();
        return view('user_umum.pengajuan.index', compact('user', 'pengajuan', 'masyarakat'));
    }

    public function pengajuan_create($id, Request $request)
    {
        $masyarakat = Masyarakat::where('id_users', auth()->user()->id)
                        ->whereNull('tempat_lahir')->first();

        if($masyarakat){
            alert()->error('Input Gagal', 'Harus Melengkapi Data Dimenu Profil Secara Lengkap');
            return redirect()->route('profil_user', $id);
        }

        $data = $request->all();

        $fileName = time().'.'.auth()->user()->name.'.'.$request->berkas->extension();  
        
        $request->berkas->move(public_path('/assets/user/berkas/'), $fileName);
        // if ($file = $request->foto){

        //     $nama_file = "Berkas_".time(). ".jpeg";
        //     $file->move(public_path() . '/assets/user/img/berkas/', $nama_file);  
        //     $data['berkas'] = $nama_file;
        // }

        $data['berkas'] = $fileName;
        $data['id_users'] = $id;
        $data['status'] = 1;

        Pengajuan::create($data);

        alert()->success('Success', 'Selamat Berhasil Mengajukan Permohonan '. $request->pesan .'');
        return back();
    }

    public function profil($id)
    {

        $user = User::find($id);

        $masyarakat = Masyarakat::where('id_users', $id)->first();

        return view('user_umum.profil.index', compact('user', 'masyarakat'));

    }
    public function detail_profil($id)
    {

        $user = User::find($id);

        $masyarakat = Masyarakat::where('id_users', $id)->first();

        return view('user_umum.profil.detail_profil', compact('user', 'masyarakat'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profil_update(Request $request, $id)
    {
        $masyarakat = Masyarakat::where('id_users', $id)->first();
        $data = $request->all();
        
        if ($file = $request->foto){

            $nama_file = "Foto_".time(). ".jpeg";
            $file->move(public_path() . '/assets/user/img/foto/', $nama_file);  
            $data['foto'] = $nama_file;
        }
        $masyarakat->update($data);

        alert()->success('Success', 'Selamat Berhasil merubah data');
        return back();
    }

    public function profil_ganti_password($id)
    {
        $user = User::find($id);

        $masyarakat = Masyarakat::where('id_users', $id)->first();
        return view('user_umum.profil.ganti_password', compact('user', 'masyarakat'));
    }

    public function profil_update_password($id, Request $request)
    {
        $user = User::find($id);

        $user->update([
            'password' => bcrypt($request->password)
        ]);

        alert()->success('Success', 'Selamat Berhasil merubah password baru');
        return back();
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