<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a href="./"><img src="{{asset('public/assets/admin/images/logobpcb.png')}}" style="width: 50px; height: auto;" alt="" > </a>
                <b style="font-size: 24px; color: green; margin-top: 5px;"> BPCB DIY</b>
            <!-- <a class="navbar-brand hidden" href="./"><img src="{{asset('public/assets/admin/images/logo2.png')}}"  alt="Logo"></a> -->
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">
        @if(auth()->user()->role == 'masyarakat')
            <div class="header-left">
                <div class="dropdown for-message">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        <span class="count bg-primary">{{ $message->count() }}</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="message">
                        <p class="red">Kamu Mempunyai {{ $message->count() }} Pesan</p>
                        @foreach($message as $data)
                            <a class="dropdown-item media" href="{{ route('pengajuan_user', auth()->user()->id) }}">
                                <!-- <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span> -->
                                <div class="message media-body">
                                    <span class="float-left">Pengajuan {{ $data->pesan }}</span>
                                    @if($data->status == 2)
                                    <span class="float-left alert alert-success">Disetujui</span>
                                    @elseif($data->status == 3)
                                    <span class="float-left alert alert-danger">Belum diterima</span>
                                    @endif
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{asset('public/assets/admin/images/user.jpg')}}"  alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <!-- <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                    <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                    <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a> -->

                    <a class="nav-link" href="{{ route('logout') }}"><i class="fa fa-power -off"></i>Logout</a>
                </div>
            </div>

        </div>
    </div>
</header>