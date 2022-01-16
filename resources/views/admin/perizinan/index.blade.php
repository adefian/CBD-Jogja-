@extends('admin.layout.master')

@section('title')
Perizinan
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
                        <h4>Perizinan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTables" class="table table-hover table-bordered">
                            <thead class="thead-light">
                                    <tr>
                                        <th style="text-align: center; vertical-align: middle;">No</th>
                                        <th style="text-align: center; vertical-align: middle;">Nama</th>
                                        <th style="text-align: center; vertical-align: middle;">Email</th>
                                        <th style="text-align: center; vertical-align: middle;">Tanggal Diajukan</th>
                                        <th style="text-align: center; vertical-align: middle;">Tujuan Pengajuan</th>
                                        <th style="text-align: center; vertical-align: middle;">Berkas</th>
                                        <th style="text-align: center; vertical-align: middle;">Pesan Balasan dari Instansi</th>
                                        <th style="text-align: center; vertical-align: middle;">Status Pengajuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->user->name }}</td>
                                        <td>{{ $data->user->email }}</td>
                                        <td>{{ $data->created_at }}</td>
                                        <td>{{ $data->pesan }}</td>
                                        <td>{{ $data->berkas }}</td>
                                        <td>{{ $data->pesan_instansi }}</td>
                                        <td>
                                            @if($data->status == 1)
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


@endsection('content')