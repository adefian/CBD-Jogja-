<aside id="left-panel" class="left-panel">
       <nav class="navbar navbar-expand-sm navbar-default">
           <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                   <li class="">
                       <a href=""><i class="menu-icon fa fa-home"></i>Dashboard </a>
                   </li>
                   <li class="{{(request()->is('profil_user')) ? 'active' : ''}}">
                       <a href="{{ route('profil_user')}}"> <i class="menu-icon fa fa-user"> </i>Profil</a>
                   </li>
                   <li class="{{(request()->is('pengajuan_user')) ? 'active' : ''}}">
                       <a href="{{ route('pengajuan_user') }}"> <i class="menu-icon fa fa-book"> </i>Pengajuan</a>
                   </li>
                 
               </ul>
           </div><!-- /.navbar-collapse -->
       </nav>
   </aside>