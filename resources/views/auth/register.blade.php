@extends('auth.layout.master')

@section('title')
Register
@endsection

@section('content')


<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="" style="margin-bottom: 10px;" width="90px" height="auto" src="{{asset('public/assets/admin/images/logobpcb.png')}}" alt=""> <b style="font-size: 25px; color: green;">BPCB DIY</b>
                    </a>
                </div>
                <div class="login-form">
                    <h2 class="text-center"><b style="color: green;">Register</b></h2> <br>
                    <form>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label>Ulangi Password</label>
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Ulangi Password">
                        </div>
                       
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        <!-- <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Register with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Register with twitter</button>
                            </div>
                        </div> -->
                        <div class="register-link m-t-15 text-center">
                            <p>Sudah Punya Akun ? <a href="{{ route('login') }}"> Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection('content')