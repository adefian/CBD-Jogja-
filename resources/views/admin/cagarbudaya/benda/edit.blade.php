@extends('admin.layout.master')

@section('title')
Edit Cagar Budaya Benda
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Cagar Budaya Benda</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Cagar Budaya</a></li>
                            <li class="active">Benda</li>
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
                                    action="{{ route('cagarbudaya_benda.update', $data->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Nama Benda</label>
                                        <input type="text" class="form-control" value="{{ $data->nama }}" name="nama"
                                            placeholder="Nama Benda" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Penyimpanan</label>
                                        <input type="text" class="form-control" value="{{ $data->tempat_penyimpanan }}"
                                            name="tempat_penyimpanan" placeholder="Tempat Penyimpanan">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Kegiatan</label>
                                        <select class="form-control" name="nama_kegiatan">
                                            <option value="" selected disabled>- Kegiatan -</option>
                                            @foreach ($kegiatan as $kegiatan)
                                                <option value="{{ $kegiatan->nama_kegiatan }}"  @if($kegiatan->nama_kegiatan == $data->nama_kegiatan ) {{'selected="selected"'}} @endif>{{ $kegiatan->nama_kegiatan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" value="{{ $data->alamat }}"
                                            name="alamat" placeholder="Alamat">
                                    </div>
                                    <div class="form-group">
                                        <label>Kabupaten</label>
                                        <input type="text" class="form-control" value="{{ $data->kabupaten }}"
                                            name="kabupaten" placeholder="Kabupaten">
                                    </div>
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <input type="text" class="form-control" value="{{ $data->kecamatan }}"
                                            name="kecamatan" placeholder="Kecamatan">
                                    </div>
                                    <div class="form-group">
                                        <label>Kelurahan/Desa</label>
                                        <input type="text" class="form-control" value="{{ $data->kelurahan }}"
                                            name="kelurahan" placeholder="Kelurahan">
                                    </div>
                                    <div class="form-group">
                                        <label>Kode Pos</label>
                                        <input type="number" class="form-control" value="{{ $data->kodepos }}"
                                            name="kodepos" placeholder="Kode Pos">
                                    </div>
                                    <div class="form-group">
                                        <label>Pemilik</label>
                                        <input type="text" class="form-control" value="{{ $data->pemilik }}"
                                            name="pemilik" placeholder="Pemilik">
                                    </div>
                                    <div class="form-group">
                                        <label>Riwayat Kepemilikan</label>
                                        <textarea type="text" class="form-control" name="riwayat"
                                            placeholder="Riwayat Kepemilikan">{{ $data->riwayat }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Pengelola</label>
                                        <input type="text" class="form-control" value="{{ $data->pengelola }}"
                                            name="pengelola" placeholder="Pengelola">
                                    </div>
                                    <div class="form-group">
                                        <label>Panjang</label>
                                        <input type="text" class="form-control" value="{{ $data->panjang }}"
                                            name="panjang" placeholder="Panjang">
                                    </div>
                                    <div class="form-group">
                                        <label>Lebar</label>
                                        <input type="text" class="form-control" value="{{ $data->lebar }}" name="lebar"
                                            placeholder="Lebar">
                                    </div>
                                    <div class="form-group">
                                        <label>Tinggi</label>
                                        <input type="
                                        " class="form-control" value="{{ $data->tinggi }}" name="tinggi"
                                            placeholder="Tinggi">
                                    </div>
                                    <div class="form-group">
                                        <label>Tebal</label>
                                        <input type="text" class="form-control" value="{{ $data->tebal }}" name="tebal"
                                            placeholder="Tebal">
                                    </div>
                                    <div class="form-group">
                                        <label>Diameter</label>
                                        <input type="text" class="form-control" value="{{ $data->diameter }}"
                                            name="diameter" placeholder="Diameter">
                                    </div>
                                    <div class="form-group">
                                        <label>Berat</label>
                                        <input type="text" class="form-control" value="{{ $data->berat }}" name="berat"
                                            placeholder="Berat">
                                    </div>
                                    <div class="form-group">
                                        <label>Bahan</label>
                                        <input type="text" class="form-control" value="{{ $data->bahan }}" name="bahan"
                                            placeholder="Bahan">
                                    </div>
                                    <div class="form-group">
                                        <label>Warna</label>
                                        <input type="text" class="form-control" value="{{ $data->warna }}" name="warna"
                                            placeholder="Warna">
                                    </div>
                                    <div class="form-group">
                                        <label>Kondisi</label>
                                        <input type="text" class="form-control" value="{{ $data->kondisi }}"
                                            name="kondisi" placeholder="Kondisi">
                                    </div>
                                    <div class="form-group">
                                        <label>Periodesasi</label>
                                        <input type="text" class="form-control" value="{{ $data->periodesasi }}"
                                            name="periodesasi" placeholder="Periodesasi">
                                    </div>
                                    <div class="form-group">
                                        <label>Sejarah Benda</label>
                                        <textarea type="text" class="form-control" name="sejarah"
                                            placeholder="">{{ $data->sejarah }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi Benda</label>
                                        <textarea type="text" class="form-control" name="deskripsi" placeholder=""
                                            required>{{ $data->deskripsi }}</textarea>
                                    </div>

                            </div>
                            <div class="col-6">
                                <img src="{{ $data->Foto_CB() }}" alt="foto benda" width="80%">
                                <div class="form-group mt-2">
                                    <label>Foto Benda</label>
                                    <input type="file" class="form-control" name="foto" placeholder="">
                                </div>

                                <button type="submit" class="btn btn-warning ml-2">Update</button>
                                <a href="{{ route('cagarbudaya_benda') }}">
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
                                            action="{{ route('cagarbudaya_benda.editlokasi', $data->id) }}"
                                            method="POST" enctype="multipart/form-data">

                                            {{ csrf_field() }}
                                            {{ method_field('POST') }}

                                            <div class="form-group">
                                                <label for="latitude">Latitude</label>
                                                <div class="input-group">
                                                    <input type="number" step="any" name="latitude" class="form-control"
                                                        value="{{ $data->latitude }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="longitude">Longitude</label>
                                                <div class="input-group">
                                                    <input name="longitude" step="any" type="number"
                                                        class="form-control" value="{{ $data->longitude }}" required>
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <button type="submit" class="btn btn-success ml-2">Edit Lokasi</button>

                                                <a href="{{ route('cagarbudaya_benda') }}">
                                                    <button type="button" style="margin-left: 3px;"
                                                        class="btn btn-primary" data-dismiss="modal">Kembali</button>
                                                </a>
                                            </div>
                                        </form>
                                        <button data-toggle="modal" data-target="#editModal" class="btn btn-warning"
                                            title="Edit disini" style="margin-left: auto;">Penentuan Lokasi</button>
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
<!-- .animated -->
<!-- ====================================== EDIT LOKASI ==================================== -->
<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between">
                <h5 class="modal-title">Edit Lokasi Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 col-12">
                        <div id="mapInput" style="width: 100%; height: 300px; border-radius: 3px;"></div>
                        <p>klik satu kali untuk menentukan posisi</p>
                    </div>
                    <div class="col-lg-5 col-sm-12 col-12">
                        <form class="needs-validation" novalidate=""
                            action="{{ route('cagarbudaya_benda.editlokasi', $data->id) }}" method="POST"
                            enctype="multipart/form-data">

                            {{ csrf_field() }}
                            {{ method_field('POST') }}

                            <div class="form-group">
                                <label for="latitude">Latitude</label>
                                <div class="input-group">
                                    <input type="number" step="any" id="lat" name="latitude" class="form-control"
                                        value="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="longitude">Longitude</label>
                                <div class="input-group">
                                    <input name="longitude" step="any" id="leng" type="number" class="form-control"
                                        value="" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Edit</button>
                                <button type="button" class="btn btn-secondary float-right"
                                    data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====================================== END EDIT LOKASI ==================================== -->

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
    if (navigator.geolocation) {
        //Mengambil Fungsi golocation
        navigator.geolocation.getCurrentPosition(lokasi);
    } else {
        swal("Maaf Browser tidak Support Untuk Menambahkan lokasi map");
    }

    //Variabel Marker
    var marker;

    function taruhMarker(peta, posisiTitik) {

        if (marker) {
            // pindahkan marker
            marker.setPosition(posisiTitik);
        } else {
            // buat marker baru
            marker = new google.maps.Marker({
                position: posisiTitik,
                map: peta,
                icon: 'https://img.icons8.com/plasticine/40/000000/marker.png',
            });
        }

    }

    //Buat Peta

    var peta2 = new google.maps.Map(document.getElementById("map"), {
        center: {
            lat: -7.899160514864099,
            lng: 110.4546618082422
        },
        zoom: 9
    });

    var peta = new google.maps.Map(document.getElementById("mapInput"), {
        center: {
            lat: -7.899160514864099,
            lng: 110.4546618082422
        },
        zoom: 9
    });

    // ============================== LatLngBounds ================================

    var bounds = new google.maps.LatLngBounds();
    var infoWindow = new google.maps.InfoWindow(),
        markerr, i;
    for (var i = 0; i < array.length; i++) {

        var positionn = new google.maps.LatLng(array[i][1], array[i][2]);
        bounds.extend(positionn);
        var markerr = new google.maps.Marker({
            position: positionn,
            map: peta2,
            icon: 'https://img.icons8.com/plasticine/40/000000/marker.png',
            title: array[i][0]
        });
        google.maps.event.addListener(markerr, 'click', (function(markerr, i) {
            return function() {
                var infoWindowContent =
                    '<h6>' + array[i][0] + '</h6>' +
                    '<img height="130" style="margin:0 auto; display:block;" src="../public/Images/cagar_budaya/' +
                    array[i][5] + '"/><br/>' +
                    'Kecamatan : ' + array[i][4] + '<br/>' +
                    'Keterangan : ' + array[i][3] + '<br/>';
                infoWindow.setContent(infoWindowContent);
                infoWindow.open(peta2, markerr);
            }
        })(markerr, i));
    }

    //Fungsi untuk geolocation
    function lokasi(position) {
        //Mengirim data koordinat ke form input
        document.getElementById("lat").value = position.coords.latitude;
        document.getElementById("leng").value = position.coords.longitude;
        //Current Location
        var lat = position.coords.latitude;
        var long = position.coords.longitude;
        var latlong = new google.maps.LatLng(lat, long);

        //Current Marker 
        var currentMarker = new google.maps.Marker({
            position: latlong,
            icon: 'https://img.icons8.com/plasticine/40/000000/user-location.png',
            map: peta,
            title: "Anda Disini"
        });
        //Membuat Marker Map dengan Klik
        var latLng = new google.maps.LatLng(-8.408698, 114.2339090);

        var addMarkerClick = google.maps.event.addListener(peta, 'click', function(event) {


            taruhMarker(this, event.latLng);

            //Kirim data ke form input dari klik
            document.getElementById("lat").value = event.latLng.lat();
            document.getElementById("leng").value = event.latLng.lng();

        });

    }
}
</script>
<!-- ======================== End Maps ====================== -->


<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv-h2II7DbFQkpL9pDxNRq3GWXqS5Epts&callback=initMap"
    type="text/javascript"></script>
@endsection

@endsection