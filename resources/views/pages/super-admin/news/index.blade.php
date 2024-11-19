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
                    <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-center ">
                        <h3 class="mx-1 mb-0">Berita</h3>
                    </div>
                    <div class="col-md-8">
                        <form action="{{ route('news.index') }}" method="GET">
                            <div class="row g-2 align-items-center justify-content-end">
                                <!-- Filter Status -->
                                <div class="col-sm-auto">
                                    <select name="status" class="form-select" id="statusFilter"
                                        onchange="this.form.submit()">
                                        <option value="" {{ request('status') == '' ? 'selected' : '' }}>Semua Status
                                        </option>
                                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>
                                            Pending</option>
                                        <option value="ongoing" {{ request('status') == 'ongoing' ? 'selected' : '' }}>
                                            Ongoing</option>
                                        <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>
                                            Completed</option>
                                        <option value="daily" {{ request('status') == 'daily' ? 'selected' : '' }}>Daily
                                        </option>
                                    </select>
                                </div>

                                <!-- Filter Kategori -->
                                <div class="col-sm-auto">
                                    <button class="btn btn-outline-primary dropdown-toggle w-100" type="button"
                                        id="filterCategoryDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        Kategori
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="filterCategoryDropdown">
                                        @forelse ($categories as $category)
                                            <li>
                                                <label class="dropdown-item">
                                                    <input type="checkbox" name="category_names[]" value="{{ $category->name }}"
                                                        {{ in_array($category->name, $filters['category_names'] ?? []) ? 'checked' : '' }}
                                                        onchange="this.form.submit()">
                                                    {{ $category->name }}
                                                </label>
                                            </li>
                                        @empty
                                            <li>
                                                <label class="dropdown-item">
                                                    <input type="checkbox" disabled>
                                                    Tidak ada kategori.
                                                </label>
                                            </li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                            <div class="row g-2 align-items-center justify-content-end mt-2">
                                <!-- Form Pencarian Berita -->
                                <div class="col-sm-auto">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search"
                                            value="{{ request('search') }}" placeholder="Cari Berita">
                                        <div class="input-group-append">
                                            <button type="submit" class="input-group-text rounded-end border border-1">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Filter Tanggal -->
                                <div class="col-sm-auto">
                                    <div class="input-group">
                                        <input type="text" class="form-control flatpickr-input" name="date"
                                            id="dateRangePicker" value="{{ request('date') }}" data-provider="flatpickr"
                                            placeholder="Pilih rentang tanggal">
                                        <div class="input-group-append">
                                            <button type="submit" class="input-group-text rounded-end border border-1">
                                                <i class="ri-calendar-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>


                                <!-- Tombol Tambah Berita -->
                                <div class="col-sm-auto">
                                    <div class="d-grid gap-2">
                                        <a href="{{ route('news.create') }}" class="btn btn-primary">Tambah</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="row">
                @forelse ($data as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="card rounded-2 overflow-hidden hover-img">
                            <div class="position-relative">
                                <a href="{{ route('news.show', $item->slug) }}">
                                    <img src="{{ asset('storage/' . $item->image) }}"
                                        class="card-img-top rounded-0 custom-style" alt="...">
                                </a>


                                <div class="dropdown position-absolute top-0 end-0 me-3" style="margin-top: 5px;">
                                    <a style="margin-top: 10px" type="button" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i style="font-size: 25px;" class="ti ti-dots-vertical text-black"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="m1">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('news.edit', $item->slug) }}">
                                                <i class="ti ti-pencil text-muted me-1 fs-4"></i>Edit </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#delete-{{ $item->id }}">
                                                <i class="ti ti-trash text-muted me-1 fs-4"></i>Hapus </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('news.show', $item->slug) }}">
                                                <i class="ti ti-info-circle text-muted me-1 fs-4"></i>Detail </a>
                                        </li>
                                    </ul>
                                </div>

                                <span
                                    class="badge bg-white text-dark fs-1 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">
                                    {{ $item->categories->pluck('name')->join(' | ') }}
                                </span>

                                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt=""
                                    class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                    width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Addie Keller">
                            </div>
                            <div class="card-body p-4">
                                <span
                                    class="badge text-bg-light fw-semibold fs-2 rounded-4 py-1 px-2 lh-sm mt-3">{{ $item->user->name }}</span>
                                <span
                                    class="badge text-bg-warning fs-2 rounded-4 py-1 px-2 lh-sm mt-3">{{ $item->status }}
                                </span>
                                <span
                                    class="d-block mt-2 text-dark fs-4 fw-semibold">{{ Str::limit($item->title, 55) }}</span>
                                <p class="d-block my-4 fs-4 text-dark ">
                                    {{ Str::limit(strip_tags($item->description), 20) }}
                                </p>
                                <div class="d-flex align-items-center gap-4">

                                    <div class="d-flex align-items-center gap-2">
                                        <a class="text-dark" href="">
                                            <i class="ti ti-message-2 text-dark fs-5"></i>3
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center ms-auto">
                                        <span class="fs-2 badge bg-primary text-white text-truncate">
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
