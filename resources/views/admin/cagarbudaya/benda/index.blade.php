@extends('admin.layout.master')

@section('title')
Benda
@endsection

@section('content')
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Cagar Budaya (Benda)</h1>
            <button class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah Data</button>
        </div>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <!--  Traffic  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="height: 26rem;">
                    <div class="card-header">
                        <h4>Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">No</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Nama Benda</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Tempat Penyimpanan</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Alamat Lengkap</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Pemilik</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Riwayat Kepemilikan</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Pengelola</th>
                                        <th colspan="8" style="text-align: center; vertical-align: middle;">Ciri-ciri Benda</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Kondisi</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Periodisasi</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Sejarah </th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Deskripsi</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Foto Benda</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Aksi</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center; vertical-align: middle;">Panjang</th>
                                        <th style="text-align: center; vertical-align: middle;">Lebar</th>
                                        <th style="text-align: center; vertical-align: middle;">Tinggi</th>
                                        <th style="text-align: center; vertical-align: middle;">Tebal</th>
                                        <th style="text-align: center; vertical-align: middle;">Diameter</th>
                                        <th style="text-align: center; vertical-align: middle;">Berat</th>
                                        <th style="text-align: center; vertical-align: middle;">Bahan</th>
                                        <th style="text-align: center; vertical-align: middle;">Warna</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm fa fa-edit edit" data-toggle="modal" data-target="#updateModal" title="Edit"></button>
                                            <a href="#" data-toggle="modal" onclick="" data-target="#DeleteModal">
                                                <button class="fa fa-trash btn-danger btn-sm " title="Hapus"></button>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

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

<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Benda</h5>

            </div>
            <div class="modal-body">

                <form method="post" action="" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Nama Benda</label>
                        <input type="text" required class="form-control" id="nama" name="nama" placeholder="Nama Benda">
                    </div>
                    <div class="form-group">
                        <label>Tempat Penyimpanan</label>
                        <input type="text" required class="form-control" id="tempa_penyimpanan" name="tempa_penyimpanan" placeholder="Tempat Penyimpanan">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" required class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label>Kabupaten</label>
                        <select type="text" required class="form-control" id="kabupaten" name="kabupaten" placeholder="">
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <input type="text" required class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan">
                    </div>
                    <div class="form-group">
                        <label>Kelurahan/Desa</label>
                        <input type="text" required class="form-control" id="desa" name="desa" placeholder="Kelurahan/Desa">
                    </div>
                    <div class="form-group">
                        <label>Kode Pos</label>
                        <input type="text" required class="form-control" id="pos" name="pos" placeholder="Kode Pos">
                    </div>
                    <div class="form-group">
                        <label>Pemilik</label>
                        <input type="text" required class="form-control" id="pemilik" name="pemilik" placeholder="Pemilik">
                    </div>
                    <div class="form-group">
                        <label>Riwayat Kepemilikan</label>
                        <textarea type="text" required class="form-control" id="riwayat" name="riwayat" placeholder="Riwayat Kepemilikan"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Pengelola</label>
                        <input type="text" required class="form-control" id="pengelola" name="pengelola" placeholder="Pengelola">
                    </div>
                    <div class="form-group">
                        <label>Panjang</label>
                        <input type="text" required class="form-control" id="panjang" name="panjang" placeholder="Panjang">
                    </div>
                    <div class="form-group">
                        <label>Lebar</label>
                        <input type="text" required class="form-control" id="lebar" name="lebar" placeholder="Lebar">
                    </div>
                    <div class="form-group">
                        <label>Tinggi</label>
                        <input type="text" required class="form-control" id="tinggi" name="tinggi" placeholder="Tinggi">
                    </div>
                    <div class="form-group">
                        <label>Tebal</label>
                        <input type="text" required class="form-control" id="tebal" name="tebal" placeholder="Tebal">
                    </div>
                    <div class="form-group">
                        <label>Diameter</label>
                        <input type="text" required class="form-control" id="diameter" name="Diameter" placeholder="Diameter">
                    </div>
                    <div class="form-group">
                        <label>Berat</label>
                        <input type="text" required class="form-control" id="berat" name="berat" placeholder="Berat">
                    </div>
                    <div class="form-group">
                        <label>Bahan</label>
                        <input type="text" required class="form-control" id="bahan" name="bahan" placeholder="Bahan">
                    </div>
                    <div class="form-group">
                        <label>Warna</label>
                        <input type="text" required class="form-control" id="warna" name="warna" placeholder="Warna">
                    </div>
                    <div class="form-group">
                        <label>Kondisi</label>
                        <select type="text" required class="form-control" id="kondisi" name="kondisi" placeholder="">
                            <option value="">aa</option>
                            <option value="">aa</option>
                            <option value="">aa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Periodisasi</label>
                        <select type="text" required class="form-control" id="periodisasi" name="periodisasi" placeholder="">
                            <option value="">aa</option>
                            <option value="">aa</option>
                            <option value="">aa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sejarah Benda</label>
                        <textarea type="text" required class="form-control" id="sejarah" name="sejarah" placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Benda</label>
                        <textarea type="text" required class="form-control" id="deskripsi" name="deskripsi" placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto Benda</label>
                        <input type="file" required class="form-control" id="foto" name="foto" placeholder="">
                    </div>

                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

                    <button type="button" style="margin-left: 3px;" class="btn btn-danger pull-right" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>


