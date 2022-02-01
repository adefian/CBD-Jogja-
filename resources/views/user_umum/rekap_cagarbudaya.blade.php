@extends('user_umum.layout.master')

@section('content')

<main id="main">

    <div>
        <img src="{{asset('public/assets/user/img/slide/keraton2.jpg')}}" alt="" style="width:100%">
    </div>
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Rekap <br> Cagar Budaya</h2>
                <h5>Dibawah ini adalah Rekap Cagar Budaya dan
                    Rekap Perizinan </h5>
            </div>

            <div class="row">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#" role="tab"
                            aria-controls="nav-home" aria-selected="true">Rekap Cagar Budaya</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="{{ route('rekap') }}" role="tab"
                            aria-controls="nav-contact" aria-selected="false">Rekap Perizinan</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        ...</div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...
                    </div>
                    <div class="tab-pane fade show active" id="nav-contact" role="tabpanel"
                        aria-labelledby="nav-contact-tab">
                        <div class="row mt-4">
                            <div class="col-12">
                                <h3> Tahun {{date('Y')}} </h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Jumlah Cagar Budaya</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($nilai as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $data['kategori'] }}
                                            </td>
                                            <td>{{ $data['nilai'] }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>    
                                </table>

                            </div>
                        </div>
                        <!-- <div class="row mt-4">
                        <div class="col-md-12" style="background:rgb(255, 255, 255)">
                            <canvas id="myChart" width="200" height="70"></canvas>
                    
                        </div>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->
@endsection('content')

<!-- @section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

<script>
    var array =[];
    var array2 =[];
</script>

@foreach ($b as $data)

<script type="text/javascript">
    //Memasukkan data tabel nama kriteria ke array
    array.push(['<?php echo $data?>']);
</script> 

@endforeach

@foreach ($nilai2 as $data)

<script type="text/javascript">
    //Memasukkan data tabel nama kriteria ke array
    array2.push(['<?php echo $data?>']);
</script> 

@endforeach

<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
type: 'line',
data: {
    labels: array,
    datasets: [{
        label: ' Rekap Cagar Budaya ',
        data: array2,
        backgroundColor: [
            'rgb(34,139,34)',
        ],
        borderColor: [
            'rgba(255, 255, 255)',
        ],
        borderWidth: 1
    }]
},
options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero:true
            }
        }]
    }
}
});
</script>
@endsection -->