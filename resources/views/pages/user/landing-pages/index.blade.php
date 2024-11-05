@extends('layouts.users.app')
@section('content')
<section id="home" class="video-section js-height-full">
    <div class="overlay"></div>
    <div class="home-text-wrapper relative container">
        <div class="home-message">
            <p>Learning Management System</p>
            <small>Sekolah is the ideal choice for your organization, your business and your online education system.
                Create your online course now with unlimited page templates, color options, and menu features.</small>
            <div class="btn-wrapper">
                <div class="text-center">
                    <a href="#" class="btn btn-primary wow slideInLeft">Read More</a> &nbsp;&nbsp;&nbsp;<a
                        href="#" class="btn btn-default wow slideInRight">Buy Now</a>
                </div>
            </div><!-- end row -->
        </div>
    </div>
    <div class="slider-bottom">
        <span>Explore <i class="fa fa-angle-down"></i></span>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 hidden-sm hidden-xs">
                <div class="custom-module">
                    <img src="{{asset('users-assets/images/p1.jpeg')}}" alt="" class="img-responsive wow slideInLeft">
                </div><!-- end module -->
            </div><!-- end col -->
            <div class="col-md-8">
                <div class="custom-module p40l">
                    <h2>Kami adalah <mark>sistem pembelajaran</mark> yang berdedikasi<br>
                        dari Banyuwangi. Menyediakan desain digital & pengembangan web <br>
                        yang mudah digunakan untuk pendidikan.</h2>

                    <p>Temukan pengalaman belajar yang lebih baik. Kami menawarkan platform yang didesain untuk
                        memudahkan siswa dan guru. Akses berbagai fitur dan konten pendidikan yang berkualitas.</p>

                    <hr class="invis">

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 first">
                            <ul class="check">
                                <li>Modul Pembelajaran Kustom</li>
                                <li>Pembangun Halaman Visual</li>
                                <li>Materi Tak Terbatas</li>
                                <li>Tema Responsif</li>
                                <li>Berbagai Tata Letak Kelas</li>
                            </ul><!-- end check -->
                        </div><!-- end col-lg-4 -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <ul class="check">
                                <li>Ikon Pendidikan Font Awesome</li>
                                <li>Warna yang Telah Ditentukan</li>
                                <li>Transisi Halaman Interaktif</li>
                                <li>Dukungan Berkualitas Tinggi</li>
                                <li>Pengaturan Tak Terbatas</li>
                            </ul><!-- end check -->
                        </div><!-- end col-lg-4 -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 last">
                            <ul class="check">
                                <li>Tata Letak e-Learning</li>
                                <li>Font untuk Pendidikan</li>
                                <li>Pengubah Gaya Tema</li>
                                <li>Gaya Footer Sekolah</li>
                                <li>Gaya Header Sekolah</li>
                            </ul><!-- end check -->
                        </div><!-- end col-lg-4 -->
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="btn-wrapper">
                        <a href="##" class="btn btn-primary">Pelajari Lebih Lanjut Tentang Kami</a>
                    </div>

                </div><!-- end module -->

            </div><!-- end col -->
        </div>
    </div><!-- end container -->
</section>

