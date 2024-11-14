@extends('layouts.landing-pages.app')
@section('content')
    <style>
        /* styles.css */

        /* Pastikan header pertama berada di atas elemen lainnya */
        .fixed-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 150%;
            height: 100px;
            z-index: 1000;
        }
    </style>
    <script>
        window.addEventListener('scroll', function() {
            const header1 = document.querySelector('.fixed-header');
            const header2 = document.querySelector('.second-header');
            const thumbnails = document.querySelector('.thumbnail-container');
            const header1Height = header1.offsetHeight;
            const thumbnailsHeight = thumbnails.offsetHeight;
            const totalHeight = thumbnails.offsetTop + thumbnailsHeight;

            if (window.scrollY >= totalHeight) {
                header2.classList.add('fixed-header-2');
            } else {
                header2.classList.remove('fixed-header-2');
            }
        });
    </script>
    <style>
        .carousel-item {
            display: flex;
            align-items: center;
        }

        .carousel-item img {
            max-width: 100%;
            height: auto;
        }

        .carousel-item .col-md-6 {
            padding: 20px;
        }
    </style>
    <div class="body-wrapper overflow-hidden" style="background-color: rgb(255, 255, 255)">

        <section >
        <image id="home" class="d-flex align-items-center vh-100" src="{{ asset('admin-assets/images/big/imageschool.jpg') }}">
            <!-- Background hitam transparan -->
            <div class="position-absolute w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

            <div class="container position-relative" style="z-index: 2;">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <p class="text-light">Laman Berita SMK Al-Azhar</p>
                        <small class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit molestiae adipisci quibusdam repellat tempore minus, expedita sapiente iste? Reiciendis sunt distinctio, vitae laudantium temporibus labore qui dolores nemo voluptas et.</small>
                    </div>
                </div>
            </div>

            <div class="position-absolute w-100 text-center" style="bottom: 20px; z-index: 2;">
                <span id="down" onclick="scrollToDown()" class="text-white">Explore <i class="fa fa-angle-down"></i></span>
            </div>
        </image>


        {{--  coroseul  --}}
        <section style="background-color: rgb(0, 151, 136)" class="hero-section  position-relative overflow-hidden mb-0 mb-lg-11">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade carousel-dark"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{ asset('admin-assets/images/big/img1.jpg') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="col-md-6 d-flex flex-column align-items-start justify-content-center">
                                            <h1 class="fw-bolder mb-8 fs-13 text-white aos-init aos-animate" data-aos="fade-up"
                                                data-aos-delay="400" data-aos-duration="1000">Most powerful &amp; <span
                                                   style='' class="text-dark">Developer friendly</span> dashboard</h1>
                                            <p class="fs-5 mb-5 text-white fw-normal aos-init aos-animate" data-aos="fade-up"
                                                data-aos-delay="600" data-aos-duration="1000">Modernize comes with light
                                                &amp; dark color skins, well designed dashboards, applications and pages.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{ asset('admin-assets/images/big/img2.jpg') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="col-md-6 d-flex flex-column align-items-start justify-content-center">
                                            <h1 class="fw-bolder mb-8 fs-13 text-white aos-init aos-animate" data-aos="fade-up"
                                                data-aos-delay="400" data-aos-duration="1000">Another powerful &amp; <span
                                                    class="text-dark">Developer friendly</span> dashboard</h1>
                                            <p class="fs-5 mb-5 text-white fw-normal aos-init aos-animate" data-aos="fade-up"
                                                data-aos-delay="600" data-aos-duration="1000">This is another example of a
                                                carousel item with text and image.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{ asset('admin-assets/images/big/img3.jpg') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="col-md-6 d-flex flex-column align-items-start justify-content-center">
                                            <h1 class="fw-bolder mb-8 fs-13 text-white aos-init aos-animate" data-aos="fade-up"
                                                data-aos-delay="400" data-aos-duration="1000">Yet another &amp; <span
                                                    class="text-dark">Developer friendly</span> dashboard</h1>
                                            <p class="fs-5 mb-5 text-white fw-normal aos-init aos-animate" data-aos="fade-up"
                                                data-aos-delay="600" data-aos-duration="1000">Here is some more example text
                                                for the carousel item.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>  --}}
                        </div>
                    </div>
                </div>
        </section>

        {{--  news  --}}
        <section class="production pb-10 pb-md-14 mt-5" id="production-template">
            <div class="container">
                <div class="domo-contect position-relative">
                    <div class="demos-view mt-11 pt-lg-8">
                        <div class="row ">

                            {{--  vid yt  --}}
                            <div class="d-flex col-8" style="padding-right: 30px">
                                <div class="rounded-2 overflow-hidden hover-img">
                                    <div class="p-4">
                                        <a class="d-block my-2 fs-8 text-dark fw-semibold" href="#">COVID outbreak
                                            deepens as more lockdowns loom in China</a>
                                    </div>
                                    <div class="position-relative">
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset('admin-assets/images/blog/blog-img8.jpg') }}"
                                                class="card-img-top rounded-0" alt="..."></a>
                                        <img src="{{ asset('admin-assets/images/profile/user-3.jpg') }}" alt=""
                                            class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                            width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Miguel Kennedy">
                                    </div>

                                </div>
                            </div>

                            {{--  card news  --}}
                            <div class="col-md-4 col-lg-4" style="border-left: 1px solid #868484; padding-left: 30px;">
                                <div class="">
                                    <div class="mt-3 overflow-hidden hover-img">
                                        <div class="p-4">
                                            <a class="d-block my-2 fs-8 text-dark fw-semibold" href="#">
                                                Berita Terkini
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-4 overflow-hidden hover-img">
                                        <div class="d-flex">
                                            <div class="position-relative">
                                                <a href="javascript:void(0)"><img
                                                        src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                                        class="card-img-top rounded-0 " style="height: 100px; width: 150px"
                                                        alt="..."></a>

                                            </div>
                                            <div class="card-body p-1" style="font-size: 1px">
                                                <div class="d-flex gap-1">
                                                    <a href="">
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-0 py-0 px-0 lh-sm  mt-0">Gadget</span>
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-0 py-0 px-0 lh-sm  mt-0">Gadget</span>

                                                    </a>

                                                </div>
                                                <a class="d-block my-1 fs-2 text-dark fw-semibold" href="#">As yen
                                                    tumbles,
                                                    gadget-loving Japan goes for secondhand iPhones</a>
                                                <div class="d-flex align-items-center gap-4">
                                                    <div class="badge bg-light-warning text-warning d-flex align-items-center  ms-auto"
                                                        style="font-size: 800%">Mon, Jan
                                                        16</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 overflow-hidden hover-img">
                                        <div class="d-flex">
                                            <div class="position-relative">
                                                <a href="javascript:void(0)"><img
                                                        src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                                        class="card-img-top rounded-0 " style="height: 100px; width: 150px"
                                                        alt="..."></a>

                                            </div>
                                            <div class="card-body p-1" style="font-size: 1px">
                                                <div class="d-flex gap-1">
                                                    <a href="">
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-0 py-0 px-0 lh-sm  mt-0">Gadget</span>
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-0 py-0 px-0 lh-sm  mt-0">Gadget</span>

                                                    </a>

                                                </div>
                                                <a class="d-block my-1 fs-2 text-dark fw-semibold" href="#">As yen
                                                    tumbles,
                                                    gadget-loving Japan goes for secondhand iPhones</a>
                                                <div class="d-flex align-items-center gap-4">
                                                    <div class="badge bg-light-warning text-warning d-flex align-items-center  ms-auto"
                                                        style="font-size: 800%">Mon, Jan
                                                        16</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 overflow-hidden hover-img">
                                        <div class="d-flex">
                                            <div class="position-relative">
                                                <a href="javascript:void(0)"><img
                                                        src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                                        class="card-img-top rounded-0 " style="height: 100px; width: 150px"
                                                        alt="..."></a>

                                            </div>
                                            <div class="card-body p-1" style="font-size: 1px">
                                                <div class="d-flex gap-1">
                                                    <a href="">
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-0 py-0 px-0 lh-sm  mt-0">Gadget</span>
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-0 py-0 px-0 lh-sm  mt-0">Gadget</span>

                                                    </a>

                                                </div>
                                                <a class="d-block my-1 fs-2 text-dark fw-semibold" href="#">As yen
                                                    tumbles,
                                                    gadget-loving Japan goes for secondhand iPhones</a>
                                                <div class="d-flex align-items-center gap-4">
                                                    <div class="badge bg-light-warning text-warning d-flex align-items-center  ms-auto"
                                                        style="font-size: 800%">Mon, Jan
                                                        16</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 overflow-hidden hover-img">
                                        <div class="d-flex">
                                            <div class="position-relative">
                                                <a href="javascript:void(0)"><img
                                                        src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                                        class="card-img-top rounded-0 " style="height: 100px; width: 150px"
                                                        alt="..."></a>

                                            </div>
                                            <div class="card-body p-1" style="font-size: 1px">
                                                <div class="d-flex gap-1">
                                                    <a href="">
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-0 py-0 px-0 lh-sm  mt-0">Gadget</span>
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-0 py-0 px-0 lh-sm  mt-0">Gadget</span>

                                                    </a>

                                                </div>
                                                <a class="d-block my-1 fs-2 text-dark fw-semibold" href="#">As yen
                                                    tumbles,
                                                    gadget-loving Japan goes for secondhand iPhones</a>
                                                <div class="d-flex align-items-center gap-4">
                                                    <div class="badge bg-light-warning text-warning d-flex align-items-center  ms-auto"
                                                        style="font-size: 800%">Mon, Jan
                                                        16</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <a class="d-flex mt-4 justify-content-center" href="">
                                            <button class="mb-3 btn btn-muted btn-sm">Lihat lainnya <i
                                                    class="ti ti-corner-down-right-double"></i></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-light-success py-5 py-lg-10 py-xl-12">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xxl-6">
                        <h2 class="fs-9 text-center mb-5 fw-bolder">Increase speed of your development and launch
                            quickly
                            with Modernize</h2>
                    </div>
                </div>
                <div class="sliding-wrapper position-relative overflow-hidden">
                    <div class="slide-background d-flex flex-row w-100">
                        <div class="slide">
                            <img src="{{ asset('admin-assets/images/slider/slider-group.png') }}" alt="slide"
                                height="100%">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('admin-assets/images/slider/slider-group.png') }}" alt="slide"
                                height="100%">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('admin-assets/images/slider/slider-group.png') }}" alt="slide"
                                height="100%">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-light py-5 py-lg-10 py-xl-12">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xxl-6">
                        <h2 class="fs-9 text-center mb-5 fw-bolder">Increase speed of your development and launch
                            quickly
                            with Modernize</h2>
                    </div>
                </div>
                <div class="sliding-wrapper position-relative overflow-hidden">
                    <div class="slide-background d-flex flex-row w-100">
                        <div class="slide">
                            <img src="{{ asset('admin-assets/images/slider/slider-group.png') }}" alt="slide"
                                height="100%">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('admin-assets/images/slider/slider-group.png') }}" alt="slide"
                                height="100%">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('admin-assets/images/slider/slider-group.png') }}" alt="slide"
                                height="100%">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="review-section pt-5 pt-lg-10 pt-xl-12 pb-8 pb-lg-9">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fs-9 text-center mb-4 mb-lg-5 fw-bolder aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="200" data-aos-duration="1000">Don’t just take our
                            words for it, See what developers
                            like you are saying</h2>
                    </div>
                </div>
                <div class="review-slider aos-init aos-animate" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-8624px, 0px, 0px); transition: 0.25s; width: 14112px;">
                                <div class="owl-item cloned" style="width: 392px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="admin-assets/images/profile/user-1.jpg" alt=""
                                                            class="w-auto me-3 rounded-circle" width="40"
                                                            height="40">
                                                        <div>
                                                            <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                                                            <p class="mb-0 text-dark">Features avaibility</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <ul
                                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="fs-4 mb-0 text-dark">The dashboard template from
                                                    adminmart has helped me provide a clean
                                                    and sleek look to my dashboard and made it look exactly the way
                                                    I wanted it to, mainly without
                                                    having.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 392px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('admin-assets/images/profile/user-3.jpg') }}"
                                                            alt="" class="w-auto me-3 rounded-circle"
                                                            width="40" height="40">
                                                        <div>
                                                            <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                                                            <p class="mb-0 fw-normal">Features avaibility</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <ul
                                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="fs-4 text-dark mb-0">This template is great, UI-rich and
                                                    up-to-date. Although it is pretty
                                                    much complete, I suggest to improve a bit of documentation.
                                                    Thanks &amp; Highly recomended!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 392px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('admin-assets/images/profile/user-3.jpg') }}"
                                                            alt="" class="w-auto me-3 rounded-circle"
                                                            width="40" height="40">
                                                        <div>
                                                            <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                                                            <p class="mb-0 fw-normal">Features avaibility</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <ul
                                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="fs-4 text-dark mb-0">This template is great, UI-rich and
                                                    up-to-date. Although it is pretty
                                                    much complete, I suggest to improve a bit of documentation.
                                                    Thanks &amp; Highly recomended!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 392px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('admin-assets/images/profile/user-3.jpg') }}"
                                                            alt="" class="w-auto me-3 rounded-circle"
                                                            width="40" height="40">
                                                        <div>
                                                            <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                                                            <p class="mb-0 fw-normal">Features avaibility</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <ul
                                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="fs-4 text-dark mb-0">This template is great, UI-rich and
                                                    up-to-date. Although it is pretty
                                                    much complete, I suggest to improve a bit of documentation.
                                                    Thanks &amp; Highly recomended!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 392px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('admin-assets/images/profile/user-3.jpg') }}"
                                                            alt="" class="w-auto me-3 rounded-circle"
                                                            width="40" height="40">
                                                        <div>
                                                            <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                                                            <p class="mb-0 fw-normal">Features avaibility</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <ul
                                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="fs-4 text-dark mb-0">This template is great, UI-rich and
                                                    up-to-date. Although it is pretty
                                                    much complete, I suggest to improve a bit of documentation.
                                                    Thanks &amp; Highly recomended!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 392px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('admin-assets/images/profile/user-3.jpg') }}"
                                                            alt="" class="w-auto me-3 rounded-circle"
                                                            width="40" height="40">
                                                        <div>
                                                            <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                                                            <p class="mb-0 fw-normal">Features avaibility</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <ul
                                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="fs-4 text-dark mb-0">This template is great, UI-rich and
                                                    up-to-date. Although it is pretty
                                                    much complete, I suggest to improve a bit of documentation.
                                                    Thanks &amp; Highly recomended!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item active" style="width: 392px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('admin-assets/images/profile/user-2.jpg') }}"
                                                            alt="" class="w-auto me-3 rounded-circle"
                                                            width="40" height="40">
                                                        <div>
                                                            <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                                                            <p class="mb-0 text-dark">Features avaibility</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <ul
                                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="fs-4 text-dark mb-0">The quality of design is excellent,
                                                    customizability and flexibility
                                                    much better than the other products available in the market. I
                                                    strongly recommend the AdminMart to
                                                    other buyers.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 392px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('admin-assets/images/profile/user-2.jpg') }}"
                                                            alt="" class="w-auto me-3 rounded-circle"
                                                            width="40" height="40">
                                                        <div>
                                                            <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                                                            <p class="mb-0 text-dark">Features avaibility</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <ul
                                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="fs-4 text-dark mb-0">The quality of design is excellent,
                                                    customizability and flexibility
                                                    much better than the other products available in the market. I
                                                    strongly recommend the AdminMart to
                                                    other buyers.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 392px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('admin-assets/images/profile/user-2.jpg') }}"
                                                            alt="" class="w-auto me-3 rounded-circle"
                                                            width="40" height="40">
                                                        <div>
                                                            <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                                                            <p class="mb-0 text-dark">Features avaibility</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <ul
                                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="fs-4 text-dark mb-0">The quality of design is excellent,
                                                    customizability and flexibility
                                                    much better than the other products available in the market. I
                                                    strongly recommend the AdminMart to
                                                    other buyers.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 392px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('admin-assets/images/profile/user-2.jpg') }}"
                                                            alt="" class="w-auto me-3 rounded-circle"
                                                            width="40" height="40">
                                                        <div>
                                                            <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                                                            <p class="mb-0 text-dark">Features avaibility</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <ul
                                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="fs-4 text-dark mb-0">The quality of design is excellent,
                                                    customizability and flexibility
                                                    much better than the other products available in the market. I
                                                    strongly recommend the AdminMart to
                                                    other buyers.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 392px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('admin-assets/images/profile/user-2.jpg') }}"
                                                            alt="" class="w-auto me-3 rounded-circle"
                                                            width="40" height="40">
                                                        <div>
                                                            <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                                                            <p class="mb-0 text-dark">Features avaibility</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <ul
                                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="fs-4 text-dark mb-0">The quality of design is excellent,
                                                    customizability and flexibility
                                                    much better than the other products available in the market. I
                                                    strongly recommend the AdminMart to
                                                    other buyers.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 392px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}"
                                                            alt="" class="w-auto me-3 rounded-circle"
                                                            width="40" height="40">
                                                        <div>
                                                            <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                                                            <p class="mb-0 text-dark">Features avaibility</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <ul
                                                            class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="{{ asset('admin-assets/images/svgs/icon-star.svg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="fs-4 mb-0 text-dark">The dashboard template from
                                                    adminmart has helped me provide a clean
                                                    and sleek look to my dashboard and made it look exactly the way
                                                    I wanted it to, mainly without
                                                    having.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                    aria-label="Previous">‹</span></button><button type="button" role="presentation"
                                class="owl-next"><span aria-label="Next">›</span></button></div>
                        <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button
                                role="button" class="owl-dot"><span></span></button><button role="button"
                                class="owl-dot"><span></span></button><button role="button"
                                class="owl-dot"><span></span></button><button role="button"
                                class="owl-dot active"><span></span></button><button role="button"
                                class="owl-dot"><span></span></button></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="features-section py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="600"
                            data-aos-duration="1000">
                            <small class="text-primary fw-bold mb-2 d-block fs-3">ALMOST COVERED
                                EVERYTHING</small>
                            <h2 class="fs-9 text-center mb-4 mb-lg-9 fw-bolder">Other Amazing Features &amp;
                                Flexibility Provided</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="800"
                        data-aos-duration="1000">
                        <div class="text-center mb-5">
                            <i class="d-block ti ti-wand text-primary fs-10"></i>
                            <h5 class="fs-5 fw-semibold mt-8">6 Theme Colors</h5>
                            <p class="mb-0 text-dark">We have included 6 pre-defined Theme Colors with Elegant
                                Admin.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="800"
                        data-aos-duration="1000">
                        <div class="text-center mb-5">
                            <i class="d-block ti ti-layout-sidebar text-primary fs-10"></i>
                            <h5 class="fs-5 fw-semibold mt-8">Dark &amp; Light Sidebar</h5>
                            <p class="mb-0 text-dark">Included Dark and Light Sidebar for getting desire look and
                                feel.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="800"
                        data-aos-duration="1000">
                        <div class="text-center mb-5">
                            <i class="d-block ti ti-archive text-primary fs-10"></i>
                            <h5 class="fs-5 fw-semibold mt-8">600+ Page Templates</h5>
                            <p class="mb-0 text-dark">Yes, we have 5 demos &amp; 131+ Pages per demo to make it
                                easier.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="800"
                        data-aos-duration="1000">
                        <div class="text-center mb-5">
                            <i class="d-block ti ti-adjustments text-primary fs-10"></i>
                            <h5 class="fs-5 fw-semibold mt-8">150+ UI Components</h5>
                            <p class="mb-0 text-dark">Almost 150+ UI Components being given with Modernize Admin
                                Pack.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1000"
                        data-aos-duration="1000">
                        <div class="text-center mb-5">
                            <i class="d-block ti ti-tag text-primary fs-10"></i>
                            <h5 class="fs-5 fw-semibold mt-8">Bootstrap 5x</h5>
                            <p class="mb-0 text-dark">Its been made with Bootstrap 5 and full responsive layout.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1000"
                        data-aos-duration="1000">
                        <div class="text-center mb-5">
                            <i class="d-block ti ti-diamond text-primary fs-10"></i>
                            <h5 class="fs-5 fw-semibold mt-8">200+ Font Icons</h5>
                            <p class="mb-0 text-dark">Lots of Icon Fonts are included here in the package of
                                Elegant Admin.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1000"
                        data-aos-duration="1000">
                        <div class="text-center mb-5">
                            <i class="d-block ti ti-device-desktop text-primary fs-10"></i>
                            <h5 class="fs-5 fw-semibold mt-8">Fully Responsive</h5>
                            <p class="mb-0 text-dark">All the layout of Modernize Admin is Fully Responsive and
                                widely tested.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1000"
                        data-aos-duration="1000">
                        <div class="text-center mb-5">
                            <i class="d-block ti ti-database text-primary fs-10"></i>
                            <h5 class="fs-5 fw-semibold mt-8">SassBase CSS</h5>
                            <p class="mb-0 text-dark">Our Css is written Sass Base to make your life easier.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1200"
                        data-aos-duration="1000">
                        <div class="text-center mb-5">
                            <i class="d-block ti ti-arrows-shuffle text-primary fs-10"></i>
                            <h5 class="fs-5 fw-semibold mt-8">Easy to Customize</h5>
                            <p class="mb-0 text-dark">Customization will be easy as we understand your pain.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1200"
                        data-aos-duration="1000">
                        <div class="text-center mb-5">
                            <i class="d-block ti ti-chart-pie text-primary fs-10"></i>
                            <h5 class="fs-5 fw-semibold mt-8">Lots of Chart Options</h5>
                            <p class="mb-0 text-dark">You name it and we have it, Yes lots of variations for
                                Charts.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1200"
                        data-aos-duration="1000">
                        <div class="text-center mb-5">
                            <i class="d-block ti ti-layers-intersect text-primary fs-10"></i>
                            <h5 class="fs-5 fw-semibold mt-8">Lots of Table Examples</h5>
                            <p class="mb-0 text-dark">Data Tables are initial requirement and we added them.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1200"
                        data-aos-duration="1000">
                        <div class="text-center mb-5">
                            <i class="d-block ti ti-refresh text-primary fs-10"></i>
                            <h5 class="fs-5 fw-semibold mt-8">Regular Updates</h5>
                            <p class="mb-0 text-dark">We are constantly updating our pack with new features.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1400"
                        data-aos-duration="1000">
                        <div class="text-center mb-5">
                            <i class="d-block ti ti-book text-primary fs-10"></i>
                            <h5 class="fs-5 fw-semibold mt-8">Detailed Documentation</h5>
                            <p class="mb-0 text-dark">We have made detailed documentation, so it will easy to use.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1400"
                        data-aos-duration="1000">
                        <div class="text-center mb-5">
                            <i class="d-block ti ti-calendar text-primary fs-10"></i>
                            <h5 class="fs-5 fw-semibold mt-8">Calendar Design</h5>
                            <p class="mb-0 text-dark">Calendar is available with our package &amp; in nice design.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1400"
                        data-aos-duration="1000">
                        <div class="text-center mb-5">
                            <i class="d-block ti ti-brand-wechat text-primary fs-10"></i>
                            <h5 class="fs-5 fw-semibold mt-8">Dedicated Support</h5>
                            <p class="mb-0 text-dark">We believe in supreme support is key and we offer that.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-8 pt-md-5 pb-5 pb-lg-10 pb-xl-12">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card c2a-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="1600"
                            data-aos-duration="1000">
                            <div class="card-body text-center p-4 pt-8">
                                <h3 class="fs-7 fw-semibold pt-6">Havent found an answer to your question?</h3>
                                <p class="mb-8 pb-2 text-dark">Connect with us either on discord or email us</p>
                                <div class="d-sm-flex align-items-center justify-content-center gap-3 mb-4">
                                    <a href="https://discord.com/invite/eMzE8F6Wqs" target="_blank"
                                        class="btn btn-primary d-block mb-3 mb-sm-0 btn-hover-shadow" type="button">Ask
                                        on Discord</a>
                                    <a href="https://adminmart.com/support" target="_blank"
                                        class="btn btn-outline-secondary d-block" type="button">Submit
                                        Ticket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
