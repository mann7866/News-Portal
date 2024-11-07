@extends('layouts.users.app')
@section('content')
<style>
    /* Animasi untuk card masuk dari kiri */
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
<section style="background-color: gray" id="home" class="video-section js-height-full">
    <div class="home-text-wrapper relative container">
        <div style="background-color: gray" class="home-message">
            <p>Learning Management System</p>
            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit molestiae adipisci quibusdam repellat tempore minus, expedita sapiente iste? Reiciendis sunt distinctio, vitae laudantium temporibus labore qui dolores nemo voluptas et..</small>
        </div>
    </div>
    <div class="slider-bottom">
        <span>Explore <i class="fa fa-angle-down"></i></span>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="custom-module p40l">
                    <h2>Visi dan Misi Kami</h2>
                    <div class="visi-box mb-4">
                        <h3 class="mb-3">Visi:</h3>
                        <div class="visi-content p-3" style="border-left: 4px solid #00A859 ; background: #f9f9f9;">
                            <p>Unggul dalam Prestasi Akademik dan Non Akademik serta menciptakan lulusan yang berkompeten sesuai kebutuhan industri berdasarkan IMTAQ.</p>
                        </div>
                    </div>

                    <div class="misi-box">
                        <h3 class="mb-3">Misi:</h3>
                        <ul class="misi-list" style="list-style: none; padding-left: 0;">
                            <li class="d-flex align-items-start mb-3">
                                <i class="fa fa-check-circle text-success me-2 mt-1"></i>
                                <span>Menghasilkan Lulusan yang Cerdas, Trampil, Kompetitif dan Mandiri Sehingga Mempunyai Nilai Juang yang Tinggi.</span>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="fa fa-check-circle text-success me-2 mt-1"></i>
                                <span>Meningkatkan Mutu Pembelajaran yang mencakup Ilmu Pengetahuan dan Teknologi Dengan Menjunjung Tinggi Budaya Bangsa dan Budi Pekerti yang Luhur.</span>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="fa fa-check-circle text-success me-2 mt-1"></i>
                                <span>Membina Hubungan yang Harmonis dan Saling Menguntungkan Antara Sekolah, Dunia Industri, dan Dunia Usaha.</span>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="fa fa-check-circle text-success me-2 mt-1"></i>
                                <span>Menanamkan Jiwa Kewirausahaan (Entrepreneurship).</span>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="fa fa-check-circle text-success me-2 mt-1"></i>
                                <span>Mengembangkan Life Skill (Kecakapan Hidup) Melalui Kegiatan Ekstrakurikuler, Latihan Berwirausaha dengan Spesifik yang Bersetandar pada Kompetensi Keahlian Kerja.</span>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="fa fa-check-circle text-success me-2 mt-1"></i>
                                <span>Mengembangkan Program Keahlian yang Merupakan Tuntutan Pasar Kerja, Menanamkan Budaya Kerja, dan Sikap Profesional untuk Menunjang Hidup Layak Melalui Pengembangan Karir.</span>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="fa fa-check-circle text-success me-2 mt-1"></i>
                                <span>Membentuk Sikap dan Perilaku Santun serta Berbudi Luhur Berbasis IMTAQ dengan Menjunjung Tinggi Nilai-nilai Luhur Budaya Bangsa.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="btn-wrapper mt-4">
                        <a href="##" class="btn btn-primary">Pelajari Lebih Lanjut Tentang Kami</a>
                    </div>

                </div><!-- end module -->
            </div><!-- end col -->
        </div>
    </div><!-- end container -->
</section>



<section class="section db p120">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tagline-message text-center">
                    <h3>Program studi  yang ada di Smk Al-Azhar</h3>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<section class="section gb nopadtop">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="box m30 box-akuntansi">
                    <i class="bi bi-database icon-animation"></i>
                    <h4>Akuntansi</h4>
                    <p>All sections required for online training are included to Sekolah.</p>
                    <a href="#" class="readmore">Read more</a>
                </div>
            </div><!-- end col -->

            <div class="col-md-6">
                <div class="box m30 box-rekayasa">
                    <i class="bi bi-code-slash icon-animation"></i>
                    <h4>Rekayasa Perangkat Lunak</h4>
                    <p>The most important feature of this template is that it is compatible with all mobile devices. Your customers can also visit your site easily from tablets and phones.</p>
                    <a href="#" class="readmore">Read more</a>
                </div>
            </div><!-- end col -->

            <div class="col-md-3">
                <div class="box m30 box-tata-busana">
                    <i class="bi bi-scissors icon-animation"></i> <!-- Ikon untuk Tata Busana -->
                    <h4>Tata Busana</h4>
                    <p>We designed the design of all the sub-pages needed for the users.</p>
                    <a href="#" class="readmore">Read more</a>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="invis">

        <div class="row">
            <div class="col-md-6">
                <div class="box box-komputer">
                    <i class="bi bi-globe2 icon-animation"></i> <!-- Ikon untuk Teknik Komputer & Jaringan -->
                    <h4>Teknik Komputer & Jaringan</h4>
                    <p>HTML5 is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and current version of the HTML standard.</p>
                    <a href="#" class="readmore">Read more</a>
                </div>
            </div><!-- end col -->

            <div class="col-md-6">
                <div class="box box-otomotif">
                    <i class="bi bi-tools icon-animation"></i>
                    <h4>Teknik Kendaraan Ringan Otomotif</h4>
                    <p>Bootstrap is a technique of loading a program into a computer by means of a few initial instructions which enable the introduction of the rest of the program from an input device.</p>
                    <a href="#" class="readmore">Read more</a>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>


<!-- CSS untuk animasi ikon -->
<style>
    .icon-animation {
        transition: all 0.3s ease; /* Menambahkan efek transisi */
    }

    .icon-animation:hover {
        color: #007bff; /* Ubah warna ikon saat hover */
        transform: scale(1.2); /* Membesarkan ikon saat hover */
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
                        <i class="flaticon-online-course" style="font-size: 20px; margin-right: 8px; vertical-align: middle;"></i>
                        Program Studi
                    </h3>
                </div><!-- stat-count -->
            </div><!-- end col -->
            
            <div class="col-lg-3 col-md-6">
                <div class="stat-count">
                    <h4 class="stat-timer">50</h4>
                    <h3><i class="fa fa-users" style="font-size: 20px; margin-right: 8px; vertical-align: middle;"></i> Karyawan</h3>
                </div><!-- stat-count -->
            </div><!-- end col -->
            

            <div class="col-lg-3 col-md-6">
                <div class="stat-count">
                    <h4 class="stat-timer">5</h4>
                    <h3><i class="fa fa-flask" style="font-size: 20px; margin-right: 8px; vertical-align: middle;"></i> Laboratorium</h3>
                </div><!-- stat-count -->
            </div><!-- end col -->
            
        </div><!-- end row -->
    </div><!-- end container -->
</section>


<section class="section gb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Recent News</h3>
            <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
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
                        <p>Praesent at suscipit ligula. Suspendisse pre neque, quis suscipit enim. sed maximus, mia auctor.</p>
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
                        <p>Sed suscipit neque in erat posuere tristique aliquam porta vestibulum. Cras placerat tincidunt. </p>
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
                        <h4><a href="blog-single.html">Design for all mobile devices! This is name "responsive"</a></h4>
                        <p>Suspendisse scelerisque ex ac mattis molestie vel enim ut massa placerat faucibus sed ut dui vivamus. </p>
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