<section class="section gb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Kursus Terbaru</h3>
            <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
        </div><!-- end title -->

        <div id="owl-01" class="owl-carousel owl-theme owl-theme-01">
            <div class="caro-item">
                <div class="course-box">
                    <div class="image-wrap entry">
                        <img src="assets/images/l1.jpeg" alt="Kursus Matematika" class="img-responsive">
                        <div class="magnifier">
                            <a href="#" title=""><i class="flaticon-add"></i></a>
                        </div>
                    </div><!-- end image-wrap -->
                    <div class="course-details">
                        <h4>
                            <small>Matematika</small>
                            <a href="#" title="">Kursus Matematika Dasar untuk Pemula</a>
                        </h4>
                        <p>Pahami konsep dasar matematika dengan cara yang menyenangkan.</p>
                    </div><!-- end details -->
                    <div class="course-footer clearfix">
                        <div class="pull-left">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-user"></i> 50</a></li>
                                <li><a href="#"><i class="fa fa-clock-o"></i> 2 Jam</a></li>
                            </ul>
                        </div><!-- end left -->

                        <div class="pull-right">
                            <ul class="list-inline">
                                <li><a href="#">$15.00</a></li>
                            </ul>
                        </div><!-- end right -->
                    </div><!-- end footer -->
                </div><!-- end box -->
            </div><!-- end caro-item -->

            <div class="caro-item">
                <div class="course-box">
                    <div class="image-wrap entry">
                        <img src="assets/images/l2.jpeg" alt="Kursus Sains" class="img-responsive">
                        <div class="magnifier">
                            <a href="#" title=""><i class="flaticon-add"></i></a>
                        </div>
                    </div><!-- end image-wrap -->
                    <div class="course-details">
                        <h4>
                            <small>Sains</small>
                            <a href="#" title="">Eksplorasi Sains dengan Praktikum Menarik</a>
                        </h4>
                        <p>Pelajari sains melalui eksperimen praktis dan menarik.</p>
                    </div><!-- end details -->
                    <div class="course-footer clearfix">
                        <div class="pull-left">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-user"></i> 30</a></li>
                                <li><a href="#"><i class="fa fa-clock-o"></i> 1.5 Jam</a></li>
                            </ul>
                        </div><!-- end left -->

                        <div class="pull-right">
                            <ul class="list-inline">
                                <li><a href="#">$20.00</a></li>
                            </ul>
                        </div><!-- end right -->
                    </div><!-- end footer -->
                </div><!-- end box -->
            </div><!-- end caro-item -->

            <div class="caro-item">
                <div class="course-box">
                    <div class="image-wrap entry">
                        <img src="assets/images/l3.jpeg" alt="Kursus Bahasa Inggris" class="img-responsive">
                        <div class="magnifier">
                            <a href="#" title=""><i class="flaticon-add"></i></a>
                        </div>
                    </div><!-- end image-wrap -->
                    <div class="course-details">
                        <h4>
                            <small>Bahasa Inggris</small>
                            <a href="#" title="">Bahasa Inggris untuk Pemula</a>
                        </h4>
                        <p>Pelajari bahasa Inggris dengan cara yang interaktif dan menyenangkan.</p>
                    </div><!-- end details -->
                    <div class="course-footer clearfix">
                        <div class="pull-left">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-user"></i> 40</a></li>
                                <li><a href="#"><i class="fa fa-clock-o"></i> 1 Jam</a></li>
                            </ul>
                        </div><!-- end left -->

                        <div class="pull-right">
                            <ul class="list-inline">
                                <li><a href="#">$18.00</a></li>
                            </ul>
                        </div><!-- end right -->
                    </div><!-- end footer -->
                </div><!-- end box -->
            </div><!-- end caro-item -->

            <div class="caro-item">
                <div class="course-box">
                    <div class="image-wrap entry">
                        <img src="assets/images/l4.jpeg" alt="Kursus Seni" class="img-responsive">
                        <div class="magnifier">
                            <a href="#" title=""><i class="flaticon-add"></i></a>
                        </div>
                    </div><!-- end image-wrap -->
                    <div class="course-details">
                        <h4>
                            <small>Seni</small>
                            <a href="#" title="">Kreativitas dalam Seni: Melukis dan Menggambar</a>
                        </h4>
                        <p>Jelajahi kreativitas Anda dengan teknik melukis dan menggambar.</p>
                    </div><!-- end details -->
                    <div class="course-footer clearfix">
                        <div class="pull-left">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-user"></i> 25</a></li>
                                <li><a href="#"><i class="fa fa-clock-o"></i> 2 Jam</a></li>
                            </ul>
                        </div><!-- end left -->

                        <div class="pull-right">
                            <ul class="list-inline">
                                <li><a href="#">$30.00</a></li>
                            </ul>
                        </div><!-- end right -->
                    </div><!-- end footer -->
                </div><!-- end box -->
            </div><!-- end caro-item -->
        </div><!-- end owl-carousel -->

        <hr class="invis">

        <div class="section-button text-center">
            <a href="#" class="btn btn-primary">Lihat Semua Kursus</a>
        </div>
    </div><!-- end container -->
</section>



