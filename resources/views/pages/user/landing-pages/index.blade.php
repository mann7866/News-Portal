@extends('layouts.users.app')
@section('content')
<style>
    @keyframes slideInLeft {
    0% { transform: translateX(-100%); opacity: 0; }
    100% { transform: translateX(0); opacity: 1; }
}

/* Animasi untuk card masuk dari kanan */
@keyframes slideInRight {
    0% { transform: translateX(100%); opacity: 0; }
    100% { transform: translateX(0); opacity: 1; }
}

/* Animasi untuk card masuk dari atas */
@keyframes slideInTop {
    0% { transform: translateY(-100%); opacity: 0; }
    100% { transform: translateY(0); opacity: 1; }
}

/* Animasi untuk card masuk dari bawah */
@keyframes slideInBottom {
    0% { transform: translateY(100%); opacity: 0; }
    100% { transform: translateY(0); opacity: 1; }
}

/* Menambahkan animasi ke elemen */
.box {
    animation-duration: 1.5s; /* Durasi lebih lama */
    animation-timing-function: ease-in-out; /* Efek ease-in-out untuk kelancaran */
    animation-fill-mode: both; /* Agar animasi tetap pada posisi akhir setelah selesai */
}

/* Menambahkan animasi untuk masing-masing card */
.box-akuntansi {
    animation-name: slideInLeft;
    animation-delay: 0.5s; /* Penundaan agar tidak muncul bersamaan */
}

.box-tata-busana {
    animation-name: slideInRight;
    animation-delay: 1s; /* Penundaan agar tidak muncul bersamaan */
}

.box-rekayasa {
    animation-name: slideInTop;
    animation-delay: 1.5s; /* Penundaan agar tidak muncul bersamaan */
}

.box-komputer {
    animation-name: slideInBottom;
    animation-delay: 2s; /* Penundaan agar tidak muncul bersamaan */
}

.box-otomotif {
    animation-name: slideInBottom;
    animation-delay: 2.5s; /* Penundaan agar tidak muncul bersamaan */
}
</style>
    <section style="background-image: url('bg/tes-bg.jpg'); background-size: cover; color: rgb(255, 255, 255); height: 100vh;" id="home"
        class="video-section">
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

<h3 style="text-align: center;">Recent News</h3>
<section class="section gb full-vh">
    <div class="carousel-wrapper">
        <!-- Custom Carousel -->
        <div class="custom-carousel">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="blog-box">
                    <div class="image-wrap entry">
                        <img src="bg/wkng.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="blog-content">
                        <h4><a href="blog-single.html">How to learn perfect code with Javascript</a></h4>
                        <p>Praesent at suscipit ligula. Suspendisse pre neque, quis suscipit enim. sed maximus, mia auctor.</p>
                        <div class="post-meta">
                            <ul class="list-inline">
                                <li><a href="#">21 March 2017</a></li>
                                <li><a href="#">by WP Destek</a></li>
                                <li><a href="#">14 Share</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="blog-box">
                    <div class="image-wrap entry">
                        <img src="bg/guts.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="blog-content">
                        <h4><a href="blog-single.html">How to learn perfect code with Javascript</a></h4>
                        <p>Praesent at suscipit ligula. Suspendisse pre neque, quis suscipit enim. sed maximus, mia auctor.</p>
                        <div class="post-meta">
                            <ul class="list-inline">
                                <li><a href="#">21 March 2017</a></li>
                                <li><a href="#">by WP Destek</a></li>
                                <li><a href="#">14 Share</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button class="carousel-control-prev" aria-label="Previous slide">‹</button>
            <button class="carousel-control-next" aria-label="Next slide">›</button>
        </div>
    </div>
</section>

<style>
/* Fullscreen Section */
.full-vh {
    height: calc(100vh - 60px); /* Sesuaikan dengan tinggi topbar */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    margin-top: 60px; /* Menghindari overlap dengan topbar */
}

/* Carousel Wrapper */
.carousel-wrapper {
    width: 100%;
    max-width: 1140px; /* Setel lebar maksimum */
    margin: 0 auto; 
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

/* Custom Carousel */
.custom-carousel {
    width: 100%;
    height: 100%;
    position: relative;
    display: flex;
    justify-content: center;
}

/* Carousel Item */
.carousel-item {
    opacity: 0;
    transform: scale(0.9);
    transition: opacity 0.5s ease, transform 0.5s ease;
    position: absolute;
    width: 100%;
    height: 100%;
    margin-top: 0;
}

.carousel-item.active {
    opacity: 1;
    transform: scale(1);
    position: relative;
    display: flex;
    align-items: center;
}

/* Blog Box */
.blog-box {
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    max-height: 100%;
}

/* Image Wrap */
.image-wrap {
    max-height: 50vh;
    overflow: hidden;
    border-radius: 8px;
}

.image-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Blog Content */
.blog-content {
    padding: 20px;
    overflow-y: auto;
}

/* Navigation Buttons */
.carousel-control-prev, .carousel-control-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2rem;
    color: #333;
    background-color: rgba(255, 255, 255, 0.7);
    border: none;
    cursor: pointer;
    padding: 5px 10px;
    z-index: 1;
}