<div id="updateModal" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <!--Modal content-->
        <form action="" id="updateModalform" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Anda yakin ingin memperbarui Data ini ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}

                    <div class="form-group">
                        <label>Nama Benda</label>
                        <input type="text" required class="form-control" id="nama" name="nama" placeholder="Nama Benda">
                    </div>
                    <div class="form-group">
                        <label>Tempat Penyimpanan</label>
                        <input type="text" required class="form-control" id="tempa_penyimpanan" name="tempa_penyimpanan" placeholder="Tempat Penyimpanan">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" required class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label>Kabupaten</label>
                        <select type="text" required class="form-control" id="kabupaten" name="kabupaten" placeholder="">
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <input type="text" required class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan">
                    </div>
                    <div class="form-group">
                        <label>Kelurahan/Desa</label>
                        <input type="text" required class="form-control" id="desa" name="desa" placeholder="Kelurahan/Desa">
                    </div>
                    <div class="form-group">
                        <label>Kode Pos</label>
                        <input type="text" required class="form-control" id="pos" name="pos" placeholder="Kode Pos">
                    </div>
                    <div class="form-group">
                        <label>Pemilik</label>
                        <input type="text" required class="form-control" id="pemilik" name="pemilik" placeholder="Pemilik">
                    </div>
                    <div class="form-group">
                        <label>Riwayat Kepemilikan</label>
                        <textarea type="text" required class="form-control" id="riwayat" name="riwayat" placeholder="Riwayat Kepemilikan"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Pengelola</label>
                        <input type="text" required class="form-control" id="pengelola" name="pengelola" placeholder="Pengelola">
                    </div>
                    <div class="form-group">
                        <label>Panjang</label>
                        <input type="text" required class="form-control" id="panjang" name="panjang" placeholder="Panjang">
                    </div>
                    <div class="form-group">
                        <label>Lebar</label>
                        <input type="text" required class="form-control" id="lebar" name="lebar" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Tinggi</label>
                        <input type="text" required class="form-control" id="tinggi" name="tinggi" placeholder="Tinggi">
                    </div>
                    <div class="form-group">
                        <label>Tebal</label>
                        <input type="text" required class="form-control" id="tebal" name="tebal" placeholder="Tebal">
                    </div>
                    <div class="form-group">
                        <label>Diameter</label>
                        <input type="text" required class="form-control" id="diameter" name="Diameter" placeholder="Diameter">
                    </div>
                    <div class="form-group">
                        <label>Berat</label>
                        <input type="text" required class="form-control" id="berat" name="berat" placeholder="Berat">
                    </div>
                    <div class="form-group">
                        <label>Bahan</label>
                        <input type="text" required class="form-control" id="bahan" name="bahan" placeholder="Bahan">
                    </div>
                    <div class="form-group">
                        <label>Warna</label>
                        <input type="text" required class="form-control" id="warna" name="warna" placeholder="Warna">
                    </div>
                    <div class="form-group">
                        <label>Kondisi</label>
                        <select type="text" required class="form-control" id="kondisi" name="kondisi" placeholder="">
                            <option value="">aa</option>
                            <option value="">aa</option>
                            <option value="">aa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Periodisasi</label>
                        <select type="text" required class="form-control" id="periodisasi" name="periodisasi" placeholder="">
                            <option value="">aa</option>
                            <option value="">aa</option>
                            <option value="">aa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sejarah Benda</label>
                        <textarea type="text" required class="form-control" id="sejarah" name="sejarah" placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Benda</label>
                        <textarea type="text" required class="form-control" id="deskripsi" name="deskripsi" placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto Benda</label>
                        <input type="file" required class="form-control" id="foto" name="foto" placeholder="">
                    </div>
                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary float-right mr-2">Perbarui</button>
                </div>
            </div>
        </form>
    </div>
</div>


<div id="DeleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <!-- Modal content-->
        <form action="" id="deleteForm" method="post">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus data ini?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <p>Apakah anda yakin ingin Menghapus data ini ?</p>
                    <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Batal</button>
                    <button type="submit" name="" class="btn btn-danger float-right mr-2" data-dismiss="modal" onclick="formSubmit()">Hapus</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection('content')