<!doctype html>
<html class="no-js" lang="en">
<head>
    <!-- Basic Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Meta -->
    <title>News Portal</title>

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon" />
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

    <style>
        /* Navbar transparan di bagian atas */
        #navbar {
            background-color: transparent; /* Background transparan */
            transition: background-color 0.3s ease; /* Transisi halus */
        }

        /* Navbar berubah menjadi putih saat di-scroll */
        #navbar.scrolled {
            background-color: white; /* Background putih */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Shadow untuk efek floating */
        }
    </style>
</head>

<body>
    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="{{ asset('users-assets/images/loader.gif') }}" alt="">
    </div>
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- Navbar -->
        <header class="header">
            <div class="container">
                <nav id="navbar" class="navbar navbar-default yamm">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-content" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-normal">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{ asset('users-assets/images/logo-smk-putih.png') }}" alt=""
                                    style="width: 250px; height: auto;">
                            </a>
                        </div>
                    </div>

                    <div id="navbar-content" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{route('dashboard')}}">Home</a></li>
                            <li><a href="page-contact.html">Contact</a></li>
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('register')}}">Register</a></li>
                            <li class="iconitem">
                                <a href="#" data-toggle="modal" data-target="#login-modal" id="shour">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <!-- Content Section -->
        @yield('content')

        <!-- Footer -->
        @include('layouts.users.footer')
    </div>

    <!-- Script untuk mengubah background navbar saat di-scroll -->
    <script>
        // Event listener untuk scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            
            // Menambahkan kelas 'scrolled' saat halaman di-scroll lebih dari 50px
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
 <script>
           document.addEventListener('keydown', function(event) {
        if (event.ctrlKey && event.key === 'h') {
            event.preventDefault();
            document.getElementById('shour').click(); // Mengklik elemen untuk membuka modal
        }
    });
        </script>
</body>
</html>
