<style>
    /* Navbar brand adjustments */
    .navbar-brand {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .logo {
        max-height: 60px; /* ukuran default logo */
        transition: max-height 0.3s ease; /* efek transisi untuk perubahan ukuran */
    }
    /* Atur ukuran logo saat navbar memiliki kelas 'scrolled' */
    .navbar-fixed.scrolled .logo {
        max-height: 40px; /* ukuran logo saat discroll */
    }
    /* Kustomisasi navbar */
    .navbar-default {
        background-color: transparent;
        border: none;
    }
    .navbar-default .navbar-nav > li > a {
        color: #333;
    }
    .navbar-default .navbar-nav > .active > a {
        color: #007bff;
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
                <a class="navbar-brand h-50" href="/">
                    <!-- Satu logo saja untuk memastikan konsistensi -->
                    <img src="{{asset('Logo/proposal.png')}}" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-center" data-in="#" data-out="#">
                    <li class="{{ Request::is('/') ? 'active' : '' }}">
                        <a href="/">Beranda</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tentang</a>
                        <ul class="dropdown-menu">
                            <li><a href="about/profile.html">Profil</a></li>
                            <li><a href="about/vision-mision.html">Visi & Misi</a></li>
                            <li><a href="about/organizational-structure.html">Struktur Organisasi</a></li>
                            <li><a href="about/team.html">Tim</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Layanan</a>
                        <ul class="dropdown-menu">
                            <li><a href="services/software-development.html">Software Development</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('news') ? 'active' : '' }}">
                        <a href="{{ route('news') }}">Berita</a>
                    </li>
                    <li><a href="contact.html">Hubungi</a></li>
                    <li><a href="job-vacancy.html">PPDB</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="icon_close"></i></a>
            <div class="widget">
                <img src="{{ asset('Logo/proposal.png') }}" style="width: 180px; height: auto;" alt="Logo">
                <p></p>
            </div>
            <div class="portfolio"></div>
        </div>
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>

<script>
    // JavaScript untuk menambahkan kelas 'scrolled' ke navbar saat halaman di-scroll
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar-fixed');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>