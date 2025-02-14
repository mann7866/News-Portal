@extends('layouts.super-admin.app')
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Table-Pekerjaan</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Table-Pekerjaan
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
                            <h5 class="card-title fw-semibold">Pekerjaan</h5>
                        </div>

                        <div class="col-md-6 col-xl-5 d-flex gap-3 justify-content-end">
                            <form class="position-relative">
                                <input type="text" class="form-control product-search ps-5" id="input-search"
                                    placeholder="Cari Kategori..." />
                                <i
                                    class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                            </form>
                            <button type="button" class="btn mb-1 btn-lg px-4 fs-4 font-medium btn-primary"
                                data-bs-toggle="modal" data-bs-target="#create-modal">
                                <i class="ti ti-plus"></i>Add Jobs
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle text-nowrap mb-0">
                            <thead>
                                <tr class="text-muted fw-semibold">
                                    <th scope="col">No</th>
                                    <th scope="col" class="ps-0">Pekerjaan</th>
                                    <th scope="col" class="ps-0">Kategori</th>
                                    <th scope="col" class="text-center">Opsi</th>
                                </tr>
                            </thead>
                            @php
                                $counter = 1;
                            @endphp

                            @forelse ($employeeJobs as $employeeJob)
                                <tbody class="border-top">
                                    <tr>
                                        <td class="text-center">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <h6 class="fw-semibold mb-1">{{ $counter++ }}.</h6>
                                            </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">{{ $employeeJob->jobs }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <h6 class="fw-semibold mb-1">{{ $employeeJob->employmentStatus }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#edit-modal-{{ $employeeJob->id }}">
                                                Edit
                                            </button>
                                            <button class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#delete-{{ $employeeJob->id }}">
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                @include('pages.super-admin.employee-job.partials.edit-modal')
                                @include('pages.super-admin.employee-job.partials.delete-modal')
                            @empty
                            <tr>
                                <td colspan="4" class="text-center">
                                    <img src="{{ asset('no-data.png') }}" alt="No Data" class="img-fluid"
                                        style="width: clamp(150px, 50vw, 300px);">
                                    <p class="mt-3">Tidak ada data tersedia</p>
                                </td>
                            </tr>
                            @endforelse

                        </table>
                    </div>
                    @include('pages.super-admin.employee-job.partials.create-modal')
                </div>
            </div>
        </div>
    </div>
@endsection
