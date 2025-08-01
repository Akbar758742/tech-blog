<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/libs/css/custom.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/{{ asset('backend') }}/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @include('backend.include.header')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('backend.include.sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
           @yield('mainContent')
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           @include('backend.include.footer')
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{ asset('backend') }}/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('backend') }}/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('backend') }}/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="{{ asset('backend') }}/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="{{ asset('backend') }}/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="{{ asset('backend') }}/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="{{ asset('backend') }}/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="{{ asset('backend') }}/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/js/dashboard-ecommerce.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
     @stack('body-scripts')
</body>

</html>
