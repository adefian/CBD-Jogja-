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
                        <form>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" id="" placeholder="Nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Enail</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" name="tempat_lahir" placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <select type="text" class="form-control" id="" name="jk" placeholder="Kenis Kelamin">
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">No. Telepon/HP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" name="nomor_telp" placeholder="Nomor Telepon/HP">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" name="pekerjaan" placeholder="Pekerjaan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" id="" name="alamat" placeholder="Alamat Lengkap"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Kode Pos</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" name="kode_pos" placeholder="Kode Pos">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Kategori Pendaftar</label>
                                <div class="col-sm-10">
                                    <select type="text" class="form-control" id="" name="kategori_pendaftar" placeholder="">
                                        <option value="">-- Pilih Kategori --</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="" name="foto" placeholder="">
                                </div>
                            </div>
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