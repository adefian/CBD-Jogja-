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
        <img class="w-100" src="{{asset('public/assets/user/img/slide/candi-prambanan.jpg')}}" alt="" srcset="">
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

  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services section-bg">
    <div class="container">

      <div class="row no-gutters">
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <!-- <div class="icon"><i class="bi bi-laptop"></i></div> -->
            <div class="col-lg-6 order-1 order-lg-2">
              <img src="{{asset('public/assets/img/cb/candi-sari.jpg')}}" class="img-fluid" alt="">
            </div>
            <h4 class="title"><a href="">BANGUNAN CANDI SARI</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <!-- <div class="icon"><i class="bi bi-briefcase"></i></div> -->
            <div class="col-lg-6 order-1 order-lg-2">
              <img src="{{asset('public/assets/img/cb/kapak.png')}}" class="img-fluid" alt="">
            </div>
            <h4 class="title"><a href="">BENDA KAPAK BATU BELIUNG</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <!-- <div class="icon"><i class="bi bi-calendar4-week"></i></div> -->
            <div class="col-lg-6 order-1 order-lg-2">
              <img src="{{asset('public/assets/img/cb/boko.jpg')}}" class="img-fluid" alt="">
            </div>
            <h4 class="title"><a href="">SITUS CANDI RATU BOKO</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trade stravi</p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Featured Services Section -->


  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>DATA REGISTRASI</h2>
        <p>Rekapitulasi data registrasi objek cagar budaya berdasarkan tahap-tahap pendaftaran sampai dengan penetapan dan penomoran registrasi D.I.Yogyakarta.</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-blue">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
              </svg>
              <i class="bx bxl-dribbble"></i>
            </div>
            <h1>123</h1>
            <h4>WARISAN BUDAYA BERSIFAT KEBENDAAN</h4>
            <!-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-orange ">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
              </svg>
              <i class="bx bx-file"></i>
            </div>
            <h1>123</h1>
            <h4>OBJEK YANG DIDUGA CAGAR BUDAYA</h4>
            <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p> -->
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-pink">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
              </svg>
              <i class="bx bx-tachometer"></i>
            </div>
            <h1>123</h1>
            <h4>CAGAR BUDAYA DI DAERAH ISTIMEWA YOGYAKARTA</h4>
            <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p> -->
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Services Section -->

  <section id="peta" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>PETA CAGAR BUDAYA</h2>
      </div>

      <div class="row">
        <div class="col-lg-6 align-items-stretch">
          <form action="" method="post" role="form" class="php-email-form">
            <label for="">Pencarian</label>
            <div class="row">
              <div class="form-group mt-3">
                <!-- <label for="name">Saran</label> -->
                <select class="form-control" name="kab" required>
                  <option value="">--Pilih Kabupaten--</option>
                  <option value=""></option>
                  <option value=""></option>
                </select>
              </div>
              <div class="form-group mt-3">
                <!-- <label for="name">Saran</label> -->
                <select class="form-control" name="kec" required>
                  <option value="">--Pilih Kecamatan--</option>
                  <option value=""></option>
                  <option value=""></option>
                </select>
              </div>
              <div class="form-group mt-3">
                <!-- <label for="name">Saran</label> -->
                <select class="form-control" name="kategori" required>
                  <option value="">--Pilih Kategori--</option>
                  <option value=""></option>
                  <option value=""></option>
                </select>
              </div>
              <div class="form-group mt-3">
                <!-- <label for="name">Saran</label> -->
                <input class="form-control" name="nama" required placeholder="Nama Objek">
                
              </div>
              <div class="form-group mt-3">
                <!-- <label for="name">Saran</label> -->
                <input class="form-control" name="periodisasi" required placeholder="Periodisasi">
                
              </div>
              
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan anda telah terkirim. Terima Kasih!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>


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

        <div class="col-lg-4 col-md-6 portfolio-item filter-benda">
          <div class="portfolio-wrap">
            <img src="{{asset('public/assets/user/img/cb/kapak.png')}}" class="img-fluid" alt="">
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-bangunan">
          <div class="portfolio-wrap">
            <img src="{{asset('public/assets/user/img/cb/candi-sari.jpg')}}" class="img-fluid" alt="">
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-struktur">
          <div class="portfolio-wrap">
            <img src="{{asset('public/assets/user/img/cb/payak.jpg')}}" class="img-fluid" alt="">
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-situs">
          <div class="portfolio-wrap">
            <img src="{{asset('public/assets/user/img/cb/boko.jpg')}}" class="img-fluid" alt="">
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-kawasan">
          <div class="portfolio-wrap">
            <img src="{{asset('public/assets/user/img/cb/kubur-batu-gondang.jpg')}}" class="img-fluid" alt="">
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-benda">
          <div class="portfolio-wrap">
            <img src="{{asset('public/assets/user/img/cb/kapak-persegi.JPG')}}" class="img-fluid" alt="">
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-bangunan">
          <div class="portfolio-wrap">
            <img src="{{asset('public/assets/user/img/cb/kraton-yogyakarta.jpg')}}" class="img-fluid" alt="">
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-situs">
          <div class="portfolio-wrap">
            <img src="{{asset('public/assets/user/img/cb/warung-boto.jpg')}}" class="img-fluid" alt="">
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-kawasan">
          <div class="portfolio-wrap">
            <img src="{{asset('public/assets/user/img/cb/tamansari.jpg')}}" class="img-fluid" alt="">
          </div>
        </div>
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
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group mt-3">
                <label for="name">Saran</label>
                <textarea class="form-control" name="message" rows="4" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan anda telah terkirim. Terima Kasih!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>
  <!-- End Contact Section -->

</main><!-- End #main -->
@endsection('content')