<section class="section db p120">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tagline-message text-center">
                    <h3>Howdy, we are Sekolah, we have brought together the best quality services, offers, projects for you!</h3>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<section class="section gb nopadtop">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="box m30">
                    <i class="flaticon-computer-tool-for-education"></i>
                    <h4>Learning system</h4>
                    <p>All sections required for online training are included to Sekolah.</p>
                    <a href="#" class="readmore">Read more</a>
                </div>
            </div><!-- end col -->

            <div class="col-md-6">
                <div class="box m30">
                    <i class="flaticon-monitor-tablet-and-smartohone"></i>
                    <h4>Works all mobile devices</h4>
                    <p>The most important feature of this template is that it is compatible with all mobile devices. Your customers can also visit your site easily from tablets and phones.</p>
                    <a href="#" class="readmore">Read more</a>
                </div>
            </div><!-- end col -->

            <div class="col-md-3">
                <div class="box m30">
                    <i class="flaticon-download-business-statistics-symbol-of-a-graphic"></i>
                    <h4>User Dashboard</h4>
                    <p>We designed the design of all the sub-pages needed for the users.</p>
                    <a href="#" class="readmore">Read more</a>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="invis">

        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <i class="flaticon-html5"></i> <i class="flaticon-css-3"></i>
                    <h4>Compatible HTML5 & CSS3</h4>
                    <p>HTML5 is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and current version of the HTML standard.</p>
                    <a href="#" class="readmore">Read more</a>
                </div>
            </div><!-- end col -->

            <div class="col-md-6">
                <div class="box">
                    <i class="flaticon-html-coding"></i>
                    <h4>Bootstrap Framework</h4>
                    <p>Bootstrap is a technique of loading a program into a computer by means of a few initial instructions which enable the introduction of the rest of the program from an input device.</p>
                    <a href="#" class="readmore">Read more</a>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<section class="section db">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="stat-count">
                    <h4 class="stat-timer">2346</h4>
                    <h3><i class="flaticon-black-graduation-cap-tool-of-university-student-for-head"></i> Total murid
                        sekolah</h3>
                    <p>Ini adalah data jumlah murid yang ada di sekolah. </p>
                </div><!-- stat-count -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-4">
                <div class="stat-count">
                    <h4 class="stat-timer">331</h4>
                    <h3><i class="flaticon-online-course"></i> Penghargaan sekolah</h3>
                    <p>Ini adalah jumlah penghargaan yang didapatkan sekolah. </p>
                </div><!-- stat-count -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-4">
                <div class="stat-count">
                    <h4 class="stat-timer">120</h4>
                    <h3><i class="flaticon-black-graduation-cap-tool-of-university-student-for-head"></i> Jumlah guru
                        pengajar di sekolah</h3>
                    <p>Ini adalah data guru pengajar yang ada di sekolah. </p>
                </div><!-- stat-count -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<section class="section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Testimonials</h3>
            <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-4">
                <div class="box testimonial">
                    <p class="testiname"><strong><img src="assets/images/pfp1.png" alt="" class="img-circle"> Paris Dontol</strong></p>
                    <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div><!-- end testimonial -->
            </div><!-- end col -->

            <div class="col-md-4">
                <div class="box testimonial">
                    <p class="testiname"><strong><img src="assets/images/pfp1.png" alt="" class="img-circle"> Paris Dontol</strong></p>
                    <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div><!-- end testimonial -->
            </div><!-- end col -->

            <div class="col-md-4">
                <div class="box testimonial">
                    <p class="testiname"><strong><img src="assets/images/pfp1.png" alt="" class="img-circle"> Paris Dontol</strong></p>
                    <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div><!-- end testimonial -->
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

<section class="section bgcolor1">
    <div class="container">
        <a href="#">
            <div class="row callout">
                <div class="col-md-4 text-center">
                    <h3><sup>$</sup>49.99</h3>
                    <h4>Start your awesome course today!</h4>
                </div><!-- end col -->

                <div class="col-md-8">
                    <p class="lead">Limited time offer! Your profile will be added to our "Students" directory as
                        well. </p>
                </div>
            </div><!-- end row -->
        </a>
    </div><!-- end container -->
</section>


@endsection
