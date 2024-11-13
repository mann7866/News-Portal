@extends('layouts.super-admin.app')
@section('content')
<div class="container-fluid">
    <!-- Header Section -->
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="fw-semibold mb-2">Blog Detail</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="index-2.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <img src="{{ asset('admin-assets/images/breadcrumb/ChatBc.png') }}" alt="" class="img-fluid mb-n4" style="width: 100px;">
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Content Section -->
    <div class="card my-4">
        <div class="card-body">
            <h4 class="fw-semibold mb-3 text-center">{{ $news->title }}</h4>
            <p>{{ $news->description }}</p>
            <div class="text-center mb-3">
                <img src="{{ asset('storage/' . $news->image) }}" alt="Blog Image" class="img-thumbnail rounded shadow-sm" style="max-width: 70%; height: auto;">
            </div>
            <p class="text-muted text-center">Published on: {{ \Carbon\Carbon::parse($news->created_at)->translatedFormat('d F Y') }}</p>
        </div>
    </div>

    <!-- Comments Section -->
    <div class="card">
        <div class="card-body">
            <h4 class="mb-4 fw-semibold">Post Comments</h4>
            <form>
                <textarea class="form-control mb-3" rows="4" placeholder="Write your comment..."></textarea>
                <div class="text-end">
                    <button class="btn btn-primary">Post Comment</button>
                </div>
            </form>

            <!-- Comments List -->
            <div class="mt-5">
                <h5 class="fw-semibold mb-3">Comments <span class="badge bg-primary text-white">3</span></h5>
                <div class="list-group">
                    <!-- Comment 1 -->
                    <div class="list-group-item mb-3">
                        <div class="d-flex align-items-start">
                            <img src="{{ asset('admin-assets/images/profile/user-2.jpg') }}" alt="" class="rounded-circle me-3" width="45" height="45">
                            <div>
                                <h6 class="fw-semibold mb-1">Don Russell</h6>
                                <p class="text-muted mb-2">Es do ujurus nejson imju azgudpi toceztep ji cocicoci bosawrop korze ta.</p>
                                <button class="btn btn-sm btn-outline-secondary">Reply</button>
                            </div>
                        </div>
                    </div>

                    <!-- Comment 2 -->
                    <div class="list-group-item mb-3">
                        <div class="d-flex align-items-start">
                            <img src="{{ asset('admin-assets/images/profile/user-3.jpg') }}" alt="" class="rounded-circle me-3" width="45" height="45">
                            <div>
                                <h6 class="fw-semibold mb-1">Cordelia Potter</h6>
                                <p class="text-muted mb-2">Huwso jewzehgu julriw niwgazep lewbob isujirmuz hemto pahop cewa zuhucze rinitba.</p>
                                <button class="btn btn-sm btn-outline-secondary">Reply</button>
                            </div>
                        </div>
                    </div>

                    <!-- Nested Comment -->
                    <div class="list-group-item ms-5 mb-3">
                        <div class="d-flex align-items-start">
                            <img src="{{ asset('admin-assets/images/profile/user-3.jpg') }}" alt="" class="rounded-circle me-3" width="45" height="45">
                            <div>
                                <h6 class="fw-semibold mb-1">Irene Hanson</h6>
                                <p class="text-muted mb-2">Uborofgic be rof lom sedge vapozi ohoinu nutremcuc ro ko atmeg anrov git ve vuj ki teb or.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Comment 3 -->
                    <div class="list-group-item">
                        <div class="d-flex align-items-start">
                            <img src="{{ asset('admin-assets/images/profile/user-4.jpg') }}" alt="" class="rounded-circle me-3" width="45" height="45">
                            <div>
                                <h6 class="fw-semibold mb-1">Seth Ortiz</h6>
                                <p class="text-muted mb-2">Icme rasejmat ciwo ifekemug owoca vicoz ukikitus famiftat nuk eroewu za upe.</p>
                                <button class="btn btn-sm btn-outline-secondary">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button Kembali -->
            <div class="text-end mt-4">
                <a href="{{ route('news.index') }}" class="btn btn-secondary">
                    <i class="ti-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
