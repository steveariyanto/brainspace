<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="flex items-center justify-center min-h-screen bg-[#BFD4DB]">
    <div class="bg-[#AECBD6] p-8 rounded-lg shadow-lg w-96">    
        <div class="flex flex-col items-center mb-6">
            <h1 class="text-xl font-bold text-black">BrainSpace</h1>
        </div>
        <h2 class="text-2xl font-bold mb-4 text-black">Register</h2>

        <!-- Form Register -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Error Handling -->
            @if ($errors->any())
                <div class="mb-4 p-4 bg-red-100 text-red-700 border border-red-300 rounded-md">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Name Input -->
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2 text-black" for="name">Name</label>
                <input class="w-full px-3 py-2 border rounded-lg bg-[#96B9D0] text-black @error('name') border-red-500 @enderror" type="text" id="name" name="name" placeholder="Name" value="{{ old('name') }}" required>
            </div>

            <!-- Email Input -->
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2 text-black" for="email">Email</label>
                <input class="w-full px-3 py-2 border rounded-lg bg-[#96B9D0] text-black @error('email') border-red-500 @enderror" type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            </div>

            <!-- Password Input -->
            <div class="mb-4 relative">
                <label class="block text-sm font-bold mb-2 text-black" for="password">Password</label>
                <input class="w-full px-3 py-2 border rounded-lg bg-[#96B9D0] text-black @error('password') border-red-500 @enderror" type="password" id="password" name="password" placeholder="Password" required>
                <i class="fas fa-eye-slash absolute right-3 top-10 cursor-pointer text-black" id="toggle-password"></i>
            </div>

            <!-- Password Confirmation Input -->
            <div class="mb-4 relative">
                <label class="block text-sm font-bold mb-2 text-black" for="password_confirmation">Confirm Password</label>
                <input class="w-full px-3 py-2 border rounded-lg bg-[#96B9D0] text-black" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                <i class="fas fa-eye-slash absolute right-3 top-10 cursor-pointer text-black" id="toggle-password-confirmation"></i>
            </div>

            <!-- Register Button -->
            <div class="mb-4">
                <button class="w-full bg-[#78A2CC] text-white py-2 rounded-lg" type="submit">REGISTER</button>
            </div>

            <!-- Link to Login -->
            <div class="text-center">
                <p class="text-sm text-black">Sudah punya akun? <a href="{{ route('login') }}" class="text-[#88AED0]">Login disini</a></p>
            </div>
        </form>
    </div>

    <script>
        // Script untuk toggle visibility password
        const togglePassword = document.querySelector('#toggle-password');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function () {
            if (password.type === 'password') {
                password.type = 'text';
                togglePassword.classList.remove('fa-eye-slash');
                togglePassword.classList.add('fa-eye');
            } else {
                password.type = 'password';
                togglePassword.classList.remove('fa-eye');
                togglePassword.classList.add('fa-eye-slash');
            }
        });

        // Script untuk toggle visibility password_confirmation
        const togglePasswordConfirmation = document.querySelector('#toggle-password-confirmation');
        const passwordConfirmation = document.querySelector('#password_confirmation');

        togglePasswordConfirmation.addEventListener('click', function () {
            if (passwordConfirmation.type === 'password') {
                passwordConfirmation.type = 'text';
                togglePasswordConfirmation.classList.remove('fa-eye-slash');
                togglePasswordConfirmation.classList.add('fa-eye');
            } else {
                passwordConfirmation.type = 'password';
                togglePasswordConfirmation.classList.remove('fa-eye');
                togglePasswordConfirmation.classList.add('fa-eye-slash');
            }
        });
    </script>
</body>
</html>
