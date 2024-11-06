<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portal Berita Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7f5 0%, #ffffff 100%);
            color: #4CAF50;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .card {
            width: 100%;
            max-width: 350px;
            border-radius: 15px;
            background-color: #f8f9fa;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .logo {
            width: 60px;
            height: 60px;
        }

        .login-title {
            font-weight: bold;
            font-size: 1.2rem;
            color: #4CAF50;
        }

        .login-subtitle {
            font-size: 0.8rem;
            color: #555;
        }

        .btn-success {
            background-color: #4CAF50;
            border-color: #4CAF50;
        }

        .btn-success:hover {
            background-color: #45a049;
            border-color: #45a049;
        }

        .form-control:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
        }

        @media (max-width: 576px) {
            .card {
                margin: 0 15px;
            }
        }

        @media (min-width: 993px) {
            body {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="card p-3">
        <div class="text-center mb-3">
            <img src="{{asset('Logo/smkAlazhar.jpeg')}}" alt="Logo Sekolah" class="logo rounded-circle mb-2">
            <h2 class="login-title">Login Portal Berita Sekolah</h2>
            <p class="login-subtitle">Masuk untuk akses berita terkini</p>
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
            <div class="mb-3">
                <label for="email" class="form-label text-success fw-bold">Email</label>
                <div class="input-group input-group-sm">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email Anda" required>
                </div>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label text-success fw-bold">Password</label>
                <div class="input-group input-group-sm">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan kata sandi" required>
                </div>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">{{ __('Ingat saya') }}</label>
            </div>

            <button type="submit" class="btn btn-success btn-sm w-100 mb-2">
                <i class="fas fa-sign-in-alt"></i> {{ __('Login') }}
            </button>

            <div class="d-flex gap-2 mb-2">
                <button type="button" class="btn btn-outline-secondary btn-sm flex-grow-1">
                    <i class="fab fa-google"></i> Google
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm flex-grow-1">
                    <i class="fab fa-facebook-f"></i> Facebook
                </button>
            </div>

            <div class="text-center">
                <a href="#" class="text-success">
                    <small><i class="fas fa-user-plus"></i> Belum punya akun? Daftar</small>
                </a>
            </div>
        </form>

        <p class="login-subtitle mt-2 text-center"><small>Dapatkan berita dan informasi terbaru sekolah</small></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
