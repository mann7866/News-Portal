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
                                <h5 class="text-dark mb-0 fw-semibold">Tambah Profile Guru</h5>
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
                                                            value="Dr. Bonnie Barstow" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="company" class="form-label">Pekerjaan</label>
                                                        <select class="select2 form-control"
                                                            style="width: 100%; height: 36px">
                                                            <option>Pilih Pekerjaan</option>
                                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                <option value="staf">Alaska</option>
                                                                <option value="staf">Hawaii</option>
                                                            </optgroup>
                                                            <optgroup label="Pacific Time Zone">
                                                                <option value="guru">California</option>
                                                                <option value="guru">Nevada</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jobTitle" class="form-label">Status Pangkat</label>
                                                        <input type="text" class="form-control" id="jobTitle"
                                                            value="Sales Manager" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jobTitle" class="form-label">Mapel Keahlian</label>
                                                        <input type="text" class="form-control" id="jobTitle"
                                                            value="Sales Manager" />
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Teks dan alamat diganti dengan input -->
                                            <div class="row">
                                                <div class="col-6 mb-7">
                                                    <label for="phone" class="mb-1 fs-2">Nomor Telpon</label>
                                                    <input type="text" class="form-control" id="phone"
                                                        value="+6281235117136" />
                                                </div>
                                                <div class="col-6 mb-7">
                                                    <label for="email" class="mb-1 fs-2">Alamat Email</label>
                                                    <input type="email" class="form-control" id="email"
                                                        value="alexandra@modernize.com" />
                                                </div>
                                                <div class="col-12 mb-9">
                                                    <label for="address" class="mb-1 fs-2">Alamat</label>
                                                    <input type="text" class="form-control" id="address"
                                                        value="Awu-Awu Kampung Baru, kec.Sempu" />
                                                </div>
                                                <div class="col-4 mb-7" id="cityField">
                                                    <label for="city" class="mb-1 fs-2">Riwayat Pendidikan</label>
                                                    <input type="text" class="form-control" id="city"
                                                        value="New York" />
                                                </div>
                                                <div class="col-8 mb-7" id="countryField">
                                                    <label for="country" class="mb-1 fs-2">Negara</label>
                                                    <input type="text" class="form-control" id="country"
                                                        value="United States" />
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
