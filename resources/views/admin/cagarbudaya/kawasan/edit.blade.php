@extends('admin.layout.master')

@section('title')
Edit Cagar Budaya Kawasan
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Cagar Budaya Kawasan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Cagar Budaya</a></li>
                            <li class="active">Kawasan</li>
                        </ol>
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
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <form class="needs-validation"
                                    action="{{ route('cagarbudaya_kawasan.update', $data->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Nama Kawasan</label>
                                        <input type="text" required class="form-control" id="nama"
                                            value="{{ $data->nama }}" name="nama" placeholder="Nama Kawasan">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" required class="form-control" id="alamat"
                                            value="{{ $data->alamat }}" name="alamat" placeholder="Alamat">
                                    </div>
                                    <div class="form-group">
                                        <label>Kabupaten</label>
                                        <input type="text" class="form-control" id="kabupaten"
                                            value="{{ $data->kabupaten }}" name="kabupaten" placeholder="Kabupaten">
                                    </div>
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <input type="text" class="form-control" id="kecamatan"
                                            value="{{ $data->kecamatan }}" name="kecamatan" placeholder="Kecamatan">
                                    </div>
                                    <div class="form-group">
                                        <label>Kelurahan/Desa</label>
                                        <input type="text" class="form-control" id="kelurahan"
                                            value="{{ $data->kelurahan }}" name="kelurahan" placeholder="Kelurahan">
                                    </div>
                                    <div class="form-group">
                                        <label>Kode Pos</label>
                                        <input type="number" class="form-control" id="kodepos"
                                            value="{{ $data->kodepos }}" name="kodepos" placeholder="Kode Pos">
                                    </div>
                                    <div class="form-group">
                                        <label>Pemilik</label>
                                        <input type="text" class="form-control" id="pemilik"
                                            value="{{ $data->pemilik }}" name="pemilik" placeholder="Pemilik">
                                    </div>
                                    <div class="form-group">
                                        <label>Riwayat Kepemilikan</label>
                                        <textarea type="text" class="form-control" id="riwayat" name="riwayat"
                                            placeholder="Riwayat Kepemilikan">{{ $data->riwayat }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Pengelola</label>
                                        <input type="text" class="form-control" id="pengelola"
                                            value="{{ $data->pengelola }}" name="pengelola" placeholder="Pengelola">
                                    </div>
                                    <div class="form-group">
                                        <label>Luas Lahan</label>
                                        <input type="text" class="form-control" id="luas_lahan"
                                            value="{{ $data->luas_lahan }}" name="luas_lahan" placeholder="Luas Lahan">
                                    </div>
                                    <div class="form-group">
                                        <label>Batas Utara</label>
                                        <input type="text" class="form-control" id="utara"
                                            value="{{ $data->utara }}" name="utara" placeholder="Batas Utara">
                                    </div>
                                    <div class="form-group">
                                        <label>Batas Selatan</label>
                                        <input type="text" class="form-control" id="selatan"
                                            value="{{ $data->selatan }}" name="selatan" placeholder="Batas Selatan">
                                    </div>
                                    <div class="form-group">
                                        <label>Batas Timur</label>
                                        <input type="text" class="form-control" id="timur"
                                            value="{{ $data->timur }}" name="timur" placeholder="Batas Timur">
                                    </div>
                                    <div class="form-group">
                                        <label>Batas Barat</label>
                                        <input type="text" class="form-control" id="barat"
                                            value="{{ $data->barat }}" name="barat" placeholder="Batas Barat">
                                    </div>
                                    <div class="form-group">
                                        <label>Ketinggian</label>
                                        <input type="text" class="form-control" id="ketinggian"
                                            value="{{ $data->ketinggian }}" name="ketinggian" placeholder="Ketinggian">
                                    </div>
                                    <div class="form-group">
                                        <label>Kondisi</label>
                                        <input type="text" class="form-control" id="kondisi"
                                            value="{{ $data->kondisi }}" name="kondisi" placeholder="Kondisi">
                                    </div>
                                    <div class="form-group">
                                        <label>Periodesasi</label>
                                        <input type="text" class="form-control" id="periodesasi"
                                            value="{{ $data->periodesasi }}" name="periodesasi" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Sejarah Kawasan</label>
                                        <textarea type="text" class="form-control" id="sejarah" name="sejarah"
                                            placeholder="">{{ $data->sejarah }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi Kawasan</label>
                                        <textarea type="text" required class="form-control" id="deskripsi"
                                            name="deskripsi" placeholder="">{{ $data->deskripsi }}</textarea>
                                    </div>

                            </div>
                            <div class="col-6">
                                <img src="{{ $data->Foto_CB() }}" alt="foto Kawasan" width="80%">

                                <div class="form-group">
                                    <label>Foto Kawasan</label>
                                    <input type="file" class="form-control" id="foto" name="foto" placeholder="">
                                </div>

                                <button type="submit" class="btn btn-warning ml-2">Update</button>
                                <a href="{{ route('cagarbudaya_kawasan') }}">
                                    <button type="button" style="margin-left: 3px;" class="btn btn-danger"
                                        data-dismiss="modal">Batal</button>
                                </a>

                                </form>
                                <hr>
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <div id="map" style="width: 100%; height: 200px; border-radius: 3px;">
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col-12">
                                        <form class="needs-validation" novalidate=""
                                            action="{{ route('cagarbudaya_bangunan.editlokasi', $data->id) }}"
                                            method="POST" enctype="multipart/form-data">

                                            {{ csrf_field() }}
                                            {{ method_field('POST') }}

                                            <div class="form-group">
                                                <label>Latitude</label>
                                                <input type="number" class="form-control" id="latitude"
                                                    value="{{ $data->latitude }}" name="latitude"
                                                    placeholder="Latitude">
                                            </div>
                                            <div class="form-group">
                                                <label>Longitude</label>
                                                <input type="number" class="form-control" id="longitude"
                                                    value="{{ $data->longitude }}" name="longitude"
                                                    placeholder="Longitude">
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-success">Edit Lokasi</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ====================== Array ================== -->
<script>
var array = [];
</script>
@if($data)
<script>
//Memasukkan data tabel ke array 
array.push(['<?php echo $data->nama ?>', '<?php echo $data->latitude ?>', '<?php echo $data->longitude ?>',
    '<?php echo $data->deskripsi ?>', '<?php echo $data->kecamatan ?>', '<?php echo $data->foto ?>'
]);
</script>
@endif
<!-- ====================== Array ================== -->

@section('js')
<!-- ================================ Maps =================================== -->

<script>
function initMap() {
    var bounds = new google.maps.LatLngBounds();
    var peta = new google.maps.Map(document.getElementById("map"), {
        center: {
            lat: -7.899160514864099,
            lng: 110.4546618082422
        },
        zoom: 9
    });
    var infoWindow = new google.maps.InfoWindow(),
        marker, i;
    for (var i = 0; i < array.length; i++) {

        var position = new google.maps.LatLng(array[i][1], array[i][2]);
        bounds.extend(position);
        var marker = new google.maps.Marker({
            position: position,
            map: peta,
            icon: 'https://img.icons8.com/plasticine/40/000000/marker.png',
            title: array[i][0]
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                var infoWindowContent =
                    '<h6>' + array[i][0] + '</h6>' +
                    '<img height="130" style="margin:0 auto; display:block;" src="../public/Images/cagar_budaya/' +
                    array[i][5] + '"/><br/>' +
                    'Kecamatan : ' + array[i][4] + '<br/>' +
                    'Keterangan : ' + array[i][3] + '<br/>';
                infoWindow.setContent(infoWindowContent);
                infoWindow.open(peta, marker);
            }
        })(marker, i));
    }

}
</script>
<!-- ======================== End Maps ====================== -->


<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv-h2II7DbFQkpL9pDxNRq3GWXqS5Epts&callback=initMap"
    type="text/javascript"></script>
@endsection

@endsection