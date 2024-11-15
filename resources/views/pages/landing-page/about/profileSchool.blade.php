@extends('layouts.landing-page.app')
@section('content')
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url('../storage/Background-Tentang%20Kami-Profile.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Tentang Kami</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Beranda</a></li>
                        <li class="active">Tentang Kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="about-us-area pt-5 mb-5">
        <div class="container">
            <img src="../assets-home/img/about-polygon.svg" class="about-triangle" alt="Polygon">
            <div class="about-items">
                <div class="row align-center justify-content-center">
                    <div class="col-lg-6 info text-center text-lg-start">
                        <h4 class="subtitle">Profile Perusahaan</h4>
                        <h2>PT HUMMA TEKNOLOGI INDONESIA</h2>

                        <img src="../storage/profile/YjcXfXsfiyuOYv2qIGbAsQH3ObQ8zmTidWohA8xU.png" alt="Thumb"
                            class="w-75 mb-3 d-block mx-auto d-lg-none">
                        <p class="text-justify">
                        </p>
                        <p class="ql-align-justify"><strong>HUMMATECH </strong>merupakan perusahaan yang bergerak di bidang
                            teknologi informasi yang berdiri sejak 21 Mei 2013. Hummatech dinaungi oleh badan hukum
                            <strong>PT. HUMMA TEKNOLOGI INDONESIA</strong> dan telah disahkan oleh KEMENKUMHAM Republik
                            Indonesia Nomor AHU-0057079.AH.01.01.</p>
                        <p class="ql-align-justify"><strong>Hummatech </strong>melayani jasa pengembangan perangkat lunak,
                            baik berbasis desktop, web, dan mobile apps. Mitra kami meliputi perorangan, swasta, bahkan juga
                            lembaga pemerintahan.</p>
                        <p class="ql-align-justify">Kini <strong>Hummatech </strong>bertransformasi menjadi perusahaan yang
                            mampu menjawab tantangan di era revolusi industri 4.0 dengan menciptakan produk berbasis
                            <em>integrated system</em> berupa perangkat lunak berbasis web dan mobile, <em>Internet of
                                Things</em> (IoT), <em>Artificial Intelligence</em> (AI), <em>Game</em>, dan <em>Augmented
                                Reality</em>.</p>
                        <p class="ql-align-justify"><strong>Hummatech </strong>juga telah melebarkan sayapnya, tidak hanya
                            dikenal di Indonesia, tetapi juga dipercaya oleh mitra dari luar negeri, yaitu Belanda dalam
                            mengembangan <em>software </em>dan <em>integrated system</em>.</p>
                        <p></p>

                        <a class="btn btn-gradient effect btn-md" target="_blank"
                            href="https://drive.google.com/file/d/1BNGZNbh-rC06ljZ151sOpeDUCwtBZbyt/view">Lihat Profil
                            Lengkap</a>
                    </div>
                    <div class="col-lg-6 d-none d-md-none d-lg-inline">
                        <div class="thumb">
                            <img src="../storage/profile/YjcXfXsfiyuOYv2qIGbAsQH3ObQ8zmTidWohA8xU.png" alt="Thumb"
                                style="max-width: 80%; max-height: auto; display: inline-block;">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
