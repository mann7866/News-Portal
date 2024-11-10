<head>
    <!--  Title -->
    <title>Mordenize</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png"
        href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" />
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('admin-assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">

    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('admin-assets/css/style.min.css') }}" />

    {{--  summernote  --}}
    <link rel="stylesheet" href="{{ asset('admin-assets/libs/summernote/dist/summernote-lite.min.css') }}">
    {{--  select2  --}}
    <link rel="stylesheet" href="{{ asset('admin-assets/libs/select2/dist/css/select2.min.css') }}">
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
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

    <div class="page-wrapper p-0 overflow-hidden">
        <header class="app-header fixed-header" style="background-color: rgb(251, 253, 251);">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse"
                            href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="ti ti-search"></i>
                        </a>
                    </li>
                </ul>
                <div class="d-block d-lg-none">
                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg"
                        class="dark-logo" width="180" alt="" />
                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg"
                        class="light-logo" width="180" alt="" />
                </div>
                <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="p-2">
                        <i class="ti ti-dots fs-7"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="javascript:void(0)"
                            class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                            aria-controls="offcanvasWithBothOptions">
                            <i class="ti ti-align-justified fs-7"></i>
                        </a>
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-bell-ringing"></i>
                                    <div class="notification bg-primary rounded-circle"></div>
                                </a>
                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                        <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                    </div>
                                    <div class="message-body" data-simplebar>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}"
                                                    alt="user" class="rounded-circle" width="48"
                                                    height="48" />
                                            </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold">Roman Joined the Team!</h6>
                                                <span class="d-block">Congratulate him</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="py-6 px-7 mb-1">
                                        <button class="btn btn-outline-primary w-100"> See All Notifications
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link pe-0" href="javascript:void(0)" id="drop1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <div class="user-profile-img">
                                            <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}"
                                                class="rounded-circle" width="35" height="35"
                                                alt="" />
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop1">
                                    <div class="profile-dropdown position-relative" data-simplebar>
                                        <div class="py-3 px-7 pb-0">
                                            <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                        </div>
                                        <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                            <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}"
                                                class="rounded-circle" width="80" height="80"
                                                alt="" />
                                            <div class="ms-3">
                                                <h5 class="mb-1 fs-3">{{ Auth::user()->name }}</h5>
                                                <span class="mb-1 d-block text-dark">Designer</span>
                                                <p class="mb-0 d-flex text-dark align-items-center gap-2">
                                                    <i class="ti ti-mail fs-4"></i> {{ Auth::user()->email }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="message-body">
                                            <a href="{{ route('profile.edit') }}"
                                                class="py-8 px-7 mt-8 d-flex align-items-center">
                                                <span
                                                    class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-account.svg"
                                                        alt="" width="24" height="24">
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h6 class="mb-1 bg-hover-primary fw-semibold"> My Profile
                                                    </h6>
                                                    <span class="d-block text-dark">Account Settings</span>
                                                </div>
                                            </a>
                                            <a href="app-email.html" class="py-8 px-7 d-flex align-items-center">
                                                <span
                                                    class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-inbox.svg"
                                                        alt="" width="24" height="24">
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h6 class="mb-1 bg-hover-primary fw-semibold">My Inbox</h6>
                                                    <span class="d-block text-dark">Messages & Emails</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-grid py-4 px-7 pt-8">

                                            <a href=""
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                class="btn btn-outline-primary">Log Out</a>
                                        </div>

                                        <!-- Logout Form -->
                                        <form id="logout-form" method="POST" action="{{ route('logout') }}"
                                            style="display: none;">
                                            @csrf
                                        </form>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="body-wrapper overflow-hidden" style="background-color: rgb(255, 255, 255)">
            <div class="card shadow-none bg-success position-relative overflow-hidden" >
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Halaman-Berita</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted " href="index-2.html">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        Halaman-Berita
                                    </li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>


            <section class="hero-section position-relative overflow-hidden mb-0 mb-lg-11">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6">
                            <div class="hero-content my-11 my-xl-0">

                                <h1 class="fw-bolder mb-8 fs-13 aos-init aos-animate" data-aos="fade-up"
                                    data-aos-delay="400" data-aos-duration="1000">Most powerful &amp; <span
                                        class="text-primary"> Developer friendly</span>
                                    dashboard</h1>
                                <p class="fs-5 mb-5 text-dark fw-normal aos-init aos-animate" data-aos="fade-up"
                                    data-aos-delay="600" data-aos-duration="1000">Modernize comes with light &amp;
                                    dark color skins, well designed
                                    dashboards, applications and pages.</p>
                                <div class="d-sm-flex align-items-center gap-3 aos-init aos-animate"
                                    data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                                    <a class="btn btn-primary px-5 btn-hover-shadow d-block mb-3 mb-sm-0"
                                        href="https://bootstrapdemos.adminmart.com/modernize/dist/main/authentication-login.html">Login</a>
                                    <a class="btn btn-outline-primary d-block scroll-link"
                                        href="#production-template">Live Preview</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </section>
            <section class="production pb-10 pb-md-14" id="production-template">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="1000">
                            <div class="d-sm-flex align-items-center text-center gap-2 justify-content-center mb-7">
                                <ul
                                    class="list-unstyled d-flex align-items-center justify-content-center justify-content-sm-start mb-2 mb-sm-0">
                                    <li class="">
                                        <a class="d-block" href="javascript:void(0)">
                                            <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}"
                                                alt=""
                                                class="img-fluid border border-2 rounded-circle border-white"
                                                width="32" height="32">
                                        </a>
                                    </li>
                                    <li class="ms-n2">
                                        <a class="d-block" href="javascript:void(0)">
                                            <img src="{{ asset('admin-assets/images/profile/user-2.jpg') }}"
                                                alt=""
                                                class="img-fluid border border-2 rounded-circle border-white"
                                                width="32" height="32">
                                        </a>
                                    </li>
                                    <li class="ms-n2">
                                        <a class="d-block" href="javascript:void(0)">
                                            <img src="{{ asset('admin-assets/images/profile/user-2.jpg') }}"
                                                alt=""
                                                class="img-fluid border border-2 rounded-circle border-white"
                                                width="32" height="32">
                                        </a>
                                    </li>
                                </ul>
                                <p class="mb-0 fw-semibold fs-4 text-dark">
                                    <span>52,589+</span> developers &amp; agencies using our templates
                                </p>
                            </div>
                            <h2 class="text-center mb-0 fs-9 fw-bolder">Production Ready &amp; Developer Friendly
                                Bootstrap Admin
                                Template</h2>
                        </div>
                    </div>
                    <div class="domo-contect position-relative">
                        <div class="demos-view mt-11 pt-lg-8">
                            <div class="row justify-content-center">
                                <div class="col-sm-6 col-lg-4 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="{{ asset('admin-assets/images/demos/demo-main.jpg') }}"
                                            alt="" class="img-fluid">
                                        <a target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/index.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Main</h6>
                                </div>
                                <div class="col-sm-6 col-lg-4 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="{{ asset('admin-assets/images/demos/demo-main.jpg') }}"
                                            alt="" class="img-fluid">
                                        <a target="_blank"
                                            href="{{ asset('admin-assets/package/html/dark/index.html') }}"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Dark</h6>
                                </div>
                                <div class="col-sm-6 col-lg-4 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="{{ asset('admin-assets/images/demos/demo-main.jpg') }}"
                                            alt="" class="img-fluid">
                                        <a target="_blank"
                                            href="{{ asset('admin-assets/package/html/horizontal/index.html') }}"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Horizontal</h6>
                                </div>
                                <div class="col-sm-6 col-lg-4 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="{{ asset('admin-assets/images/demos/demo-main.jpg') }}"
                                            alt="" class="img-fluid">
                                        <a target="_blank"
                                            href="{{ asset('admin-assets/package/html/minisidebar/index.html') }}"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Minisidebar</h6>
                                </div>
                                <div class="col-sm-6 col-lg-4 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="{{ asset('admin-assets/images/demos/demo-main.jpg') }}"
                                            alt="" class="img-fluid">
                                        <a target="_blank"
                                            href="{{ asset('admin-assets/package/html/rtl/index.html') }}"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">RTL</h6>
                                </div>
                            </div>
                        </div>
                        <div class="demos-view mt-4">
                            <div
                                class="badge text-bg-primary text-center mb-8 fs-4 py-6 px-4 d-table mx-auto rounded-pill">
                                Apps</div>
                            <div class="row justify-content-center">
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="{{ asset('admin-assets/images/demos/demo-main.jpg') }}"
                                            alt="" class="img-fluid">
                                        <a target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-calendar.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Calendar</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="{{ asset('admin-assets/images/demos/demo-main.jpg') }}"
                                            alt="" class="img-fluid">
                                        <a target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-chat.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Chat</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="{{ asset('admin-assets/images/demos/demo-main.jpg') }}"
                                            alt="" class="img-fluid">
                                        <a target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-email.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Email</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="{{ asset('admin-assets/images/demos/demo-main.jpg') }}"
                                            alt="" class="img-fluid">
                                        <a target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-contact2.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Contact</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="{{ asset('admin-assets/images/demos/demo-main.jpg') }}"
                                            alt="" class="img-fluid">
                                        <a target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-invoice.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Invoice</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="{{ asset('admin-assets/images/demos/demo-main.jpg') }}"
                                            alt="" class="img-fluid">
                                        <a target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-contact.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Contact List</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="{{ asset('admin-assets/images/demos/demo-main.jpg') }}"
                                            alt="" class="img-fluid">
                                        <a target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/page-user-profile.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">User Profile</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="{{ asset('admin-assets/images/demos/demo-main.jpg') }}"
                                            alt="" class="img-fluid">
                                        <a target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/blog-posts.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Blog</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="{{ asset('admin-assets/images/demos/demo-main.jpg') }}"
                                            alt="" class="img-fluid">
                                        <a target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/blog-detail.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Blog Detail</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="{{ asset('admin-assets/images/demos/demo-main.jpg') }}"
                                            alt="" class="img-fluid">
                                        <a target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/eco-shop.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">eCommerce Shop</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="admin-assets/images/apps/app-ecommerce-detail.jpg" alt=""
                                            class="img-fluid">
                                        <a target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/eco-shop-detail.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">eCommerce Detail</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="admin-assets/images/apps/app-ecommerce-list.jpg" alt=""
                                            class="img-fluid">
                                        <a target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/eco-product-list.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">eCommerce List</h6>
                                </div>
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
                            <h2 class="fs-9 text-center mb-4 mb-lg-5 fw-bolder aos-init aos-animate"
                                data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">Don’t just take our
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
                                                            <img src="admin-assets/images/profile/user-1.jpg"
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
                            <div class="owl-nav disabled"><button type="button" role="presentation"
                                    class="owl-prev"><span aria-label="Previous">‹</span></button><button
                                    type="button" role="presentation" class="owl-next"><span
                                        aria-label="Next">›</span></button></div>
                            <div class="owl-dots"><button role="button"
                                    class="owl-dot"><span></span></button><button role="button"
                                    class="owl-dot"><span></span></button><button role="button"
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
                        <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="800" data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-wand text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">6 Theme Colors</h5>
                                <p class="mb-0 text-dark">We have included 6 pre-defined Theme Colors with Elegant
                                    Admin.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="800" data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-layout-sidebar text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Dark &amp; Light Sidebar</h5>
                                <p class="mb-0 text-dark">Included Dark and Light Sidebar for getting desire look and
                                    feel.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="800" data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-archive text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">600+ Page Templates</h5>
                                <p class="mb-0 text-dark">Yes, we have 5 demos &amp; 131+ Pages per demo to make it
                                    easier.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="800" data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-adjustments text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">150+ UI Components</h5>
                                <p class="mb-0 text-dark">Almost 150+ UI Components being given with Modernize Admin
                                    Pack.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="1000" data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-tag text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Bootstrap 5x</h5>
                                <p class="mb-0 text-dark">Its been made with Bootstrap 5 and full responsive layout.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="1000" data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-diamond text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">200+ Font Icons</h5>
                                <p class="mb-0 text-dark">Lots of Icon Fonts are included here in the package of
                                    Elegant Admin.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="1000" data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-device-desktop text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Fully Responsive</h5>
                                <p class="mb-0 text-dark">All the layout of Modernize Admin is Fully Responsive and
                                    widely tested.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="1000" data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-database text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">SassBase CSS</h5>
                                <p class="mb-0 text-dark">Our Css is written Sass Base to make your life easier.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="1200" data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-arrows-shuffle text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Easy to Customize</h5>
                                <p class="mb-0 text-dark">Customization will be easy as we understand your pain.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="1200" data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-chart-pie text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Lots of Chart Options</h5>
                                <p class="mb-0 text-dark">You name it and we have it, Yes lots of variations for
                                    Charts.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="1200" data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-layers-intersect text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Lots of Table Examples</h5>
                                <p class="mb-0 text-dark">Data Tables are initial requirement and we added them.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="1200" data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-refresh text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Regular Updates</h5>
                                <p class="mb-0 text-dark">We are constantly updating our pack with new features.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="1400" data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-book text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Detailed Documentation</h5>
                                <p class="mb-0 text-dark">We have made detailed documentation, so it will easy to use.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="1400" data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-calendar text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Calendar Design</h5>
                                <p class="mb-0 text-dark">Calendar is available with our package &amp; in nice design.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="1400" data-aos-duration="1000">
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
                            <div class="card c2a-box aos-init aos-animate" data-aos="fade-up"
                                data-aos-delay="1600" data-aos-duration="1000">
                                <div class="card-body text-center p-4 pt-8">
                                    <h3 class="fs-7 fw-semibold pt-6">Havent found an answer to your question?</h3>
                                    <p class="mb-8 pb-2 text-dark">Connect with us either on discord or email us</p>
                                    <div class="d-sm-flex align-items-center justify-content-center gap-3 mb-4">
                                        <a href="https://discord.com/invite/eMzE8F6Wqs" target="_blank"
                                            class="btn btn-primary d-block mb-3 mb-sm-0 btn-hover-shadow"
                                            type="button">Ask on Discord</a>
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
            <section class="bg-success pt-5 pt-xl-9 pb-8">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-7 col-xl-5 pt-lg-5 mb-5 mb-lg-0">
                            <h2 class="fs-12 text-white text-center text-lg-start fw-bolder mb-8">Build your app with
                                our highly
                                customizable Bootstrap based Dashboard</h2>
                            <div
                                class="d-sm-flex align-items-center justify-content-center justify-content-lg-start gap-3">
                                <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/authentication-login.html"
                                    class="btn bg-white text-primary fw-semibold d-block mb-3 mb-sm-0 btn-hover-shadow">Login</a>
                                <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/authentication-register.html"
                                    class="btn border-white text-white fw-semibold btn-hover-white d-block">Register</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-5">
                            <div class="text-center text-lg-end">
                                <img src="{{ asset('admin-assets/images/backgrounds/business-woman-checking-her-mail.png') }}"
                                    alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <footer class="footer-part pt-8 pb-5" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="text-center">
                            <a href="index-new.html">
                                <img src="{{ asset('admin-assets/images/logos/favicon.ico') }}" alt=""
                                    class="img-fluid pb-3">
                            </a>
                            <p class="mb-0 text-dark">All rights reserved by Modernize. Designed &amp; Developed by <a
                                    class="text-dark text-hover-primary border-bottom border-primary"
                                    href="https://adminmart.com/">AdminMart.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('admin-assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/custom.js') }}"></script>
    <script>
        // change URL Js
        $(function() {
            let currentURL =
                window.location != window.parent.location ?
                document.referrer :
                document.location.href;
            if (currentURL == "https://themeforest.net/") {
                $("a.download-link").attr(
                    "href",
                    "#"
                );
            } else {
                $("a.download-link").attr(
                    "href",
                    "https://adminmart.com/product/modernize-react-mui-dashboard-template/"
                );
            }
        });
    </script>


</body>
