@extends('admin.layout.master')

@section('title')
Bangunan
@endsection

@section('content')
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Cagar Budaya (Bangunan)</h1>
            <button class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah Data</button>
        </div>
        <!--  Traffic  -->
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
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Nama Objek</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Alamat Lengkap</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Titik Koordinat X</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Titik Koordinat Y</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Pemilik</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Riwayat Kepemilikan</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Pengelola</th>
                                        <th colspan="8" style="text-align: center; vertical-align: middle;">Ciri-ciri Bangunan</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Kondisi</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Periodisasi</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Sejarah </th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Deskripsi</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Foto Bangunan</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Aksi</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center; vertical-align: middle;">Luas Bangunan</th>
                                        <th style="text-align: center; vertical-align: middle;">Luas Lahan</th>
                                        <th style="text-align: center; vertical-align: middle;">Batas Utara</th>
                                        <th style="text-align: center; vertical-align: middle;">Batas Selatan</th>
                                        <th style="text-align: center; vertical-align: middle;">Batas Timur</th>
                                        <th style="text-align: center; vertical-align: middle;">Batas Barat</th>
                                        <th style="text-align: center; vertical-align: middle;">Bahan</th>
                                        <th style="text-align: center; vertical-align: middle;">Ketinggian</th>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Bangunan</h5>

            </div>
            <div class="modal-body">

                <form method="post" action="" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Nama Bangunan</label>
                        <input type="text" required class="form-control" id="nama" name="nama" placeholder="Nama Bangunan">
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
                        <label>Koordinat Google X</label>
                        <input type="text" required class="form-control" id="koordinat_x" name="koordinat_x" placeholder="Koordinat X">
                    </div>
                    <div class="form-group">
                        <label>Koordinat Google y</label>
                        <input type="text" required class="form-control" id="koordinat_y" name="koordinat_y" placeholder="Koordinat Y">
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
                        <label>Luas Bangunan</label>
                        <input type="text" required class="form-control" id="luas_bangunan" name="luas_bangunan" placeholder="Luas Bangunan">
                    </div>
                    <div class="form-group">
                        <label>Luas Lahan</label>
                        <input type="text" required class="form-control" id="luas_lahan" name="luas_lahan" placeholder="Luas Lahan">
                    </div>
                    <div class="form-group">
                        <label>Batas Utara</label>
                        <input type="text" required class="form-control" id="batas_utara" name="batas_utara" placeholder="Batas Utara">
                    </div>
                    <div class="form-group">
                        <label>Batas Selatan</label>
                        <input type="text" required class="form-control" id="batas_selatan" name="batas_selatan" placeholder="Batas Selatan">
                    </div>
                    <div class="form-group">
                        <label>Batas Timur</label>
                        <input type="text" required class="form-control" id="batas_timur" name="batas_timur" placeholder="Batas Timur">
                    </div>
                    <div class="form-group">
                        <label>Batas Barat</label>
                        <input type="text" required class="form-control" id="batas_barat" name="batas_barat" placeholder="Batas Barat">
                    </div>
                    <div class="form-group">
                        <label>Bahan</label>
                        <input type="text" required class="form-control" id="bahan" name="bahan" placeholder="Bahan">
                    </div>
                    <div class="form-group">
                        <label>Ketinggian</label>
                        <input type="text" required class="form-control" id="ketinggian" name="ketinggian" placeholder="Ketinggian">
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
                        <label>Sejarah Bangunan</label>
                        <textarea type="text" required class="form-control" id="sejarah" name="sejarah" placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Bangunan</label>
                        <textarea type="text" required class="form-control" id="deskripsi" name="deskripsi" placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto Bangunan</label>
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
                        <label>Nama Bangunan</label>
                        <input type="text" required class="form-control" id="nama" name="nama" placeholder="Nama Bangunan">
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
                        <label>Koordinat Google X</label>
                        <input type="text" required class="form-control" id="koordinat_x" name="koordinat_x" placeholder="Koordinat X">
                    </div>
                    <div class="form-group">
                        <label>Koordinat Google y</label>
                        <input type="text" required class="form-control" id="koordinat_y" name="koordinat_y" placeholder="Koordinat Y">
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
                        <label>Luas Bangunan</label>
                        <input type="text" required class="form-control" id="luas_bangunan" name="luas_bangunan" placeholder="Luas Bangunan">
                    </div>
                    <div class="form-group">
                        <label>Luas Lahan</label>
                        <input type="text" required class="form-control" id="luas_lahan" name="luas_lahan" placeholder="Luas Lahan">
                    </div>
                    <div class="form-group">
                        <label>Batas Utara</label>
                        <input type="text" required class="form-control" id="batas_utara" name="batas_utara" placeholder="Batas Utara">
                    </div>
                    <div class="form-group">
                        <label>Batas Selatan</label>
                        <input type="text" required class="form-control" id="batas_selatan" name="batas_selatan" placeholder="Batas Selatan">
                    </div>
                    <div class="form-group">
                        <label>Batas Timur</label>
                        <input type="text" required class="form-control" id="batas_timur" name="batas_timur" placeholder="Batas Timur">
                    </div>
                    <div class="form-group">
                        <label>Batas Barat</label>
                        <input type="text" required class="form-control" id="batas_barat" name="batas_barat" placeholder="Batas Barat">
                    </div>
                    <div class="form-group">
                        <label>Bahan</label>
                        <input type="text" required class="form-control" id="bahan" name="bahan" placeholder="Bahan">
                    </div>
                    <div class="form-group">
                        <label>Ketinggian</label>
                        <input type="text" required class="form-control" id="ketinggian" name="ketinggian" placeholder="Ketinggian">
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
                        <textarea type="text" required class="form-control" id="deskripsi_benda" name="deskripsi_benda" placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto Bangunan</label>
                        <input type="file" required class="form-control" id="gambar_benda" name="gambar_benda" placeholder="">
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