.carousel-control-prev {
    left: 10px;
}

.carousel-control-next {
    right: 10px;
}
</style>

<script>
// Initialize carousel on page load
document.addEventListener('DOMContentLoaded', function () {
    let currentIndex = 0;
    const items = document.querySelectorAll('.carousel-item');
    const totalItems = items.length;

    // Show slide by index
    function showSlide(index) {
        items[currentIndex].classList.remove('active');
        currentIndex = (index + totalItems) % totalItems;
        items[currentIndex].classList.add('active');
    }

    // Show next slide
    function showNextSlide() {
        showSlide(currentIndex + 1);
    }

    // Show previous slide
    function showPrevSlide() {
        showSlide(currentIndex - 1);
    }

    // Auto slide every 6 seconds
    setInterval(showNextSlide, 6000);

    // Previous and Next button functionality
    document.querySelector('.carousel-control-prev').addEventListener('click', showPrevSlide);
    document.querySelector('.carousel-control-next').addEventListener('click', showNextSlide);
});
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
                <!-- Top Row with 3 items -->
                <div class="col-md-4 mb-4">
                    <div class="box box-rekayasa">
                        <i class="bi bi-code-slash icon-animation"></i>
                        <h4>Rekayasa Perangkat Lunak</h4>
                        <p>Didesain untuk mendukung pembelajaran dalam bidang pemrograman dan pengembangan perangkat lunak. Template ini responsif dan mendukung berbagai perangkat seluler.</p>
                        <a href="#" class="readmore">Baca selengkapnya</a>
                    </div>
                </div><!-- end col -->
    
                <div class="col-md-4 mb-4">
                    <div class="box box-akuntansi">
                        <i class="bi bi-database icon-animation"></i>
                        <h4>Akuntansi</h4>
                        <p>Menyediakan berbagai modul yang dibutuhkan untuk pembelajaran daring bidang akuntansi, membantu siswa memahami dasar-dasar pengelolaan keuangan dan pencatatan transaksi bisnis.</p>
                        <a href="#" class="readmore">Baca selengkapnya</a>
                    </div>
                </div><!-- end col -->
    
                <div class="col-md-4 mb-4">
                    <div class="box box-tata-busana">
                        <i class="bi bi-scissors icon-animation"></i>
                        <h4>Tata Busana</h4>
                        <p>Merancang semua halaman pendukung yang dibutuhkan untuk pengguna, termasuk desain yang kreatif dan inovatif yang membantu siswa mengembangkan keterampilan dalam tata busana.</p>
                        <a href="#" class="readmore">Baca selengkapnya</a>
                    </div>
                </div><!-- end col -->
            </div><!-- end top row -->
    
            <div class="row">
                <!-- Bottom Row with 2 items -->
                <div class="col-md-6 mb-4">
                    <div class="box box-komputer">
                        <i class="bi bi-globe2 icon-animation"></i>
                        <h4>Teknik Komputer & Jaringan</h4>
                        <p>Program ini mencakup konsep dasar HTML5, yaitu bahasa markup yang digunakan untuk mengatur struktur dan menampilkan konten di web. Materi ini memberikan dasar yang kuat untuk memahami jaringan komputer.</p>
                        <a href="#" class="readmore">Baca selengkapnya</a>
                    </div>
                </div><!-- end col -->
    
                <div class="col-md-6 mb-4">
                    <div class="box box-otomotif">
                        <i class="bi bi-tools icon-animation"></i>
                        <h4>Teknik Kendaraan Ringan Otomotif</h4>
                        <p>Memperkenalkan teknik-teknik dasar dalam perawatan dan perbaikan kendaraan ringan, termasuk prinsip Bootstrap yang memudahkan pengenalan program ke dalam komputer untuk memulai instruksi awal.</p>
                        <a href="#" class="readmore">Baca selengkapnya</a>
                    </div>
                </div><!-- end col -->
            </div><!-- end bottom row -->
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



    


@endsection
