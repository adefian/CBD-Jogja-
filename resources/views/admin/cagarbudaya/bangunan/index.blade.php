@extends('admin.layout.master')

@section('title')
Bangunan
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row">
            <div class="col-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1 class="mb-0 font-weight-bold text-gray-800">Cagar Budaya (Bangunan)</h1>
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
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">No</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Nama Objek
                                        </th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Alamat
                                            Lengkap</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Titik
                                            Koordinat X</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Titik
                                            Koordinat Y</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Pemilik</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Riwayat
                                            Kepemilikan</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Pengelola
                                        </th>
                                        <th colspan="8" style="text-align: center; vertical-align: middle;">Ciri-ciri
                                            Bangunan</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Kondisi</th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Periodisasi
                                        </th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Sejarah
                                        </th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Deskripsi
                                        </th>
                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Foto
                                            Bangunan</th>
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
                                    @foreach ($data as $data)
                                    <tr style="text-align: center; vertical-align: middle;">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->latitude }}</td>
                                        <td>{{ $data->longitude }}</td>
                                        <td>{{ $data->pemilik }}</td>
                                        <td>{{ $data->riwayat }}</td>
                                        <td>{{ $data->pengelola }}</td>
                                        <td>{{ $data->luas_bangunan }}</td>
                                        <td>{{ $data->luas_lahan }}</td>
                                        <td>{{ $data->utara }}</td>
                                        <td>{{ $data->selatan }}</td>
                                        <td>{{ $data->timur }}</td>
                                        <td>{{ $data->barat }}</td>
                                        <td>{{ $data->bahan }}</td>
                                        <td>{{ $data->ketinggian }}</td>
                                        <td>{{ $data->kondisi }}</td>
                                        <td>{{ $data->periodesasi }}</td>
                                        <td>{{ $data->sejarah }}</td>
                                        <td>{{ $data->deskripsi }}</td>
                                        <td>
                                            <img src="{{ $data->Foto_CB() }}" alt="foto bangunan" height="80px">
                                        </td>
                                        <td>
                                            <a href="{{ route('cagarbudaya_bangunan.edit', $data->id) }}">
                                                <button class="btn btn-warning btn-sm fa fa-edit edit"
                                                    title="Edit"></button>
                                            </a>

                                            <a href="#" data-toggle="modal" onclick="deleteData({{$data->id}})"
                                                data-target="#DeleteModal">
                                                <button class="fa fa-trash btn-danger btn-sm " title="Hapus"></button>
                                            </a>
                                        </td>
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

@include('admin.cagarbudaya.bangunan.tambah')


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
    var url = '{{route("cagarbudaya_bangunan.hapus", ":id") }}';
    url = url.replace(':id', id);
    $("#deleteForm").attr('action', url);
}
</script>
<!-- ====================== END Hapus Data ====================== -->

@endsection