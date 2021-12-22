@extends('admin.layout.master')

@section('title')
Kegiatan
@endsection

@section('content')
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kegiatan</h1>
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
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Nama Kegiatan</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Tanggal Pelaksanaan</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Tim Pelaksana</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Keterangan</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Aksi</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kegiatan</h5>

            </div>
            <div class="modal-body">

                <form method="post" action="" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Nama Kegiatan</label>
                        <input type="text" required class="form-control" id="nama" name="nama" placeholder="Nama Kegiatan">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pelaksanaan</label>
                        <input type="date" required class="form-control" id="tgl" name="tgl" placeholder="Tanggal Pelaksanaan">
                    </div>
                    <div class="form-group">
                        <label>Tempat Pelaksanaan</label>
                        <input type="text" required class="form-control" id="tempat" name="Tempat" placeholder="Tempat Pelaksanaan">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea type="text" required class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
                    </div>
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
                        <label>Nama Kegiatan</label>
                        <input type="text" required class="form-control" id="nama" name="nama" placeholder="Nama Kegiatan">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pelaksanaan</label>
                        <input type="date" required class="form-control" id="tgl" name="tgl" placeholder="Tanggal Pelaksanaan">
                    </div>
                    <div class="form-group">
                        <label>Tempat Pelaksanaan</label>
                        <input type="text" required class="form-control" id="tempat" name="Tempat" placeholder="Tempat Pelaksanaan">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea type="text" required class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
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