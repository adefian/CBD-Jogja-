@extends('user_umum.layout.pengajuan_master')

@section('title')
Profil
@endsection

@section('content')

<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">

        <!--  Traffic  -->
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title mb-3">Profile Card</strong>
                    </div>
                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <img class="rounded-circle mx-auto d-block" style="height: 200px;" src="{{ $masyarakat->Foto() }}" alt="Card image cap">
                            <h5 class="text-sm-center mt-2 mb-1">{{ $user->name }}</h5>
                            <div class="location text-sm-center"><i class="fa fa-map-marker"></i> {{ $masyarakat->alamat }}</div>
                        </div>
                        <hr>
                        <div class="card-text text-sm-center">
                            <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                            <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                            <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                            <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title mb-3"> Detail </strong>
                    </div>
                    <div class="card-body">
                        <table>

                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td>:</td>
                                <td>{{ $masyarakat->tempat_lahir }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td>{{ $masyarakat->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>{{ $masyarakat->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <td>No Telepon</td>
                                <td>:</td>
                                <td>{{ $masyarakat->telepon }}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td>{{ $masyarakat->pekerjaan }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $masyarakat->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Kode Pos</td>
                                <td>:</td>
                                <td>{{ $masyarakat->kode_pos }}</td>
                            </tr>
                            <tr>
                                <td>Kategori Pendaftar </td>
                                <td>:</td>
                                <td>{{ $masyarakat->kategori_pendaftar }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--  /Traffic -->
        <div class="clearfix"></div>
        <!-- Orders -->

        <!-- /.orders -->
        <!-- To Do and Live Chat -->

        <!-- /To Do and Live Chat -->
        <!-- Calender Chart Weather  -->

        <!-- /#event-modal -->
        <!-- Modal - Calendar - Add Category -->
        <div class="modal fade none-border" id="add-category">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><strong>Add a category </strong></h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Category Name</label>
                                    <input class="form-control form-white" placeholder="Enter name" type="text"
                                        name="category-name" />
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Choose Category Color</label>
                                    <select class="form-control form-white" data-placeholder="Choose a color..."
                                        name="category-color">
                                        <option value="success">Success</option>
                                        <option value="danger">Danger</option>
                                        <option value="info">Info</option>
                                        <option value="pink">Pink</option>
                                        <option value="primary">Primary</option>
                                        <option value="warning">Warning</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light save-category"
                            data-dismiss="modal">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#add-category -->
    </div>
    <!-- .animated -->
</div>
@endsection('content')