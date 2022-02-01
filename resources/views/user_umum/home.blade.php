@extends('user_umum.layout.master')

@section('content')
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('public/assets/user/img/slide/bpcb.jpg')}}" alt="" srcset="">
                <div class="carousel-container">
                    <!-- <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div> -->
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img class="w-100" src="{{asset('public/assets/user/img/slide/candi-prambanan.jpg')}}" alt="" srcset="">
                <div class="carousel-container">
                    <!-- <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div> -->
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img class="w-100" src="{{asset('public/assets/user/img/slide/slide.jpeg')}}" alt="" srcset="">
                <div class="carousel-container">
                    <!-- <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div> -->
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Objek Terverifikasi</h2>
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
    <!-- ======= Featured Services Section ======= -->
    <!-- <section id="featured-services" class="featured-services section-bg">
        <div class="container">

            <div class="row no-gutters" style="text-align: -webkit-center;">

                <div class="col-lg-4 col-md-6" style="min-height:300px;">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-laptop"></i></div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <img src="{{asset('public/assets/user/img/cb/candi-sari.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <h4 class="title"><a href="">BANGUNAN CANDI SARI</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-briefcase"></i></div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <img src="{{asset('public/assets/user/img/cb/kapak.png')}}" class="img-fluid" alt="">
                        </div>
                        <h4 class="title"><a href="">BENDA KAPAK BATU BELIUNG</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat tarad limino ata</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{asset('public/assets/user/img/cb/boko.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <h4 class="title"><a href="">SITUS CANDI RATU BOKO</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur trade stravi</p>
                    </div>
                </div>

                @foreach($cagar_budaya as $data)
                <div class="col-lg-4 col-md-6" style="min-height:300px;">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <img src="{{ $data->Foto_CB() }}" class="img-fluid" alt="">
                        </div>
                        <h4 class="title"><a href="">{{ $data->nama}}</a></h4>
                        <p class="description">{{$data->deskripsi}}</p>
                    </div>
                </div>
                @endforeach

            </div>


        </div>
    </section> -->
    <!-- End Featured Services Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>DATA REGISTRASI</h2>
                <p>Rekapitulasi data registrasi objek cagar budaya berdasarkan tahap-tahap pendaftaran sampai dengan
                    penetapan dan penomoran registrasi D.I.Yogyakarta.</p>
            </div>

            <div class="row justify-content-center">
                <!-- <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org  /2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                </path>
                            </svg>
                            <i class="bx bxl-dribbble"></i>
                        </div>
                        <h1>123</h1>
                        <h4>WARISAN BUDAYA BERSIFAT KEBENDAAN</h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div> -->

                <div class="col-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-teal">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                                </path>
                            </svg>
                            <i class="bx bx-arch"></i>
                        </div>
                        <h1>{{ $total_cagar_budaya->count() }}</h1>
                        <h4>CAGAR BUDAYA DI DAERAH ISTIMEWA YOGYAKARTA</h4>
                        <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p> -->
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>CAGAR BUDAYA DAERAH ISTIMEWA YOGYAKARTA</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">SEMUA KATEGORI</li>
                        <li data-filter=".filter-benda">BENDA</li>
                        <li data-filter=".filter-bangunan">BANGUNAN</li>
                        <li data-filter=".filter-struktur">STRUKTUR</li>
                        <li data-filter=".filter-situs">SITUS</li>
                        <li data-filter=".filter-kawasan">KAWASAN</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

            @foreach($total_cagar_budaya as $data)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{$data->kategori}}">
                    <div class="portfolio-wrap">
                        <img src="{{ $data->Foto_CB() }}" class="img-fluid" alt="">
                    </div>
                </div>
            @endforeach

            </div>

        </div>


    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>KONTAK</h2>
            </div>

            <div class="row">

                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Lokasi :</h4>
                            <p>Jalan Yogya-Solo Km. 15 Bogem, Kalasan, Sleman, Yogyakarta 55571</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email :</h4>
                            <p>bpcbdiy@kemdikbud.go.id</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Telephone : </h4>
                            <p>0274-496019</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 d-flex align-items-stretch">
                    <form action="{{ route('saran.create') }}" method="post" role="form" class="info">
                        {{csrf_field()}}
                        
                        <div class="row">
                            <div class="form-group mt-3">
                                <label for="name">Saran</label>
                                <textarea class="form-control" name="isi" rows="4" required></textarea>
                            </div>
                            <div class="text-center mt-4">
                                <button class="btn btn-success" type="submit">Kirim</button>
                            </div>
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Section -->

</main><!-- End #main -->
@endsection('content')