<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js " lang="en"> <!--<![endif]-->

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Meta -->
    <title>Sekolah Demonic</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico" type="image/x-icon')}}" />
    <link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">

    <!-- Custom & Default Styles -->
    <link rel="stylesheet" href="{{ asset('users-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('users-assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('users-assets/css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('users-assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('users-assets/style.css') }}">

    <!--[if lt IE 9]>
  <script src="js/vendor/html5shiv.min.js"></script>
  <script src="js/vendor/respond.min.js"></script>
 <![endif]-->

</head>

<body>

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="{{asset('users-assets/images/loader.gif')}}" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="What you are looking for?"
                                    required>
                            </div>
                        </form><!-- End # Login Form -->
                    </div><!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <header class="header">
            <div class="topbar clearfix">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-md-6 col-sm-6 text-left">
                            <p>
                                <strong><i class="fa fa-phone"></i></strong> +62 815 4874 3796 &nbsp;&nbsp;
                                <strong><i class="fa fa-envelope"></i></strong> <a
                                    href="mailto:#">tzyarchon@gmail.com</a>
                            </p>
                        </div><!-- end left -->
                        <div class="col-md-6 col-sm-6 hidden-xs text-right">
                            <div class="social">
                                <a class="facebook"
                                    href="https://www.facebook.com/gaming/play?store_visit_source=games_bookmark"
                                    data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i
                                        class="fa fa-facebook"></i></a>
                                <a class="twitter" href="https://x.com/bni" data-tooltip="tooltip"
                                    data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a class="google"
                                    href="https://edu.google.com/intl/ALL_id/communications/?utm_source=8a_googleEDU&utm_medium=cpc&utm_campaign=global-EDU-operational-cs-edu-fa-gp-cpm-paid-media-audience-expansion&utm_content=21145112370&utm_term=google%20for%20education&gad_source=1&gclid=CjwKCAjwjsi4BhB5EiwAFAL0YHdbhtDBy44wsKgywnjBqI88ZS0p8Fvona2wykGOgOteo0cptQeBHhoC3NQQAvD_BwE&gclsrc=aw.ds"
                                    data-tooltip="tooltip" data-placement="bottom" title="Google Plus"><i
                                        class="fa fa-google-plus"></i></a>
                                <a class="linkedin" href="https://www.linkedin.com/learning" data-tooltip="tooltip"
                                    data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                <a class="pinterest" href="https://id.pinterest.com/search/pins/?q=sekolah&rs=typed"
                                    data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i
                                        class="fa fa-pinterest"></i></a>
                            </div><!-- end social -->
                        </div><!-- end left -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end topbar -->
            <!-- END # MODAL LOGIN -->

            <div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-normal">
                            <a class="navbar-brand" href="index.html"><img src="{{asset('users-assets/images/logo.png')}}"
                                    alt=""></a>
                        </div>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="welcome">Home</a></li>
                            <li class="dropdown yamm-fw yamm-half"><a href="#" data-toggle="dropdown"
                                    class="dropdown-toggle active">Mega Menu <b class="fa fa-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content clearfix">
                                            <div class="row-fluid">
                                                <div class="col-md-6 col-sm-6">
                                                    <h4>Course Pages</h4>
                                                    <ul>
                                                        <li><a href="#">Courses Name 01</a></li>
                                                        <li><a href="#">Courses Name 02</a></li>
                                                        <li><a href="#">Courses Name 03</a></li>
                                                        <li><a href="#">Courses Name 04</a></li>
                                                        <li><a href="#">Courses Name 05</a></li>
                                                        <li><a href="#">Courses Name 06</a></li>
                                                        <li><a href="#">Courses Name 07</a></li>
                                                        <li><a href="#">Courses Name 08</a></li>
                                                        <li><a href="#">Courses Name 09</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="menu-widget text-center">
                                                        <div class="image-wrap entry">
                                                            <img src="{{asset('assets/upload/course_01.jpg')}}" alt=""
                                                                class="img-responsive">
                                                            <div class="magnifier">
                                                                <a href="#" title=""><i
                                                                        class="flaticon-add"></i></a>
                                                            </div>
                                                        </div><!-- end image-wrap -->
                                                        <h5><a href="#">Learning Bootstrap Framework</a></h5>
                                                        <small>$22.00</small>
                                                        <a href="#" class="menu-button">View Course</a>
                                                    </div><!-- end widget -->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="">Events</a></li>
                            <li class="dropdown hassubmenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false">Shop <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="shop.html">Shop Layout</a></li>
                                    <li><a href="shop-single.html">Shop Single</a></li>
                                </ul>
                            </li>
                            <li class="dropdown hassubmenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false">Blog <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="blog.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-1.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-2.html">Blog Grid Sidebar</a></li>
                                    <li><a href="blog-3.html">Blog Grid Fullwidth</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="page-contact.html">Contact</a></li>
                            <li class="iconitem"><a href="#" data-toggle="modal" data-target="#login-modal"><i
                                        class="fa fa-search"></i></a></li>
                            <li class="iconitem"><a class="shopicon" href="shop-cart.html"><i
                                        class="fa fa-shopping-basket"></i> &nbsp;(0)</a></li>
                        </ul>
                    </div>
                </nav><!-- end navbar -->
            </div><!-- end container -->
        </header>

        @yield('content')

        @include('layouts.users.footer')

        <div class="copyrights">
            <div class="container">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="cop-logo">
                            <a href="#"><img src="{{asset('users-assets/images/logo.png')}}" alt=""></a>
                        </div>
                    </div>

                    <div class="pull-right">
                        <div class="footer-links">
                            <ul class="list-inline">
                                <li>Design : <a href="https://html.design">HTML.Design</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copy -->
    </div><!-- end wrapper -->

    <!-- jQuery Files -->
    <script src="{{asset('users-assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('users-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('users-assets/js/carousel.js')}}"></script>
    <script src="{{asset('users-assets/js/animate.js')}}"></script>
    <script src="{{asset('users-assets/js/custom.js')}}"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="{{asset('users-assets/js/videobg.js')}}"></script>

</body>
</html>

