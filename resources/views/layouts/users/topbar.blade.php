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
    <title>News Portal</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico" type="image/x-icon') }}" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


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
<style>
 .sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020;
    transition: backdrop-filter 0.3s ease, background-color 0.3s ease;
 }

.sticky-top.scrolled {
    backdrop-filter: blur(10px);
    background-color:#000; /* Latar belakang putih dengan transparansi */
}

<<<<<<< HEAD
=======
.navbar-brand {
    margin-left: 5px;
    opacity: 90%;
}
>>>>>>> 89f29a2b05f134444d9b92ebfa4c64a60374463c

</style>
<body>
    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="{{ asset('users-assets/images/loader.gif') }}" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        {{-- Top bar --}}
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
        <header class="header" style="top: 0; z-index: 1000; position: fixed">
            <!-- END # MODAL LOGIN -->

            <div class="container">
                <nav class="navbar navbar-default yamm sticky-top" id="navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-normal">
                            <a class="navbar-brand" href="index.html">
                                    <img src="{{ asset('users-assets/images/logo-smk-putih.png') }}" alt=""
                                    style=" width: 250px; height: auto; margin-left: 20px;">
                            </a>
                        </div>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{route('dashboard')}}">Home</a></li>
                         
                           
                            <li><a href="page-contact.html">Contact</a></li>
                            @if (Auth::check())
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                        
                            <li class="iconitem">
                                <a href="#" data-toggle="modal" data-target="#login-modal" id="shour">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </nav><!-- end navbar -->
            </div><!-- end container -->
        </header>

        @yield('content')

        @include('layouts.users.footer')


        {{-- script Src --}}
        <script>
           document.addEventListener('keydown', function(event) {
        if (event.ctrlKey && event.key === 'h') {
            event.preventDefault();
            document.getElementById('shour').click(); // Mengklik elemen untuk membuka modal
        }
    });
        </script>
       <script>
        window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) { // Jika scroll lebih dari 50px
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
       </script>
