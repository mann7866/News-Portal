@extends('layouts.landing-page.app')
@section('content')
<div class="breadcrumb-area text-center shadow dark text-light bg-cover" style="background-image: url('../assets_landing/background/Profile.jpg');">
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
<div class="work-process-area features-area default-padding-bottom py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4>Visi dan Misi</h4>
                    <h2>Mewujudkan Generasi Unggul melalui Pendidikan dan Kolaborasi</h2>
                    <div class="devider"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Visi -->
            <div class="single-item col-lg-4 col-md-6 mb-4 text-light fadeInRight" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
                <div class="bg-primary py-5 px-5 rounded">
                    <div class="d-flex justify-content-center align-items-center">
                        <h3 class="mt-2 px-3 text-light" style="font-weight: 900">Visi</h3>
                    </div>
                    <p class="fw-semibold">
                        Menjadi lembaga pendidikan yang unggul dalam membentuk generasi berkarakter, berprestasi, dan berdaya saing global.
                    </p>
                </div>
            </div>
            <!-- Misi 1 -->
            <div class="single-item col-lg-4 col-md-6 mb-4 text-dark fadeInRight shadow" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
                <div class="py-5 px-5" style="border-radius: 8px; box-shadow: 0px 0px 15px .3px #00000012;">
                    <div class="d-flex justify-content-center align-items-center">
                        <h3 class="mt-2 px-3 text-primary" style="font-weight: 900">Misi</h3>
                    </div>
                    <p class="fw-semibold">
                        Mengintegrasikan kurikulum berbasis teknologi dengan pembelajaran berkarakter.
                    </p>
                </div>
            </div>
            <!-- Misi 2 -->
            <div class="single-item col-lg-4 col-md-6 mb-4 text-dark fadeInRight shadow" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
                <div class="py-5 px-5" style="border-radius: 8px; box-shadow: 0px 0px 15px .3px #00000012;">
                    <div class="d-flex justify-content-center align-items-center">
                        <h3 class="mt-2 px-3 text-primary" style="font-weight: 900">Misi</h3>
                    </div>
                    <p class="fw-semibold">
                        Membekali siswa dengan keterampilan industri sesuai kebutuhan dunia kerja.
                    </p>
                </div>
            </div>
            <!-- Misi 3 -->
            <div class="single-item col-lg-4 col-md-6 mb-4 text-dark fadeInRight shadow" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
                <div class="py-5 px-5" style="border-radius: 8px; box-shadow: 0px 0px 15px .3px #00000012;">
                    <div class="d-flex justify-content-center align-items-center">
                        <h3 class="mt-2 px-3 text-primary" style="font-weight: 900">Misi</h3>
                    </div>
                    <p class="fw-semibold">
                        Menjalin kemitraan dengan dunia industri dan pendidikan secara nasional maupun internasional.
                    </p>
                </div>
            </div>
            <!-- Misi 4 -->
            <div class="single-item col-lg-4 col-md-6 mb-4 text-dark fadeInRight shadow" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
                <div class="py-5 px-5" style="border-radius: 8px; box-shadow: 0px 0px 15px .3px #00000012;">
                    <div class="d-flex justify-content-center align-items-center">
                        <h3 class="mt-2 px-3 text-primary" style="font-weight: 900">Misi</h3>
                    </div>
                    <p class="fw-semibold">
                        Melatih siswa untuk menjadi pemimpin masa depan yang kompeten dan beretika.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
