<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - School News Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style/register.css')}}">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <!-- Decorative Boxes -->
    <div class="decorative-box decorative-box-1"></div>
    <div class="decorative-box decorative-box-2"></div>
    <div class="decorative-box decorative-box-3"></div>
    <div class="decorative-box decorative-box-4"></div>
    <div class="decorative-box decorative-box-5"></div>
    <div class="decorative-box decorative-box-6"></div>
    
    <!-- Card Wrapper -->
    <div class="card d-flex flex-column">
        <!-- Logo -->
        <div class="text-center mb-4">
            <img src="{{ asset('logo/smkAlazhar.jpeg') }}" alt="Logo Sekolah" class="rounded-circle" style="width: 80px; height: 80px;">
            {{-- <img src="{{ asset('logo/smkAlazhar.jpeg') }}" alt="Logo Sekolah" class="rounded-circle" style="width: 80px; height: 80px;"> --}}
            <h2 class="register-title mt-2">Register for School News Portal</h2>
            <p class="register-subtitle">Silakan daftar untuk mengakses berita dan informasi terkini dari sekolah.</p>
        </div>
        <!-- Form Section -->
        <div class="form-section d-flex justify-content-between">
            <div class="form-left w-50 pr-2">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Form fields: Name, Username -->
                    <div class="form-group">
                        <label for="name"><i class="fas fa-user"></i> Name</label>
                        <input id="name" type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="username"><i class="fas fa-user-tag"></i> Username</label>
                        <input id="username" type="text" class="form-control" name="username" required>
                    </div>
                </form>
            </div>
            <div class="form-right w-50 pl-2">
                <form method="POST" action="{{ route('register') }}">
                    <!-- Form fields: Email, Password, Confirm Password -->
                    <div class="form-group">
                        <label for="email"><i class="fas fa-envelope"></i> Email</label>
                        <input id="email" type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password"><i class="fas fa-lock"></i> Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password_confirmation"><i class="fas fa-lock"></i> Confirm Password</label>
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-success mt-3 w-100">Register</button>
                </form>
            </div>
        </div>
    </div>

    

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
