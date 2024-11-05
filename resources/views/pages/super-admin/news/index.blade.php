@extends('layouts.super-admin.app')
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
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
        <div class="card card-body">
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <form class="position-relative">
                        <input type="text" class="form-control product-search ps-5" id="input-search"
                            placeholder="Cari Berita..." />
                        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                    </form>
                </div>
                <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                    <a href="{{ route('news.create') }}" id="btn-add-contact"
                        class="btn btn-info d-flex align-items-center">
                        <i class="ti ti-news text-white me-1 fs-5"></i> Add Berita
                    </a>
                </div>
            </div>
        </div>


        <div class="row">
            {{--  data 1  --}}
            @forelse ($data as $news)
                <div class="col-md-6 col-lg-4">
                    <div class="card rounded-2 overflow-hidden hover-img">
                        <div class="position-relative">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                    class="card-img-top rounded-0" alt="...">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <li><a style="font-size: 12px;" class="dropdown-item" href="">Edit</a></li>
                                <li><a style="font-size: 12px;" class="dropdown-item" href="#">Hapus</a></li>
                                <li><a style="font-size: 12px;" class="dropdown-item" href="#">Detail</a></li>
                            </ul>
                        </div>


                            <div class="dropdown position-absolute top-0 end-0 me-3" style="margin-top: 5px;">
                                <a style="margin-top: 10px" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i style="font-size: 25px;" class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li><a style="font-size: 12px;" class="dropdown-item"
                                            href="{{ route('news.edit') }}">Edit</a></li>
                                    <li><a style="font-size: 12px;" class="dropdown-item" href="#">Hapus</a></li>
                                    <li><a style="font-size: 12px;" class="dropdown-item" href="#">Detail</a></li>
                                </ul>
                            </div>

                            <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt=""
                                class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Addie Keller">
                        </div>
                        <div class="card-body p-4">
                            <span class="badge text-bg-light fs-2 rounded-4 py-1 px-2 lh-sm mt-3">{{ $news->category->name }}</span>
                            <a class="d-block my-4 fs-5 text-dark fw-semibold" href="#">
                                {{ $news->description }}
                            </a>
                            <div class="d-flex align-items-center gap-4">
                                <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>9,125
                                </div>
                                <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>3
                                </div>
                                <div class="d-flex align-items-center fs-2 ms-auto"><i
                                        class="ti ti-point text-dark"></i>Mon,
                                    Jan 16</div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
    <nav aria-label="...">
        <ul class="pagination justify-content-center mb-0 mt-4">
            <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 d-flex align-items-center justify-content-center"
                    href="#"><i class="ti ti-chevron-left"></i></a>
            </li>
            <li class="page-item active" aria-current="page">
                <a class="page-link border-0 rounded-circle round-32 mx-1 d-flex align-items-center justify-content-center"
                    href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center"
                    href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center"
                    href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center"
                    href="#">4</a>
            </li>
            <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center"
                    href="#">5</a>
            </li>
            <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center"
                    href="#">...</a>
            </li>
            <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center"
                    href="#">10</a>
            </li>
            <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 d-flex align-items-center justify-content-center"
                    href="#"><i class="ti ti-chevron-right"></i></a>
            </li>
        </ul>
    </nav>
@endsection

@section('modal')
    {{--  Delete news  --}}
    <div class="modal fade" id="add-news" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>ApakahAnda Ingin Tetap Menghapus?</h2>
                </div>
                <div class="modal-footer">
                    <div class="text-xs-right">
                        <button type="submit" class="btn btn-info rounded-pill px-4">
                            Kembali
                        </button>
                        <button type="reset" class="btn btn-danger rounded-pill px-4">
                            Tetap Hapus
                        </button>
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
                        <button type="button" style="margin-right: 170px" class="btn btn-danger">Ya! Tetap
                            Hapus!</button>
                    </a>
                </div>
            </div>
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
</style>
