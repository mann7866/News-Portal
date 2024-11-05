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
            background-color: #f8f9fa;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            position: relative;
            z-index: 1;
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

        /* Background */
        body {
            background: linear-gradient(135deg, #f5f7f5 0%, #ffffff 100%);
            color: #4CAF50;
            overflow: hidden;
            position: relative;
        }

        

        /* Decorative Box */
        .decorative-box-1 {
            position: absolute;
            top: 5%; /* Jarak dari atas */
            right: 0%; /* Jarak dari kanan */
            width: 80px; /* Sesuaikan lebar kotak */
            height: 270px; /* Sesuaikan tinggi sesuai kebutuhan */
            background: linear-gradient(135deg, #388e3c, #66bb6a ); /* Gradasi warna hijau */
            border-radius: 75px; /* Ujung lonjong */
            transform: rotate(45deg) translate(25%, 0%); /* Memutar dan menggeser kotak */
            z-index: -1; /* Agar kotak tidak mengganggu elemen lainnya */
        }
        .decorative-box-2 {
            position: absolute;
            top: 0%; /* Jarak dari atas */
            right: 0%; /* Jarak dari kanan */
            width: 100px; /* Sesuaikan lebar kotak */
            height: 390px; /* Sesuaikan tinggi sesuai kebutuhan */
            background: linear-gradient(135deg, #388e3c, #66bb6a ); /* Gradasi warna hijau */
            border-radius: 75px; /* Ujung lonjong */
            transform: rotate(45deg) translate(-100%, 0%); /* Memutar dan menggeser kotak */
            z-index: -1; /* Agar kotak tidak mengganggu elemen lainnya */
        }
        .decorative-box-3 {
            position: absolute;
            top: 0%; /* Jarak dari atas */
            right: 0%; /* Jarak dari kanan */
            width: 80px; /* Sesuaikan lebar kotak */
            height: 270px; /* Sesuaikan tinggi sesuai kebutuhan */
            background: linear-gradient(135deg,#388e3c, #66bb6a ); /* Gradasi warna hijau */
            border-radius: 75px; /* Ujung lonjong */
            transform: rotate(45deg) translate(-220%, 0%); /* Memutar dan menggeser kotak */
            z-index: -1; /* Agar kotak tidak mengganggu elemen lainnya */
        }
        .decorative-box-4 {
            position: absolute;
            bottom: 0%; /* Jarak dari atas */
            left: 0%; /* Jarak dari kanan */
            width: 100px; /* Sesuaikan lebar kotak */
            height: 390px; /* Sesuaikan tinggi sesuai kebutuhan */
            background: linear-gradient(135deg, #66bb6a, #388e3c); /* Gradasi warna hijau */
            border-radius: 75px; /* Ujung lonjong */
            transform: rotate(45deg) translate(100%, 10%); /* Memutar dan menggeser kotak */
            z-index: -1; /* Agar kotak tidak mengganggu elemen lainnya */
        }
        .decorative-box-5 {
            position: absolute;
            bottom: 0%; /* Jarak dari atas */
            left: 0%; /* Jarak dari kanan */
            width: 80px; /* Sesuaikan lebar kotak */
            height: 270px; /* Sesuaikan tinggi sesuai kebutuhan */
            background: linear-gradient(135deg, #66bb6a, #388e3c); /* Gradasi warna hijau */
            border-radius: 75px; /* Ujung lonjong */
            transform: rotate(45deg) translate(220%, 0%); /* Memutar dan menggeser kotak */
            z-index: -1; /* Agar kotak tidak mengganggu elemen lainnya */
        }
        .decorative-box-6 {
            position: absolute;
            bottom: 0%; /* Jarak dari atas */
            left: 0%; /* Jarak dari kanan */
            width: 80px; /* Sesuaikan lebar kotak */
            height: 270px; /* Sesuaikan tinggi sesuai kebutuhan */
            background: linear-gradient(135deg, #66bb6a, #388e3c); /* Gradasi warna hijau */
            border-radius: 75px; /* Ujung lonjong */
            transform: rotate(45deg) translate(-60%, 0%); /* Memutar dan menggeser kotak */
            z-index: -1; /* Agar kotak tidak mengganggu elemen lainnya */
        }
        
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="decorative-box-1"></div>
    <div class="decorative-box-2"></div>
    <div class="decorative-box-3"></div>
    <div class="decorative-box-4"></div>
    <div class="decorative-box-5"></div>
    <div class="decorative-box-6"></div>

    <!-- Card Wrapper -->
    <div class="card p-4">
        <!-- Logo and Title -->
        <div class="text-center mb-4">
            <img src="{{ asset('logo/smkAlazhar.jpeg') }}" alt="Logo Sekolah" class="rounded-circle"
                style="width: 80px; height: 80px;">
            <h2 class="login-title mt-2">School News Portal Login</h2>
            <p class="login-subtitle">Masuk untuk mengakses berita dan informasi terkini dari sekolah.</p>
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
                <label for="email" class="text-success font-weight-bolder">{{ __('Email') }}</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                    placeholder="Masukkan email Anda" required autofocus style="border: 1px solid #ced4da;">
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group mt-3">
                <label for="password" class="text-success font-weight-bolder">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control" name="password"
                    placeholder="Masukkan kata sandi Anda" required style="border: 1px solid #ced4da;">
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="form-check mt-3">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <label for="remember_me" class="form-check-label">{{ __('Ingat saya') }}</label>
            </div>

            <!-- Login Button -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-success btn-block">{{ __('Login') }}</button>
            </div>

            <!-- Register Link -->
            <div class="text-center mt-3">
                <a href="{{ route('register') }}" class="text-success">Belum punya akun? Daftar di sini.</a>
            </div>
        </form>
    </div>
</body>

</html>
