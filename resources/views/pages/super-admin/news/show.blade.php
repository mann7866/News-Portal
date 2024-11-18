@extends('layouts.super-admin.app')
@section('content')
    <div class="container-fluid">
        <!-- Header Section -->
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Detail Berita</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted text-decoration-none"
                                        href="index-2.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detail Berita</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="mb-n5">
                            <img src="{{ asset('admin-assets/images/breadcrumb/ChatBc.png') }}" alt=""
                                class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Content Section -->
        <div class="card rounded-2 overflow-hidden my-4">
            <div class="position-relative">
                <!-- Gambar Blog -->
                <img src="{{ asset('storage/' . $news->image) }}" class="card-img-top rounded-0 object-fit-cover"
                    alt="Blog Image" style="width: 100%; height: 440px; object-fit: cover;">

                <img src="{{ asset('admin-assets/images/profile/user-5.jpg') }}" alt=""
                    class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40"
                    height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Esther Lindsey">
            </div>
            <div class="card-body p-4">
                <span class="badge text-bg-light fs-2 rounded-4 py-1 px-2 lh-sm mt-3">{{ $news->user->name }}</span>
                <h2 class="fs-9 fw-semibold my-4">{{ $news->title }}</h2>
                <p class="mb-4">{{ $news->description }}</p>
                <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>2252</div>
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>3</div>

                    <div class="d-flex align-items-center fs-2"><i
                            class="ti ti-point text-dark"></i>{{ \Carbon\Carbon::parse($news->created_at)->translatedFormat('d F Y') }}
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">

                <div class="d-flex align-items-center gap-3 mb-4 mt-7 pt-8">
                    <h4 class="mb-0 fw-semibold">Comments</h4>
                    <span class="badge bg-light-primary text-primary fs-4 fw-semibold px-6 py-8 rounded">3</span>
                </div>
                <div class="position-relative">
                    <div class="p-4 rounded-2 bg-light mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('admin-assets/images/profile/user-2.jpg') }}" alt=""
                                class="rounded-circle" width="33" height="33">
                            <h6 class="fw-semibold mb-0 fs-4">Don Russell</h6>
                            <span class="p-1 bg-light-dark rounded-circle d-inline-block"></span>
                        </div>
                        <p class="my-3">Es do ujurus nejson imju azgudpi toceztep ji cocicoci bosawrop korze ta.
                            Casetlu udumej umocu wanaro webmos ijafa ud muli amja softoj ma pijum.
                        </p>
                        <div class="d-flex align-items-center gap-2">
                            <a class="text-white d-flex align-items-center justify-content-center bg-secondary p-2 fs-4 rounded-circle"
                                href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Reply">
                                <i class="ti ti-arrow-back-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-4 rounded-2 bg-light mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('admin-assets/images/profile/user-3.jpg') }}" alt=""
                                class="rounded-circle" width="33" height="33">
                            <h6 class="fw-semibold mb-0 fs-4">Cordelia Potter</h6>
                            <span class="p-1 bg-light-dark rounded-circle d-inline-block"></span>
                        </div>
                        <p class="my-3">Huwso jewzehgu julriw niwgazep lewbob isujirmuz hemto pahop cewa zuhucze rinitba
                            etdebluj.
                            Obdevo bo fa siztes laobeir agoemugo rut sapaviw mulati do re dabelul wo tumnik wih mu.
                        </p>
                        <div class="d-flex align-items-center gap-2">
                            <a class="text-white d-flex align-items-center justify-content-center bg-secondary p-2 fs-4 rounded-circle"
                                href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Reply">
                                <i class="ti ti-arrow-back-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-4 rounded-2 bg-light mb-3 ms-7">
                        <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('admin-assets/images/profile/user-3.jpg') }}" alt=""
                                class="rounded-circle" width="40" height="40">
                            <h6 class="fw-semibold mb-0 fs-4">Irene Hanson</h6>
                            <span class="p-1 bg-light-dark rounded-circle d-inline-block"></span>
                        </div>
                        <p class="my-3">Uborofgic be rof lom sedge vapozi ohoinu nutremcuc ro ko atmeg anrov git ve vuj
                            ki teb or.
                            Lohi hafa faddegon horoz ebema kew idful ducam nev rol iga wikkobsu sucdu gud.
                        </p>
                    </div>
                    <div class="p-4 rounded-2 bg-light">
                        <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('admin-assets/images/profile/user-4.jpg') }}" alt=""
                                class="rounded-circle" width="33" height="33">
                            <h6 class="fw-semibold mb-0 fs-4">Seth Ortiz</h6>
                            <span class="p-1 bg-light-dark rounded-circle d-inline-block"></span>
                        </div>
                        <p class="my-3">Icme rasejmat ciwo ifekemug owoca vicoz ukikitus famiftat nuk eroewu za upe.
                            Pobrikvup kivofvac tuba ot veh ozoab sa gesi hahoniha hop burbip volo hufotobo di uted vojoamu.
                        </p>
                        <div class="d-flex align-items-center gap-2">
                            <a class="text-white d-flex align-items-center justify-content-center bg-secondary p-2 fs-4 rounded-circle"
                                href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Reply">
                                <i class="ti ti-arrow-back-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button Kembali -->
        <div class="text mt-4">
            <a href="{{ route('news.index') }}" class="btn btn-danger">
                <i class="ti ti-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
    </div>
    </div>
@endsection
