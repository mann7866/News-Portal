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
                        <h4 class="subtitle">Profile Sekolah</h4>
                        <h2>SMKS AL AZHAR SEMPU</h2>

                        <img src="../storage/profile/logo-smks-al-azhar.png" alt="Logo SMKS Al Azhar"
                            class="w-75 mb-3 d-block mx-auto d-lg-none">
                        <p class="text-justify"></p>
                        <p class="ql-align-justify"><strong>SMKS AL AZHAR SEMPU</strong> adalah sekolah kejuruan yang berkomitmen 
                            untuk mencetak generasi unggul dan kompeten dalam berbagai bidang keahlian. Berdiri sejak tahun 2005, 
                            SMKS Al Azhar Sempu telah mencetak lulusan-lulusan yang berkompetensi tinggi dan siap bersaing di dunia kerja.</p>
                        <p class="ql-align-justify">Sebagai lembaga pendidikan, <strong>SMKS Al Azhar Sempu</strong> menawarkan 
                            berbagai program keahlian seperti Teknik Komputer dan Jaringan, Akuntansi, serta Administrasi Perkantoran.</p>
                        <p class="ql-align-justify">Didukung oleh tenaga pendidik profesional dan fasilitas lengkap, <strong>SMKS Al Azhar Sempu</strong> 
                            bertekad untuk terus melahirkan generasi yang berakhlak mulia, kreatif, dan inovatif, serta mampu menjawab 
                            tantangan dunia kerja di era globalisasi.</p>
                        <p class="ql-align-justify">Selain itu, <strong>SMKS Al Azhar Sempu</strong> aktif menjalin kerja sama dengan berbagai 
                            perusahaan dan instansi untuk meningkatkan peluang kerja bagi para lulusannya, baik di tingkat nasional 
                            maupun internasional.</p>

                        <a class="btn btn-gradient effect btn-md" target="_blank"
                            href="https://drive.google.com/file/d/1BNGZNbh-rC06ljZ151sOpeDUCwtBZbyt/view">Lihat Profil
                            Lengkap</a>
                    </div>
                    <div class="col-lg-6 d-none d-md-none d-lg-inline">
                        <div class="thumb">
                            <img src="../storage/profile/logo-smks-al-azhar.png" alt="Logo SMKS Al Azhar"
                                style="max-width: 80%; max-height: auto; display: inline-block;">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
