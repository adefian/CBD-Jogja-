@extends('admin.layout.master')

@section('title')
Wilayah
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
                        <h4>Data Wilayah</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTables" class="table table-hover table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Objek</th>
                                        <th>Kategori</th>
                                        <th>Kecamatan</th>
                                        <th>Kabupaten</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $data)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->kategori }}</td>
                                        <td>{{ $data->kecamatan }}</td>
                                        <td>{{ $data->kabupaten }}</td>
                                        <td>
                                            <a href="{{ route('wilayah.lihat', $data->id) }}">
                                                <button class="btn btn-warning fa fa-eye"
                                                    title="Lihat"></button>
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


@endsection('content')