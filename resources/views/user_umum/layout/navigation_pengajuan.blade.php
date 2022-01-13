<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{(request()->is('dashboard-masyarakat')) ? 'active' : ''}}">
                    <a href="{{ route('masyarakat', $user->id)}}"><i class="menu-icon fa fa-home"></i>Dashboard </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Pengaturan</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li class="{{(request()->is('profil_user', $user->id)) ? 'active' : ''}}">
                            <i class="fa fa-circle-o"></i><a href="{{ route('profil_user', $user->id) }}">Profil</a>
                        </li>
                        <li class="{{(request()->is('profil_user', $user->id)) ? 'active' : ''}}">
                            <i class="fa fa-circle-o"></i><a href="{{ route('profil_user.detail', $user->id) }}">Detail Profil</a>
                        </li>
                        <li>
                            <i class="fa fa-circle-o"></i><a href="{{ route('profil_user.gantipassword', $user->id)}}">Ganti Password</a>
                        </li>
                    </ul>
                </li>
                <li class="{{(request()->is('pengajuan_user')) ? 'active' : ''}}">
                    <a href="{{ route('pengajuan_user', $user->id) }}"> <i class="menu-icon fa fa-book"> </i>Pengajuan</a>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>