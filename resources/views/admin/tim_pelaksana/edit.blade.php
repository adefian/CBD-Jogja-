@extends('admin.layout.master')

@section('title')
Edit Kegiatan
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Kegiatan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Kegiatan</a></li>
                            <li class="active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!--  Traffic  -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <form class="needs-validation" action="{{ route('timpelaksana.update', $data->id) }}"
                                    method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    {{ method_field('PATCH') }}

                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" required class="form-control" value="{{ $data->nama }}" id="nama" name="nama"
                                            placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <input type="text" required class="form-control" value="{{ $data->jabatan }}" id="jabatan" name="jabatan"
                                            placeholder="Jabatan">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" required class="form-control" value="{{ $data->alamat }}" id="alamat" name="alamat"
                                            placeholder="Alamat">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" required class="form-control" value="{{ $data->tanggal_lahir }}" id="tanggal_lahir"
                                            name="tanggal_lahir" placeholder="Tanggal Lahir">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                            <option value="" selected disabled>- Jenis Kelamin -</option>
                                            <option value="L" @if($data->jenis_kelamin == "L" ) {{'selected="selected"'}} @endif>Laki - laki</option>
                                            <option value="P" @if($data->jenis_kelamin == "P" ) {{'selected="selected"'}} @endif>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Telepon</label>
                                        <input type="number" required class="form-control" value="{{ $data->telepon }}" id="telepon" name="telepon"
                                            placeholder="Telepon">
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea type="text" required class="form-control" id="keterangan"
                                            name="keterangan" placeholder="Keterangan">{{ $data->keterangan }}</textarea>
                                    </div>

                                    <a href="{{ route('timpelaksana.index') }}">
                                        <button type="button" style="margin-left: 3px;" class="btn btn-danger"
                                            data-dismiss="modal">Batal</button>
                                    </a>
                                    <button type="submit" class="btn btn-warning">Perbarui</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection