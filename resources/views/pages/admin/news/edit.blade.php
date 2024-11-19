@extends('layouts.admin.app')

@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Halaman Update Berita</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted" href="index-2.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Update Berita
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

    <div class="card rounded-2 overflow-hidden mb-4">
        <div class="position-relative text-center p-4">
            <!-- Static Image Preview -->
            <input type="file" accept="image/*" id="imageInput" name="image" style="display: none;"
                onchange="previewImage(event)">
            <label for="imageInput">
                <img id="imagePreview" src="{{ asset('landing-page/images/news-image.jpg') }}" class="rounded" alt="Preview"
                    style="width: 100%; height: auto; max-width: 600px; cursor: pointer; object-fit: cover;">
            </label>
            <p class="text-muted mt-2">Klik gambar untuk mengunggah foto</p>
        </div>

        <div class="card-body">
            <div class="form-group mb-4">
                <label for="title" class="form-label fw-bold h5">Judul Berita <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Masukkan Judul Berita" value="Judul Berita Contoh" />
            </div>

            <div class="form-group mb-4">
                <label for="description" class="form-label fw-bold h5">Deskripsi Berita <span
                        class="text-danger">*</span></label>
                <textarea name="description" class="summernote">
                    Ini adalah deskripsi berita contoh yang dapat Anda edit sesuai kebutuhan.
                </textarea>
            </div>

            <div class="form-group mb-4">
                <label>Kategori Berita <span class="text-danger">*</span></label>
                <select class="select2 form-control" multiple="multiple" style="height: 36px; width: 100%" name="category_ids[]">
                    <option value="1" selected>Kategori 1</option>
                    <option value="2">Kategori 2</option>
                    <option value="3">Kategori 3</option>
                </select>
            </div>

            <div class="form-group mb-4 row">
                <div class="col-md-6">
                    <label for="start_date" class="form-label fw-bold h6">Start Date</label>
                    <input type="date" name="start_date" class="form-control" value="2024-11-19" />
                </div>
                <div class="col-md-6">
                    <label for="end_date" class="form-label fw-bold h6">End Date</label>
                    <input type="date" name="end_date" class="form-control" value="2024-11-20" />
                </div>
            </div>

            <div class="d-flex justify-content-end mt-3">
                <a href="index.html" class="btn btn-danger me-2">
                    <i class="ti ti-arrow-left"></i> Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="ti ti-send"></i> Simpan Berita
                </button>
            </div>
        </div>
    </div>
@endsection

<script>
    function previewImage(event) {
        const image = document.getElementById('imagePreview');
        image.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
