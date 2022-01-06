@extends('auth.layout.master')

@section('title')
Login
@endsection

@section('content')

<body class="bg-dark">

    <div class="pt-4 pl-4"> 
        <a href="{{ route('home') }}" style="color: white">
            <i class="fa fa-arrow-left"></i>&nbsp; Kembali
        </a>
    </div>
    <div class="sufee-login d-flex align-content-center flex-wrap" style="margin-top:-20px;">
        <div class="container">
            <div class="login-content" >
                <div class="login-form" >
                    <div class="login-logo">
                        <img class="" style="margin-bottom: 10px;" width="90px" height="auto" src="{{asset('public/assets/admin/images/logobpcb.png')}}" alt=""> <b style="font-size: 25px; color: green;">BPCB DIY</b>
                    </div>
                    <hr>
                    <p class="text-center" style="margin-top:5%; margin-bottom:-10px"><b style="font-size:20px; color: green;">Login</b></p> <br>
                    <form  method="post" class="login-form" action="{{ route('doLogin') }}">
                        @csrf
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>

                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        
                        <div class="register-link mt-4 text-center">
                            <p>Belum ada akun ? <a href="{{ route('register') }}"> Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    @endsection('content')