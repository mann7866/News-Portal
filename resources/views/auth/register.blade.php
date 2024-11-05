<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - School News Portal</title>
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
        .register-title {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .register-subtitle {
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
        <!-- Title -->
        <div class="text-center mb-4">
            <i class="fas fa-user-plus news-icon"></i>
            <h2 class="register-title mt-2">Register for School News Portal</h2>
            <p class="register-subtitle">Silakan daftar untuk mengakses berita dan informasi terkini dari sekolah.</p>
        </div>

        <!-- Register Form -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group">
                <label for="name" class="text-success font-weight-bold">Name</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="form-group mt-3">
                <label for="email" class="text-success font-weight-bold">Email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group mt-3">
                <label for="password" class="text-success font-weight-bold">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-group mt-3">
                <label for="password_confirmation" class="text-success font-weight-bold">Confirm Password</label>
                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                @error('password_confirmation')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Action Buttons: Login, Already Registered -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <a class="text-sm text-success" href="{{ route('login') }}">
                    Already registered?
                </a>
                <button type="submit" class="btn btn-success text-white">
                    Register
                </button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
