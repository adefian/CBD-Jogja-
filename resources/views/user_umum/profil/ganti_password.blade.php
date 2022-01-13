@extends('user_umum.layout.pengajuan_master')

@section('title')
Profil
@endsection

@section('content')

<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">

        <!--  Traffic  -->
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <form class="needs-validation" action="{{ route('profil_user.updatepassword', $user->id) }}"
                            method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Password Baru</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="Password Baru" required
                                    autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password</label><br>
                                <strong style="font-size: 11px;" id="message"></strong>
                                <input type="password" class="form-control" id="konfirmasipassword"
                                    placeholder="Konfirmasi Password" required>
                            </div>

                            <button  id="button" type="submit" class="btn btn-success">Simpan</button>
                            <a href="{{ route('profil_user', $user->id) }}">
                                <button type="button" style="margin-left: 3px;" class="btn btn-secondary"
                                    data-dismiss="modal">Kembali</button>
                            </a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!--  /Traffic -->
        <div class="clearfix"></div>
    </div>
    <!-- .animated -->
</div>
@endsection('content')

@section('js')

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