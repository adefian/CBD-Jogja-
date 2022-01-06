<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    @include('auth.layout.top')
</head>

<body>
    
        <!-- Content -->
        @yield('content')
        <!-- /.content -->
        <div class="clearfix"></div>


        <!-- Footer -->
        @include('auth.layout.footer')
        
        <!-- End Footer -->

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @include('sweetalert::alert')
</body>

</html>