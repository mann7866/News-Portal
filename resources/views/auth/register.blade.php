<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @media (prefers-color-scheme: dark) {
            body {
                --tw-bg-opacity: 1 !important;
                background-color: rgba(17, 24, 39, var(--tw-bg-opacity)) !important;
                color: rgba(209, 213, 219, var(--tw-text-opacity)) !important;
            }
        }
    </style>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-white dark:bg-gray-800">

<div class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-800">
    <div class="max-w-md w-full bg-white dark:bg-gray-900 rounded-lg shadow-lg overflow-hidden mx-8 border border-gray-300 dark:border-gray-600">
        <div class="px-6 py-8">
            <div class="flex justify-center mb-4">
                <img src="logo/smkAlazhar.jpeg" alt="Logo" class="h-12"> <!-- Ganti path_to_your_logo.png dengan path logo Anda -->
            </div>
            <div>
                @if(session('status'))
                    <div class="bg-red-500 p-4 rounded-lg mb-4 text-white text-center">
                        {{ __('Registration failed. Please try again.') }}
                    </div>
                @endif
            </div>

            <h2 class="text-2xl font-bold mb-8 text-center text-gray-900 dark:text-gray-200">Create a New Account</h2>

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                    <input id="name" name="name" type="text" required class="mt-1 px-3 py-2 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter your name" value="{{ old('name') }}">
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ __('Invalid name.') }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email Address</label>
                    <input id="email" name="email" type="email" required class="mt-1 px-3 py-2 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter your email address" value="{{ old('email') }}">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ __('Invalid email or already registered.') }}</p>
                    @enderror
                </div>

                <div class="relative">
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                    <div class="flex items-center border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus-within:ring-indigo-500 focus-within:border-indigo-500">
                        <input id="password" name="password" type="password" required class="px-3 py-2 block w-full focus:outline-none sm:text-sm" placeholder="Enter your password">
                        <button type="button" id="togglePassword" class="flex items-center px-3 py-2 text-gray-400 dark:text-gray-600" aria-label="Toggle password visibility">
                            <i class="fas fa-eye-slash"></i>
                        </button>
                    </div>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ __('Password must be at least 8 characters.') }}</p>
                    @enderror
                </div>

                <div class="relative">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Confirm Password</label>
                    <div class="flex items-center border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus-within:ring-indigo-500 focus-within:border-indigo-500">
                        <input id="password_confirmation" name="password_confirmation" type="password" required class="px-3 py-2 block w-full focus:outline-none sm:text-sm" placeholder="Confirm your password">
                        <button type="button" id="toggleConfirmPassword" class="flex items-center px-3 py-2 text-gray-400 dark:text-gray-600" aria-label="Toggle password visibility">
                            <i class="fas fa-eye-slash"></i>
                        </button>
                    </div>
                    @error('password_confirmation')
                        <p class="mt-2 text-sm text-red-600">{{ __('Password confirmation does not match.') }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="w-full px-4 py-2 text-sm font-medium text-white bg-green-600 hover:bg-green-700 dark:bg-gray-800 dark:hover:bg-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 dark:focus:ring-offset-gray-800">Register</button>
                </div>
            </form>

            <div class="mt-4 text-sm text-center">
                <span class="text-gray-700 dark:text-gray-300">Already have an account? </span>
                <a href="{{ route('login') }}" class="text-green-600 hover:text-green-500 dark:text-gray-300 dark:hover:text-gray-200">Login here</a>
            </div>
        </div>
    </div>
</div>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
    const confirmPassword = document.getElementById('password_confirmation');

    togglePassword.addEventListener('click', function() {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.querySelector('i').classList.toggle('fa-eye-slash');
        this.querySelector('i').classList.toggle('fa-eye');
    });

    toggleConfirmPassword.addEventListener('click', function() {
        const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
        confirmPassword.setAttribute('type', type);
        this.querySelector('i').classList.toggle('fa-eye-slash');
        this.querySelector('i').classList.toggle('fa-eye');
    });
</script>

</body>
</html>
