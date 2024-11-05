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
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5);
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

        /* Background Decorative Elements */
        .book {
            position: fixed;
            animation: float 5s infinite ease-in-out;
            z-index: 0;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-15px);
            }
        }

        body {
            background: linear-gradient(135deg, #f5f7f5 0%, #ffffff 100%);
            color: #4CAF50;
            overflow-x: hidden;
            position: relative;
        }

        /* Additional decorative elements */
        .background-decoration {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <!-- Background Decorations -->
    <div class="background-decoration">
        <!-- Books -->
        <svg class="book" style="top: 10%; left: 5%;" width="90" height="90" viewBox="0 0 24 24">
            <path fill="currentColor" d="M7.616 21q-1.084 0-1.85-.766T5 18.384V6q0-1.258.871-2.129T8 3h9.385q.666 0 1.14.475T19 4.615v11.756q0 .156-.114.283q-.115.127-.309.192q-.523.137-.858.56t-.334.979q0 .536.325.962t.848.576q.215.073.329.213q.113.14.113.3v.058q0 .21-.144.358T18.5 21zm1.27-5.23q.212 0 .355-.145t.144-.356V4.5q0-.213-.144-.356Q9.097 4 8.884 4t-.356.144t-.144.356v10.77q0 .212.145.356t.356.143M7.615 20h9.364q-.285-.33-.44-.736t-.155-.88q0-.457.152-.87t.443-.745H7.616q-.689 0-1.152.472Q6 17.71 6 18.384q0 .689.464 1.152T7.616 20"/>
        </svg>

        <svg class="book" style="top: 30%; right: 10%;" width="90" height="90" viewBox="0 0 24 24">
            <path fill="currentColor" d="M6.75 22q-1.125 0-1.937-.763T4 19.35V5.4q0-.95.588-1.7t1.537-.95L16 .8v16l-9.475 1.9q-.225.05-.375.238T6 19.35q0 .275.225.463T6.75 20H18V4h2v18zM7 16.575l2-.4V4.225l-2 .4z"/>
        </svg>

        <svg class="book" style="bottom: 15%; left: 20%;" width="90" height="90" viewBox="0 0 24 24">
            <path fill="currentColor" d="M13 17.05q1.1-.525 2.213-.788T17.5 16q.9 0 1.763.15T21 16.6V6.7q-.825-.35-1.713-.525T17.5 6q-1.175 0-2.325.3T13 7.2zm-1 2.425q-.35 0-.663-.088t-.587-.237q-.975-.575-2.05-.862T6.5 18q-1.05 0-2.062.275T2.5 19.05q-.525.275-1.012-.025T1 18.15V6.1q0-.275.138-.525T1.55 5.2q1.175-.575 2.413-.888T6.5 4q1.45 0 2.838.375T12 5.5q1.275-.75 2.663-1.125T17.5 4q1.3 0 2.538.313t2.412.887q.275.125.413.375T23 6.1v12.05q0 .575-.487.875t-1.013.025q-.925-.5-1.937-.775T17.5 18q-1.125 0-2.2.288t-2.05.862q-.275.15-.587.238t-.663.087m2-10.7q0-.225.163-.462T14.525 8q.725-.25 1.45-.375T17.5 7.5q.5 0 .988.063t.962.162q.225.05.388.25t.162.45q0 .425-.275.625t-.7.1q-.35-.075-.737-.112T17.5 9q-.65 0-1.275.125t-1.2.325q-.45.175-.737-.025T14 8.775m0 5.5q0-.225.163-.462t.362-.313q.725-.25 1.45-.375T17.5 13q.5 0 .988.063t.962.162q.225.05.388.25t.162.45q0 .425-.275.625t-.7.1q-.35-.075-.737-.112T17.5 14.5q-.65 0-1.275.113t-1.2.312q-.45.175-.737-.012T14 14.275m0-2.75q0-.225.163-.462t.362-.313q.725-.25 1.45-.375t1.525-.125q.5 0 .988.063t.962.162q.225.05.388.25t.162.45q0 .425-.275.625t-.7.1q-.35-.075-.737-.112T17.5 12.5q-.65 0-1.275.125t-1.2.325q-.45.175-.737-.025T14 12.275"/>
        </svg>

        <svg class="book" style="top: 20%; left: 30%;" width="47" height="47" viewBox="0 0 24 24">
            <path fill="currentColor" d="M7.616 21q-1.084 0-1.85-.766T5 18.384V6q0-1.258.871-2.129T8 3h9.385q.666 0 1.14.475T19 4.615v11.756q0 .156-.114.283q-.115.127-.309.192q-.523.137-.858.56t-.334.979q0 .536.325.962t.848.576q.215.073.329.213q.113.14.113.3v.058q0 .21-.144.358T18.5 21zm1.27-5.23q.212 0 .355-.145t.144-.356V4.5q0-.213-.144-.356Q9.097 4 8.884 4t-.356.144t-.144.356v10.77q0 .212.145.356t.356.143M7.615 20h9.364q-.285-.33-.44-.736t-.155-.88q0-.457.152-.87t.443-.745H7.616q-.689 0-1.152.472Q6 17.71 6 18.384q0 .689.464 1.152T7.616 20"/>
        </svg>

        <svg class="book" style="bottom: 25%; right: 25%;" width="80" height="80" viewBox="0 0 24 24">
            <path fill="currentColor" d="M6.75 22q-1.125 0-1.937-.763T4 19.35V5.4q0-.95.588-1.7t1.537-.95L16 .8v16l-9.475 1.9q-.225.05-.375.238T6 19.35q0 .275.225.463T6.75 20H18V4h2v18zM7 16.575l2-.4V4.225l-2 .4z"/>
        </svg>
    </div>

   <!-- Card Wrapper -->
   <div class="card p-4">
    <!-- News Icon and Title -->
    <div class="text-center mb-4">
        <div class="text-center mb-4">
            <img src="{{ asset('logo/smkAlazhar.jpeg') }}" alt="Logo Sekolah" class="rounded-circle" style="width: 80px; height: 80px;">
        </div>
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
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-group mt-3">
            <label for="password" class="text-success font-weight-bolder">{{ __('Password') }}</label>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
