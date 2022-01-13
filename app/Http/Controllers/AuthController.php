<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Masyarakat;
use Auth;
use Alert;

class AuthController extends Controller
{
    public function login()
    {
        // Alert::success('SuccessAlert','Lorem ipsum dolor sit amet.');

        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        $logintype = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        $login = [
            $logintype => $request->email,
            'password' => $request->password,
        ];

        $user = User::where('name', $request->email)->orWhere('email', $request->email)->first();

        if(Auth::attempt($login)){
            
            if(auth()->user()->role == 'instansi'){
                alert()->success('Success', 'Selamat datang anda telah berhasil login');
                return redirect()->route('instansi_dashboard');
            }
            elseif (auth()->user()->role == 'admin') {
                alert()->success('Success', 'Selamat datang anda telah berhasil login');
                return redirect()->route('admin');
            }
            elseif (auth()->user()->role == 'masyarakat'){
                alert()->success('Success', 'Selamat datang anda telah berhasil login');
                return redirect()->route('masyarakat', $user->id);
            }
        }

        toast('Maaf, Email atau password salah', 'error');
        return redirect()->route('login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function doRegister(Request $request)
    {
        $cek_email = User::where('email', $request->email)->first();

        if ($cek_email) {
            toast('Maaf, Email sudah digunakan','error');
            return back();
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'masyarakat',
        ];

        $lastid = User::create($data)->id;

        $masyarakat = [
            'id_users' => $lastid,
            'nama_user' => $request->name,
        ];

        Masyarakat::create($masyarakat);
        toast('Selamat anda telah berhasil mendaftar. Silahkan login disini', 'success');

        return redirect()->route('login');

    }

    public function logout()
    {
        Auth::logout();

        alert()->success('Success', 'Berhasil Logout');

        return redirect()->route('login');
    }
}
