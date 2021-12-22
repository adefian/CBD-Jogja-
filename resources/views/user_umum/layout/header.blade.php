<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="#" class="logo "><img src="{{asset('public/assets/user/img/logobpcb.png')}}"  width="60px" height="auto" alt="" ></a>
      <h1 class="logo "><a href="#">SISTEM INFORMASI CAGAR BUDAYA</a></h1>


      <nav id="navbar" class="navbar" style="margin-left: 7%">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">HOME</a></li>
          <!-- <li><a class="nav-link scrollto" href="#about">About</a></li> -->
          <li class="dropdown"><a href="#"><span>CAGAR BUDAYA</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Benda Cagar Budaya</a></li>
              <li><a href="#">Bangunan Cagar Budaya</a></li>
              <li><a href="#">Struktur Cagar Budaya</a></li>
              <li><a href="#">Situs Cagar Budaya</a></li>
              <li><a href="#">Kawasan Cagar Budaya</a></li>
            </ul>
            </li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a class="nav-link scrollto" href="#">REKAP</a></li>
              <li class="dropdown"><a href="#peta"><span>PETA</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Peta Cagar Budaya</a></li>
              <!-- <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li> -->
            </ul>
            </li>
          <li><a class="nav-link scrollto" href="#">PENCARIAN</a></li>
          <li><a class="nav-link scrollto" href="#contact">KONTAK</a></li>
          <li><a class="nav-link scrollto" href="{{ route('pengajuan_user') }}">PENGAJUAN</a></li>
          <li><a class="nav-link scrollto" href="{{ route('login') }}">LOGIN</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a> -->
        </ul>
          <!-- <img src="{{asset('public/image/user.png')}}" width="27px" height="27px" style="margin-left: 12px" class=""> -->
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->