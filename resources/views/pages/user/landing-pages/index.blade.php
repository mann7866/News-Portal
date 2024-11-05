@extends('layouts.users.topbar')
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

@include('layouts.users.kursus')



@include('layouts.users.service')

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

@include('layouts.users.review')

@include('layouts.users.news')
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
