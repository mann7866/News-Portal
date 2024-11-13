    @extends('layouts.super-admin.app')
    @section('content')
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Halaman Berita</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted " href="index-2.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Halaman Berita
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

        <div class="section-body">
            <div class="card px-3 pb-4 mb-4 pt-1 rounded-sm">
                <div class="row g-2 mt-3">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="row g-2">
                            <h3 class="mx-1">Berita</h3>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div class="d-flex flex-column flex-lg-row justify-content-end gap-2">
                            <div class="search-box col-lg-3 col-12">
                                <form action="">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" value=""
                                            placeholder="Cari Proyek">
                                        <div class="input-group-append">
                                            <button type="submit" class="input-group-text rounded-end border border-1"><i
                                                    class="ri-search-line"></i></button>
                                        </div>
                                        <button type="submit" class="btn btn-primary d-lg-none mt-2 w-100">Cari</button>
                                    </div>
                                </form>
                            </div>
                            <div class="search-box col-lg-3 col-12">
                                <div class="input-group">
                                    <input type="hidden" class="form-control flatpickr-input" name="date" value=""
                                        data-provider="flatpickr" placeholder="Pilih tanggal"><input
                                        class="form-control flatpickr-input form-control input" placeholder="Pilih tanggal"
                                        tabindex="0" type="text">
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text rounded-end border border-1"><i
                                                class="ri-calendar-line"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Dropdown Filter Status proyek -->
                            <div class="dropdown col-lg-3 col-12">
                                <button class="btn btn-outline-primary dropdown-toggle w-100" type="button"
                                    id="filterStatusDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    Status Berita
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="filterStatusDropdown">
                                    <li>
                                        <label class="dropdown-item">
                                            <input type="checkbox" name="status[]" value="active"
                                                onchange="this.form.submit()"> Aktif
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item">
                                            <input type="checkbox" name="status[]" value="completed"
                                                onchange="this.form.submit()"> Selesai
                                        </label>
                                    </li>
                                </ul>
                            </div>


                            <div class="form-check form-switch gap-3 col-lg-3 col-12 d-flex justify-content-between align-items-center mt-2 mt-lg-0"
                                style="width: auto;">
                                <a href="{{ route('news.create') }}" class="btn btn-primary">
                                    <i class="ti ti-news text-white me-1 fs-5"></i> Tambah Berita
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                @forelse ($data as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="card rounded-2 overflow-hidden hover-img">
                            <div class="position-relative">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('storage/' . $item->image) }}"
                                        class="card-img-top rounded-0 custom-style" alt="...">
                                </a>


                                <div class="dropdown position-absolute top-0 end-0 me-3" style="margin-top: 5px;">
                                    <a style="margin-top: 10px" type="button" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i style="font-size: 25px;" class="ti ti-dots-vertical text-white"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="m1">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('news.edit', $item->id) }}">
                                                <i class="ti ti-pencil text-muted me-1 fs-4"></i>Edit </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#delete-{{ $item->id }}">
                                                <i class="ti ti-trash text-muted me-1 fs-4"></i>Hapus </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('news.show', $item->id) }}">
                                                <i class="ti ti-info-circle text-muted me-1 fs-4"></i>Detail </a>
                                        </li>
                                    </ul>
                                </div>

                                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt=""
                                    class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                    width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Addie Keller">
                            </div>
                            <div class="card-body p-4">
                                <span
                                    class="badge text-bg-light fs-2 rounded-4 py-1 px-2 lh-sm mt-3">{{ Auth::user()->name }}</span>
                                <span class="d-block mt-2 text-dark fs-4 fw-semibold">{{ Str::limit($item->title, 55) }}</span>
                                <p class="d-block my-4 fs-4 text-dark ">
                                    {{ Str::limit(strip_tags($item->description), 60) }}
                                </p>
                                <div class="d-flex align-items-center gap-4">
                                    <div class="d-flex align-items-center gap-2"><i
                                            class="ti ti-eye text-dark fs-5"></i>9,125
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="ti ti-message-2 text-dark fs-5"></i>3
                                    </div>
                                    <div class="d-flex align-items-center ms-auto">
                                        <span class="fs-2 badge bg-body-tertiary text-dark text-truncate">
                                            <i class="ti ti-point"></i>
                                            {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('pages.super-admin.news.partials.delete-modal')
                @empty
                    <div class="col-12 text-center">
                        <img src="{{ asset('no-data.png') }}" alt="No Data" class="img-fluid"
                            style="width: clamp(150px, 50vw, 300px);">
                        <p class="mt-3">Tidak ada data tersedia</p>
                    </div>
                @endforelse
            </div>
        </div>
    @endsection

    <style>
        .dropdown-menu a {
            color: #000000;
            /* Ubah warna sesuai keinginan */
            font-size: 10px;
            /* Ubah ukuran font sesuai keinginan */
            padding: 10px 15px;
            /* Tambahkan padding jika ingin */
        }

        .dropdown-menu a:hover {
            background-color: #f8f9fa;
            /* Warna latar saat hover */
            color: #dde3e9;
            /* Warna teks saat hover */
        }

        .custom-style {
            width: 100%;
            height: 220px;
            object-fit: cover;
            /* object-fix sesuaikan gambar */
            /* height tinggi ya  */
        }
    </style>
