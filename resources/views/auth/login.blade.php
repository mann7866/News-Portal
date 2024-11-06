<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portal Berita Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="{{asset('Logo/smkAlazhar.jpeg')}}">
    <link rel="stylesheet" href="{{asset('style/login.css')}}">
</head>
<body>
    <div class="background-boxes">
        <div class="background-box"></div>
        <div class="background-box"></div>
        <div class="background-box"></div>
        <div class="background-box"></div>
        <div class="background-box"></div>
        <div class="background-box"></div>
        <div class="background-box"></div>
        <div class="background-box"></div>
        <div class="background-box"></div>
        <div class="background-box"></div>
        <div class="background-box"></div>
        <div class="background-box"></div>
        <div class="background-box"></div>
        <div class="background-box"></div>
        <div class="background-box"></div>
        <div class="background-box"></div>
    </div>

    <div class="card p-3">
        <div class="text-center mb-3">
            <img src="{{asset('Logo/smkAlazhar.jpeg')}}" alt="Logo Sekolah" class="logo rounded-circle mb-2">
            <h2 class="login-title">Login Portal Berita Sekolah</h2>
            <p class="login-subtitle">Masuk untuk akses berita terkini</p>
        </div>

        <!-- Display validation errors if any -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label text-success fw-bold">Email</label>
                <div class="input-group input-group-sm">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email Anda" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label text-success fw-bold">Kata Sandi</label>
                <div class="input-group input-group-sm">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan kata sandi" required>
                </div>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="remember_me">
                <label class="form-check-label" for="remember_me">Ingat saya</label>
            </div>

            <button type="submit" class="btn btn-success btn-sm w-100 mb-2">
                <i class="fas fa-sign-in-alt"></i> Masuk
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
