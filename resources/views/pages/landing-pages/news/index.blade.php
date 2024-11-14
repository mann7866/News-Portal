@extends('layouts.landing-pages.app')
@section('content')
    <div class="body-wrapper overflow-hidden" style="background-color: rgb(238, 238, 238)">
        <div class="container">

            <div class="card card-body mb-0 mt-5 rounded-0" style="background-color: rgb(0, 151, 136)">
                <div class="d-flex gap-4">
                    <a href="#" class="text-white">Olahraga</a>
                    <a href="#" class="text-white">Perlombaan</a>
                    <a href="#" class="text-white">Study</a>
                    <a href="#" class="text-white">Meeting</a>
                    <a href="#" class="text-white">Siswa</a>
                    <a href="#" class="text-white">Guru</a>
                    <a href="#" class="text-white">RPL</a>
                </div>
            </div>

            <div class="card card-body mt-0 rounded-0">
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <form class="position-relative">
                            <input style="height: 50px; width: 600px" type="text"
                                class="form-control rounded-5 product-search ps-5" id="input-search"
                                placeholder="Cari Berita..." />
                            <a href="">
                                <i
                                    class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                            </a>
                        </form>
                    </div>
                    <div
                        class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                        <!-- Konten lainnya -->
                    </div>
                </div>
            </div>
            {{--  news  --}}
            <section>
                <div class="row">
                    <div class="col-md-6 col-lg-8">
                        {{--  coroseul 1 news  --}}
                        <section>
                            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel"  data-bs-interval="3000">
                                <div class="carousel-inner">
                                    {{--  content coroseul  --}}
                                    <div class="carousel-item active">
                                        <div class="card blog position-relative overflow-hidden hover-img"
                                            style="background-image: url({{ asset('admin-assets/images/blog/blog-img9.jpg') }});">
                                            <div class="card-body position-relative">
                                                <div class="d-flex flex-column justify-content-between h-100">
                                                    <div class="d-flex align-items-start justify-content-between">
                                                        <div class="position-relative" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Mollie Underwood">
                                                            <img src="{{ asset('admin-assets/images/profile/user-4.jpg') }}"
                                                                alt="" class="rounded-circle img-fluid"
                                                                width="40" height="40">
                                                        </div>
                                                        <div class="d-flex gap-3">
                                                            <a href="">
                                                                <span
                                                                    class="badge bg-light-danger text-danger fs-2 fw-semibold">Gadget</span>
                                                                <span
                                                                    class="badge bg-light-danger text-danger fs-2 fw-semibold">Gadget</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="details.html"
                                                            class="fs-7 my-4 fw-semibold text-white d-block lh-sm">
                                                            Early Black Friday Amazon deals: cheap TVs, headphones, laptops
                                                        </a>
                                                        <div class="d-flex align-items-center gap-4">

                                                            <div
                                                                class="d-flex align-items-center gap-1 text-white fw-normal ms-auto">
                                                                <span
                                                                class="badge bg-light-warning text-warning fs-2 fw-semibold">Fri, Jan 13</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more carousel items here, duplicating the above block and changing the content as needed -->
                                    <div class="carousel-item active">
                                        <div class="card blog position-relative overflow-hidden hover-img"
                                            style="background-image: url({{ asset('admin-assets/images/blog/blog-img8.jpg') }});">
                                            <div class="card-body position-relative">
                                                <div class="d-flex flex-column justify-content-between h-100">
                                                    <div class="d-flex align-items-start justify-content-between">
                                                        <div class="position-relative" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Mollie Underwood">
                                                            <img src="{{ asset('admin-assets/images/profile/user-4.jpg') }}"
                                                                alt="" class="rounded-circle img-fluid"
                                                                width="40" height="40">
                                                        </div>
                                                        <div class="d-flex gap-1">
                                                            <a href="">
                                                                <span
                                                                    class="badge bg-light-danger text-danger fs-2 fw-semibold">Gadget</span>
                                                                <span
                                                                    class="badge bg-light-danger text-danger fs-2 fw-semibold">Gadget</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="details.html"
                                                            class="fs-7 my-4 fw-semibold text-white d-block lh-sm">
                                                            Early Black Friday Amazon deals: cheap TVs, headphones, laptops
                                                        </a>
                                                        <div class="d-flex align-items-center gap-4">
                                                            <div
                                                                class="d-flex align-items-center gap-1 text-white fw-normal ms-auto">
                                                                <span
                                                                class="badge bg-light-warning text-warning fs-2 fw-semibold">Fri, Jan 13</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </section>
                        {{--  news vootom-left --}}
                        <section>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-body overflow-hidden hover-img">
                                        <div class="d-flex">
                                            <div class="position-relative">
                                                <a href="javascript:void(0)"><img
                                                        src="{{ asset('admin-assets/images/blog/blog-img3.jpg') }}"
                                                        class="card-img-top rounded-0 "
                                                        style="height: 200px; width: 300px" alt="..."></a>

                                            </div>
                                            <div class="card-body p-1" style="font-size: 1px">
                                                <a href="">
                                                    <div class=" d-flex gap-1">
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm">Gadget</span>
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm">Gadget</span>
                                                    </div>
                                                </a>
                                                <a class="d-block my-1 fs-4 text-dark fw-semibold" href="#">As yen
                                                    tumbles,
                                                    gadget-loving Japan goes for secondhand iPhones</a>
                                                <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen
                                                    tumbles,
                                                    gadget-loving Japan goes for secondhand iPhonessecondhand
                                                    iPhonessecondhand iPhonessecondhand iPhonessecondhand d
                                                    iPhonessecondhand iPhonessecondhand d iPhonessecondhand
                                                    iPhonessecondhand d iPhonessecondhand iPhonessecondhand d
                                                    iPhonessecondhand iPhonessecondhand d iPhonessecondhand
                                                    iPhonessecondhand iPhonessecondhand iPhones</a>
                                                <div class="d-flex align-items-center mt-2 gap-4">
                                                    <a href="">
                                                        <div class="text-primary rounded-1 fs-2 d-flex align-items-center">
                                                            baca selengkapnya
                                                            <i class="ti mt-1 fs-3 ti-arrow-narrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <div class="badge bg-light-warning text-warning rounded-1 d-flex align-items-center  ms-auto"
                                                        style="font-size: 800%">Mon, Jan
                                                        16
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-body overflow-hidden hover-img">
                                        <div class="d-flex">
                                            <div class="position-relative">
                                                <a href="javascript:void(0)"><img
                                                        src="{{ asset('admin-assets/images/blog/blog-img3.jpg') }}"
                                                        class="card-img-top rounded-0 "
                                                        style="height: 200px; width: 300px" alt="..."></a>

                                            </div>
                                            <div class="card-body p-1" style="font-size: 1px">
                                                <a href="">
                                                    <div class=" d-flex gap-1">
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm">Gadget</span>
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm">Gadget</span>
                                                    </div>
                                                </a>
                                                <a class="d-block my-1 fs-4 text-dark fw-semibold" href="#">As yen
                                                    tumbles,
                                                    gadget-loving Japan goes for secondhand iPhones</a>
                                                <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen
                                                    tumbles,
                                                    gadget-loving Japan goes for secondhand iPhonessecondhand
                                                    iPhonessecondhand iPhonessecondhand iPhonessecondhand d
                                                    iPhonessecondhand iPhonessecondhand d iPhonessecondhand
                                                    iPhonessecondhand d iPhonessecondhand iPhonessecondhand d
                                                    iPhonessecondhand iPhonessecondhand d iPhonessecondhand
                                                    iPhonessecondhand iPhonessecondhand iPhones</a>
                                                <div class="d-flex align-items-center mt-2 gap-4">
                                                    <a href="">
                                                        <div class="text-primary rounded-1 fs-2 d-flex align-items-center">
                                                            baca selengkapnya
                                                            <i class="ti mt-1 fs-3 ti-arrow-narrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <div class="badge bg-light-warning text-warning rounded-1 d-flex align-items-center  ms-auto"
                                                        style="font-size: 800%">Mon, Jan
                                                        16
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-body overflow-hidden hover-img">
                                        <div class="d-flex">
                                            <div class="position-relative">
                                                <a href="javascript:void(0)"><img
                                                        src="{{ asset('admin-assets/images/blog/blog-img3.jpg') }}"
                                                        class="card-img-top rounded-0 "
                                                        style="height: 200px; width: 300px" alt="..."></a>

                                            </div>
                                            <div class="card-body p-1" style="font-size: 1px">
                                                <a href="">
                                                    <div class=" d-flex gap-1">
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm">Gadget</span>
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm">Gadget</span>
                                                    </div>
                                                </a>
                                                <a class="d-block my-1 fs-4 text-dark fw-semibold" href="#">As yen
                                                    tumbles,
                                                    gadget-loving Japan goes for secondhand iPhones</a>
                                                <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen
                                                    tumbles,
                                                    gadget-loving Japan goes for secondhand iPhonessecondhand
                                                    iPhonessecondhand iPhonessecondhand iPhonessecondhand d
                                                    iPhonessecondhand iPhonessecondhand d iPhonessecondhand
                                                    iPhonessecondhand d iPhonessecondhand iPhonessecondhand d
                                                    iPhonessecondhand iPhonessecondhand d iPhonessecondhand
                                                    iPhonessecondhand iPhonessecondhand iPhones</a>
                                                <div class="d-flex align-items-center mt-2 gap-4">
                                                    <a href="">
                                                        <div class="text-primary rounded-1 fs-2 d-flex align-items-center">
                                                            baca selengkapnya
                                                            <i class="ti mt-1 fs-3 ti-arrow-narrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <div class="badge bg-light-warning text-warning rounded-1 d-flex align-items-center  ms-auto"
                                                        style="font-size: 800%">Mon, Jan
                                                        16
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-body overflow-hidden hover-img">
                                        <div class="d-flex">
                                            <div class="position-relative">
                                                <a href="javascript:void(0)"><img
                                                        src="{{ asset('admin-assets/images/blog/blog-img3.jpg') }}"
                                                        class="card-img-top rounded-0 "
                                                        style="height: 200px; width: 300px" alt="..."></a>

                                            </div>
                                            <div class="card-body p-1" style="font-size: 1px">
                                                <a href="">
                                                    <div class=" d-flex gap-1">
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm">Gadget</span>
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm">Gadget</span>
                                                    </div>
                                                </a>
                                                <a class="d-block my-1 fs-4 text-dark fw-semibold" href="#">As yen
                                                    tumbles,
                                                    gadget-loving Japan goes for secondhand iPhones</a>
                                                <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen
                                                    tumbles,
                                                    gadget-loving Japan goes for secondhand iPhonessecondhand
                                                    iPhonessecondhand iPhonessecondhand iPhonessecondhand d
                                                    iPhonessecondhand iPhonessecondhand d iPhonessecondhand
                                                    iPhonessecondhand d iPhonessecondhand iPhonessecondhand d
                                                    iPhonessecondhand iPhonessecondhand d iPhonessecondhand
                                                    iPhonessecondhand iPhonessecondhand iPhones</a>
                                                <div class="d-flex align-items-center mt-2 gap-4">
                                                    <a href="">
                                                        <div class="text-primary rounded-1 fs-2 d-flex align-items-center">
                                                            baca selengkapnya
                                                            <i class="ti mt-1 fs-3 ti-arrow-narrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <div class="badge bg-light-warning text-warning rounded-1 d-flex align-items-center  ms-auto"
                                                        style="font-size: 800%">Mon, Jan
                                                        16
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{--  coroseul 3 news  --}}
                                <section>
                                    <div id="blogCarousel" class="carousel slide" data-bs-ride="carousel"  data-bs-interval="3000">
                                        <div class="carousel-inner">
                                            {{--  content coroseul 1  --}}
                                            <div class="carousel-item active">
                                                <div class="row">
                                                    {{--  conten coroseul 1  --}}
                                                    <div class="col-4">
                                                        <div class="card">
                                                            <div class="rounded-2 overflow-hidden hover-img">
                                                                <div class="position-relative">
                                                                    <a href="javascript:void(0)">
                                                                        <img src="{{ asset('admin-assets/images/blog/blog-img2.jpg') }}" class="card-img-top rounded-0" alt="...">
                                                                    </a>
                                                                    <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt="" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Addie Keller">
                                                                </div>
                                                                <div class="p-1">
                                                                    <a href="">
                                                                        <div class="d-flex mt-1 gap-1">
                                                                            <span class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm mt-3">Gadget</span>
                                                                            <span class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm mt-3">Gadget</span>
                                                                        </div>
                                                                    </a>
                                                                    <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen tumbles, gadget-loving Japan goes for secondhand iPhones secondhand iPhones secondhand iPhones secondhand iPhones</a>
                                                                    <div class="d-flex align-items-center gap-4">
                                                                        <div class="badge bg-light-warning text-warning d-flex align-items-center fs-1 ms-auto">
                                                                            Mon, Jan 16
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Repeat for other cards in this row -->
                                                    <div class="col-4">
                                                        <div class="card">
                                                            <div class="rounded-2 overflow-hidden hover-img">
                                                                <div class="position-relative">
                                                                    <a href="javascript:void(0)">
                                                                        <img src="{{ asset('admin-assets/images/blog/blog-img2.jpg') }}" class="card-img-top rounded-0" alt="...">
                                                                    </a>
                                                                    <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt="" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Addie Keller">
                                                                </div>
                                                                <div class="p-1">
                                                                    <a href="">
                                                                        <div class="d-flex mt-1 gap-1">
                                                                            <span class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm mt-3">Gadget</span>
                                                                            <span class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm mt-3">Gadget</span>
                                                                        </div>
                                                                    </a>
                                                                    <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen tumbles, gadget-loving Japan goes for secondhand iPhones secondhand iPhones secondhand iPhones secondhand iPhones</a>
                                                                    <div class="d-flex align-items-center gap-4">
                                                                        <div class="badge bg-light-warning text-warning d-flex align-items-center fs-1 ms-auto">
                                                                            Mon, Jan 16
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="card">
                                                            <div class="rounded-2 overflow-hidden hover-img">
                                                                <div class="position-relative">
                                                                    <a href="javascript:void(0)">
                                                                        <img src="{{ asset('admin-assets/images/blog/blog-img2.jpg') }}" class="card-img-top rounded-0" alt="...">
                                                                    </a>
                                                                    <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt="" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Addie Keller">
                                                                </div>
                                                                <div class="p-1">
                                                                    <a href="">
                                                                        <div class="d-flex mt-1 gap-1">
                                                                            <span class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm mt-3">Gadget</span>
                                                                            <span class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm mt-3">Gadget</span>
                                                                        </div>
                                                                    </a>
                                                                    <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen tumbles, gadget-loving Japan goes for secondhand iPhones secondhand iPhones secondhand iPhones secondhand iPhones</a>
                                                                    <div class="d-flex align-items-center gap-4">
                                                                        <div class="badge bg-light-warning text-warning d-flex align-items-center fs-1 ms-auto">
                                                                            Mon, Jan 16
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="row">
                                                    {{--  content coroseul 2 --}}
                                                    <div class="col-4">
                                                        <div class="card">
                                                            <div class="rounded-2 overflow-hidden hover-img">
                                                                <div class="position-relative">
                                                                    <a href="javascript:void(0)">
                                                                        <img src="{{ asset('admin-assets/images/blog/blog-img4.jpg') }}" class="card-img-top rounded-0" alt="...">
                                                                    </a>
                                                                    <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt="" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Addie Keller">
                                                                </div>
                                                                <div class="p-1">
                                                                    <a href="">
                                                                        <div class="d-flex mt-1 gap-1">
                                                                            <span class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm mt-3">Gadget</span>
                                                                            <span class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm mt-3">Gadget</span>
                                                                        </div>
                                                                    </a>
                                                                    <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen tumbles, gadget-loving Japan goes for secondhand iPhones secondhand iPhones secondhand iPhones secondhand iPhones</a>
                                                                    <div class="d-flex align-items-center gap-4">
                                                                        <div class="badge bg-light-warning text-warning d-flex align-items-center fs-1 ms-auto">
                                                                            Mon, Jan 16
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="card">
                                                            <div class="rounded-2 overflow-hidden hover-img">
                                                                <div class="position-relative">
                                                                    <a href="javascript:void(0)">
                                                                        <img src="{{ asset('admin-assets/images/blog/blog-img4.jpg') }}" class="card-img-top rounded-0" alt="...">
                                                                    </a>
                                                                    <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt="" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Addie Keller">
                                                                </div>
                                                                <div class="p-1">
                                                                    <a href="">
                                                                        <div class="d-flex mt-1 gap-1">
                                                                            <span class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm mt-3">Gadget</span>
                                                                            <span class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm mt-3">Gadget</span>
                                                                        </div>
                                                                    </a>
                                                                    <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen tumbles, gadget-loving Japan goes for secondhand iPhones secondhand iPhones secondhand iPhones secondhand iPhones</a>
                                                                    <div class="d-flex align-items-center gap-4">
                                                                        <div class="badge bg-light-warning text-warning d-flex align-items-center fs-1 ms-auto">
                                                                            Mon, Jan 16
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> <div class="col-4">
                                                        <div class="card">
                                                            <div class="rounded-2 overflow-hidden hover-img">
                                                                <div class="position-relative">
                                                                    <a href="javascript:void(0)">
                                                                        <img src="{{ asset('admin-assets/images/blog/blog-img4.jpg') }}" class="card-img-top rounded-0" alt="...">
                                                                    </a>
                                                                    <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt="" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Addie Keller">
                                                                </div>
                                                                <div class="p-1">
                                                                    <a href="">
                                                                        <div class="d-flex mt-1 gap-1">
                                                                            <span class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm mt-3">Gadget</span>
                                                                            <span class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm mt-3">Gadget</span>
                                                                        </div>
                                                                    </a>
                                                                    <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen tumbles, gadget-loving Japan goes for secondhand iPhones secondhand iPhones secondhand iPhones secondhand iPhones</a>
                                                                    <div class="d-flex align-items-center gap-4">
                                                                        <div class="badge bg-light-warning text-warning d-flex align-items-center fs-1 ms-auto">
                                                                            Mon, Jan 16
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="row">
                                                    {{--  content coroseul 3 --}}
                                                    <div class="col-4">
                                                        <div class="card">
                                                            <div class="rounded-2 overflow-hidden hover-img">
                                                                <div class="position-relative">
                                                                    <a href="javascript:void(0)">
                                                                        <img src="{{ asset('admin-assets/images/blog/blog-img5.jpg') }}" class="card-img-top rounded-0" alt="...">
                                                                    </a>
                                                                    <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt="" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Addie Keller">
                                                                </div>
                                                                <div class="p-1">
                                                                    <a href="">
                                                                        <div class="d-flex mt-1 gap-1">
                                                                            <span class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm mt-3">Gadget</span>
                                                                            <span class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm mt-3">Gadget</span>
                                                                        </div>
                                                                    </a>
                                                                    <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen tumbles, gadget-loving Japan goes for secondhand iPhones secondhand iPhones secondhand iPhones secondhand iPhones</a>
                                                                    <div class="d-flex align-items-center gap-4">
                                                                        <div class="badge bg-light-warning text-warning d-flex align-items-center fs-1 ms-auto">
                                                                            Mon, Jan 16
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="card">
                                                            <div class="rounded-2 overflow-hidden hover-img">
                                                                <div class="position-relative">
                                                                    <a href="javascript:void(0)">
                                                                        <img src="{{ asset('admin-assets/images/blog/blog-img5.jpg') }}" class="card-img-top rounded-0" alt="...">
                                                                    </a>
                                                                    <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt="" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Addie Keller">
                                                                </div>
                                                                <div class="p-1">
                                                                    <a href="">
                                                                        <div class="d-flex mt-1 gap-1">
                                                                            <span class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm mt-3">Gadget</span>
                                                                            <span class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm mt-3">Gadget</span>
                                                                        </div>
                                                                    </a>
                                                                    <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen tumbles, gadget-loving Japan goes for secondhand iPhones secondhand iPhones secondhand iPhones secondhand iPhones</a>
                                                                    <div class="d-flex align-items-center gap-4">
                                                                        <div class="badge bg-light-warning text-warning d-flex align-items-center fs-1 ms-auto">
                                                                            Mon, Jan 16
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> <div class="col-4">
                                                        <div class="card">
                                                            <div class="rounded-2 overflow-hidden hover-img">
                                                                <div class="position-relative">
                                                                    <a href="javascript:void(0)">
                                                                        <img src="{{ asset('admin-assets/images/blog/blog-img5.jpg') }}" class="card-img-top rounded-0" alt="...">
                                                                    </a>
                                                                    <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt="" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Addie Keller">
                                                                </div>
                                                                <div class="p-1">
                                                                    <a href="">
                                                                        <div class="d-flex mt-1 gap-1">
                                                                            <span class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm mt-3">Gadget</span>
                                                                            <span class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm mt-3">Gadget</span>
                                                                        </div>
                                                                    </a>
                                                                    <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen tumbles, gadget-loving Japan goes for secondhand iPhones secondhand iPhones secondhand iPhones secondhand iPhones</a>
                                                                    <div class="d-flex align-items-center gap-4">
                                                                        <div class="badge bg-light-warning text-warning d-flex align-items-center fs-1 ms-auto">
                                                                            Mon, Jan 16
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </section>

                                <div class="col-12">
                                    <div class="card card-body overflow-hidden hover-img">
                                        <div class="d-flex">
                                            <div class="position-relative">
                                                <a href="javascript:void(0)"><img
                                                        src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                                        class="card-img-top rounded-0 "
                                                        style="height: 200px; width: 300px" alt="..."></a>

                                            </div>
                                            <div class="card-body p-1" style="font-size: 1px">
                                                <a href="">
                                                    <div class=" d-flex gap-1">
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm">Gadget</span>
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm">Gadget</span>
                                                    </div>
                                                </a>
                                                <a class="d-block my-1 fs-4 text-dark fw-semibold" href="#">As yen
                                                    tumbles,
                                                    gadget-loving Japan goes for secondhand iPhones</a>
                                                <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen
                                                    tumbles,
                                                    gadget-loving Japan goes for secondhand iPhonessecondhand
                                                    iPhonessecondhand iPhonessecondhand iPhonessecondhand d
                                                    iPhonessecondhand iPhonessecondhand d iPhonessecondhand
                                                    iPhonessecondhand d iPhonessecondhand iPhonessecondhand d
                                                    iPhonessecondhand iPhonessecondhand d iPhonessecondhand
                                                    iPhonessecondhand iPhonessecondhand iPhones</a>
                                                <div class="d-flex align-items-center mt-2 gap-4">
                                                    <a href="">
                                                        <div class="text-primary rounded-1 fs-2 d-flex align-items-center">
                                                            baca selengkapnya
                                                            <i class="ti mt-1 fs-3 ti-arrow-narrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <div class="badge bg-light-warning text-warning rounded-1 d-flex align-items-center  ms-auto"
                                                        style="font-size: 800%">Mon, Jan
                                                        16
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-body overflow-hidden hover-img">
                                        <div class="d-flex">
                                            <div class="position-relative">
                                                <a href="javascript:void(0)"><img
                                                        src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                                        class="card-img-top rounded-0 "
                                                        style="height: 200px; width: 300px" alt="..."></a>

                                            </div>
                                            <div class="card-body p-1" style="font-size: 1px">
                                                <a href="">
                                                    <div class=" d-flex gap-1">
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm">Gadget</span>
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm">Gadget</span>
                                                    </div>
                                                </a>
                                                <a class="d-block my-1 fs-4 text-dark fw-semibold" href="#">As yen
                                                    tumbles,
                                                    gadget-loving Japan goes for secondhand iPhones</a>
                                                <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen
                                                    tumbles,
                                                    gadget-loving Japan goes for secondhand iPhonessecondhand
                                                    iPhonessecondhand iPhonessecondhand iPhonessecondhand d
                                                    iPhonessecondhand iPhonessecondhand d iPhonessecondhand
                                                    iPhonessecondhand d iPhonessecondhand iPhonessecondhand d
                                                    iPhonessecondhand iPhonessecondhand d iPhonessecondhand
                                                    iPhonessecondhand iPhonessecondhand iPhones</a>
                                                <div class="d-flex align-items-center mt-2 gap-4">
                                                    <a href="">
                                                        <div class="text-primary rounded-1 fs-2 d-flex align-items-center">
                                                            baca selengkapnya
                                                            <i class="ti mt-1 fs-3 ti-arrow-narrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <div class="badge bg-light-warning text-warning rounded-1 d-flex align-items-center  ms-auto"
                                                        style="font-size: 800%">Mon, Jan
                                                        16
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-body overflow-hidden hover-img">
                                        <div class="d-flex">
                                            <div class="position-relative">
                                                <a href="javascript:void(0)"><img
                                                        src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                                        class="card-img-top rounded-0 "
                                                        style="height: 200px; width: 300px" alt="..."></a>

                                            </div>
                                            <div class="card-body p-1" style="font-size: 1px">
                                                <a href="">
                                                    <div class=" d-flex gap-1">
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm">Gadget</span>
                                                        <span
                                                            class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm">Gadget</span>
                                                    </div>
                                                </a>
                                                <a class="d-block my-1 fs-4 text-dark fw-semibold" href="#">As yen
                                                    tumbles,
                                                    gadget-loving Japan goes for secondhand iPhones</a>
                                                <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen
                                                    tumbles,
                                                    gadget-loving Japan goes for secondhand iPhonessecondhand
                                                    iPhonessecondhand iPhonessecondhand iPhonessecondhand d
                                                    iPhonessecondhand iPhonessecondhand d iPhonessecondhand
                                                    iPhonessecondhand d iPhonessecondhand iPhonessecondhand d
                                                    iPhonessecondhand iPhonessecondhand d iPhonessecondhand
                                                    iPhonessecondhand iPhonessecondhand iPhones</a>
                                                <div class="d-flex align-items-center mt-2 gap-4">
                                                    <a href="">
                                                        <div class="text-primary rounded-1 fs-2 d-flex align-items-center">
                                                            baca selengkapnya
                                                            <i class="ti mt-1 fs-3 ti-arrow-narrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <div class="badge bg-light-warning text-warning rounded-1 d-flex align-items-center  ms-auto"
                                                        style="font-size: 800%">Mon, Jan
                                                        16
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden hover-img">
                                        <div class="d-flex justify-content-center">
                                            <div class="p-1" style="font-size: 1px">
                                                <a class="btn btn-muted btn-sm fs-2 text-white" href="#">
                                                    lainnya
                                                    <i class="ti ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </section>
                    </div>

                    {{--  news left-left  --}}
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body overflow-hidden hover-img">
                                <div class="d-flex">
                                    <div class="position-relative">
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset('admin-assets/images/blog/blog-img1.jpg') }}"
                                                class="card-img-top rounded-0 " style="height: 100px; width: 150px"
                                                alt="..."></a>

                                    </div>
                                    <div class="card-body p-1" style="font-size: 1px">
                                        <a class="" href="">
                                            <div class="d-flex gap-1">
                                                <span
                                                    class="badge bg-light-danger text-danger fs-1 rounded-1">Gadget</span>
                                                <span
                                                    class="badge bg-light-danger text-danger fs-1 rounded-1">Gadget</span>
                                            </div>

                                        </a>
                                        <a class="d-block my-1 fs-2 text-dark fw-semibold" href="#">As yen
                                            tumbles,
                                            gadget-loving Japan goes for secondhand iPhones</a>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="badge bg-light-warning text-warning rounded-1 d-flex align-items-center  ms-auto"
                                                style="font-size: 800%">Mon, Jan
                                                16</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body overflow-hidden hover-img">
                                <div class="d-flex">
                                    <div class="position-relative">
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset('admin-assets/images/blog/blog-img1.jpg') }}"
                                                class="card-img-top rounded-0 " style="height: 100px; width: 150px"
                                                alt="..."></a>

                                    </div>
                                    <div class="card-body p-1" style="font-size: 1px">
                                        <a class="" href="">
                                            <div class="d-flex gap-1">
                                                <span
                                                    class="badge bg-light-danger text-danger fs-1 rounded-1">Gadget</span>
                                                <span
                                                    class="badge bg-light-danger text-danger fs-1 rounded-1">Gadget</span>
                                            </div>

                                        </a>
                                        <a class="d-block my-1 fs-2 text-dark fw-semibold" href="#">As yen
                                            tumbles,
                                            gadget-loving Japan goes for secondhand iPhones</a>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="badge bg-light-warning text-warning rounded-1 d-flex align-items-center  ms-auto"
                                                style="font-size: 800%">Mon, Jan
                                                16</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--  news left bottom  --}}
                        <div class="card">
                            <div class=" rounded-2 overflow-hidden hover-img">
                                <div class="position-relative">
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                            class="card-img-top rounded-0" alt="..."></a>
                                    <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt=""
                                        class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                        width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Addie Keller">
                                </div>
                                <div class="p-1">
                                    <a href="">
                                        <div class=" d-flex mt-1 gap-1">
                                            <span
                                                class="badge bg-light-danger text-danger fs-1 rounded-1 mt-3">Gadget</span>
                                            <span
                                                class="badge bg-light-danger text-danger fs-1 rounded-1 mt-3">Gadget</span>
                                        </div>
                                    </a>
                                    <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen
                                        tumbles, gadget-loving Japan goes for secondhand iPhones secondhand iPhones
                                        secondhand
                                        iPhones secondhand iPhones</a>
                                    <div class="d-flex align-items-center gap-4">
                                        <div
                                            class="badge bg-light-warning text-warning d-flex rounded-1 align-items-center fs-1 ms-auto">
                                            Mon, Jan 16
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class=" rounded-2 overflow-hidden hover-img">
                                <div class="position-relative">
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                            class="card-img-top rounded-0" alt="..."></a>
                                    <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt=""
                                        class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                        width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Addie Keller">
                                </div>
                                <div class="p-1">
                                    <a href="">
                                        <div class=" d-flex mt-1 gap-1">
                                            <span
                                                class="badge bg-light-danger text-danger fs-1 rounded-1 mt-3">Gadget</span>
                                            <span
                                                class="badge bg-light-danger text-danger fs-1 rounded-1 mt-3">Gadget</span>
                                        </div>
                                    </a>
                                    <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen
                                        tumbles, gadget-loving Japan goes for secondhand iPhones secondhand iPhones
                                        secondhand
                                        iPhones secondhand iPhones</a>
                                    <div class="d-flex align-items-center gap-4">
                                        <div
                                            class="badge bg-light-warning text-warning d-flex rounded-1 align-items-center fs-1 ms-auto">
                                            Mon, Jan 16
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class=" rounded-2 overflow-hidden hover-img">
                                <div class="position-relative">
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                            class="card-img-top rounded-0" alt="..."></a>
                                    <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt=""
                                        class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                        width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Addie Keller">
                                </div>
                                <div class="p-1">
                                    <a href="">
                                        <div class=" d-flex mt-1 gap-1">
                                            <span
                                                class="badge bg-light-danger text-danger fs-1 rounded-1 mt-3">Gadget</span>
                                            <span
                                                class="badge bg-light-danger text-danger fs-1 rounded-1 mt-3">Gadget</span>
                                        </div>
                                    </a>
                                    <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen
                                        tumbles, gadget-loving Japan goes for secondhand iPhones secondhand iPhones
                                        secondhand
                                        iPhones secondhand iPhones</a>
                                    <div class="d-flex align-items-center gap-4">
                                        <div
                                            class="badge bg-light-warning text-warning d-flex rounded-1 align-items-center fs-1 ms-auto">
                                            Mon, Jan 16
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="background-color: rgb(179, 186, 185)" class="card">
                            <div class="card-body overflow-hidden hover-img">
                                <div class="d-flex">
                                    <div class="position-relative">
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset('admin-assets/images/blog/blog-img2.jpg') }}"
                                                class="card-img-top rounded-0 " style="height: 100px; width: 150px"
                                                alt="..."></a>

                                    </div>
                                    <div class="card-body p-1" style="font-size: 1px">

                                        <a class="" href="">
                                        <div class="d-flex gap-1">
                                                <span
                                                    class="badge bg-light-danger text-danger fs-1 rounded-1">Gadget</span>
                                                <span
                                                    class="badge bg-light-danger text-danger fs-1 rounded-1">Gadget</span>
                                        </div>
                                    </a>
                                        <a class="d-block my-1 text-white fs-2 text-dark fw-semibold" href="#">As
                                            yen
                                            tumbles,
                                            gadget-loving Japan goes for secondhand iPhones</a>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="badge bg-light-warning text-warning rounded-1 d-flex align-items-center  ms-auto"
                                                style="font-size: 800%">Mon, Jan
                                                16</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body overflow-hidden hover-img">
                                <div class="d-flex">
                                    <div class="position-relative">
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset('admin-assets/images/blog/blog-img2.jpg') }}"
                                                class="card-img-top rounded-0 " style="height: 100px; width: 150px"
                                                alt="..."></a>

                                    </div>
                                    <div class="card-body p-1" style="font-size: 1px">

                                        <a class="" href="">
                                        <div class="d-flex gap-1">
                                                <span
                                                    class="badge bg-light-danger text-danger fs-1 rounded-1">Gadget</span>
                                                <span
                                                    class="badge bg-light-danger text-danger fs-1 rounded-1">Gadget</span>
                                        </div>
                                    </a>
                                        <a class="d-block my-1 text-white fs-2 text-dark fw-semibold" href="#">As
                                            yen
                                            tumbles,
                                            gadget-loving Japan goes for secondhand iPhones</a>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="badge bg-light-warning text-warning rounded-1 d-flex align-items-center  ms-auto"
                                                style="font-size: 800%">Mon, Jan
                                                16</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body overflow-hidden hover-img">
                                <div class="d-flex">
                                    <div class="position-relative">
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset('admin-assets/images/blog/blog-img2.jpg') }}"
                                                class="card-img-top rounded-0 " style="height: 100px; width: 150px"
                                                alt="..."></a>

                                    </div>
                                    <div class="card-body p-1" style="font-size: 1px">

                                        <a class="" href="">
                                        <div class="d-flex gap-1">
                                                <span
                                                    class="badge bg-light-danger text-danger fs-1 rounded-1">Gadget</span>
                                                <span
                                                    class="badge bg-light-danger text-danger fs-1 rounded-1">Gadget</span>
                                        </div>
                                    </a>
                                        <a class="d-block my-1 text-white fs-2 text-dark fw-semibold" href="#">As
                                            yen
                                            tumbles,
                                            gadget-loving Japan goes for secondhand iPhones</a>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="badge bg-light-warning text-warning rounded-1 d-flex align-items-center  ms-auto"
                                                style="font-size: 800%">Mon, Jan
                                                16</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body overflow-hidden hover-img">
                                <div class="d-flex">
                                    <div class="position-relative">
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset('admin-assets/images/blog/blog-img2.jpg') }}"
                                                class="card-img-top rounded-0 " style="height: 100px; width: 150px"
                                                alt="..."></a>

                                    </div>
                                    <div class="card-body p-1" style="font-size: 1px">

                                        <a class="" href="">
                                        <div class="d-flex gap-1">
                                                <span
                                                    class="badge bg-light-danger text-danger fs-1 rounded-1">Gadget</span>
                                                <span
                                                    class="badge bg-light-danger text-danger fs-1 rounded-1">Gadget</span>
                                        </div>
                                    </a>
                                        <a class="d-block my-1 text-white fs-2 text-dark fw-semibold" href="#">As
                                            yen
                                            tumbles,
                                            gadget-loving Japan goes for secondhand iPhones</a>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="badge bg-light-warning text-warning rounded-1 d-flex align-items-center  ms-auto"
                                                style="font-size: 800%">Mon, Jan
                                                16</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body overflow-hidden hover-img">
                                <div class="d-flex">
                                    <div class="position-relative">
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset('admin-assets/images/blog/blog-img2.jpg') }}"
                                                class="card-img-top rounded-0 " style="height: 100px; width: 150px"
                                                alt="..."></a>

                                    </div>
                                    <div class="card-body p-1" style="font-size: 1px">

                                        <a class="" href="">
                                        <div class="d-flex gap-1">
                                                <span
                                                    class="badge bg-light-danger text-danger fs-1 rounded-1">Gadget</span>
                                                <span
                                                    class="badge bg-light-danger text-danger fs-1 rounded-1">Gadget</span>
                                        </div>
                                    </a>
                                        <a class="d-block my-1 text-white fs-2 text-dark fw-semibold" href="#">As
                                            yen
                                            tumbles,
                                            gadget-loving Japan goes for secondhand iPhones</a>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="badge bg-light-warning text-warning rounded-1 d-flex align-items-center  ms-auto"
                                                style="font-size: 800%">Mon, Jan
                                                16</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body overflow-hidden hover-img">
                                <div class="d-flex">
                                    <div class="position-relative">
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset('admin-assets/images/blog/blog-img2.jpg') }}"
                                                class="card-img-top rounded-0 " style="height: 100px; width: 150px"
                                                alt="..."></a>

                                    </div>
                                    <div class="card-body p-1" style="font-size: 1px">

                                        <a class="" href="">
                                        <div class="d-flex gap-1">
                                                <span
                                                    class="badge bg-light-danger text-danger fs-1 rounded-1">Gadget</span>
                                                <span
                                                    class="badge bg-light-danger text-danger fs-1 rounded-1">Gadget</span>
                                        </div>
                                    </a>
                                        <a class="d-block my-1 text-white fs-2 text-dark fw-semibold" href="#">As
                                            yen
                                            tumbles,
                                            gadget-loving Japan goes for secondhand iPhones</a>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="badge bg-light-warning text-warning rounded-1 d-flex align-items-center  ms-auto"
                                                style="font-size: 800%">Mon, Jan
                                                16</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body overflow-hidden hover-img">
                                <div class="d-flex">
                                    <div class="position-relative">
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset('admin-assets/images/blog/blog-img2.jpg') }}"
                                                class="card-img-top rounded-0 " style="height: 100px; width: 150px"
                                                alt="..."></a>

                                    </div>
                                    <div class="card-body p-1" style="font-size: 1px">

                                        <a class="" href="">
                                        <div class="d-flex gap-1">
                                                <span
                                                    class="badge bg-light-danger text-danger fs-1 rounded-1">Gadget</span>
                                                <span
                                                    class="badge bg-light-danger text-danger fs-1 rounded-1">Gadget</span>
                                        </div>
                                    </a>
                                        <a class="d-block my-1 text-white fs-2 text-dark fw-semibold" href="#">As
                                            yen
                                            tumbles,
                                            gadget-loving Japan goes for secondhand iPhones</a>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="badge bg-light-warning text-warning rounded-1 d-flex align-items-center  ms-auto"
                                                style="font-size: 800%">Mon, Jan
                                                16</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
