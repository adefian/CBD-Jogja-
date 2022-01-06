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
                        <h4> Data Wilayah Cagar Budaya {{ $data->nama }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Nama</td>
                                        <td>{{ $data->nama }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kategori</td>
                                        <td>{{ $data->kategori }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kecamatan</td>
                                        <td>{{ $data->kecamatan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kabupaten</td>
                                        <td>{{ $data->kabupaten }}</td>
                                    </tr>
                                    <tr>
                                        <td>Latitude</td>
                                        <td>{{ $data->latitude }}</td>
                                    </tr>
                                    <tr>
                                        <td>Longitude</td>
                                        <td>{{ $data->longitude }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div>
                                <div id="map" style="width: 100%; height: 300px; border-radius: 3px;">
                                </div>
                            </div>
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
        zoom: 9.5
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