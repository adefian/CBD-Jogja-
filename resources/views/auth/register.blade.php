@extends('auth.layout.master')

@section('title')
Register
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
            <div class="login-content">
                <div class="login-form">
                    <div class="login-logo">
                        <img class="" style="margin-bottom: 10px;" width="90px" height="auto" src="{{asset('public/assets/admin/images/logobpcb.png')}}" alt=""> <b style="font-size: 25px; color: green;">BPCB DIY</b>
                    </div>
                    <hr>
                    <p class="text-center" style="margin-top:5%; margin-bottom:-10px"><b style="font-size:20px; color: green;">Register</b></p> <br>
                    <form  method="post" class="login-form" action="{{ route('doRegister') }}">
                        @csrf
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="name" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Konfirmasi Password</label><br>
                            <strong style="font-size: 11px;" id="message"></strong>
                            <input type="password" class="form-control" id="konfirmasipassword" placeholder="Konfirmasi Password" required>
                        </div>

                        <button id="button" type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Register</button>

                        <div class="register-link mt-4 text-center">
                            <p>Sudah Punya Akun ? <a href="{{ route('login') }}"> Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script>
        $('#password, #konfirmasipassword').on('keyup', function() {
            if ($('#password').val() == $('#konfirmasipassword').val()) {
                $('#message').html('Password Cocok').css('color', 'green');
                $('#button').removeAttr("disabled");
            } else {
                $('#message').html('Password Tidak Cocok').css('color', 'red');
                var element = document.getElementById('button');
                element.setAttribute("disabled", "disabled");
            }
        });
    </script>

@endsection