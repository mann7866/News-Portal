<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Upvex - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin-assets/images/favicon.ico') }}">

        <!-- plugin css -->
        <link href="{{ asset('admin-assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('admin-assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin-assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin-assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            @include('layouts.topbar')
            <!-- ========== Left Sidebar Start ========== -->
            @include('layouts.sidenav')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                 <!-- content -->
                 <div class="content">
                @yield('content')
                 </div>

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2019 &copy; Upvex theme by <a href="">Coderthemes</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
        <!-- Vendor js -->
        <script src="{{ asset('admin-assets/js/vendor.min.js') }}"></script>

        <!-- Third Party js-->
        <script src="{{ asset('admin-assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('admin-assets/libs/peity/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('admin-assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('admin-assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('admin-assets/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js') }}"></script>

        <!-- Dashboard init -->
        <script src="{{ asset('admin-assets/js/pages/dashboard-2.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('admin-assets/js/app.min.js') }}"></script>

    </body>
</html>
