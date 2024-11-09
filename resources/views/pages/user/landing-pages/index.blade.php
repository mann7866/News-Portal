@extends('layouts.users.app')
@section('content')
    <section style="background-image: url('bg/tes-bg.jpg'); background-size: cover; color: rgb(255, 255, 255);" id="home"
        class="video-section js-height-full">
        <!-- Background hitam transparan -->
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;">
        </div>

        <div class="home-text-wrapper relative container" style="position: relative; z-index: 2;">
            <div class="home-message">
                <p style="color: rgb(241, 241, 241);">Laman Berita Smk Al-Azhar</p>
                <small style="color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit
                    molestiae adipisci quibusdam repellat tempore minus, expedita sapiente iste? Reiciendis sunt distinctio,
                    vitae laudantium temporibus labore qui dolores nemo voluptas et..</small>
            </div>
        </div>
        <div class="slider-bottom" style="color: rgb(255, 255, 255); z-index: 2;">
            <span id="down" onclick="scrollToDown()">Explore <i class="fa fa-angle-down"></i></span>
        </div>
    </section>
    <script>
        function scrollToDown() {
            document.getElementById('down-target').scrollIntoView({
                behavior: 'smooth'
            });
        }
    </script>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-module p40l" id="down-target">
                        <h2>Visi dan Misi Kami</h2>
                        <hr>
                        <div class="visi-box mb-4">
                            <h3 class="mb-3">Visi:</h3>
                            <div class="visi-content p-3">
                                <p>Unggul dalam Prestasi Akademik dan Non Akademik serta menciptakan lulusan yang
                                    berkompeten sesuai kebutuhan industri berdasarkan IMTAQ.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="misi-box">
                            <h3 class="mb-3">Misi:</h3>
                            <ul class="misi-list">
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fa fa-check-circle text-success me-2 mt-1"></i>
                                    <span>Menghasilkan Lulusan yang Cerdas, Trampil, Kompetitif dan Mandiri Sehingga
                                        Mempunyai Nilai Juang yang Tinggi.</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fa fa-check-circle text-success me-2 mt-1"></i>
                                    <span>Meningkatkan Mutu Pembelajaran yang mencakup Ilmu Pengetahuan dan Teknologi Dengan
                                        Menjunjung Tinggi Budaya Bangsa dan Budi Pekerti yang Luhur.</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fa fa-check-circle text-success me-2 mt-1"></i>
                                    <span>Membina Hubungan yang Harmonis dan Saling Menguntungkan Antara Sekolah, Dunia
                                        Industri, dan Dunia Usaha.</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fa fa-check-circle text-success me-2 mt-1"></i>
                                    <span>Menanamkan Jiwa Kewirausahaan (Entrepreneurship).</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fa fa-check-circle text-success me-2 mt-1"></i>
                                    <span>Mengembangkan Life Skill (Kecakapan Hidup) Melalui Kegiatan Ekstrakurikuler,
                                        Latihan Berwirausaha dengan Spesifik yang Bersetandar pada Kompetensi Keahlian
                                        Kerja.</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fa fa-check-circle text-success me-2 mt-1"></i>
                                    <span>Mengembangkan Program Keahlian yang Merupakan Tuntutan Pasar Kerja, Menanamkan
                                        Budaya Kerja, dan Sikap Profesional untuk Menunjang Hidup Layak Melalui Pengembangan
                                        Karir.</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fa fa-check-circle text-success me-2 mt-1"></i>
                                    <span>Membentuk Sikap dan Perilaku Santun serta Berbudi Luhur Berbasis IMTAQ dengan
                                        Menjunjung Tinggi Nilai-nilai Luhur Budaya Bangsa.</span>
                                </li>
                            </ul>
                        </div>

                        <div class="btn-wrapper mt-4">
                            <a href="##" class="btn btn-primary">Pelajari Lebih Lanjut Tentang Kami</a>
                        </div>

                    </div> <!-- end custom-module -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>



    <section class="section db p120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tagline-message text-center">
                        <h3>Program Studi yang Ada di SMK Al-Azhar</h3>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->
    
    <section class="section gb nopadtop" style="margin:25px;">
        <div class="container">
            <div class="row">
                <!-- Jurusan 1 -->
                <div class="col-md-4 mb-4">
                    <div class="box box-akuntansi">
                        <i class="bi bi-database icon-animation"></i>
                        <h4>Akuntansi</h4>
                        <p>Menyediakan berbagai modul yang dibutuhkan untuk pembelajaran daring bidang akuntansi, membantu siswa memahami dasar-dasar pengelolaan keuangan dan pencatatan transaksi bisnis.</p>
                        <a href="#" class="readmore">Baca selengkapnya</a>
                    </div>
                </div><!-- end col -->
    
                <!-- Jurusan 2 -->
                <div class="col-md-4 mb-4">
                    <div class="box box-rekayasa">
                        <i class="bi bi-code-slash icon-animation"></i>
                        <h4>Rekayasa Perangkat Lunak</h4>
                        <p>Didesain untuk mendukung pembelajaran dalam bidang pemrograman dan pengembangan perangkat lunak. Template ini responsif dan mendukung berbagai perangkat seluler.</p>
                        <a href="#" class="readmore">Baca selengkapnya</a>
                    </div>
                </div><!-- end col -->
    
                <!-- Jurusan 3 -->
                <div class="col-md-4 mb-4">
                    <div class="box box-tata-busana">
                        <i class="bi bi-scissors icon-animation"></i>
                        <h4>Tata Busana</h4>
                        <p>Merancang semua halaman pendukung yang dibutuhkan untuk pengguna, termasuk desain yang kreatif dan inovatif yang membantu siswa mengembangkan keterampilan dalam tata busana.</p>
                        <a href="#" class="readmore">Baca selengkapnya</a>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
    
            <div class="row">
                <!-- Jurusan 4 -->
                <div class="col-md-4 mb-4">
                    <div class="box box-komputer">
                        <i class="bi bi-globe2 icon-animation"></i>
                        <h4>Teknik Komputer & Jaringan</h4>
                        <p>Program ini mencakup konsep dasar HTML5, yaitu bahasa markup yang digunakan untuk mengatur struktur dan menampilkan konten di web. Materi ini memberikan dasar yang kuat untuk memahami jaringan komputer.</p>
                        <a href="#" class="readmore">Baca selengkapnya</a>
                    </div>
                </div><!-- end col -->
    
                <!-- Jurusan 5 -->
                <div class="col-md-4 mb-4">
                    <div class="box box-otomotif">
                        <i class="bi bi-tools icon-animation"></i>
                        <h4>Teknik Kendaraan Ringan Otomotif</h4>
                        <p>Memperkenalkan teknik-teknik dasar dalam perawatan dan perbaikan kendaraan ringan, termasuk prinsip Bootstrap yang memudahkan pengenalan program ke dalam komputer untuk memulai instruksi awal.</p>
                        <a href="#" class="readmore">Baca selengkapnya</a>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    
    <!-- CSS untuk animasi ikon -->
    <style>
        .icon-animation {
            transition: all 0.3s ease;
            /* Menambahkan efek transisi */
        }
    
        .icon-animation:hover {
            color: #007b;
            /* Ubah warna ikon saat hover */
            transform: scale(1.2);
            /* Membesarkan ikon saat hover */
        }
    </style>
    <section class="section db">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-count">
                        <h4 class="stat-timer">600</h4>
                        <h3><i class="flaticon-black-graduation-cap-tool-of-university-student-for-head"></i> Murid</h3>
                    </div><!-- stat-count -->
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6">
                    <div class="stat-count">
                        <h4 class="stat-timer">5</h4>
                        <h3>
                            <i class="flaticon-online-course"
                                style="font-size: 20px; margin-right: 8px; vertical-align: middle;"></i>
                            Program Studi
                        </h3>
                    </div><!-- stat-count -->
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6">
                    <div class="stat-count">
                        <h4 class="stat-timer">50</h4>
                        <h3><i class="fa fa-users" style="font-size: 20px; margin-right: 8px; vertical-align: middle;"></i>
                            Karyawan</h3>
                    </div><!-- stat-count -->
                </div><!-- end col -->


                <div class="col-lg-3 col-md-6">
                    <div class="stat-count">
                        <h4 class="stat-timer">5</h4>
                        <h3><i class="fa fa-flask" style="font-size: 20px; margin-right: 8px; vertical-align: middle;"></i>
                            Laboratorium</h3>
                    </div><!-- stat-count -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <section class="section bg-light py-5">
        <div class="section-title text-center mb-5">
            <h3>Testimoni</h3>
            <p>Apa kata mereka tentang SMK Al-Azhar.</p>
        </div>
    
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Testimonial 1 -->
                <div class="swiper-slide">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="{{ asset('assets-Guru/team-1.jpg') }}" alt="User 1" class="rounded-circle mb-3" style="width: 80px; height: 80px;">
                        <h5>Ahmad Fauzi</h5>
                        <small>Siswa Jurusan RPL</small>
                        <p class="text-muted mt-3">"Pembelajaran di SMK Al-Azhar sangat interaktif dan mendukung perkembangan saya di bidang teknologi. Guru-guru sangat membantu dan fasilitasnya memadai."</p>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="swiper-slide">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="{{ asset('assets-guru/team-2.jpg') }}" alt="User 2" class="rounded-circle mb-3" style="width: 80px; height: 80px;">
                        <h5>Rina Suryani</h5>
                        <small>Alumni Jurusan Akuntansi</small>
                        <p class="text-muted mt-3">"Setelah lulus, saya merasa sangat siap menghadapi dunia kerja. SMK Al-Azhar memberikan bekal yang sangat berguna, terutama dalam kompetensi akuntansi."</p>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="swiper-slide">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="{{ asset('assets-Guru/team-3.jpg') }}" alt="User 3" class="rounded-circle mb-3" style="width: 80px; height: 80px;">
                        <h5>Budi Santoso</h5>
                        <small>Orang Tua Siswa</small>
                        <p class="text-muted mt-3">"Sebagai orang tua, saya sangat puas dengan kemajuan dan perkembangan anak saya. Sekolah ini memberikan pendidikan berkualitas dan menanamkan nilai-nilai luhur."</p>
                    </div>
                </div>
                <!-- Testimonial 4 -->
                <div class="swiper-slide">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="{{ asset('assets-Guru/team-4.jpg') }}" alt="User 4" class="rounded-circle mb-3" style="width: 80px; height: 80px;">
                        <h5>Rudi Hartono</h5>
                        <small>Orang Tua Siswa</small>
                        <p class="text-muted mt-3">"Sebagai orang tua, saya sangat puas dengan kemajuan dan perkembangan anak saya. Sekolah ini memberikan pendidikan berkualitas dan menanamkan nilai-nilai luhur."</p>
                    </div>
                </div>
            </div>
    
            <!-- Swiper Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    
    <!-- JS untuk Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true, // Aktifkan looping
            slidesPerView: 3, // Menampilkan tiga testimonial dalam satu waktu
            spaceBetween: 10, // Jarak antar slide
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 9000, // Interval auto slide setiap 9 detik
            },
            breakpoints: {
                // Responsive breakpoints
                320: {
                    slidesPerView: 1, // 1 testimonial for small screens
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2, // 2 testimonial for medium screens
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3, // 3 testimonial for larger screens
                    spaceBetween: 30,
                },
            },
        });
    </script>
    
    <!-- CSS tambahan untuk penataan -->
    <style>
        .swiper-container {
            width: 100%;
            height: auto;
            overflow: hidden; /* Prevents horizontal scrollbar */
        }
    
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    
        .swiper-pagination-bullet {
            background-color: #007bff;
        }
    
        /* Styling for responsiveness */
        .swiper-wrapper {
            display: flex;
            justify-content: space-between;
        }
    
        /* Prevent any overflow or horizontal scrolling */
        .section {
            overflow-x: hidden;
        }
    </style>

    <section class="section gb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Recent News</h3>
                <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien
                    iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="blog-box">
                        <div class="image-wrap entry">
                            <img src="assets/images/news.jpg" alt="" class="img-responsive">
                            <div class="magnifier">
                                <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                            </div>
                        </div><!-- end image-wrap -->

                        <div class="blog-desc">
                            <h4><a href="blog-single.html">How to learn perfect code with Javascript</a></h4>
                            <p>Praesent at suscipit ligula. Suspendisse pre neque, quis suscipit enim. sed maximus, mia
                                auctor.</p>
                        </div><!-- end blog-desc -->

                        <div class="post-meta">
                            <ul class="list-inline">
                                <li><a href="#">21 March 2017</a></li>
                                <li><a href="#">by WP Destek</a></li>
                                <li><a href="#">14 Share</a></li>
                            </ul>
                        </div><!-- end post-meta -->
                    </div><!-- end blog -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-12">
                    <div class="blog-box">
                        <div class="image-wrap entry">
                            <img src="assets/images/news.jpg" alt="" class="img-responsive">
                            <div class="magnifier">
                                <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                            </div>
                        </div><!-- end image-wrap -->

                        <div class="blog-desc">
                            <h4><a href="blog-single.html">The most suitable web design & development tutorials</a></h4>
                            <p>Sed suscipit neque in erat posuere tristique aliquam porta vestibulum. Cras placerat
                                tincidunt. </p>
                        </div><!-- end blog-desc -->

                        <div class="post-meta">
                            <ul class="list-inline">
                                <li><a href="#">20 March 2017</a></li>
                                <li><a href="#">by WP Destek</a></li>
                                <li><a href="#">11 Share</a></li>
                            </ul>
                        </div><!-- end post-meta -->
                    </div><!-- end blog -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-12">
                    <div class="blog-box">
                        <div class="image-wrap entry">
                            <img src="assets/images/news.jpg" alt="" class="img-responsive">
                            <div class="magnifier">
                                <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                            </div>
                        </div><!-- end image-wrap -->

                        <div class="blog-desc">
                            <h4><a href="blog-single.html">Design for all mobile devices! This is name "responsive"</a>
                            </h4>
                            <p>Suspendisse scelerisque ex ac mattis molestie vel enim ut massa placerat faucibus sed ut dui
                                vivamus. </p>
                        </div><!-- end blog-desc -->

                        <div class="post-meta">
                            <ul class="list-inline">
                                <li><a href="#">19 March 2017</a></li>
                                <li><a href="#">by WP Destek</a></li>
                                <li><a href="#">44 Share</a></li>
                            </ul>
                        </div><!-- end post-meta -->
                    </div><!-- end blog -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
