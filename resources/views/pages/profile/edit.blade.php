@extends('layouts.super-admin.app')

@section('content')
<div class="py-5">
   <style>
.position-relative {
    position: relative;
    display: inline-block;
}

.profile-photo {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 50%; /* Memastikan foto berbentuk lingkaran */
    display: block; /* Menghindari gap di bawah gambar */
}

.edit-icon {
    position: absolute;
    top: 0;
    left: 0;
    width: 120px; /* Menyamakan dengan lebar foto */
    height: 120px; /* Menyamakan dengan tinggi foto */
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    display: none;
    justify-content: center;
    align-items: center;
    font-size: 30px;
    cursor: pointer;
    z-index: 10;
    border-radius: 50%;
}

.position-relative:hover .edit-icon {
    display: flex;
}

/* Optional: Tambahkan efek transisi */
.edit-icon {
    transition: all 0.3s ease;
}

/* Optional: Hover effect */
.edit-icon:hover {
    background-color: rgba(0, 0, 0, 0.7);
}
   </style>
    <div class="container">
        <div class="row">
<!-- Profile Information Section -->
<div class="col-md-6">
    <div class="card mb-4">
        <div class="card-body">
            <section class="mb-4">
                <header>
                    <h2 class="h5 font-weight-bold text-dark">{{ __('Profile Information') }}</h2>
                    <p class="text-muted small">{{ __("Update your account's profile information and email address.") }}</p>
                </header>

                <!-- Foto Profil dan Nama/Email -->
                <div class="d-flex align-items-center mb-4">
                    <!-- Foto Profil -->
                    <div class="text-center me-4 position-relative">
                        <!-- Foto Profil -->
                        <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" 
                             alt="Profile Photo" 
                             class="profile-photo" 
                             style="width: 120px; height: 120px; object-fit: cover;">
                        
                        <!-- Ikon Edit -->
                        <div class="edit-icon">
                            <label for="uploadPhotoInput" class="d-flex align-items-center justify-content-center" style="cursor: pointer;">
                                <i class="fas fa-pencil-alt"></i>
                            </label>
                            <input type="file" id="uploadPhotoInput" name="profile_photo" class="d-none" accept="image/*">
                        </div>
                    </div>
                    

                    <!-- Nama dan Email -->
                    <div class="w-100">
                        <div class="form-group">
                            <label for="name" class="font-weight-medium">{{ __('Name') }}</label>
                            <input type="text" id="name" name="name" class="form-control w-100" 
                                   value="{{ old('name', $user->name) }}" 
                                   required autofocus autocomplete="name">
                            @error('name')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="email" class="font-weight-medium">{{ __('Email') }}</label>
                            <input type="email" id="email" name="email" class="form-control w-100" 
                                   value="{{ old('email', $user->email) }}" 
                                   required autocomplete="username">
                            @error('email')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                    
                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                            <div class="mt-2">
                                <p class="small text-secondary">
                                    {{ __('Your email address is unverified.') }}
                                    <button form="send-verification" class="btn btn-link p-0 text-decoration-none small text-primary">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </button>
                                </p>
                    
                                @if (session('status') === 'verification-link-sent')
                                <p class="text-success small mt-2">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                                @endif
                            </div>
                            @endif
                        </div>
                    </div>
                    
                </div>

                <!-- Deskripsi -->
                <div class="form-group">
                    <label for="description" class="font-weight-medium">{{ __('Description') }}</label>
                    <textarea id="description" name="description" class="form-control w-100" rows="3">{{ old('description', $user->description) }}</textarea>
                    @error('description')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Save Button and Confirmation Message -->
                <div class="d-flex align-items-center gap-3 mt-3">
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                    @if (session('status') === 'profile-updated')
                    <p class="text-success small mb-0">
                        {{ __('Saved.') }}
                    </p>
                    @endif
                </div>
            </section>
        </div>
    </div>
</div>




            <!-- Update Password Section -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <br>
                    <div class="card-header bg-white">
                        <h3 class="h5 mb-0">{{ __('Update Password') }}</h3>
                        <p class="small text-muted mb-0">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            @method('PUT')

                            <!-- Current Password -->
                            <div class="form-group">
                                <label for="current_password">{{ __('Current Password') }}</label>
                                <input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password">
                                @error('current_password')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
<br>
                            <!-- New Password -->
                            <div class="form-group">
                                <label for="password">{{ __('New Password') }}</label>
                                <input id="password" name="password" type="password" class="form-control" autocomplete="new-password">
                                @error('password')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
<br>
                            <!-- Confirm Password -->
                            <div class="form-group">
                                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password">
                                @error('password_confirmation')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Save Button -->
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                @if (session('status') === 'password-updated')
                                <p class="text-success mb-0">
                                    {{ __('Saved.') }}
                                </p>
                                @endif
                            </div>
                        </form>
                    </div>
                    <br>
                </div>
            </div>
        </div>

        <!-- Delete Account Section -->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <section>
                            <header>
                                <h3 class="h5">{{ __('Delete Account') }}</h3>
                                <p class="small text-muted">{{ __('Permanently delete your account.') }}</p>
                            </header>
                            <form method="POST" action="{{ route('profile.destroy') }}">
                                @csrf
                                @method('DELETE')

                                <p>{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}</p>

                                <!-- Password Input -->
                                <div class="form-group">
                                    <label for="delete_password" class="sr-only">{{ __('Password') }}</label>
                                    <input id="delete_password" name="password" type="password" class="form-control" placeholder="{{ __('Password') }}">
                                    @error('password')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Action Buttons -->
                                <div class="d-flex justify-content-end mt-3">
                                    <button type="button" class="btn btn-secondary me-2" onclick="window.history.back()">{{ __('Cancel') }}</button>
                                    <button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
