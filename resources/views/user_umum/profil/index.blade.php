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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Profil</h4>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" action="{{ route('profil_user.update', $user->id) }}" method="POST"
                            enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" value="{{ $user->name }}" placeholder="Nama" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $user->email }}" name="email" placeholder="Email" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="{{ $masyarakat->tempat_lahir }}" name="tempat_lahir"
                                        required placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="" value="{{ $masyarakat->tanggal_lahir }}" name="tanggal_lahir"
                                        required placeholder="Tanggal Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <select type="text" class="form-control" id="" name="jenis_kelamin"
                                        required placeholder="Kenis Kelamin">
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki-laki" @if($masyarakat->jenis_kelamin =='Laki-laki' ) {{'selected="selected"'}} @endif>Laki-laki</option>
                                        <option value="Perempuan" @if($masyarakat->jenis_kelamin =='Perempuan' ) {{'selected="selected"'}} @endif>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">No. Telepon/HP</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="" value="{{ $masyarakat->telepon }}" name="telepon"
                                        required placeholder="Nomor Telepon/HP">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="{{ $masyarakat->pekerjaan }}" name="pekerjaan"
                                        required placeholder="Pekerjaan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" id="" name="alamat"
                                        required placeholder="Alamat Lengkap">{{ $masyarakat->alamat }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Kode Pos</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="" value="{{ $masyarakat->kode_pos }}" name="kode_pos"
                                        required placeholder="Kode Pos">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Kategori Pendaftar</label>
                                <div class="col-sm-10">
                                    <select type="text" class="form-control" id="" name="kategori_pendaftar"
                                        required placeholder="">
                                        <option value="">-- Pilih Kategori --</option>
                                        <option value="perorangan" @if($masyarakat->kategori_pendaftar =='perorangan' ) {{'selected="selected"'}} @endif>Perorangan</option>
                                        <option value="kelompok" @if($masyarakat->kategori_pendaftar =='kelompok' ) {{'selected="selected"'}} @endif>Kelompok</option>
                                        <option value="masyarakat" @if($masyarakat->kategori_pendaftar =='masyarakat' ) {{'selected="selected"'}} @endif>Masyarakat</option>
                                        <option value="hukumadat" @if($masyarakat->kategori_pendaftar =='hukumadat' ) {{'selected="selected"'}} @endif>Hukum Adat</option>
                                        <option value="badanusaha_berbadanhukum" @if($masyarakat->kategori_pendaftar =='badanusaha_berbadanhukum' ) {{'selected="selected"'}} @endif>Badan Usaha Berbadan Hukum</option>
                                        <option value="badanusaha_bukanberbadanhukum" @if($masyarakat->kategori_pendaftar =='badanusaha_bukanberbadanhukum' ) {{'selected="selected"'}} @endif>Badan Usaha Bukan Berbadan Hukum</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="" name="foto" placeholder="">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="button" style="margin-left: 3px;" class="btn btn-danger"
                                data-dismiss="modal">Batal</button>
                        </form>

                    </div>

                </div>
            </div><!-- /# column -->
        </div>
        <!--  /Traffic -->
        <div class="clearfix"></div>

        <!-- /#add-category -->
    </div>
    <!-- .animated -->
</div>


@endsection('content')