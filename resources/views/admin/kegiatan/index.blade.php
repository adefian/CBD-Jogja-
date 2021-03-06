@extends('admin.layout.master')

@section('title')
Kegiatan
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row">
            <div class="col-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1 class="mb-0 font-weight-bold text-gray-800">Kegiatan</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-sm btn-success shadow-sm" data-toggle="modal"
                            data-target="#tambah"><i class="fa fa-plus"></i> Tambah Data</button>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTables" class="table table-hover table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="text-align: center; vertical-align: middle;">No</th>
                                        <th style="text-align: center; vertical-align: middle;">Nama Kegiatan</th>
                                        <th style="text-align: center; vertical-align: middle;">Tanggal Pelaksanaan</th>
                                        <th style="text-align: center; vertical-align: middle;">Tempat Pelaksanaan</th>
                                        <th style="text-align: center; vertical-align: middle;">Jumlah Pelaksana</th>
                                        <th style="text-align: center; vertical-align: middle;">Keterangan</th>
                                        <th style="text-align: center; vertical-align: middle;">Aksi</th>
                                        <th style="display:none;">id</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach($data as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nama_kegiatan }}</td>
                                        <td>{{ $data->tanggal }}</td>
                                        <td>{{ $data->tempat }}</td>
                                        <td>{{ $data->jumlah_pelaksana }}</td>
                                        <td>{{ $data->keterangan }}</td>
                                        <td>
                                            <a href="{{ route('kegiatan.edit', $data->id) }}">
                                                <button class="btn btn-warning btn-sm fa fa-edit edit"
                                                    title="Edit"></button>
                                            </a>
                                            <a href="#" data-toggle="modal" onclick="deleteData({{$data->id}})"
                                                data-target="#DeleteModal">
                                                <button class="fa fa-trash btn-danger btn-sm" title="Hapus"></button>
                                            </a>
                                        </td>
                                        <td style="display:none;">{{$data->id}}</td>
                                    </tr>
                                    @endforeach
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
@include('admin.kegiatan.tambah')

<div id="DeleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <!-- Modal content-->
        <form action="" id="deleteForm" method="post">

            <div class="modal-content">
                <div class="modal-header d-flex justify-content-beetwen">
                    <h5 class="modal-title">Hapus data ini?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <p>Apakah anda yakin ingin Menghapus data ini ?</p>
                    <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Batal</button>
                    <button type="submit" name="" class="btn btn-danger float-right mr-2"
                        onclick="formSubmit()">Hapus</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection('content')

@section('js')

<!-- ====================== Hapus Data ====================== -->

<script type="text/javascript">
function deleteData(id) {
    var id = id;
    var url = '{{route("kegiatan.destroy", ":id") }}';
    url = url.replace(':id', id);
    $("#deleteForm").attr('action', url);
}
</script>
<!-- ====================== END Hapus Data ====================== -->

@endsection