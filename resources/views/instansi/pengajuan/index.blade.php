@extends('instansi.layout.master')

@section('title')
Pengajuan
@endsection

@section('content')
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">

        <!--  Traffic  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card" >
                    <div class="card-header">
                        <h4>Pengajuan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="text-align: center; vertical-align: middle;">No</th>
                                        <th style="text-align: center; vertical-align: middle;">Nama</th>
                                        <th style="text-align: center; vertical-align: middle;">Email</th>
                                        <th style="text-align: center; vertical-align: middle;">Tanggal Diajukan</th>
                                        <th style="text-align: center; vertical-align: middle;">Tujuan Pengajuan</th>
                                        <th style="text-align: center; vertical-align: middle;">Berkas</th>
                                        <th style="text-align: center; vertical-align: middle;">Status Pengajuan</th>
                                        <th style="text-align: center; vertical-align: middle;">Validasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengajuan as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->tanggal }}</td>
                                        <td>{{ $data->pesan }}</td>
                                        <td>
                                            <a href="{{ $data->Berkas() }}">
                                            {{ $data->berkas }}
                                            </a>
                                        </td>
                                        <td>
                                            @if($data->status == null)
                                            
                                            @elseif($data->status == 1)
                                            <div class="alert alert-primary" role="alert">
                                                Diproses
                                            </div>
                                            @elseif($data->status == 2)
                                            <div class="alert alert-success" role="alert">
                                                Disetujui
                                            </div>
                                            @elseif($data->status == 3)
                                            <div class="alert alert-danger" role="alert">
                                                Belum diterima
                                            </div>
                                            @endif
                                        </td>
                                        <td>
                                        
                                        <a class="mr-2" href="{{ route('pengajuan.proses', $data->id) }}">
                                            <button class="btn btn-primary btn-sm" title="Diproses">Diproses</button>
                                        </a>
                                        <a class="mr-2" href="#" data-toggle="modal" onclick="setujuData({{$data->id}})"
                                                data-target="#setujuModal">
                                            <button class="btn btn-success btn-sm fa fa-check" title="Disetujui"></button>
                                        </a>

                                        <a href="#" data-toggle="modal" onclick="tolakData({{$data->id}})"
                                                data-target="#tolakModal">
                                        <button class="btn btn-danger btn-sm fa fa-times" title="Ditolak"></button>
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

<div id="setujuModal" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <!-- Modal content-->
        <form action="" id="setujuForm" method="post">

            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Setujui Pengajuan ini?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin Menyetujui Pengajuan ini ?</p>
                    <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Batal</button>
                    <button type="submit" name="" class="btn btn-success float-right mr-2"  onclick="formSubmit()">Setuju</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="tolakModal" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <!-- Modal content-->
        <form action="" id="tolakForm" method="post">

            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tolak Pengajuan ini?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin Menolak Pengajuan ini ?</p>
                    <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Batal</button>
                    <button type="submit" name="" class="btn btn-danger float-right mr-2" onclick="formSubmit()">Menolak</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection('content')

@section('js')

<script type="text/javascript">
function setujuData(id) {
    var id = id;
    var url = '{{route("pengajuan.setuju", ":id") }}';
    url = url.replace(':id', id);
    $("#setujuForm").attr('action', url);
}
</script>

<script type="text/javascript">
function tolakData(id) {
    var id = id;
    var url = '{{route("pengajuan.tolak", ":id") }}';
    url = url.replace(':id', id);
    $("#tolakForm").attr('action', url);
}
</script>

@endsection