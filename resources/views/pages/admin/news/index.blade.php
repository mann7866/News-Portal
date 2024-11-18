@extends('layouts.admin.app')
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Halaman-Pengajuan</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted" href="index-2.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Halaman-Pengajuan
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3 text-center mb-n5">
                    <img src="{{ asset('admin-assets/images/breadcrumb/ChatBc.png') }}" alt=""
                        class="img-fluid mb-n4" />
                </div>
            </div>
        </div>
    </div>

    <div class="card card-body">
        <div class="row">
            <div class="col-md-4 col-xl-3">
                <form class="position-relative">
                    <input type="text" class="form-control product-search ps-5" id="input-search"
                        placeholder="Cari Pengajuan..." />
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                </form>
            </div>
            <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#pending" role="tab" aria-selected="true">
                            <span>Ajuan</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#accepted" role="tab" aria-selected="false"
                            tabindex="-1">
                            <span>Terima</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#rejected" role="tab" aria-selected="false"
                            tabindex="-1">
                            <span>Tolak</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="tab-content mt-3">
        <div class="tab-pane active show" id="pending" role="tabpanel">
            <div class="row">
                {{-- Data 1 --}}
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}"
                                    class="rounded-pill img-fluid" width="50">
                                <div class="ms-3">
                                    <h4 class="card-title">Andrew Grant</h4>
                                    <p class="card-subtitle mb-0">Yesterday at 5:06 PM</p>
                                </div>
                                <div class="ms-auto">
                                    <div class="dropdown">
                                        <a href="#" class="link" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="ti ti-menu-2 fs-6 text-dark"></i>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <li><a class="dropdown-item" href="#">Terima</a></li>
                                            <li><a class="dropdown-item" href="#">Tolak</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ asset('admin-assets/images/big/img5.jpg') }}" class="img-fluid rounded-1 mt-4">
                            <div class="mt-4">
                                <p class="fs-4">
                                    Your beauty is one of the things I like about you.😍 🥰
                                    <a href="#">#beauty</a> <a href="#">#goa🏄🏽‍♀️</a> <a
                                        href="#">#india</a>
                                    <a href="#">#happylife</a>
                                </p>
                            </div>
                            <!-- Status Section -->
                            <div class="mt-3">
                                <span class="badge bg-light-warning text-warning rounded-pill">
                                    in the process
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="tab-pane" id="accepted" role="tabpanel">
            <div class="row">
                {{-- Data 1 --}}
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}"
                                    class="rounded-pill img-fluid" width="50">
                                <div class="ms-3">
                                    <h4 class="card-title">Andrew Grant</h4>
                                    <p class="card-subtitle mb-0">Yesterday at 5:06 PM</p>
                                </div>

                            </div>
                            <img src="{{ asset('admin-assets/images/big/img5.jpg') }}" class="img-fluid rounded-1 mt-4">
                            <div class="mt-4">
                                <p class="fs-4">
                                    Your beauty is one of the things I like about you.😍 🥰
                                    <a href="#">#beauty</a> <a href="#">#goa🏄🏽‍♀️</a> <a
                                        href="#">#india</a>
                                    <a href="#">#happylife</a>
                                </p>
                            </div>
                            <!-- Status Section -->
                            <div class="mt-3">
                                <span class="badge bg-light-success text-success rounded-pill">Accept</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Data 2 --}}
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}"
                                    class="rounded-pill img-fluid" width="50">
                                <div class="ms-3">
                                    <h4 class="card-title">Andrew Grant</h4>
                                    <p class="card-subtitle mb-0">Yesterday at 5:06 PM</p>
                                </div>

                            </div>
                            <img src="{{ asset('admin-assets/images/big/img5.jpg') }}" class="img-fluid rounded-1 mt-4">
                            <div class="mt-4">
                                <p class="fs-4">
                                    Your beauty is one of the things I like about you.😍 🥰
                                    <a href="#">#beauty</a> <a href="#">#goa🏄🏽‍♀️</a> <a
                                        href="#">#india</a>
                                    <a href="#">#happylife</a>
                                </p>
                            </div>
                            <!-- Status Section -->
                            <div class="mt-3">
                                <span class="badge bg-light-success text-success rounded-pill">Accept</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Data 3 --}}
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}"
                                    class="rounded-pill img-fluid" width="50">
                                <div class="ms-3">
                                    <h4 class="card-title">Andrew Grant</h4>
                                    <p class="card-subtitle mb-0">Yesterday at 5:06 PM</p>
                                </div>

                            </div>
                            <img src="{{ asset('admin-assets/images/big/img5.jpg') }}" class="img-fluid rounded-1 mt-4">
                            <div class="mt-4">
                                <p class="fs-4">
                                    Your beauty is one of the things I like about you.😍 🥰
                                    <a href="#">#beauty</a> <a href="#">#goa🏄🏽‍♀️</a> <a
                                        href="#">#india</a>
                                    <a href="#">#happylife</a>
                                </p>
                            </div>
                            <!-- Status Section -->
                            <div class="mt-3">
                                <span class="badge bg-light-success text-success rounded-pill">Accept</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="tab-pane" id="rejected" role="tabpanel">
            <div class="row">
                {{-- Data 1 --}}
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}"
                                    class="rounded-pill img-fluid" width="50">
                                <div class="ms-3">
                                    <h4 class="card-title">Andrew Grant</h4>
                                    <p class="card-subtitle mb-0">Yesterday at 5:06 PM</p>
                                </div>

                            </div>
                            <img src="{{ asset('admin-assets/images/big/img5.jpg') }}" class="img-fluid rounded-1 mt-4">
                            <div class="mt-4">
                                <p class="fs-4">
                                    Your beauty is one of the things I like about you.😍 🥰
                                    <a href="#">#beauty</a> <a href="#">#goa🏄🏽‍♀️</a> <a
                                        href="#">#india</a>
                                    <a href="#">#happylife</a>
                                </p>
                            </div>
                            <!-- Status Section -->
                            <div class="mt-3">
                                <span class="badge bg-light-danger text-danger rounded-pill">reject</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Data 2 --}}
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}"
                                    class="rounded-pill img-fluid" width="50">
                                <div class="ms-3">
                                    <h4 class="card-title">Andrew Grant</h4>
                                    <p class="card-subtitle mb-0">Yesterday at 5:06 PM</p>
                                </div>

                            </div>
                            <img src="{{ asset('admin-assets/images/big/img5.jpg') }}" class="img-fluid rounded-1 mt-4">
                            <div class="mt-4">
                                <p class="fs-4">
                                    Your beauty is one of the things I like about you.😍 🥰
                                    <a href="#">#beauty</a> <a href="#">#goa🏄🏽‍♀️</a> <a
                                        href="#">#india</a>
                                    <a href="#">#happylife</a>
                                </p>
                            </div>
                            <!-- Status Section -->
                            <div class="mt-3">
                                <span class="badge bg-light-danger text-danger rounded-pill">reject</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
