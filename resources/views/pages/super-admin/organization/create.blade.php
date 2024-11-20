@extends('layouts.super-admin.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="w-100">
            <div class="chat-container h-100 w-100">
                <div class="chat-box-inner-part h-100">
                    <div class="chatting-box app-email-chatting-box">
                        <div class="p-9 py-3 border-bottom chat-meta-user d-flex align-items-center justify-content-between">
                            <h5 class="text-dark mb-0 fw-semibold">Tambah Organisasi</h5>
                        </div>
                        <div class="position-relative overflow-hidden">
                            <div class="position-relative">
                                <div class="chat-box p-9" style="height: auto;" data-simplebar>
                                    <form action="{{ route('organization.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="d-flex align-items-center gap-5">
                                            <!-- Gambar Upload -->
                                            <div class="d-flex flex-column align-items-center justify-content-center gap-3 col-lg-6" style="width: 40%; height: 300px;">
                                                <label for="fileInput" style="width: 100%; height: 100%; cursor: pointer; display: block;">
                                                    <img id="preview" 
                                                         src="{{ asset('admin-assets/images/profile/user-4.jpg') }}" 
                                                         alt="Preview Gambar" 
                                                         class="rounded" 
                                                         style="width: 100%; height: 100%; object-fit: cover;" />
                                                </label>
                                                <input type="file" id="fileInput" name="image" class="form-control" accept="image/*" 
                                                       style="display: none;" onchange="previewImage(event)" required />
                                            </div>

                                            <!-- Input Detail Organisasi -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="fullName" class="form-label">Nama Organisasi</label>
                                                    <input type="text" name="name" class="form-control" id="fullName" placeholder="Masukkan Nama Organisasi" required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="notes" class="form-label">Deskripsi</label>
                                                    <textarea name="description" class="form-control" id="notes" rows="4" placeholder="Masukkan Deskripsi Organisasi" required></textarea>
                                                </div>
                                                <div class="d-flex gap-3">
                                                    <a href="{{ route('organization.index') }}" class="btn btn-danger" style="padding: 8px 15px; font-size: 12px;">
                                                        Kembali
                                                    </a>
                                                    <button type="submit" class="btn btn-primary" style="padding: 8px 15px; font-size: 12px;">
                                                        Kirim <i class="ti ti-brand-telegram"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Fungsi untuk menampilkan preview gambar
    function previewImage(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection
