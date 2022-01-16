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
                                <form class="needs-validation" action="{{ route('kegiatan.update', $data->id) }}"
                                    method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    {{ method_field('PATCH') }}

                                    <div class="form-group">
                                        <label>Nama Kegiatan</label>
                                        <input type="text" required class="form-control" id="nama_kegiatan"
                                            value="{{ $data->nama_kegiatan }}" name="nama_kegiatan" placeholder="Nama Kegiatan">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Pelaksanaan</label>
                                        <input type="date" required class="form-control" id="tanggal" value="{{ $data->tanggal }}" name="tanggal"
                                            placeholder="Tanggal Pelaksanaan">
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Pelaksanaan</label>
                                        <input type="text" required class="form-control" id="tempat" value="{{ $data->tempat }}" name="tempat"
                                            placeholder="Tempat Pelaksanaan">
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea type="text" required class="form-control" id="keterangan"
                                            name="keterangan" placeholder="Keterangan">{{ $data->keterangan }}</textarea>
                                    </div>
                                    <a href="{{ route('kegiatan.index') }}">
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