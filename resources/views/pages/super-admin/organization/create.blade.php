@extends('layouts.super-admin.app')
@section('content')
    <div class="row">
        <div class="col-md-4 col-lg-12">
            <div class="w-100">
                <div class="chat-container h-100 w-100">
                    <div class="chat-box-inner-part h-100">
                        <div class="chatting-box app-email-chatting-box">
                            <div
                                class="p-9 py-3 border-bottom chat-meta-user d-flex align-items-center justify-content-between">
                                <h5 class="text-dark mb-0 fw-semibold">Tambah Profile Anggota Organisasi</h5>
                            </div>
                            <div class="position-relative overflow-hidden">
                                <div class="position-relative">
                                    <div class="chat-box p-9" style="height: auto;" data-simplebar>
                                        <div class="chat-list chat active-chat" data-user-id="1">
                                            <div
                                                class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-\ gap-5">
                                                <!-- Gambar diubah menjadi kotak persegi panjang yang memenuhi ruang -->
                                                <div class="d-flex align-items-center justify-content-center gap-5 col-lg-6"
                                                    style="width: 40%; height: 300px;">
                                                    <img src="{{ asset('admin-assets/images/profile/user-4.jpg') }}"
                                                        alt="user4" class="rounded"
                                                        style="width: 100%; height: 100%; object-fit: cover;" />
                                                </div>
                                                <!-- Teks akan diganti dengan input di bawah -->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="fullName" class="form-label">Nama Lengkap</label>
                                                        <input type="text" class="form-control" id="fullName"
                                                            value="Muhammad Fahris" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="company" class="form-label">Kelas</label>
                                                        <select class="select2 form-control"
                                                            style="width: 100%; height: 36px">
                                                            <option>Pilih Kelas</option>
                                                            <optgroup label="Kelas">
                                                                <option value="staf">X</option>
                                                                <option value="staf">XI</option>
                                                                <option value="staf">XII</option>
                                                            </optgroup>
                                                            <optgroup label="Jurusan">
                                                                <option value="guru">RPL</option>
                                                                <option value="guru">TKJ</option>
                                                                <option value="guru">TB</option>
                                                                <option value="guru">AKL</option>
                                                                <option value="guru">TKR</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jobTitle" class="form-label">Jabatan</label>
                                                        <input type="text" class="form-control" id="jobTitle"
                                                            value="Kelapa Sekolah" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jobTitle" class="form-label">Nomor Telepon</label>
                                                        <input type="text" class="form-control" id="jobTitle"
                                                            value="+62 815-4874-3796" />
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Teks dan alamat diganti dengan input -->
                                            <div class="row">
                                                <div class="col-6 mb-7">
                                                    <label for="jobTitle" class="form-label">Alamat Email</label>
                                                    <input type="text" class="form-control" id="jobTitle"
                                                        value="Archontzy@gmail.com" />
                                                </div>
                                                <div class="col-6 mb-7">
                                                    <label for="jobTitle" class="form-label">Alamat</label>
                                                        <input type="text" class="form-control" id="jobTitle"
                                                            value="Sempu, Awu Awu Kampung Baru" />
                                                </div>
                                            </div>

                                            <div class="border-bottom pb-7 mb-4">
                                                <label for="notes" class="mb-2 fs-2">Catatan:</label>
                                                <textarea class="form-control" id="notes" rows="4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque bibendum hendrerit lobortis. Nullam ut lacus eros. Sed at luctus urna, eu fermentum diam. In et tristique mauris. Ut id ornare metus, sed auctor enim. Pellentesque nisi magna, laoreet a augue eget, tempor volutpat diam.</textarea>
                                                <div class="d-flex justify-content-end mt-3">
                                                    <!-- Tombol Kembali -->
                                                    <a class="d-block text-danger px-2 fs-8 bg-hover-danger nav-icon-hover position-relative z-index-5"
                                                       href="{{ route('organization.index') }}">
                                                        <button class="btn btn-danger" style="padding: 8px 15px; font-size: 12px;">
                                                            Kembali
                                                        </button>
                                                    </a>
                                                    <!-- Tombol Kirim -->
                                                    <a type="submit"
                                                       class="text-primary px-2 fs-8 bg-hover-primary nav-icon-hover position-relative z-index-5"
                                                       href="{{ route('organization.store') }}">
                                                        <button class="btn btn-primary" style="padding: 8px 15px; font-size: 12px;">
                                                            Kirim <i class="ti ti-brand-telegram"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
