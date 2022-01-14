<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    @include('instansi.layout.top')
    
</head>

<body>
    <!-- Left Panel -->
    @include('instansi.layout.navigation')
    <!-- /#left-panel -->


    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        @include('instansi.layout.header')
        <!-- /#header -->

        <!-- Content -->
        @yield('content')
        <!-- /.content -->
        <div class="clearfix"></div>


        <!-- Footer -->
        @include('instansi.layout.footer')

        @yield('js')

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @include('sweetalert::alert')
    <!-- End Footer -->
</body>

</html>