@extends('user_umum.layout.master')

@section('content')

<main id="main">

    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Cagar Budaya {{ $kategori }}</h2>
                <p>Kekayaan budaya atau cagar budaya adalah sebuah benda fisik yang merupakan bagian dari warisan budaya
                    suatu kelompok atau masyarakat. Barang-barang tersebut termasuk bangunan bersejarah, karya seni,
                    situs arkeologi, perpustakaan dan museum.</p>
            </div>

            <div class="row">
                @foreach($cagar_budaya as $data)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" style="border-radius: 10%;">
                    <div class="member">
                        <img style="border-radius: 5%; max-height: 500px; max-width:300px;" src="{{ $data->Foto_CB() }}"
                            alt="">
                        <h4>{{ $data->nama }}</h4>
                        <h6>{{ $data->kategori }}</h6>
                        <p>
                            {{ $data->deskripsi }}
                        </p>
                        <!-- <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div> -->
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>

</main><!-- End #main -->
@endsection('content')