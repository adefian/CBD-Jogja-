@extends('user_umum.layout.master')

@section('content')


<main id="main">

    <section id="peta" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>PETA CAGAR BUDAYA</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 align-items-stretch">
                    <!-- <form action="" method="post" role="form" class="php-email-form">
                        <label for="">Pencarian</label>
                        <div class="row">
                            <div class="form-group mt-3">
                                <label for="name">Saran</label>
                                <select class="form-control" name="kab" required>
                                    <option value="">--Pilih Kabupaten--</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Saran</label>
                                <select class="form-control" name="kec" required>
                                    <option value="">--Pilih Kecamatan--</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Saran</label>
                                <select class="form-control" name="kategori" required>
                                    <option value="">--Pilih Kategori--</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Saran</label>
                                <input class="form-control" name="nama" required placeholder="Nama Objek">

                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Saran</label>
                                <input class="form-control" name="periodisasi" required placeholder="Periodisasi">

                            </div>

                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Pesan anda telah terkirim. Terima Kasih!</div>
                            </div>
                            <div class="text-center"><button type="submit">Kirim</button></div>
                    </form> -->
                    <div id="map" style="width: 100%; height: 500px; border-radius: 3px;">
                    </div>
                </div>

            </div>

        </div>
    </section>
</main>


<!-- ====================== Array ================== -->
<script>
var array = [];
</script>
@foreach($cagar_budaya as $data)
<script>
//Memasukkan data tabel ke array 
array.push(['<?php echo $data->nama ?>', '<?php echo $data->latitude ?>', '<?php echo $data->longitude ?>',
    '<?php echo $data->deskripsi ?>', '<?php echo $data->kecamatan ?>', '<?php echo $data->foto ?>'
]);
</script>
@endforeach
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
        zoom: 10
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