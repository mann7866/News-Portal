@extends('layouts.landing-page.app')
@section('content')
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url('storage/Background-Berita.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Berita</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="fas fa-home"></i> Beranda</a></li>
                        <li class="active">Berita</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-area right-sidebar full-blog mt-5">
        <div class="container">
            <div class="blog-items">
                <div class="row">

                    {{--  main news  --}}
                    <div class="blog-content col-lg-8 col-md-12">
                        <div class="blog-item-box">
                            <!-- Single Item -->
                            <div class="single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="#"><img
                                                src="{{ asset('landing-page/blog/blog-img10.jpg') }}"
                                                alt="SIPJAKI Buatan PT Hummatech Raih Apresiasi dari Pemerintah Provinsi Jawa Timur"></a>
                                        <time class="date">
                                            2 Mei 2024
                                        </time>
                                    </div>
                                    <div class="info">
                                        <div class="meta">
                                            <ul>
                                                <li>
                                                    <img src="{{ asset('landing-page/profile/user-1.jpg') }}" alt="Hummatech Logo">
                                                    <div class="categories">
                                                        <a href="javascript:void(0)" class="category-link">Prestasi</a>
                                                        <a>,</a>
                                                        <a href="javascript:void(0)" class="category-link">Software
                                                            Development</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3>
                                            <a href="sipjaki-buatan-pt-hummatech-raih-apresiasi-dari-pemerintah-provinsi-jawa-timur.html">
                                                SIPJAKIBuatan PT Hummatech Raih Apresiasi dari Pemerintah Provinsi Jawa Timur</a>
                                        </h3>

                                        <div style="white-space: pre-wrap;">

                                            <p class="ql-align-justify">SIPJAKI merupakan kjasefjkasfdkfjasfkjsbfbasjkdgbsfjkvabsfjdgvbfdjvbgasjdkkkkkkkkkkkkkkkkbvkdafjvbjfkdvbjksistem informasi yang membantudalam meningkatkan kemudahan akses informasi usaha jasa konstruksi,meningkatkan transparansi, serta membantu memperkuat jaringan bisnis pelakuusaha dalam rantai pasok konstruksi. Sistem ini diluncurkan pada tahun 2024dan telah memberikan banyak manfaat bagi dinas terkait.</p>

                                            <p class="ql-align-justify">SIPJAKI merupakan kjasefjkasfdkfjasfkjsbfbasjkdgbsfjkvabsfjdgvbfdjvbgasjdkkkkkkkkkkkkkkkkbvkdafjvbjfkdvbjksistem informasi yang membantudalam meningkatkan kemudahan akses informasi usaha jasa konstruksi,meningkatkan transparansi, serta membantu memperkuat jaringan bisnis pelakuusaha dalam rantai pasok konstruksi. Sistem ini diluncurkan pada tahun 2024dan telah memberikan banyak manfaat bagi dinas terkait.</p>
                                            
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar wow fadeInLeft col-lg-4 col-md-12"
                        style="visibility: visible; animation-name: fadeInLeft;">
                        <aside>
                            <div class="sidebar-item search">
                                <div class="sidebar-info">
                                    <form>
                                        <input type="text" name="text" class="form-control">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Berita Lainnya</h4>
                                </div>
                                <ul>

                                    {{--  other news  --}}
                                    <li>
                                        <div class="thumb">
                                            <a
                                                href="launching-acs-school-produk-teaching-factory-kerja-sama-hummatech-dan-smk-al-azhar-sempu-banyuwangi.html">
                                                <img alt="Launching ACS School: Produk Teaching Factory Kerja Sama Hummatech dan SMK Al Azhar Sempu Banyuwangi"
                                                    src="{{ asset('landing-page/blog/blog-img11.jpg') }}">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="meta-title">
                                                <time class="post-date"><i class="fas fa-clock"></i>
                                                    7 Februari 2024</time>
                                            </div>
                                            <a class="d-block mb-2"
                                                href="launching-acs-school-produk-teaching-factory-kerja-sama-hummatech-dan-smk-al-azhar-sempu-banyuwangi.html">Launching
                                                ACS School: Produk Teaching Factory...</a>
                                            <p class="mb-0">Kabar gembira bagi s...
                                            </p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="thumb">
                                            <a
                                                href="launching-acs-school-produk-teaching-factory-kerja-sama-hummatech-dan-smk-al-azhar-sempu-banyuwangi.html">
                                                <img alt="Launching ACS School: Produk Teaching Factory Kerja Sama Hummatech dan SMK Al Azhar Sempu Banyuwangi"
                                                    src="{{ asset('landing-page/blog/blog-img11.jpg') }}">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="meta-title">
                                                <time class="post-date"><i class="fas fa-clock"></i>
                                                    7 Februari 2024</time>
                                            </div>
                                            <a class="d-block mb-2"
                                                href="launching-acs-school-produk-teaching-factory-kerja-sama-hummatech-dan-smk-al-azhar-sempu-banyuwangi.html">Launching
                                                ACS School: Produk Teaching Factory...</a>
                                            <p class="mb-0">Kabar gembira bagi s...
                                            </p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="thumb">
                                            <a
                                                href="launching-acs-school-produk-teaching-factory-kerja-sama-hummatech-dan-smk-al-azhar-sempu-banyuwangi.html">
                                                <img alt="Launching ACS School: Produk Teaching Factory Kerja Sama Hummatech dan SMK Al Azhar Sempu Banyuwangi"
                                                    src="{{ asset('landing-page/blog/blog-img11.jpg') }}">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="meta-title">
                                                <time class="post-date"><i class="fas fa-clock"></i>
                                                    7 Februari 2024</time>
                                            </div>
                                            <a class="d-block mb-2"
                                                href="launching-acs-school-produk-teaching-factory-kerja-sama-hummatech-dan-smk-al-azhar-sempu-banyuwangi.html">Launching
                                                ACS School: Produk Teaching Factory...</a>
                                            <p class="mb-0">Kabar gembira bagi s...
                                            </p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="thumb">
                                            <a
                                                href="launching-acs-school-produk-teaching-factory-kerja-sama-hummatech-dan-smk-al-azhar-sempu-banyuwangi.html">
                                                <img alt="Launching ACS School: Produk Teaching Factory Kerja Sama Hummatech dan SMK Al Azhar Sempu Banyuwangi"
                                                    src="{{ asset('landing-page/blog/blog-img11.jpg') }}">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="meta-title">
                                                <time class="post-date"><i class="fas fa-clock"></i>
                                                    7 Februari 2024</time>
                                            </div>
                                            <a class="d-block mb-2"
                                                href="launching-acs-school-produk-teaching-factory-kerja-sama-hummatech-dan-smk-al-azhar-sempu-banyuwangi.html">Launching
                                                ACS School: Produk Teaching Factory...</a>
                                            <p class="mb-0">Kabar gembira bagi s...
                                            </p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="thumb">
                                            <a
                                                href="launching-acs-school-produk-teaching-factory-kerja-sama-hummatech-dan-smk-al-azhar-sempu-banyuwangi.html">
                                                <img alt="Launching ACS School: Produk Teaching Factory Kerja Sama Hummatech dan SMK Al Azhar Sempu Banyuwangi"
                                                    src="{{ asset('landing-page/blog/blog-img11.jpg') }}">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="meta-title">
                                                <time class="post-date"><i class="fas fa-clock"></i>
                                                    7 Februari 2024</time>
                                            </div>
                                            <a class="d-block mb-2"
                                                href="launching-acs-school-produk-teaching-factory-kerja-sama-hummatech-dan-smk-al-azhar-sempu-banyuwangi.html">Launching
                                                ACS School: Produk Teaching Factory...</a>
                                            <p class="mb-0">Kabar gembira bagi s...
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
@endsection
