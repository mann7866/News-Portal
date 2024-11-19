@extends('layouts.admin.app')

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
                            <input type="text" id="name" name="name" class="form-control w-100" value="John Doe" required autofocus autocomplete="name">
                        </div>
                    
                        <div class="form-group">
                            <label for="email" class="font-weight-medium">{{ __('Email') }}</label>
                            <input type="email" id="email" name="email" class="form-control w-100" value="johndoe@example.com" required autocomplete="username">
                        </div>
                    </div>
                    
                </div>

                <!-- Deskripsi -->
                <div class="form-group">
                    <label for="description" class="font-weight-medium">{{ __('Description') }}</label>
                    <textarea id="description" name="description" class="form-control w-100" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</textarea>
                </div>

                <!-- Save Button and Confirmation Message -->
                <div class="d-flex align-items-center gap-3 mt-3">
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

                </div>
            </section>
        </div>
    </div>
</div>

<!-- Modal untuk Preview Foto Profil -->
<div class="modal fade" id="profilePhotoModal" tabindex="-1" aria-labelledby="profilePhotoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profilePhotoModalLabel">{{ __('Profile Photo Preview') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" 
                     alt="Profile Photo Preview" 
                     id="modalProfilePhoto" 
                     class="img-fluid rounded-circle" 
                     style="max-width: 300px; height: auto;">
            </div>
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
                        <!-- Current Password -->
                        <div class="form-group">
                            <label for="current_password">{{ __('Current Password') }}</label>
                            <input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password">
                        </div>
<br>
                        <!-- New Password -->
                        <div class="form-group">
                            <label for="password">{{ __('New Password') }}</label>
                            <input id="password" name="password" type="password" class="form-control" autocomplete="new-password">
                        </div>
<br>
                        <!-- Confirm Password -->
                        <div class="form-group">
                            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password">
                        </div>

                        <!-- Save Button -->
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                        </div>
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
                            <form method="POST">
                                <p>{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}</p>

                                <!-- Password Input -->
                                <div class="form-group">
                                    <label for="delete_password" class="sr-only">{{ __('Password') }}</label>
                                    <input id="delete_password" name="password" type="password" class="form-control" placeholder="{{ __('Password') }}">
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
