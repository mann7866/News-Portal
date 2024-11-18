<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>Login - School News Portal</title>

  <style>
    /* Background */
    body {
      background: linear-gradient(135deg, #f5f7f5 0%, #ffffff 100%);
      color: #000000;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow-x: hidden;
      padding: 20px;
    }

    /* Decorative photos with improved positioning */
    .photo {
      position: fixed; /* Changed to fixed for better scrolling behavior */
      border-radius: 12px;
      object-fit: cover;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
      z-index: 1;
    }

    .photo:hover {
      transform: scale(1.05);
    }

    .photo.top-left {
      top: 10%;
      left: 5%;
      width: 200px;
      height: auto;
    }

    .photo.top-right {
      top: 15%;
      right: 5%;
      width: 150px;
      height: auto;
    }

    .photo.bottom-left {
      bottom: 10%;
      left: 5%;
      width: 150px;
      height: auto;
    }

    .photo.bottom-right {
      bottom: 15%;
      right: 5%;
      width: 180px;
      height: auto;
    }

    /* Card styles */
    .card {
      max-width: 420px;
      width: 100%;
      border-radius: 15px;
      background-color: rgba(248, 249, 250, 0.95);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      transition: transform 0.2s ease;
      position: relative;
      z-index: 2;
      padding: 25px;
      margin: 20px;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    /* Form elements */
    .form-control {
      border-radius: 8px;
      padding: 12px;
      border: 1px solid #dde1e5;
    }

    .input-group-text {
      border-radius: 0 8px 8px 0;
      cursor: pointer;
      background-color: #ffffff;
    }

    .btn-success {
      padding: 12px;
      border-radius: 8px;
      width: 100%;
      font-weight: 500;
    }

    /* Responsive adjustments */
    @media (max-width: 1200px) {
      .photo {
        width: 120px;
      }
      
      .photo.top-left {
        width: 160px;
      }
    }

    @media (max-width: 992px) {
      .photo.top-right, .photo.bottom-left {
        display: none;
      }
      
      .photo.top-left, .photo.bottom-right {
        width: 140px;
      }
    }

    @media (max-width: 768px) {
      .photo {
        display: none;
      }

      .card {
        margin: 10px;
        padding: 20px;
      }
    }
  </style>
</head>

<body>
  <!-- Decorative photos -->
  <img src="lgin/image1.jpg" alt="Photo 1" class="photo top-left">
  <img src="image2.jpg" alt="Photo 2" class="photo top-right">
  <img src="image3.jpg" alt="Photo 3" class="photo bottom-left">
  <img src="lgin/image4.jpg" alt="Photo 4" class="photo bottom-right">

  <div class="card">
    <div class="text-center mb-4">
      <img src="{{ asset('logo/smkAlazhar.jpeg') }}" alt="Logo Sekolah" class="rounded-circle mb-3"
        style="width: 80px; height: 80px; object-fit: cover;">
      <h2 class="login-title">School News Portal Login</h2>
      <p class="login-subtitle text-muted">Masuk untuk mengakses berita dan informasi terkini dari sekolah.</p>
    </div>

    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="mb-3">
        <label for="email" class="form-label fw-bold">
          <i class="fas fa-envelope"></i> {{ __('Email') }}
        </label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
          placeholder="Masukkan email Anda" required autofocus>
      </div>

      <div class="mb-4">
        <label for="password" class="form-label fw-bold">
          <i class="fas fa-lock"></i> {{ __('Password') }}
        </label>
        <div class="input-group">
          <input id="password" type="password" class="form-control" name="password"
            placeholder="Masukkan kata sandi Anda" required>
          <span class="input-group-text" onclick="togglePassword()">
            <i id="togglePasswordIcon" class="fas fa-eye"></i>
          </span>
        </div>
      </div>

      <button type="submit" class="btn btn-success">
        <i class="fas fa-sign-in-alt me-2"></i>{{ __('Login') }}
      </button>
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