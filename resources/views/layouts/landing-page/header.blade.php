
<style>
    .navbar-brand {
    position: absolute; /* Memastikan berada di atas */
    top: -20px;
    left: 0;
    z-index: 1000; /* Memastikan logo berada di atas elemen lain */
}

.navbar {
    position: relative; /* Mengatur navbar dalam konteks yang benar */
}

</style>

<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default attr-bg navbar-fixed white no-background bootsnav">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="side-menu">
                        <a href="#">
                            <span class="bar-1"></span>
                            <span class="bar-2"></span>
                            <span class="bar-3"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header h-100">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand h-100" href="/">
                    <img src="{{ asset('Logo/newsPortal-removebg-preview.png') }}" 
                        style="width: 150px; height: auto !important;" 
                        class="logo logo-display" alt="Logo">
                    <img src="{{ asset('Logo/newsPortal-removebg-preview.png') }}" 
                        style="width: 150px; height: auto !important;" 
                        class="logo logo-scrolled" alt="Logo">
                </a>
                
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-center" data-in="#" data-out="#">
                    <li class="{{ Request::is('/') ? 'active' : '' }}">
                        <a href="{{ route('landing-page') }}">Beranda</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tentang</a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a href="/profile-school">Profil</a>
                            </li>
                            <li class="">
                                <a href="/vision">visi & misi</a>
                            </li>
                            <li class="">
                                <a href="/structure">struktur organisasi</a>
                            </li>
                        </ul>
                    </li>

                    {{--  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Layanan</a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a href="services/software-development.html">Software Development</a>
                            </li>
                        </ul>
                    </li>  --}}
                    <li class="{{ Request::is('news') ? 'active' : '' }}">
                        <a href="{{ route('news') }}">Berita</a>
                    </li>
                    <li class="">
                        <a href="/contact">Hubungi</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="icon_close"></i></a>
            <div class="widget">
                <img src="" style="width: 200px;height: auto !important"
                    alt="Logo">
                <p>

                </p>
            </div>


            <div class="portofolio">
            </div>
        </div>
        <!-- End Side Menu -->

    </nav>
    <!-- End Navigation -->

</header>
