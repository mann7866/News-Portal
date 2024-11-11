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
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            position: relative;
            z-index: 1;
            padding: 20px;
        }

        /* Background */
        body {
            background: linear-gradient(135deg, #f5f7f5 0%, #ffffff 100%);
            color: #000000;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
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
            background: linear-gradient(135deg, #1e7822, #40c347 ); /* Gradasi warna hijau */
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
            background: linear-gradient(135deg, #1e7822, #40c347 ); /* Gradasi warna hijau */
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
            background: linear-gradient(135deg,#1e7822, #40c347 ); /* Gradasi warna hijau */
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
            background: linear-gradient(135deg, #40c347, #1e7822); /* Gradasi warna hijau */
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
            background: linear-gradient(135deg, #40c347, #1e7822); /* Gradasi warna hijau */
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
            background: linear-gradient(135deg, #40c347, #1e7822); /* Gradasi warna hijau */
            border-radius: 75px; /* Ujung lonjong */
            transform: rotate(45deg) translate(-60%, 0%); /* Memutar dan menggeser kotak */
            z-index: -1; /* Agar kotak tidak mengganggu elemen lainnya */
        }
        /* Resize decorative elements on smaller screens */
        @media (max-width: 767px) {
            .card {
                max-width: 100%;
                margin: 20px;
            }

            .decorative-box-1, .decorative-box-2, .decorative-box-3, 
            .decorative-box-4, .decorative-box-5, .decorative-box-6 {
                display: none;
            }

            .login-title {
                font-size: 1.25rem;
            }

            .login-subtitle {
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body>
    <div class="decorative-box-1"></div>
    <div class="decorative-box-2"></div>
    <div class="decorative-box-3"></div>
    <div class="decorative-box-4"></div>
    <div class="decorative-box-5"></div>
    <div class="decorative-box-6"></div>
    <!-- ... Other decorative boxes ... -->

    <div class="card p-4">
        <div class="text-center mb-4">
            <img src="{{ asset('logo/smkAlazhar.jpeg') }}" alt="Logo Sekolah" class="rounded-circle"
                style="width: 80px; height: 80px;">
            <h2 class="login-title mt-2">School News Portal Login</h2>
            <p class="login-subtitle">Masuk untuk mengakses berita dan informasi terkini dari sekolah.</p>
        </div>

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email" class="text-dark font-weight-bolder">
                    <i class="fas fa-envelope"></i> {{ __('Email') }}
                </label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                    placeholder="Masukkan email Anda" required autofocus>
            </div>

            <div class="form-group mt-3">
                <label for="password" class="text-dark font-weight-bolder">
                    <i class="fas fa-lock"></i> {{ __('Password') }}
                </label>
                <div class="input-group">
                    <input id="password" type="password" class="form-control" name="password"
                        placeholder="Masukkan kata sandi Anda" required>
                    <div class="input-group-append">
                        <span class="input-group-text" onclick="togglePassword()">
                            <i id="togglePasswordIcon" class="fas fa-eye"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-success btn-block">
                    <i class="fas fa-sign-in-alt"></i> {{ __('Login') }}
                </button>
            </div>
        </form>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById("password");
            const toggleIcon = document.getElementById("togglePasswordIcon");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>

</html>
