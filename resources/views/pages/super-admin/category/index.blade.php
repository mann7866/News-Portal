@extends('layouts.super-admin.app')

@section('content')
    <div class="card px-3 pb-4 mb-1 pt-1 rounded-sm">
        <div class="row g-2 mt-3">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="row g-2">
                    <h3 class="mx-1">Halaman Kategori</h3>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="d-flex flex-column flex-lg-row justify-content-end gap-2">
                    <div class="search-box col-lg-5 col-12">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" value="{{ request('search') }}"
                                    id="searchMemberList" placeholder="Cari Proyek">
                                <div class="input-group-append">
                                    <button type="submit" class="input-group-text rounded-end border border-1"><i
                                            class="ri-search-line"></i></button>
                                </div>
                                <button type="submit" class="btn btn-primary d-lg-none mt-2 w-100">Cari</button>
                            </div>
                    </div>
                    </form>
                    <div class="form-check form-switch gap-3 col-lg-3 col-12 d-flex justify-content-between align-items-center mt-2 mt-lg-0"
                        style="width: auto;">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-modal">
                            Tambah Kategori
                        </button>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="card">
        <div class="card-body border-top">
            <div class="table-responsive table-card p-3">
                <div class="tab-pane fade show active">
                    <table class="table align-middle shadow-sm mb-0 ">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Name</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}.</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit-modal-{{ $category->id }}">
                                                <i class="ti ti-pencil" style="font-size: 1.5em;"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-{{ $category->id }}">
                                                <i class="ti ti-trash" style="font-size: 1.5em;"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @include('pages.super-admin.category.partials.edit-modal')
                            @empty
                            <tr>
                                <td colspan="3" class="text-center">
                                    <img src="{{ asset('no-data.png') }}" alt="No Data" class="img-fluid" style="width: clamp(150px, 50vw, 300px);">
                                    <p class="mt-3">Tidak ada data tersedia</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('pages.super-admin.category.partials.create-modal')
@endsection
