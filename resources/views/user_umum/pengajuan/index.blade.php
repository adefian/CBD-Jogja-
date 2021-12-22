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
                        <h4>Pengajuan</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" id="" placeholder="Nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Enail</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="" name="tanggal" placeholder="Tanggal">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Pesan</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" id="" name="pesan" placeholder="Pengajuan bertujuan apa di BPCB"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Berkas </label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="" name="berkas" placeholder="">
                            </div>
                        </div>

                    </div>

                </div>
            </div><!-- /# column -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="height: 26rem;">
                    <div class="card-header">
                        <h4>Pengajuan</h4>
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
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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


@endsection('content')