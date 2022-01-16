@extends('admin.layout.master')

@section('title')
Dashboard
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
                        <h4>Saran</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTables" class="table table-hover table-bordered">
                            <thead class="thead-light">
                                    <tr>
                                        <th style="text-align: center; vertical-align: middle; width:10%">No</th>
                                        <th style="text-align: center; vertical-align: middle;">Isi Saran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->isi }}</td>
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