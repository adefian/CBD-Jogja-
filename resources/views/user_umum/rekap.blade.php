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
                <h5>Dibawah ini adalah Rekap Objek Temuan Lama, Rekap Objek Temuan Baru, Rekap Objek Tidak Ditemukan dan
                    Rekap Perizinan </h5>
            </div>

            <div class="row">
                <nav>
                    <div class="nav nav-tabs  d-flex justify-content-between" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#" role="tab"
                            aria-controls="nav-home" aria-selected="true">Rekap Temuan Lama</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#" role="tab"
                            aria-controls="nav-profile" aria-selected="false">Rekap Temuan Baru</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#" role="tab"
                            aria-controls="nav-contact" aria-selected="false">Rekap Tidak Ditemukan</a>
                        <a class="nav-item nav-link active" id="nav-contact-tab" data-toggle="tab" href="#" role="tab"
                            aria-controls="nav-contact" aria-selected="false">Rekap Perizinan</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        ...</div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...
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
                                            <th>Bulan/Tahun</th>
                                            <th>Jumlah Perizinan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $data => $v)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $bulan[$v->month] }}
                                            </td>
                                            <td>{{ $v->count }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->
@endsection('content')

@section('js')
<!-- <script>
$('#myTab a').on('click', function(event) {
    event.preventDefault()
    $(this).tab('show')
})
</script> -->
@endsection