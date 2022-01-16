<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class=" {{(request()->is('admin')) ? 'active' : ''}}">
                    <a href="{{ route('admin') }}"><i class="menu-icon fa fa-home"></i>Dashboard </a>
                </li>
                <li class="{{(request()->is('pengguna')) ? 'active' : ''}}">
                    <a href="{{ route('pengguna') }}"> <i class="menu-icon fa fa-user"> </i>Pengguna</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-building"></i>Cagar Budaya</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li class="{{(request()->is('cagarbudaya_benda')) ? 'active' : ''}}">
                            <i class="fa fa-circle-o"></i><a href="{{ route('cagarbudaya_benda') }}">Benda</a>
                        </li>
                        <li>
                            <i class="fa fa-circle-o"></i><a href="{{ route('cagarbudaya_bangunan')}}">Bangunan</a>
                        </li>
                        <li>
                            <i class="fa fa-circle-o"></i><a href="{{ route('cagarbudaya_struktur')}}">Struktur</a>
                        </li>
                        <li>
                            <i class="fa fa-circle-o"></i><a href="{{ route('cagarbudaya_situs')}}">Situs</a>
                        </li>
                        <li>
                            <i class="fa fa-circle-o"></i><a href="{{ route('cagarbudaya_kawasan')}}">Kawasan</a>
                        </li>
                    </ul>
                </li>
                <li class="{{(request()->is('timpelaksana')) ? 'active' : ''}}">
                    <a href="{{ route('timpelaksana.index')}}"> <i class="menu-icon fa fa-users"> </i>Tim Pelaksana</a>
                </li>
                <li class="{{(request()->is('kegiatan')) ? 'active' : ''}}">
                    <a href="{{ route('kegiatan.index')}}"> <i class="menu-icon fa fa-male"> </i>Kegiatan</a>
                </li>
                <li class="{{(request()->is('wilayah')) ? 'active' : ''}}">
                    <a href="{{ route('wilayah')}}"> <i class="menu-icon fa fa-map"> </i>Wilayah</a>
                </li>
                <li class="{{(request()->is('perizinan')) ? 'active' : ''}}">
                    <a href="{{ route('perizinan')}}"> <i class="menu-icon fa fa-file-text"> </i>Perizinan</a>
                </li>
                <li class="{{(request()->is('saran')) ? 'active' : ''}}">
                    <a href="{{ route('saran.index')}}"> <i class="menu-icon fa fa-file-text"> </i>Saran</a>
                </li>


            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>