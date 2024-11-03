@extends('layouts.super-admin.app')
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Halaman-Create Berita</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Create-Berita
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

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="">
        <div class="card rounded-2 overflow-hidden">
            <div class="position-relative">
                <input type="file" accept="image/*" id="imageInput" style="display: none;"
                    onchange="previewImage(event)">
                <label for="imageInput">
                    <img id="imagePreview" src="{{ asset('admin-assets/images/blog/blog-img5.jpg') }}"
                        class="card-img-top rounded-0" alt="Preview"
                        style="width: 100%; height: auto; cursor: pointer; object-fit: cover;">
                </label>
            </div>


            <div class="row">
                <div class="border-bottom title-part-padding">
                    <div class="floating-labels mt-4">
                        <div class="form-group mb-5 focused">
                            <input type="text" class="form-control" id="input1" style="font-weight: bold;" />
                            <span class="bar"></span>
                            <label class="" for="input1" style="font-weight: bold;">
                                <h4>
                                    Judul Berita
                                </h4>
                            </label>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 10px; margin-top: 10px; margin-left: 10px">
                    <label>
                        <h5>Kategori Berita</h5>
                    </label>
                </div>

                <div class="summernote">
                    <h4>

                    </h4>
                </div>
                <div class="border-bottom title-part-padding">
                    <div class="">
                        <label>Kategori Berita <span class="text-danger">*</span></label>
                        <select class="select2 form-control" multiple="multiple" style="height: 36px; width: 100%">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="d-flex flex-column mt-3">
                        <div class="mb-3 form-group">
                            <label>Start Date
                                <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="date" name="start_date" class="form-control" required
                                    data-validation-required-message="This field is required" />
                            </div>
                            <div class="form-control-feedback">
                                <small><code>Opsional</code></small>
                            </div>
                        </div>
                        <div class="mb-3 form-group">
                            <label>End Date
                                <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="date" name="end_date" class="form-control" required
                                    data-validation-required-message="This field is required" />
                            </div>
                            <div class="form-control-feedback">
                                <small><code>Opsional</code></small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('news.index') }}">
                            <button type="button" class="btn btn-danger me-2">
                                <i class="ti ti-arrow-left"></i>
                            </button>
                        </a>
                        <button type="submit" class="btn btn-primary"> <i class="ti ti-send"></i></button>
                    </div>
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
