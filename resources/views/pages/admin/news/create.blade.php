@extends('layouts.admin.app')
@section('content')
<div class="card bg-light-info shadow-none position-relative overflow-hidden">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h4 class="fw-semibold mb-8">Tambah Berita</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-muted " href="index-2.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Tambah Berita
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


    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong class="text-danger">{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf --}}
        <div class="card rounded-2 overflow-hidden mb-4">
            <div class="position-relative text-center p-4">
                <input type="file" accept="image/*" id="imageInput" name="image" style="display: none;"
                    onchange="previewImage(event)">
                <label for="imageInput">
                    <img id="imagePreview" src="{{ asset('admin-assets/images/blog/no-image.png') }}" class="rounded"
                        alt="Preview"
                        style="width: 100%; height: auto; max-width: 600px; cursor: pointer; object-fit: cover;">
                </label>
                <p class="text-muted mt-2">Klik gambar untuk mengunggah foto</p>
            </div>

            <div class="card-body">
                <div class="form-group mb-4">
                    <label for="title" class="form-label fw-bold h5">Judul Berita <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                        id="title" placeholder="Masukkan Judul Berita" value="{{ old('title') }}" />
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="description" class="form-label fw-bold h5">Deskripsi Berita <span class="text-danger">*</span></label>
                    <textarea name="description" id="description" class="summernote form-control @error('description') is-invalid @enderror"
                        placeholder="Tulis deskripsi berita...">
                        {{ old('description') }}
                    </textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="category_ids" class="form-label fw-bold h5">Kategori Berita
                        <span class="text-danger">*</span>
                    </label>
                    <select class="select2 form-control @error('category_ids') is-invalid @enderror" multiple="multiple"
                        name="category_ids[]" style="width: 100%;">
                        {{-- @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ in_array($category->id, old('category_ids', [])) ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach --}}
                    </select>
                    @error('category_ids')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-4 row">
                    <div class="col-md-6">
                        <label for="start_date" class="form-label fw-bold h6">Start Date</label>
                        <input type="date" name="start_date"
                            class="form-control @error('start_date') is-invalid @enderror"
                            value="{{ old('start_date') }}" />
                        @error('start_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="end_date" class="form-label fw-bold h6">End Date</label>
                        <input type="date" name="end_date" class="form-control @error('end_date') is-invalid @enderror"
                            value="{{ old('end_date') }}" />
                        @error('end_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-3">
                    <a href="{{ route('news.index') }}" class="btn btn-danger me-2">
                        <i class="ti ti-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="ti ti-send"></i> Simpan Berita
                    </button>
                </div>
            </div>
        </div>
    </form>

@endsection

<script>
    function previewImage(event) {
        const image = document.getElementById('imagePreview');
        image.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
