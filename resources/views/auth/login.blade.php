<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - School News Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Style for Card */
        .card {
            max-width: 420px;
            width: 100%;
            border-radius: 10px;
            background-color: #f8f9fa; /* Warna putih sedikit abu agar shadow lebih kontras */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Shadow lebih kuat */
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card:hover {
            transform: scale(1.05); /* Membesar saat hover */
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5); /* Shadow lebih kuat saat hover */
        }
        .news-icon {
            color: #4CAF50;
            font-size: 2rem;
        }
        .login-title {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .login-subtitle {
            font-size: 0.9rem;
            color: #555;
        }
        /* Centering and Background */
        body {
            background-color: #ffffff;
            color: #4CAF50;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <!-- Card Wrapper -->
    <div class="card p-4">
        <!-- News Icon and Title -->
        <div class="text-center mb-4">
            <i class="fas fa-newspaper news-icon"></i>
            <h2 class="login-title mt-2">School News Portal Login</h2>
            <p class="login-subtitle">Masuk untuk mengakses berita dan informasi terkini dari sekolah.</p>
        </div>
        
        <!-- Logo -->
        <div class="text-center mb-4">
            <img src="{{ asset('logo/smkAlazhar.jpeg') }}" alt="Logo Sekolah" class="rounded-circle" style="width: 80px; height: 80px;">
        </div>

        <!-- Session Status -->
        @if (session('status'))
            <div class="alert alert-success text-center">
                {{ session('status') }}
            </div>
        @endif

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" class="text-success font-weight-bold">{{ __('Email') }}</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group mt-3">
                <label for="password" class="text-success font-weight-bold">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control" name="password" required>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="form-check mt-3">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <label for="remember_me" class="form-check-label text-success">{{ __('Remember me') }}</label>
            </div>

            <!-- Action Buttons: Login, Forgot Password, Register -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <!-- Forgot Password Link -->
                @if (Route::has('password.request'))
                    <a class="text-sm text-success" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <!-- Register and Login Buttons -->
                <div>
                    @if (Route::has('register'))
                        <a class="text-sm text-success mr-3" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    @endif

                    <button type="submit" class="btn btn-success text-white">
                        {{ __('Log in') }}
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
