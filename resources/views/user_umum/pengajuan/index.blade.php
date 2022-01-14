@extends('user_umum.layout.pengajuan_master')

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
                <div class="card">
                    <div class="card-header">
                        <h4>Form Pengajuan</h4>
                    </div>
                    <div class="card-body">

                        <form class="needs-validation" action="{{ route('pengajuan_user.create', $user->id) }}"
                            method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" required id=""
                                        placeholder="Nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="" name="email" required
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="" name="tanggal" required
                                        placeholder="Tanggal">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Pesan</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" id="" name="pesan" required
                                        placeholder="Pengajuan bertujuan apa di BPCB"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Berkas </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="" name="berkas" required placeholder="">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="button" style="margin-left: 3px;" class="btn btn-danger"
                                data-dismiss="modal">Batal</button>
                        </form>
                    </div>
                </div>
            </div><!-- /# column -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Pengajuan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="text-align: center; vertical-align: middle;">No</th>
                                        <th style="text-align: center; vertical-align: middle;">Tanggal Diajukan</th>
                                        <th style="text-align: center; vertical-align: middle;">Tujuan Pengajuan</th>
                                        <th style="text-align: center; vertical-align: middle;">Status Pengajuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pengajuan as $pengajuan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pengajuan->tanggal }}</td>
                                        <td>{{ $pengajuan->pesan }}</td>
                                        <td>
                                            @if($pengajuan->status == 1)
                                            <div class="alert alert-primary" role="alert">
                                                Diproses
                                            </div>
                                            @elseif($pengajuan->status == 2)
                                            <div class="alert alert-success" role="alert">
                                                Disetujui
                                            </div>
                                            @elseif($pengajuan->status == 3)
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