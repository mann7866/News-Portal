@extends('layouts.super-admin.app')
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Table-Admin</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Table-Admin
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
    <div class="row">

        <div class="col-lg-14 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-7">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Akun Admin</h5>
                        </div>

                        <div class="col-md-6 col-xl-5 d-flex gap-3 justify-content-end">
                            <form class="position-relative">
                                <input type="text" class="form-control product-search ps-5" id="input-search"
                                    placeholder="Cari Akun..." />
                                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                            </form>
                            <button class="btn btn-primary">Add Akun</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle text-nowrap mb-0">
                            <thead>
                                <tr class="text-muted fw-semibold">
                                    <th scope="col" class="ps-0">Nama</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Opsi</th>
                                </tr>
                            </thead>
                            <tbody class="border-top">
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img src="{{ asset('admin-assets/images/profile/user-4.jpg') }}"
                                                    class="rounded-circle" width="40" height="40" alt="" />
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Yuvraj Sheth</h6>
                                                <p class="fs-2 mb-0 text-muted">Osis</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span
                                            class="badge fw-semibold py-1 w-85 bg-light-success text-success">Online</span>
                                    </td>

                                    <td>
                                        <p class="fs-3 text-dark mb-0">
                                            <button class="btn btn-danger btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                                </svg>
                                            </button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-0 ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img src="{{ asset('admin-assets/images/profile/user-5.jpg') }}"
                                                    class="rounded-circle" width="40" height="40" alt="" />
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Micheal Doe</h6>
                                                <p class="fs-2 mb-0 text-muted">Dewan ambalan</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border-0">
                                        <span class="badge fw-semibold py-1 w-85 bg-light-danger text-danger">Offline</span>
                                    </td>
                                    <td class="border-0">
                                        <p class="fs-3 text-dark mb-0">
                                            <button class="btn btn-danger btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                                </svg>
                                            </button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-0 ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img src="{{ asset('admin-assets/images/profile/user-5.jpg') }}"
                                                    class="rounded-circle" width="40" height="40" alt="" />
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">{{ Auth::user()->name }}</h6>
                                                <p class="fs-2 mb-0 text-muted">{{ Auth::user()->email }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border-0">
                                        <span class="badge fw-semibold py-1 w-85 bg-light-success text-success">Online</span>
                                    </td>
                                    <td class="border-0">
                                        <p class="fs-3 text-dark mb-0">
                                            <button class="btn btn-danger btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                                </svg>
                                            </button>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
