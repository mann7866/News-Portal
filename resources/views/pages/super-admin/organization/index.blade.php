@extends('layouts.super-admin.app')

@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Table-Organisasi</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted" href="index-2.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Table Organisasi
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
                            <h5 class="card-title fw-semibold">Organisasi</h5>
                        </div>
                        <div class="col-md-6 col-xl-5 d-flex gap-3 justify-content-end">
                            <form class="position-relative">
                                <input type="text" class="form-control product-search ps-5" id="input-search"
                                    placeholder="Cari Kategori..." />

                            </form>
                            <a href="{{ route('organization.create') }}"
                                class="btn mb-1 btn-lg px-4 fs-4 font-medium btn-primary">
                                Tambah
                            </a>
                        </div>
                    </div>
                </div>

                <div class="section-body">
                    <div class="row">
                        @forelse ($organizations as $organization)
                            <div class="col-md-6 col-lg-4">
                                <div class="card rounded-2 overflow-hidden">
                                    <div class="position-relative">
                                        <a href="">
                                            @if ($organization->image && file_exists(storage_path('app/public/' . $organization->image)))
                                                <img src="{{ asset('storage/' . $organization->image) }}"
                                                    class="card-img-top rounded-0 custom-style"
                                                    alt="{{ $organization->name }}">
                                            @else
                                                <img src="{{ asset('default-image.png') }}"
                                                    class="card-img-top rounded-0 custom-style" alt="Default Image">
                                            @endif
                                        </a>
                                        <!-- Dropdown for Edit and Delete buttons -->
                                        <div class="dropdown position-absolute top-0 end-0 me-3" style="margin-top: 5px;">
                                            <a style="margin-top: 10px" type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i style="font-size: 25px;" class="ti ti-dots-vertical text-black"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body p-4">
                                        <span
                                            class="d-block mt-2 text-dark fs-4 fw-semibold">{{ $organization->name }}</span>
                                        <p class="d-block my-4 fs-4 text-dark">
                                            {{ Str::limit(strip_tags($organization->description), 50) }}
                                        </p>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#edit-modal-{{ $organization->id }}">
                                                Edit
                                            </button>

                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#delete-{{ $organization->id }}">
                                                Hapus
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Include delete modal for each organization -->
                            @include('pages.super-admin.organization.partials.edit-modal')
                            @include('pages.super-admin.organization.partials.delete-modal')
                        @empty
                            <div class="col-12 text-center">
                                <img src="{{ asset('no-data.png') }}" alt="No Data" class="img-fluid"
                                    style="width: clamp(150px, 50vw, 300px);">
                                <p class="mt-3">Tidak ada data tersedia</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- Include modal for creating new organization -->
                @include('pages.super-admin.organization.partials.create-modal')
            @endsection
