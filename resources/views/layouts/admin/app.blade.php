<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>Mordenize</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png"
        href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" />
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('admin-assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />

    {{--  summernote  --}}
    <link rel="stylesheet" href="{{ asset('admin-assets/libs/summernote/dist/summernote-lite.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin-assets/libs/prismjs/themes/prism-okaidia.min.css') }}">
    {{--  select2  --}}
    <link rel="stylesheet" href="{{ asset('admin-assets/libs/select2/dist/css/select2.min.css') }}">
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('admin-assets/css/style.min.css') }}" />

</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico"
            alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico"
            alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Sidebar Start -->
        @include('layouts.admin.sidenav')
        <!--  Sidebar End -->
        @include('layouts.admin.partials.css')
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('layouts.admin.topbar')
            <div class="container-fluid">
                @yield('content')
            </div>
            <!--  Header End -->
        </div>
    </div>


    <!--  Search Bar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content rounded-1">
                <div class="modal-header border-bottom">
                    <input type="search" class="form-control fs-3" placeholder="Search here" id="search" />
                    <span data-bs-dismiss="modal" class="lh-1 cursor-pointer">
                        <i class="ti ti-x fs-5 ms-3"></i>
                    </span>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!--  Customizer -->
    <!--  Import Js Files -->
    <script src="{{ asset('admin-assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core files -->
    <script src="{{ asset('admin-assets/js/app.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/app.init.js') }}"></script>
    <script src="{{ asset('admin-assets/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('admin-assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('admin-assets/js/custom.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/prismjs/prism.js') }}"></script>

    <!-- Current page JS files -->
    <script src="{{ asset('admin-assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('admin-assets/js/dashboard2.js') }}"></script>

    <script src="{{ asset('admin-assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/forms/select2.init.js') }}"></script>
    {{--  select2  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{--  summernote  --}}
    <script src="{{ asset('admin-assets/libs/summernote/dist/summernote-lite.min.js') }}"></script>
    <script>
        /************************************/
        //default editor
        /************************************/
        $(".summernote").summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false, // set focus to editable area after initializing summernote
        });

        /************************************/
        //inline-editor
        /************************************/
        $(".inline-editor").summernote({
            airMode: true,
        });

        /************************************/
        //edit and save mode
        /************************************/
        (window.edit = function() {
            $(".click2edit").summernote();
        }),
        (window.save = function() {
            $(".click2edit").summernote("destroy");
        });

        var edit = function() {
            $(".click2edit").summernote({
                focus: true
            });
        };

        var save = function() {
            var markup = $(".click2edit").summernote("code");
            $(".click2edit").summernote("destroy");
        };

        /************************************/
        //airmode editor
        /************************************/
        $(".airmode-summer").summernote({
            airMode: true,
        });
    </script>
    @yield('modal')
</body>

</html>
