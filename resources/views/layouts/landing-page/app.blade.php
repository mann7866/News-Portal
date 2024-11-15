<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ========== Page Title ========== -->
    <title>@yield('title')</title>

    <meta name="title" content="News Portal - Berita Sekolah" />
    <meta name="description"
        content="" />
    <meta name="og:description"
        content="" />
    <meta name="og:image" content="mobilelogo.png" />
    <meta name="twitter:image" content="mobilelogo.png" />
    <meta property="og:url" content="index.html" />
    <meta property="og:type" content="website" />
    <link rel="canonical" href="index.html" />

    <!-- ========== Bootsrap Icon ========== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="mobilelogo.png" type="image/x-icon">

    <!-- Stylesheets -->
    <link href="{{ asset('landing-page/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/css/elegant-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/css/flaticon-set.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/css/bootsnav.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/style.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/css/responsive.css') }}" rel="stylesheet">
    <!-- End Stylesheets -->


    @yield('style')

</head>

<body>

    <!-- Start Preloader
    ============================================= -->
    {{--  <div id="preloader">
        <div id="earna-preloader" class="earna-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="W" class="letters-loading">
                        W
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="P" class="letters-loading">
                        P
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}
    <!-- End Preloader -->

    <!-- Header ============================================= -->
    @include('layouts.landing-page.header')
    <!-- End Header -->


    {{-- Start content --}}

    @yield('content')

    {{-- End content --}}

    <!-- Start Footer
    ============================================= -->
    @include('layouts.landing-page.footer')

    <!-- End Footer -->

    <!-- Scripts -->
    <script src="{{ asset('landing-page/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/popper.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('landing-page/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('landing-page/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/wow.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/circle-progress.js') }}"></script>
    <script src="{{ asset('landing-page/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/count-to.js') }}"></script>
    <script src="{{ asset('landing-page/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/bootsnav.js') }}"></script>
    <script src="{{ asset('landing-page/js/main.js') }}"></script>
    <script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>
    <!-- End Scripts -->


</body>

</html>
