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
                <div class="card" style="height: 26rem;">
                    <div class="card-header">
                        <h4>Perizinan</h4>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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