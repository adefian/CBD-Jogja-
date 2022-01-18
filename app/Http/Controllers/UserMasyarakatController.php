<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Masyarakat;
use App\Pengajuan;
use App\Saran;
use App\CagarBudaya;
use Auth;
use View;

class UserMasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function dashboard($id)
    {
        $message = Pengajuan::where('status', '>=', 2)->where('id_users', Auth::user()->id)->orderBy('id', 'DESC')->get();
        
        $user = User::find($id);

        $masyarakat = Masyarakat::where('id_users', $id)->first();

        return view('user_umum.profil.dashboard', compact('user', 'masyarakat', 'message'));
    }

    public function pengajuan($id)
    {
        $user = User::find($id);

        $masyarakat = Masyarakat::where('id_users', $id)->first();

        $pengajuan = Pengajuan::where('id_users', $id)->orderBy('id', 'DESC')->get();
        $message = Pengajuan::where('status', '>=', 2)->where('id_users', Auth::user()->id)->orderBy('id', 'DESC')->get();
        
        return view('user_umum.pengajuan.index', compact('message', 'user', 'pengajuan', 'masyarakat'));
    }

    public function pengajuan_create($id, Request $request)
    {
        $this->validate($request, [
            'berkas'=> 'required|file|mimes:pdf|max:2048',
        ]);

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
        $data['status'] = null;

        Pengajuan::create($data);

        alert()->success('Success', 'Selamat Berhasil Mengajukan Permohonan '. $request->pesan .'');
        return back();
    }

    public function profil($id)
    {

        $user = User::find($id);

        $masyarakat = Masyarakat::where('id_users', $id)->first();

        $message = Pengajuan::where('status', '>=', 2)->where('id_users', Auth::user()->id)->orderBy('id', 'DESC')->get();
        
        return view('user_umum.profil.index', compact('message', 'user', 'masyarakat'));

    }
    public function detail_profil($id)
    {

        $user = User::find($id);

        $masyarakat = Masyarakat::where('id_users', $id)->first();

        $message = Pengajuan::where('status', '>=', 2)->where('id_users', Auth::user()->id)->orderBy('id', 'DESC')->get();
        
        return view('user_umum.profil.detail_profil', compact('message', 'user', 'masyarakat'));

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
        $message = Pengajuan::where('status', '>=', 2)->where('id_users', Auth::user()->id)->orderBy('id', 'DESC')->get();
        
        return view('user_umum.profil.ganti_password', compact('message', 'user', 'masyarakat'));
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
    
    public function create_saran(Request $request)
    {
        $data = $request->all();

        Saran::create($data);

        toast ('Terimakasih Telah Menambahkan Saran', 'success');
        return back();
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $cagar_budaya = CagarBudaya::where('nama', 'like', "%" . $cari . "%")->get();

        return view('user_umum.cari', compact('cagar_budaya', 'cari'));
    }

}