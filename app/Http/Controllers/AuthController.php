<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        $logintype = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $login = [
            $logintype => $request->email,
            'password' => $request->password,
        ];

        $user = User::where('username', $request->email)->orWhere('email', $request->email)->first();

        if(Auth::attempt($login)){
            
            if(auth()->user()->role == 'instansi'){
                return redirect()->route('instansi_dashboard')->with('success', 'Berhasil login, Selamat datang '. $user->nama);
            }
            elseif (auth()->user()->role == 'admin') {
                return redirect()->route('admin')->with('success', 'Berhasil login, Selamat datang');
            }
            elseif (auth()->user()->role == 'umum'){
                return redirect()->route('profil_user')->with('success', 'Berhasil login, Selamat datang');
            }
        }
        return redirect()->route('login')->with('error', 'Username atau password salah');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
