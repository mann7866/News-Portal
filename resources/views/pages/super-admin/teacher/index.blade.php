@extends('layouts.super-admin.app')
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Table-Profile Guru</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Table-Profile Guru
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('admin-assets/images/breadcrumb/ChatBc.png') }}" alt=""
                            class="img-fluid mb-n4" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-body">
        <div class="row">
            <div class="col-md-4 col-xl-3">
                <form class="position-relative">
                    <input type="text" class="form-control product-search ps-5" id="input-search"
                        placeholder="Cari Guru..." />
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                </form>
            </div>
            <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                <a href="javascript:void(0)" id="btn-add-contact" class="btn btn-info d-flex align-items-center">
                    <i class="ti ti-news text-white me-1 fs-5"></i> Add Guru
                </a>
            </div>
        </div>
    </div>
    <div class="card">

        <div class="row">


            {{--  data 1  --}}
            <div class="col-md-6 col-lg-4">
                <div class="w-100">
                    <div class="chat-container h-100 w-100">
                        <div class="chat-box-inner-part h-100">
                            <div class="chatting-box app-email-chatting-box">
                                <div
                                    class="p-9 py-3 border-bottom chat-meta-user d-flex align-items-center justify-content-between">
                                    <h5 class="text-dark mb-0 fw-semibold">Profile Dr. Bonnie Barstow </h5>
                                    <ul class="list-unstyled mb-0 d-flex align-items-center">
                                        <li class="d-lg-none d-block">
                                            <a class="text-dark back-btn px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                                                href="javascript:void(0)">
                                                <i class="ti ti-arrow-left"></i>
                                            </a>
                                        </li>
                                        <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Edit">
                                            <a class="d-block text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                                                href="javascript:void(0)">
                                                <i class="ti ti-pencil"></i>
                                            </a>
                                        </li>
                                        <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Delete">
                                            <a class="text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                                                href="javascript:void(0)">
                                                <i class="ti ti-trash"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="position-relative overflow-hidden">
                                    <div class="position-relative">
                                        <div class="chat-box p-9" style="height: calc(100vh - 428px)" data-simplebar>
                                            <div class="chat-list chat active-chat" data-user-id="1">
                                                <div
                                                    class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <img src="{{ asset('admin-assets/images/profile/user-4.jpg') }}"
                                                            alt="user4" width="72" height="72"
                                                            class="rounded-circle" />
                                                        <div>
                                                            <h6 class="fw-semibold fs-4 mb-0">Dr. Bonnie Barstow </h6>
                                                            <p class="mb-0">Sales Manager</p>
                                                            <p class="mb-0">Digital Arc Pvt. Ltd.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 mb-7">
                                                        <p class="mb-1 fs-2">Nomor Telpon</p>
                                                        <h6 class="fw-semibold mb-0">+6281235117136</h6>
                                                    </div>
                                                    <div class="col-8 mb-7">
                                                        <p class="mb-1 fs-2">Alamat Email</p>
                                                        <h6 class="fw-semibold mb-0">alexandra@modernize.com</h6>
                                                    </div>
                                                    <div class="col-12 mb-9">
                                                        <p class="mb-1 fs-2">Alamat</p>
                                                        <h6 class="fw-semibold mb-0">Awu-Awu Kampung Baru, kec.Sempu</h6>
                                                    </div>
                                                    <div class="col-4 mb-7">
                                                        <p class="mb-1 fs-2">City</p>
                                                        <h6 class="fw-semibold mb-0">New York</h6>
                                                    </div>
                                                    <div class="col-8 mb-7">
                                                        <p class="mb-1 fs-2">Country</p>
                                                        <h6 class="fw-semibold mb-0">United Stats</h6>
                                                    </div>
                                                </div>
                                                <div class="border-bottom pb-7 mb-4">
                                                    <p class="mb-2 fs-2">Catatan:</p>
                                                    <p class="mb-3 text-dark">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                                        bibendum
                                                        hendrerit lobortis. Nullam ut lacus eros. Sed at luctus urna, eu
                                                        fermentum
                                                        diam.
                                                        In et tristique mauris.
                                                    </p>
                                                    <p class="mb-0 text-dark">Ut id ornare metus, sed auctor enim.
                                                        Pellentesque
                                                        nisi
                                                        magna, laoreet a augue eget, tempor volutpat diam.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--  data 2  --}}
            <div class="col-md-6 col-lg-4">
                <div class="w-100">
                    <div class="chat-container h-100 w-100">
                        <div class="chat-box-inner-part h-100">
                            <div class="chatting-box app-email-chatting-box">
                                <div
                                    class="p-9 py-3 border-bottom chat-meta-user d-flex align-items-center justify-content-between">
                                    <h5 class="text-dark mb-0 fw-semibold">Informasi Guru</h5>
                                    <ul class="list-unstyled mb-0 d-flex align-items-center">
                                        <li class="d-lg-none d-block">
                                            <a class="text-dark back-btn px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                                                href="javascript:void(0)">
                                                <i class="ti ti-arrow-left"></i>
                                            </a>
                                        </li>
                                        <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Edit">
                                            <a class="d-block text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                                                href="javascript:void(0)">
                                                <i class="ti ti-pencil"></i>
                                            </a>
                                        </li>
                                        <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Delete">
                                            <a class="text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                                                href="javascript:void(0)">
                                                <i class="ti ti-trash"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="position-relative overflow-hidden">
                                    <div class="position-relative">
                                        <div class="chat-box p-9" style="height: calc(100vh - 428px)" data-simplebar>
                                            <div class="chat-list chat active-chat" data-user-id="1">
                                                <div
                                                    class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <img src="{{ asset('admin-assets/images/profile/user-4.jpg') }}"
                                                            alt="user4" width="72" height="72"
                                                            class="rounded-circle" />
                                                        <div>
                                                            <h6 class="fw-semibold fs-4 mb-0">Dr. Bonnie Barstow </h6>
                                                            <p class="mb-0">Sales Manager</p>
                                                            <p class="mb-0">Digital Arc Pvt. Ltd.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 mb-7">
                                                        <p class="mb-1 fs-2">Nomor Telpon</p>
                                                        <h6 class="fw-semibold mb-0">+6281235117136</h6>
                                                    </div>
                                                    <div class="col-8 mb-7">
                                                        <p class="mb-1 fs-2">Alamat Email</p>
                                                        <h6 class="fw-semibold mb-0">alexandra@modernize.com</h6>
                                                    </div>
                                                    <div class="col-12 mb-9">
                                                        <p class="mb-1 fs-2">Alamat</p>
                                                        <h6 class="fw-semibold mb-0">Awu-Awu Kampung Baru, kec.Sempu</h6>
                                                    </div>
                                                    <div class="col-4 mb-7">
                                                        <p class="mb-1 fs-2">City</p>
                                                        <h6 class="fw-semibold mb-0">New York</h6>
                                                    </div>
                                                    <div class="col-8 mb-7">
                                                        <p class="mb-1 fs-2">Country</p>
                                                        <h6 class="fw-semibold mb-0">United Stats</h6>
                                                    </div>
                                                </div>
                                                <div class="border-bottom pb-7 mb-4">
                                                    <p class="mb-2 fs-2">Catatan:</p>
                                                    <p class="mb-3 text-dark">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                                        bibendum
                                                        hendrerit lobortis. Nullam ut lacus eros. Sed at luctus urna, eu
                                                        fermentum
                                                        diam.
                                                        In et tristique mauris.
                                                    </p>
                                                    <p class="mb-0 text-dark">Ut id ornare metus, sed auctor enim.
                                                        Pellentesque
                                                        nisi
                                                        magna, laoreet a augue eget, tempor volutpat diam.</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--  data 3  --}}
            <div class="col-md-6 col-lg-4">
                <div class="w-100">
                    <div class="chat-container h-100 w-100">
                        <div class="chat-box-inner-part h-100">
                            <div class="chatting-box app-email-chatting-box">
                                <div
                                    class="p-9 py-3 border-bottom chat-meta-user d-flex align-items-center justify-content-between">
                                    <h5 class="text-dark mb-0 fw-semibold">Informasi Guru</h5>
                                    <ul class="list-unstyled mb-0 d-flex align-items-center">
                                        <li class="d-lg-none d-block">
                                            <a class="text-dark back-btn px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                                                href="javascript:void(0)">
                                                <i class="ti ti-arrow-left"></i>
                                            </a>
                                        </li>
                                        <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Edit">
                                            <a class="d-block text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                                                href="javascript:void(0)">
                                                <i class="ti ti-pencil"></i>
                                            </a>
                                        </li>
                                        <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Delete">
                                            <a class="text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                                                href="javascript:void(0)">
                                                <i class="ti ti-trash"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="position-relative overflow-hidden">
                                    <div class="position-relative">
                                        <div class="chat-box p-9" style="height: calc(100vh - 428px)" data-simplebar>
                                            <div class="chat-list chat active-chat" data-user-id="1">
                                                <div
                                                    class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <img src="{{ asset('admin-assets/images/profile/user-4.jpg') }}"
                                                            alt="user4" width="72" height="72"
                                                            class="rounded-circle" />
                                                        <div>
                                                            <h6 class="fw-semibold fs-4 mb-0">Dr. Bonnie Barstow </h6>
                                                            <p class="mb-0">Sales Manager</p>
                                                            <p class="mb-0">Digital Arc Pvt. Ltd.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 mb-7">
                                                        <p class="mb-1 fs-2">Nomor Telpon</p>
                                                        <h6 class="fw-semibold mb-0">+6281235117136</h6>
                                                    </div>
                                                    <div class="col-8 mb-7">
                                                        <p class="mb-1 fs-2">Alamat Email</p>
                                                        <h6 class="fw-semibold mb-0">alexandra@modernize.com</h6>
                                                    </div>
                                                    <div class="col-12 mb-9">
                                                        <p class="mb-1 fs-2">Alamat</p>
                                                        <h6 class="fw-semibold mb-0">Awu-Awu Kampung Baru, kec.Sempu</h6>
                                                    </div>
                                                    <div class="col-4 mb-7">
                                                        <p class="mb-1 fs-2">City</p>
                                                        <h6 class="fw-semibold mb-0">New York</h6>
                                                    </div>
                                                    <div class="col-8 mb-7">
                                                        <p class="mb-1 fs-2">Country</p>
                                                        <h6 class="fw-semibold mb-0">United Stats</h6>
                                                    </div>
                                                </div>
                                                <div class="border-bottom pb-7 mb-4">
                                                    <p class="mb-2 fs-2">Catatan:</p>
                                                    <p class="mb-3 text-dark">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                                        bibendum
                                                        hendrerit lobortis. Nullam ut lacus eros. Sed at luctus urna, eu
                                                        fermentum
                                                        diam.
                                                        In et tristique mauris.
                                                    </p>
                                                    <p class="mb-0 text-dark">Ut id ornare metus, sed auctor enim.
                                                        Pellentesque
                                                        nisi
                                                        magna, laoreet a augue eget, tempor volutpat diam.</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--  data 4  --}}
            <div class="col-md-6 col-lg-4">
                <div class="w-100">
                    <div class="chat-container h-100 w-100">
                        <div class="chat-box-inner-part h-100">
                            <div class="chatting-box app-email-chatting-box">
                                <div
                                    class="p-9 py-3 border-bottom chat-meta-user d-flex align-items-center justify-content-between">
                                    <h5 class="text-dark mb-0 fw-semibold">Informasi Guru</h5>
                                    <ul class="list-unstyled mb-0 d-flex align-items-center">
                                        <li class="d-lg-none d-block">
                                            <a class="text-dark back-btn px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                                                href="javascript:void(0)">
                                                <i class="ti ti-arrow-left"></i>
                                            </a>
                                        </li>
                                        <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Edit">
                                            <a class="d-block text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                                                href="javascript:void(0)">
                                                <i class="ti ti-pencil"></i>
                                            </a>
                                        </li>
                                        <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Delete">
                                            <a class="text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                                                href="javascript:void(0)">
                                                <i class="ti ti-trash"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="position-relative overflow-hidden">
                                    <div class="position-relative">
                                        <div class="chat-box p-9" style="height: calc(100vh - 428px)" data-simplebar>
                                            <div class="chat-list chat active-chat" data-user-id="1">
                                                <div
                                                    class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <img src="{{ asset('admin-assets/images/profile/user-4.jpg') }}"
                                                            alt="user4" width="72" height="72"
                                                            class="rounded-circle" />
                                                        <div>
                                                            <h6 class="fw-semibold fs-4 mb-0">Dr. Bonnie Barstow </h6>
                                                            <p class="mb-0">Sales Manager</p>
                                                            <p class="mb-0">Digital Arc Pvt. Ltd.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 mb-7">
                                                        <p class="mb-1 fs-2">Nomor Telpon</p>
                                                        <h6 class="fw-semibold mb-0">+6281235117136</h6>
                                                    </div>
                                                    <div class="col-8 mb-7">
                                                        <p class="mb-1 fs-2">Alamat Email</p>
                                                        <h6 class="fw-semibold mb-0">alexandra@modernize.com</h6>
                                                    </div>
                                                    <div class="col-12 mb-9">
                                                        <p class="mb-1 fs-2">Alamat</p>
                                                        <h6 class="fw-semibold mb-0">Awu-Awu Kampung Baru, kec.Sempu</h6>
                                                    </div>
                                                    <div class="col-4 mb-7">
                                                        <p class="mb-1 fs-2">City</p>
                                                        <h6 class="fw-semibold mb-0">New York</h6>
                                                    </div>
                                                    <div class="col-8 mb-7">
                                                        <p class="mb-1 fs-2">Country</p>
                                                        <h6 class="fw-semibold mb-0">United Stats</h6>
                                                    </div>
                                                </div>
                                                <div class="border-bottom pb-7 mb-4">
                                                    <p class="mb-2 fs-2">Catatan:</p>
                                                    <p class="mb-3 text-dark">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                                        bibendum
                                                        hendrerit lobortis. Nullam ut lacus eros. Sed at luctus urna, eu
                                                        fermentum
                                                        diam.
                                                        In et tristique mauris.
                                                    </p>
                                                    <p class="mb-0 text-dark">Ut id ornare metus, sed auctor enim.
                                                        Pellentesque
                                                        nisi
                                                        magna, laoreet a augue eget, tempor volutpat diam.</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modal')
    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="delete">Information!!!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div style="margin-left: 100px" class="modal-body">
                    Apakah Anda Yakin Ingin Menghapus?
                </div>
                <div class="modal-footer">
                    <a href="{{ '/category' }}">
                        <button type="button" style="margin-right: 170px" class="btn btn-danger">Ya! Tetap Hapus!</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
