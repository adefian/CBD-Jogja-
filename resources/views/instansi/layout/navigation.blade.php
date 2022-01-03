    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class=" {{(request()->is('instansi_dashboard')) ? 'active' : ''}}">
                        <a href="{{ route('instansi_dashboard') }}"><i class="menu-icon fa fa-home"></i>Dashboard </a>
                    </li>
                    <li class=" {{(request()->is('pengajuan')) ? 'active' : ''}}">
                        <a href="{{ route('pengajuan') }}"><i class="menu-icon fa fa-file"></i>Pengajuan </a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>