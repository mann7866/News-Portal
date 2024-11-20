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
                                <h5 class="text-dark mb-0 fw-semibold">Edit Profile Guru</h5>
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


                        <form action="{{ route('employee.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        
                            <div class="position-relative overflow-hidden">
                                <div class="position-relative">
                                    <div class="chat-box p-9" style="height: auto;" data-simplebar>
                                        <div class="chat-list chat active-chat" data-user-id="1">
                                            <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-\ gap-5">
                                                <!-- Image Upload Section -->
                                                <div class="d-flex align-items-center justify-content-center gap-5 col-lg-6" style="width: 40%; height: 300px;">
                                                    <label for="profile_image" class="rounded" style="width: 100%; height: 100%; object-fit: cover; cursor: pointer;">
                                                        <img src="{{ asset('storage/' . $employee->image) }}"  alt="user4" class="rounded" id="image_preview" style="width: 100%; height: 100%; object-fit: cover;" />
                                                        <input type="file" name="image" id="profile_image" style="display: none;" onchange="previewImage(event)" />
                                                        <label style="display: block; text-align: center;">edit gambar</label>
                                                    </label>
                                                </div>

                                                <script>
                                                    function previewImage(event) {
                                                        const reader = new FileReader();
                                                        reader.onload = function(){
                                                            const output = document.getElementById('image_preview');
                                                            output.src = reader.result;
                                                        };
                                                        reader.readAsDataURL(event.target.files[0]);
                                                    }
                                                </script>

                                                <!-- Text Input Fields -->
                                                <div class="col-lg-6">
                                                    <!-- Name Input -->
                                                    <div class="form-group mb-4">
                                                        <label for="name" class="form-label">Masukkan Nama</label>
                                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Masukkan Nama Lengkap"  value="{{ $employee->name }}" />
                                                        @error('name')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <!-- Job Input -->
                                                    <div class="form-group mb-4">
                                                        <label for="jobs" class="form-label">Masukkan Pekerjaan</label>
                                                        <input type="text" class="form-control @error('jobs') is-invalid @enderror" name="jobs" id="jobs" placeholder="Masukkan Nama Pekerjaan"  value="{{ $employee->jobs }}" />
                                                        @error('jobs')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <!-- Educational Background Input -->
                                                    <div class="form-group mb-4">
                                                        <label for="educational-background" class="form-label">Masukkan Gelar yang dimiliki</label>
                                                        <input type="text" class="form-control @error('educational-background') is-invalid @enderror" name="educationalBackground" id="educational-background" placeholder="Masukkan Gelar"  value="{{ $employee->educationalBackground }}" />
                                                        @error('educational-background')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Additional Input Fields -->
                                            <div class="row">
                                                <div class="col-6 mb-7">
                                                    <label for="phone" class="mb-1 fs-2">Nomor Telpon</label>
                                                    <input type="number" class="form-control @error('phone-number') is-invalid @enderror" id="phone" name="phoneNumber" value="{{ $employee->phoneNumber }}" />
                                                    @error('phone-number')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6 mb-7">
                                                    <label for="email" class="mb-1 fs-2">Alamat Email</label>
                                                    <input type="text" class="form-control @error('e-mail') is-invalid @enderror" id="email" name="email" value="{{ $employee->email }}" />
                                                    @error('e-mail')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-12 mb-9">
                                                    <label for="address" class="mb-1 fs-2">Alamat</label>
                                                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ $employee->address }}" />
                                                    @error('address')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-12 mb-9">
                                                    <label for="skill" class="mb-2 fs-2">Bidang keahlian:</label>
                                                    <textarea class="form-control" name="skill" id="skill" rows="4">{{ old('skill', $employee->skill) }}</textarea>
                                                </div>
                                            </div>
                                            <!-- Notes Section -->
                                            <div class="border-bottom pb-7 mb-4">
                                                <label for="description" class="mb-2 fs-2">Catatan:</label>
                                                <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $employee->description) }}</textarea>

                                                <div class="d-flex justify-content-end mt-3">
                                                    <a class="d-block text-danger px-2 fs-8 bg-hover-danger nav-icon-hover position-relative z-index-5" href="{{ route('employee.index') }}">
                                                        <button type="button" class="btn btn-danger">
                                                            Kembali
                                                        </button>
                                                    </a>
                                                    <button type="submit" class="btn btn-primary">
                                                        Kirim <i class="ti ti-brand-telegram"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
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
@endsection


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var selectedValue = document.getElementById('company').value;
        console.log('Initial selected value:', selectedValue); // Debug log untuk melihat nilai pertama

        // Kondisi awal berdasarkan nilai dropdown
        if (selectedValue === 'staf') {
            document.getElementById('cityField').style.display = 'none';
            document.getElementById('countryField').style.display = 'none';
        } else if (selectedValue === 'guru') {
            document.getElementById('cityField').style.display = 'block';
            document.getElementById('countryField').style.display = 'block';
        }

        // Menambahkan event listener untuk perubahan nilai dropdown
        document.getElementById('company').addEventListener('change', function() {
            var selectedValue = this.value;
            console.log('Selected value changed to:',
                selectedValue); // Debug log untuk melihat perubahan nilai

            if (selectedValue === 'staf') {
                document.getElementById('cityField').style.display = 'none';
                document.getElementById('countryField').style.display = 'none';
            } else if (selectedValue === 'guru') {
                document.getElementById('cityField').style.display = 'block';
                document.getElementById('countryField').style.display = 'block';
            }
        });
    });
</script>
