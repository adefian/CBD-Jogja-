@extends('auth.layout.master')

@section('title')
Login
@endsection

@section('content')

<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap" >
        <div class="container">
            <div class="login-content" >
                <div class="login-logo">
                    <img class="" style="margin-bottom: 10px;" width="90px" height="auto" src="{{asset('public/assets/admin/images/logobpcb.png')}}" alt=""> <b style="font-size: 25px; color: green;">BPCB DIY</b>
                </div>
                <div class="login-form" >
                    <h2 class="text-center"><b style="color: green;">Login</b></h2> <br>
                    <form  method="post" class="login-form" action="{{ route('doLogin') }}">
                        @csrf
                        <div class="form-group">
                            <label>Email address / Username</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email / Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        
                        <div class="register-link m-t-15 text-center">
                            <p>Belum ada akun ? <a href="{{ route('register') }}"> Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    @endsection('content')