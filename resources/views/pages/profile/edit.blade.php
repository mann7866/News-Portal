@extends('layouts.super-admin.app')
@section('content')
    <div class="py-5">
        <div class="container">
            <!-- Profile Information Section -->
            <div class="card mb-4">
                <div class="card-body">
                    @include('pages.profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password Section -->
            <div class="card mb-4">
                <div class="card-header bg-white">
                    <h3 class="h5 mb-0">{{ __('Update Password') }}</h3>
                    <p class="small text-muted mb-0">Ensure your account is using a long, random password to stay secure.</p>
                </div>
                <div class="card-body">
                    @include('pages.profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete Account Section -->
            <div class="card mb-4">
                <div class="card-body">
                    @include('pages.profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endsection
