@extends('layouts.landing-page.app')

@section('title', 'Landing Page')
@section('style')
    <style>
        body {}

        .subtitle {
            text-transform: uppercase;
            font-weight: 600;
            color: #1273eb;
            margin-top: -5px;
            display: inline-block;
            background: linear-gradient(90deg, rgba(18, 115, 235, 1) 30%, rgba(4, 215, 242, 1) 100%);
            -webkit-background-clip: text;
            -moz-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .about-us-area .thumb {
            padding-left: unset;
            /* padding-right: 50px; */
        }

        .about-us-area .thumb::after {
            right: 0;
            top: 5rem !important;
            left: unset !important;
        }

        .about-us-area .container {
            position: relative;
        }

        .about-us-area .about-triangle {
            position: absolute;
            z-index: -1;
            top: -7.5rem;
            right: -7.5rem;
        }

        .thumbs-services-area .item::after {
            position: absolute;
            left: -15px;
            top: 80px;
            right: -15px;
            background: none;
            content: "";
            bottom: 0;
            z-index: -1;
            border-radius: 7px;
        }

        .rounded-container {
            border-radius: 15px;
            overflow: hidden;
        }

        @media (max-width: 992px) {
            .owl-carousel {
                display: block;
            }
        }
    </style>
    <style>
        @media (max-width: 992px) {
            .about-triangle {
                display: none;
            }
        }

        @media (max-width: 992px) {
            .team-item img {
                max-width: 40%;
            }
        }

        .team-item {
            margin-right: 15px;
        }

        .team-item:last-child {
            margin-right: 0;
        }

        @media (max-width: 992px) {
            .team-item {
                margin-right: 0;
            }
        }

        @media (max-width: 600px) {
            .responsive-text {
                font-size: 16px;
                /* Ubah sesuai kebutuhan */
            }

        }
    </style>

    <style>
        @keyframes slideFromTop {
            0% {
                opacity: 0;
                transform: translateY(-50px);
                /* Dimulai dari atas */
                visibility: hidden;
                /* Mulai dengan elemen tersembunyi */
            }

            100% {
                opacity: 1;
                transform: translateY(0);
                /* Posisi akhir di tempat semula */
                visibility: visible;
                /* Menampilkan elemen */
            }
        }

        /* Kelas untuk animasi masuk dari atas ke bawah dengan delay */
        .fade-in {
            animation: slideFromTop 1s ease-in-out forwards;
            animation-delay: 1s;
            /* Menunda animasi selama 1,5 detik */
            display: block;
            /* Menjamin elemen tetap ada untuk animasi */
            visibility: hidden;
            /* Menyembunyikan elemen saat dimulai */
        }
    </style>
    <style>
        footer::after {
            background: url(landing-page/img/map.svg);
        }
    </style>
@endsection

@section('content')

    <!-- Start Banner -->
    <div class="banner-area text-center text-big top-pad-50">
        <div id="bootcarousel" class="carousel text-light slide animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="slider-thumb bg-fixed" style="background-image: url('storage/section/school-news.webp');">
                    </div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 class="fade-in">SMK AL-AZHAR <span>Portal Berita Sekolah</span></h2>
                                            <p class="animated slideInRight">
                                                Berita terbaru dan informasi penting untuk keluarga besar SMK Al-Azhar.
                                                Tetap up-to-date dengan kegiatan sekolah kami!
                                            </p>
                                            <a data-animation="animated zoomInUp" class="btn btn-gradient effect btn-md"
                                                href="https://www.smkalazhar.id/berita" target="_blank">
                                                Baca Berita Terbaru
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="slider-thumb bg-fixed"
                        style="background-image: url('storage/section/events-smkalazhar.webp');"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 class="fade-in">Informasi Acara <span>Aktivitas dan Event Sekolah</span>
                                            </h2>
                                            <p class="animated slideInRight">
                                                Dapatkan informasi tentang acara, lomba, dan kegiatan yang diadakan di SMK
                                                Al-Azhar.
                                            </p>
                                            <a data-animation="animated zoomInUp" class="btn btn-gradient effect btn-md"
                                                href="https://www.smkalazhar.id/acara" target="_blank">
                                                Lihat Semua Acara
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control light" href="#bootcarousel" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control light" href="#bootcarousel" data-slide="next">
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->



    <!-- Start About Area -->

    <div class="about-us-area pt-5">
        <div class="container">
            <img src="landing-page/img/about-polygon.svg" class="about-triangle" alt="Polygon" />
            <div class="about-items">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 order-first order-md-last text-center">
                        <div class="thumb">
                            <img src="{{ asset('landing-page\images\Search-rafiki.png') }}" alt="Thumb"
                                style="max-width: 70%; max-height: auto; display: inline-block;">
                        </div>
                    </div>
                    <div class="col-md-6 info">
                        <h2 class="text-break">SMKS AL AZHAR SEMPU</h2>
                        <p class="text-break">
                            SMK Al-AZHAR Sempu, Sekolah Menengah Kejuruan (SMK) berbasis IT serta berbasis pondok pesantren.
                            Status sekolah Terakreditasi A (Amat Baik).
                        </p>
                        <a class="btn btn-gradient effect btn-md" href="about/profile.html">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- End About -->

        <!-- Star Services Area
                                ============================================= -->
        <div class="thumb-services-area inc-thumbnail default-padding bottom-less mt-5">
            <div class="right-shape">
                <img src="landing-page/img/shape/9.png" alt="Shape">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4>Layanan Kami</h4>
                            <h2>SMK Al-Azhar Menyediakan Pendidikan Berbasis Teknologi dan Kejuruan</h2>
                            <div class="devider"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="services-items text-center">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="col-lg-4 col-md-6 single-item wow fadeInRight" data-wow-delay="700ms">
                            <div class="item"
                                style="background-image: url('storage/service/ofg7lJLisMLV9iEULErd4vc6ZkTZ4vxmYY1GLKFS.jpg'); min-height: 20rem; max-height: 20rem;">
                                <div class="d-flex flex-column align-items-center text-white p-3">
                                    <h4 class="mb-2 pb-1 border-bottom w-100 text-center" style="margin-top: -70px;">
                                        Kompetensi Keahlian</h4>
                                    <div class="py-2" style="min-height: 70px; max-height: 70px;">
                                        <p>SMK Al-Azhar menawarkan berbagai program keahlian berbasis teknologi seperti
                                            Rekayasa Perangkat Lunak, Teknik Komputer Jaringan, dan Multimedia untuk
                                            membekali
                                            siswa dengan keterampilan masa depan.</p>
                                    </div>
                                    <br><br><br>
                                    <div class="mt-3 pt-3">
                                        <a href="services/kompetensi-keahlian.html" class="text-white"><i
                                                class="fas fa-arrow-right"></i>
                                            Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-lg-4 col-md-6 single-item wow fadeInRight" data-wow-delay="700ms">
                            <div class="item"
                                style="background-image: url('storage/service/pF4KmNe9YTmdxpEVbkvKnXcyVyDa02jWQSEujslr.jpg'); min-height: 20rem; max-height: 20rem;">
                                <div class="d-flex flex-column align-items-center text-white p-3">
                                    <h4 class="mb-2 pb-1 border-bottom w-100 text-center" style="margin-top: -70px;">Kelas
                                        Industri</h4>
                                    <div class="py-2" style="min-height: 70px; max-height: 70px;">
                                        <p>Program <strong>Kelas Industri</strong> bekerja sama dengan perusahaan terkemuka
                                            untuk memberikan pengalaman kerja nyata kepada siswa, sehingga mereka siap untuk
                                            dunia industri.</p>
                                    </div>
                                    <br><br><br>
                                    <div class="mt-3 pt-3">
                                        <a href="services/kelas-industri.html" class="text-white"><i
                                                class="fas fa-arrow-right"></i>
                                            Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-lg-4 col-md-6 single-item wow fadeInRight" data-wow-delay="700ms">
                            <div class="item"
                                style="background-image: url('storage/service/JdY4vkyMFjXS4Ci49rUniHx3pZ3waWqAmYMkmWXc.jpg'); min-height: 20rem; max-height: 20rem;">
                                <div class="d-flex flex-column align-items-center text-white p-3">
                                    <h4 class="mb-2 pb-1 border-bottom w-100 text-center" style="margin-top: -70px;">
                                        Fasilitas Pendukung</h4>
                                    <div class="py-2" style="min-height: 70px; max-height: 70px;">
                                        <p>SMK Al-Azhar dilengkapi dengan laboratorium komputer, ruang praktek, dan
                                            fasilitas
                                            lainnya untuk mendukung pembelajaran yang efektif.</p>
                                    </div>
                                    <br>
                                    <br><br>
                                    <div class="mt-3 pt-3">
                                        <a href="services/fasilitas-pendukung.html" class="text-white"><i
                                                class="fas fa-arrow-right"></i>
                                            Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials Area -->
        <style>
            body.modal-open {
                overflow-y: scroll !important;
                /* Scroll tetap terlihat meskipun modal terbuka */
            }

            .modal.fade .modal-dialog {
                transition: transform 0.3s ease-out, opacity 0.3s ease-out;
                /* transition:  */
            }
        </style>
        <div class="testimonials-area bg-gray default-padding-bottom" style="padding-top: 70px;">
            <div class="fixed-shape" style="background-image: url(assets/img/shape/10-red.png);"></div>
            <div class="container">
                <div class="testimonial-items">
                    <div class="row align-center">
                        <div class="col-lg-7 testimonials-content">
                            <div class="testimonials-carousel owl-carousel owl-theme">
                                @forelse ($employees as $item)
                                    <!-- Single Item -->
                                    <div class="item">
                                        <div class="info">
                                            <p>{{ $item->description }}</p>
                                            <div class="provider">
                                                <div class="thumb">
                                                    <!-- Klik gambar untuk memunculkan modal -->
                                                    <img src="{{ asset('storage/' . $item->image) }}" alt="Author"
                                                        style="cursor: pointer;" data-bs-toggle="modal"
                                                        data-bs-target="#detailModal"
                                                        onclick="showModal(
                                                            '{{ $item->name }}',
                                                            '{{ $item->jobs }}',
                                                            '{{ $item->description }}',
                                                            '{{ asset('storage/' . $item->image) }}',
                                                            '{{ $item->phoneNumber }}',
                                                            '{{ $item->address }}'
                                                        )">
                                                </div>
                                                <div class="content">
                                                    <h4>{{ $item->name }}</h4>
                                                    <span>{{ $item->jobs }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                @empty
                                    <p>Not Found</p>
                                @endforelse
                            </div>
                        </div>
                        <div class="col-lg-5 info">
                            <h4>Testimonials</h4>
                            <h2>Check what our satisfied clients said</h2>
                            <p>Why I say old chap that is, spiffing off his nut color blimey and guvnords geeza bloke knees
                                up bobby sloshed arse</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="detailModal" tabindex="1" data-bs-focus="false"
            aria-labelledby="detailModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailModalLabel">Detail</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <img id="modalImage" src="" alt="Author" class="img-fluid mb-3"
                                style="max-height: 200px;">
                        </div>
                        <h4 id="modalName"></h4>
                        <h6 id="modalJob" class="text-muted"></h6>
                        <p id="modalDescription"></p>
                        <p><strong>Phone Number:</strong> <span id="modalPhoneNumber"></span></p>
                        <p><strong>Address:</strong> <span id="modalAddress"></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // JavaScript untuk memunculkan detail ke dalam modal
            function showModal(name, job, description, image, phoneNumber, address) {
                document.getElementById('modalName').innerText = name;
                document.getElementById('modalJob').innerText = job;
                document.getElementById('modalDescription').innerText = description;
                document.getElementById('modalImage').src = image;
                document.getElementById('modalPhoneNumber').innerText = phoneNumber;
                document.getElementById('modalAddress').innerText = address;
            }
        </script>

        <!-- End testimonials Area -->

        <div class="m-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4>MITRA KAMI</h4>
                            <h3>Tumbuh bersama: Kolaborasi menuju kesuksesan</h3>
                            <div class="devider"></div>
                        </div>
                    </div>
                    <div class="container">
                        <!-- Start Services Items -->
                        <div class="services-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="thumb-services-carousel owl-carousel owl-theme owl-loaded owl-drag">
                                        <div class="item"
                                            style="display: flex; align-items: center; justify-content: center;">
                                            <img src="logo/acs.png" alt="SMK Al Azhar Sempu" class="img-fluid"
                                                style="max-width: 60%; max-height: auto; display: inline-block; filter: grayscale(100%);">
                                        </div>
                                        <div class="item"
                                            style="display: flex; align-items: center; justify-content: center;">
                                            <img src="logo/ALjahit.png" alt="SMKN 1 Kepanjen" class="img-fluid"
                                                style="max-width: 70%; max-height: auto; display: inline-block; filter: grayscale(100%);">
                                        </div>
                                        <div class="item"
                                            style="display: flex; align-items: center; justify-content: center;">
                                            <img src="logo/ALmotor.png" alt="SMKN 1 Probolinggo" class="img-fluid"
                                                style="max-width: 70%; max-height: auto; display: inline-block; filter: grayscale(100%);">
                                        </div>
                                        <div class="item"
                                            style="display: flex; align-items: center; justify-content: center;">
                                            <img src="logo/ALtoko.png" alt="SMK Muhammadiyah 6 Rogojampi"
                                                class="img-fluid"
                                                style="max-width: 60%; max-height: auto; display: inline-block; filter: grayscale(100%);">
                                        </div>
                                        <div class="item"
                                            style="display: flex; align-items: center; justify-content: center;">
                                            <img src="logo/genteng.jpeg" alt="SMK Muhammadiyah 9 Gambiran"
                                                class="img-fluid"
                                                style="max-width: 70%; max-height: auto; display: inline-block; filter: grayscale(100%); margin-top: 40px;">
                                        </div>
                                        <div class="item"
                                            style="display: flex; align-items: center; justify-content: center;">
                                            <img src="logo/hummatech.png" alt="SMK Nurul Abror Arobbaniyyin"
                                                class="img-fluid"
                                                style="max-width: 60%; max-height: auto; display: inline-block; filter: grayscale(100%);">
                                        </div>
                                        <div class="item"
                                            style="display: flex; align-items: center; justify-content: center;">
                                            <img src="logo/mikrotik.png" alt="SMK 17 Agustus Muncar" class="img-fluid"
                                                style="max-width: 80%; max-height: auto; display: inline-block; filter: grayscale(100%); margin-top: 15px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-12 pagi-area text-center">
                <a class="text-primary" href="mitra.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M16.15 13H5q-.425 0-.712-.288T4 12q0-.425.288-.712T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L19.3 11.3q.15.15.213.325t.062.375q0 .2-.062.375t-.213.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7z" />
                    </svg> Lihat Selengkapnya
                </a>
            </div>
        </div>

        <!-- End collab  Area -->

        <div class="bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center mt-4">
                            <h4>BERITA</h4>
                            <h3>Melangkah Ke Depan: Kabar Terbaru Mengenai Perkembangan Perusahaan Kami</h3>
                            <div class="devider"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-area full-blog blog-standard full-blog grid-colum">
                <div class="container">
                    <div class="blog-items content-less">
                        <div class="blog-content">
                            <div class="blog-item-box">

                                <div id="newsCarousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="">
                                            <div class="row">
                                                @forelse ($news as $item)
                                                    <div class="col-lg-4 col-md-6 mt-2">
                                                        <div class="item">
                                                            <div class="news-card">

                                                                <div class="thumb">
                                                                    <a
                                                                        href="news/sipjaki-buatan-pt--raih-apresiasi-dari-pemerintah-provinsi-jawa-timur.html">
                                                                        <img src="{{ asset('storage/' . $item->image) }}"
                                                                            alt="{{ $item->title }}" class="img-fluid"
                                                                            style="width: 500px; height: 200px; object-fit: cover;">
                                                                    </a>

                                                                    <time class="date" datetime="">2 Mei
                                                                        2024</time>
                                                                </div>
                                                            </div>
                                                            <div class="info">
                                                                <div class="meta">
                                                                    <ul>
                                                                        <li>
                                                                            <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}"
                                                                                alt=" Logo" />
                                                                            <span>By</span>
                                                                            <a
                                                                                href="javascript:void(0)">{{ $item->user->name }}</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <h4>
                                                                    <a
                                                                        href="news/sipjaki-buatan-pt--raih-apresiasi-dari-pemerintah-provinsi-jawa-timur.html">{{ Str::limit($item->title, 80) }}</a>
                                                                </h4>

                                                                <p class="">
                                                                    {{ Str::limit(strip_tags($item->description), 150) }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @empty

                                                    <div class="col-lg-4 col-md-6 mt-2">
                                                        <div class="item">
                                                            <div class="thumb">
                                                                <a
                                                                    href="news/sipjaki-buatan-pt--raih-apresiasi-dari-pemerintah-provinsi-jawa-timur.html">
                                                                    <img src="storage/news/sipjaki-buatan-pt--raih-apresiasi-dari-pemerintah-provinsi-jawa-timur.webp"
                                                                        alt="SIPJAKI Buatan PT  Raih Apresiasi dari Pemerintah Provinsi Jawa Timur"
                                                                        class="img-fluid"
                                                                        style="width: 500px; height: 200px; object-fit: cover;">
                                                                </a>

                                                                <time class="date" datetime="">2 Mei 2024</time>
                                                            </div>
                                                            <div class="info">
                                                                <div class="meta">
                                                                    <ul>
                                                                        <li>
                                                                            <img src="mobilelogo.png" alt=" Logo" />
                                                                            <span>By </span>
                                                                            <a href="javascript:void(0)"></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <h4>
                                                                    <a
                                                                        href="news/sipjaki-buatan-pt--raih-apresiasi-dari-pemerintah-provinsi-jawa-timur.html">SIPJAKI
                                                                        Buatan PT Raih Apresiasi dari Pemerintah
                                                                        Provinsi Jawa Timur</a>
                                                                </h4>

                                                                <p class="">SIPJAKI (Sistem Informasi Pembina
                                                                    Jasa
                                                                    Konstruksi Kabupaten Pasuruan) yang dikembangkan
                                                                    oleh
                                                                    perusahaan teknologi , mendapat penghargaan
                                                                    yang tinggi dari pemerintah provinsi Jawa Timur.
                                                                    Pengh...</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 mt-2">
                                                        <div class="item">
                                                            <div class="thumb">
                                                                <a
                                                                    href="news/perkuat-skill-pemrograman-mobile-apps-bagi-guru-bbppmpv-boe-gelar-magang-dan-uji-kompetensi-di-.html">
                                                                    <img src="storage/news/perkuat-skill-pemrograman-mobile-apps-bagi-guru-bbppmpv-boe-gelar-magang-dan-uji-kompetensi-di-.webp"
                                                                        alt="Perkuat Skill Pemrograman Mobile Apps Bagi Guru, BBPPMPV BOE Gelar Magang dan Uji Kompetensi di "
                                                                        class="img-fluid"
                                                                        style="width: 500px; height: 200px; object-fit: cover;">
                                                                </a>

                                                                <time class="date" datetime="">30 April
                                                                    2024</time>
                                                            </div>
                                                            <div class="info">
                                                                <div class="meta">
                                                                    <ul>
                                                                        <li>
                                                                            <img src="mobilelogo.png" alt=" Logo" />
                                                                            <span>By </span>
                                                                            <a href="javascript:void(0)"></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <h4>
                                                                    <a
                                                                        href="news/perkuat-skill-pemrograman-mobile-apps-bagi-guru-bbppmpv-boe-gelar-magang-dan-uji-kompetensi-di-.html">Perkuat
                                                                        Skill Pemrograman Mobile Apps Bagi Guru, BBPPMPV
                                                                        BOE
                                                                        Gelar Magang dan Uji Kompetensi di </a>
                                                                </h4>

                                                                <p class="">Lima orang guru dari berbagai SMK
                                                                    melaksanakan magang industri di sejak tanggal
                                                                    22 April 2024 hingga 30 April 2024. Kegiatan ini
                                                                    merupakan rangkaian pelatihan upskilling bagi guru
                                                                    yang
                                                                    disel...</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 mt-2">
                                                        <div class="item">
                                                            <div class="thumb">
                                                                <a
                                                                    href="news/peserta-didik-kelas-industri--menyabet-juara-lks-tingkat-provinsi-jawa-timur.html">
                                                                    <img src="storage/news/peserta-didik-kelas-industri--menyabet-juara-lks-tingkat-provinsi-jawa-timur.webp"
                                                                        alt="Peserta Didik Kelas Industri  Menyabet Juara LKS Tingkat Provinsi Jawa Timur"
                                                                        class="img-fluid"
                                                                        style="width: 500px; height: 200px; object-fit: cover;">
                                                                </a>

                                                                <time class="date" datetime="">26 April
                                                                    2024</time>
                                                            </div>
                                                            <div class="info">
                                                                <div class="meta">
                                                                    <ul>
                                                                        <li>
                                                                            <img src="mobilelogo.png" alt=" Logo" />
                                                                            <span>By </span>
                                                                            <a href="javascript:void(0)"></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <h4>
                                                                    <a
                                                                        href="news/peserta-didik-kelas-industri--menyabet-juara-lks-tingkat-provinsi-jawa-timur.html">Peserta
                                                                        Didik Kelas Industri Menyabet Juara LKS
                                                                        Tingkat Provinsi Jawa Timur</a>
                                                                </h4>

                                                                <p class="">Untuk kesekian kalinya, peserta didik
                                                                    kelas industri berhasil memenangkan juara LKS
                                                                    (Lomba Kompetensi Siswa)
                                                                    Tingkat Jawa Timur Tahun 2024
                                                                    dalam bidang Artificial Intelligence. Kali ini
                                                                    tim...
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforelse
                                                <div class="col-md-12 pagi-area text-center mb-5 mt-3">
                                                    <a class="text-primary" href="news.html">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                            height="32" viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M16.15 13H5q-.425 0-.712-.288T4 12q0-.425.288-.712T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L19.3 11.3q.15.15.213.325t.062.375q0 .2-.062.375t-.213.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7z" />
                                                        </svg> Lihat Berita Lainnya
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="services-details-area default-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center mt-4">
                            <h4>portofolio</h4>
                            <h3>Inspirasi dari Karya: Portfolio Menggambarkan Keunggulan Produk</h3>
                            <div class="devider"></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="services-details-items">
                    <div class="row">
                        <div class="col-lg-12 services-single-content">
                            <div class="gallery-area overflow-hidden pt-3">
                                <div class="container">
                                    <div class="case-items-area">
                                        <div class="masonary">
                                            <div id="portfolio-grid" class="gallery-items colums-3 gap-2">


                                                <div class="pf-item mx-2" style="width: 370px">
                                                    <div class="item" style="width: 370px">
                                                        <div class="" style="background-color: #E5F1FF;">
                                                            <img src="landing-page/images/im01.jpg"
                                                                class="object-fit-cover" style="object-fit: cover"
                                                                alt="SIPJAKI (Sistem Informasi Pembina Jasa Konstruksi Kabupaten Pasuruan)">
                                                        </div>
                                                        <div class="content">
                                                            <div class="info mb-0">
                                                                <h4 class=" mb-0"><a
                                                                        href="product/sipjaki-sistem-informasi-pembina-jasa-konstruksi-kabupaten-pasuruan.html">SIPJAKI
                                                                        (Sistem Informasi Pembina Jasa Konstr...</a>
                                                                </h4>
                                                                <p class="text-white mb-0">SIPJAKI merupakan singkatan
                                                                    dari Sistem Informasi Pembina Jasa Konstruksi yang
                                                                    m...</p>
                                                                <div class="button">
                                                                    <a href="storage/portfolio/sipjaki-sistem-informasi-pembina-jasa-konstruksi-kabupaten-pasuruan.png"
                                                                        class="item popup-gallery">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="30" height="30"
                                                                            viewBox="0 0 512 396.94">
                                                                            <path fill="currentColor" fill-rule="nonzero"
                                                                                d="M49.63 0h336.95c13.64 0 26.03 5.64 35 14.6l.82.91c8.52 8.93 13.79 21.03 13.79 34.13v182.01c-8.72-2.42-17.63-4.27-26.69-5.48V192.2l-36.96 32.61c-21.85 1.34-42.73 6.43-62.42 14.53l-40.98-39.31-27.44 78.69c-.4 2.81-1.59 5.18-3.25 7.02l-1.7 1.57c-5.12 3.94-12.95 3.92-17.94-1.81l-78.13-118.22L26.7 262.86v79.61c0 6.25 2.62 11.97 6.77 16.13 4.19 4.19 9.95 6.81 16.16 6.81H235c10.6 9.86 21.96 18.81 33.95 26.69H49.63c-13.57 0-26.02-5.61-35.03-14.63-8.96-8.96-14.6-21.37-14.6-35V49.64c0-13.66 5.59-26.09 14.57-35.07l.92-.84C24.42 5.24 36.46 0 49.63 0zm337.74 292.43c9.66 0 18.41 3.92 24.74 10.24 6.33 6.33 10.24 15.07 10.24 24.74 0 9.65-3.91 18.41-10.24 24.73-6.33 6.33-15.06 10.25-24.74 10.25-9.65 0-18.4-3.92-24.73-10.25a34.82 34.82 0 0 1-10.24-24.73c0-9.65 3.91-18.41 10.24-24.74 6.33-6.32 15.08-10.24 24.73-10.24zm-122.68 29.88c28.32-34.25 72.44-63.49 117.77-64.39 48.01-.97 96.09 29.72 127.66 64.45a7.207 7.207 0 0 1 .47 9.14c-26.32 37.15-73.49 65.2-119.34 65.43-46.78.21-97.89-28.89-126.93-65.24-2.25-2.84-2.03-6.84.37-9.39zm20.04 4.96c26.61 30.85 65.31 52.73 106.3 52.55 39.43-.19 75.09-21.01 99.09-52.07-28.24-29.46-65.39-53.54-107.15-52.72-39.06.79-73.06 23.66-98.24 52.24zM26.7 227.39c29.55-26.64 76.84-63.89 106.71-88.99 4.87-4.22 12.12-4.13 16.91-.04.97.81 1.68 1.78 2.49 2.75l67.52 105.51 26.92-75.68c1.99-10.57 14.47-14.08 22.04-7.05l62.79 60.12 77.42-72.04V49.64c0-5.94-2.36-11.48-6.2-15.61l-.6-.56c-4.16-4.15-9.88-6.77-16.12-6.77H49.63c-6.04 0-11.54 2.34-15.61 6.12l-.58.62c-4.15 4.16-6.74 9.9-6.74 16.2v177.75zM267.63 61.07c11.02 0 21.04 4.49 28.28 11.73 7.24 7.24 11.72 17.23 11.72 28.28 0 11.02-4.48 21.04-11.72 28.28-7.24 7.24-17.26 11.72-28.28 11.72-11.04 0-21.04-4.48-28.28-11.72-7.24-7.24-11.72-17.26-11.72-28.28 0-11.05 4.48-21.04 11.72-28.28 7.24-7.24 17.24-11.73 28.28-11.73zm12.21 27.8a17.249 17.249 0 0 0-12.21-5.04c-4.77 0-9.09 1.93-12.2 5.04a17.198 17.198 0 0 0-5.05 12.21c0 4.77 1.93 9.09 5.05 12.2 3.11 3.11 7.43 5.05 12.2 5.05s9.09-1.94 12.21-5.05c3.11-3.11 5.04-7.43 5.04-12.2s-1.93-9.1-5.04-12.21z" />
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pf-item mx-2" style="width: 370px">
                                                    <div class="item" style="width: 370px">
                                                        <div class="" style="background-color: #E5F1FF;">
                                                            <img src="landing-page/images/im02.jpg"
                                                                class="object-fit-cover" style="object-fit: cover"
                                                                alt="Tracer Study SMKN 2 Penajam Paser Utara">
                                                        </div>
                                                        <div class="content">
                                                            <div class="info mb-0">
                                                                <h4 class=" mb-0"><a
                                                                        href="product/tracer-study-smkn-2-penajam-paser-utara.html">Tracer
                                                                        Study SMKN 2 Penajam Paser Utara</a>
                                                                </h4>
                                                                <p class="text-white mb-0">Tracer Study SKADA adalah
                                                                    studi pelacakan jejak lulusan/alumni dari SMK Negeri
                                                                    2...</p>
                                                                <div class="button">
                                                                    <a href="storage/portfolio/tracer-study-smkn-2-penajam-paser-utara.png"
                                                                        class="item popup-gallery">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="30" height="30"
                                                                            viewBox="0 0 512 396.94">
                                                                            <path fill="currentColor" fill-rule="nonzero"
                                                                                d="M49.63 0h336.95c13.64 0 26.03 5.64 35 14.6l.82.91c8.52 8.93 13.79 21.03 13.79 34.13v182.01c-8.72-2.42-17.63-4.27-26.69-5.48V192.2l-36.96 32.61c-21.85 1.34-42.73 6.43-62.42 14.53l-40.98-39.31-27.44 78.69c-.4 2.81-1.59 5.18-3.25 7.02l-1.7 1.57c-5.12 3.94-12.95 3.92-17.94-1.81l-78.13-118.22L26.7 262.86v79.61c0 6.25 2.62 11.97 6.77 16.13 4.19 4.19 9.95 6.81 16.16 6.81H235c10.6 9.86 21.96 18.81 33.95 26.69H49.63c-13.57 0-26.02-5.61-35.03-14.63-8.96-8.96-14.6-21.37-14.6-35V49.64c0-13.66 5.59-26.09 14.57-35.07l.92-.84C24.42 5.24 36.46 0 49.63 0zm337.74 292.43c9.66 0 18.41 3.92 24.74 10.24 6.33 6.33 10.24 15.07 10.24 24.74 0 9.65-3.91 18.41-10.24 24.73-6.33 6.33-15.06 10.25-24.74 10.25-9.65 0-18.4-3.92-24.73-10.25a34.82 34.82 0 0 1-10.24-24.73c0-9.65 3.91-18.41 10.24-24.74 6.33-6.32 15.08-10.24 24.73-10.24zm-122.68 29.88c28.32-34.25 72.44-63.49 117.77-64.39 48.01-.97 96.09 29.72 127.66 64.45a7.207 7.207 0 0 1 .47 9.14c-26.32 37.15-73.49 65.2-119.34 65.43-46.78.21-97.89-28.89-126.93-65.24-2.25-2.84-2.03-6.84.37-9.39zm20.04 4.96c26.61 30.85 65.31 52.73 106.3 52.55 39.43-.19 75.09-21.01 99.09-52.07-28.24-29.46-65.39-53.54-107.15-52.72-39.06.79-73.06 23.66-98.24 52.24zM26.7 227.39c29.55-26.64 76.84-63.89 106.71-88.99 4.87-4.22 12.12-4.13 16.91-.04.97.81 1.68 1.78 2.49 2.75l67.52 105.51 26.92-75.68c1.99-10.57 14.47-14.08 22.04-7.05l62.79 60.12 77.42-72.04V49.64c0-5.94-2.36-11.48-6.2-15.61l-.6-.56c-4.16-4.15-9.88-6.77-16.12-6.77H49.63c-6.04 0-11.54 2.34-15.61 6.12l-.58.62c-4.15 4.16-6.74 9.9-6.74 16.2v177.75zM267.63 61.07c11.02 0 21.04 4.49 28.28 11.73 7.24 7.24 11.72 17.23 11.72 28.28 0 11.02-4.48 21.04-11.72 28.28-7.24 7.24-17.26 11.72-28.28 11.72-11.04 0-21.04-4.48-28.28-11.72-7.24-7.24-11.72-17.26-11.72-28.28 0-11.05 4.48-21.04 11.72-28.28 7.24-7.24 17.24-11.73 28.28-11.73zm12.21 27.8a17.249 17.249 0 0 0-12.21-5.04c-4.77 0-9.09 1.93-12.2 5.04a17.198 17.198 0 0 0-5.05 12.21c0 4.77 1.93 9.09 5.05 12.2 3.11 3.11 7.43 5.05 12.2 5.05s9.09-1.94 12.21-5.05c3.11-3.11 5.04-7.43 5.04-12.2s-1.93-9.1-5.04-12.21z" />
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pf-item mx-2" style="width: 370px">
                                                    <div class="item" style="width: 370px">
                                                        <div class="" style="background-color: #E5F1FF;">
                                                            <img src="landing-page/images/im02.jpg"
                                                                class="object-fit-cover" style="object-fit: cover"
                                                                alt="JAJALENPAS (Jaringan Jalan Kabupaten Pasuruan)">
                                                        </div>
                                                        <div class="content">
                                                            <div class="info mb-0">
                                                                <h4 class=" mb-0"><a
                                                                        href="product/jajalenpas-jaringan-jalan-kabupaten-pasuruan.html">JAJALENPAS
                                                                        (Jaringan Jalan Kabupaten Pasuruan...</a>
                                                                </h4>
                                                                <p class="text-white mb-0">JAJALENPAS merupakan
                                                                    singkatan dari Jaringan Jalan Kabupaten Pasuruan
                                                                    yang merup...</p>
                                                                <div class="button">
                                                                    <a href="storage/portfolio/jajalenpas-jaringan-jalan-kabupaten-pasuruan.png"
                                                                        class="item popup-gallery">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="30" height="30"
                                                                            viewBox="0 0 512 396.94">
                                                                            <path fill="currentColor" fill-rule="nonzero"
                                                                                d="M49.63 0h336.95c13.64 0 26.03 5.64 35 14.6l.82.91c8.52 8.93 13.79 21.03 13.79 34.13v182.01c-8.72-2.42-17.63-4.27-26.69-5.48V192.2l-36.96 32.61c-21.85 1.34-42.73 6.43-62.42 14.53l-40.98-39.31-27.44 78.69c-.4 2.81-1.59 5.18-3.25 7.02l-1.7 1.57c-5.12 3.94-12.95 3.92-17.94-1.81l-78.13-118.22L26.7 262.86v79.61c0 6.25 2.62 11.97 6.77 16.13 4.19 4.19 9.95 6.81 16.16 6.81H235c10.6 9.86 21.96 18.81 33.95 26.69H49.63c-13.57 0-26.02-5.61-35.03-14.63-8.96-8.96-14.6-21.37-14.6-35V49.64c0-13.66 5.59-26.09 14.57-35.07l.92-.84C24.42 5.24 36.46 0 49.63 0zm337.74 292.43c9.66 0 18.41 3.92 24.74 10.24 6.33 6.33 10.24 15.07 10.24 24.74 0 9.65-3.91 18.41-10.24 24.73-6.33 6.33-15.06 10.25-24.74 10.25-9.65 0-18.4-3.92-24.73-10.25a34.82 34.82 0 0 1-10.24-24.73c0-9.65 3.91-18.41 10.24-24.74 6.33-6.32 15.08-10.24 24.73-10.24zm-122.68 29.88c28.32-34.25 72.44-63.49 117.77-64.39 48.01-.97 96.09 29.72 127.66 64.45a7.207 7.207 0 0 1 .47 9.14c-26.32 37.15-73.49 65.2-119.34 65.43-46.78.21-97.89-28.89-126.93-65.24-2.25-2.84-2.03-6.84.37-9.39zm20.04 4.96c26.61 30.85 65.31 52.73 106.3 52.55 39.43-.19 75.09-21.01 99.09-52.07-28.24-29.46-65.39-53.54-107.15-52.72-39.06.79-73.06 23.66-98.24 52.24zM26.7 227.39c29.55-26.64 76.84-63.89 106.71-88.99 4.87-4.22 12.12-4.13 16.91-.04.97.81 1.68 1.78 2.49 2.75l67.52 105.51 26.92-75.68c1.99-10.57 14.47-14.08 22.04-7.05l62.79 60.12 77.42-72.04V49.64c0-5.94-2.36-11.48-6.2-15.61l-.6-.56c-4.16-4.15-9.88-6.77-16.12-6.77H49.63c-6.04 0-11.54 2.34-15.61 6.12l-.58.62c-4.15 4.16-6.74 9.9-6.74 16.2v177.75zM267.63 61.07c11.02 0 21.04 4.49 28.28 11.73 7.24 7.24 11.72 17.23 11.72 28.28 0 11.02-4.48 21.04-11.72 28.28-7.24 7.24-17.26 11.72-28.28 11.72-11.04 0-21.04-4.48-28.28-11.72-7.24-7.24-11.72-17.26-11.72-28.28 0-11.05 4.48-21.04 11.72-28.28 7.24-7.24 17.24-11.73 28.28-11.73zm12.21 27.8a17.249 17.249 0 0 0-12.21-5.04c-4.77 0-9.09 1.93-12.2 5.04a17.198 17.198 0 0 0-5.05 12.21c0 4.77 1.93 9.09 5.05 12.2 3.11 3.11 7.43 5.05 12.2 5.05s9.09-1.94 12.21-5.05c3.11-3.11 5.04-7.43 5.04-12.2s-1.93-9.1-5.04-12.21z" />
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center pt-5">
                    <a class="text-primary" href="portfolio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M16.15 13H5q-.425 0-.712-.288T4 12q0-.425.288-.712T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L19.3 11.3q.15.15.213.325t.062.375q0 .2-.062.375t-.213.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7z" />
                        </svg> Lihat Selengkapnya
                    </a>
                </div>
            </div>
        </div>



        <script src="../code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="../cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <script>
            $(document).ready(function() {
                var itemCount = $('.thumb-services-carousel .item').length;
                $('.thumb-services-carousel').owlCarousel({
                    center: true,
                    dots: false,
                    nav: false,

                    items: 5,
                    loop: itemCount > 4 ? true : false,
                    margin: 10,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 5
                        }
                    }
                });
            });
        </script>

    </div>

@endsection
