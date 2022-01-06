<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>

    @include('admin.layout.top')

</head>

<body>
    <!-- Left Panel -->
    @include('admin.layout.navigation')
    <!-- /#left-panel -->


    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        @include('admin.layout.header')
        <!-- /#header -->

        <!-- Content -->
        @yield('content')
        <!-- /.content -->
        <div class="clearfix"></div>


        <!-- Footer -->
        
        @include('admin.layout.footer')
        
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @include('sweetalert::alert')
        <!-- End Footer -->
</body>

</html>