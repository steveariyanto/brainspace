<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- for icons -->
    <style>
        body {
            background-color: #AECBD6; /* Set the background color */
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="card p-4 shadow-lg w-100" style="max-width: 400px; background-color: #ffffff;">
        <div class="text-center mb-4">
            <h1 class="card-title text-black fw-bold">BrainSpace</h1>
        </div>
        <h2 class="text-center fw-bold mb-4 text-black">Login</h2>
        <!-- Menambahkan CSRF token -->
        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label fw-bold text-black">Email</label>
                <input type="email" class="form-control bg-light border-0" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3 position-relative">
                <label for="password" class="form-label fw-bold text-black">Password</label>
                <input type="password" class="form-control bg-light border-0" id="password" name="password" placeholder="Password" required>
                <i class="fas fa-eye-slash position-absolute top-50 end-0 translate-middle-y me-3" style="cursor: pointer;" id="toggle-password"></i>
            </div>
            <div class="mb-3 text-end">
                <a href="your_forgot_password_link_here" class="text-decoration-none text-primary">Forgot Password?</a>
            </div>
            <button type="submit" class="btn btn-primary w-100">LOG IN</button>
            <div class="text-center mt-3">
                <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-primary">Sign up here</a></p>
            </div>
        </form>
    </div>

    <script>
        // Script untuk toggle visibility password
        const togglePassword = document.querySelector('#toggle-password');
        const password = document.querySelector('#password');
    
        togglePassword.addEventListener('click', function () {
            // Cek apakah password saat ini disembunyikan atau tidak
            if (password.type === 'password') {
                password.type = 'text';  // Tampilkan password
                togglePassword.classList.remove('fa-eye-slash');  // Ganti ikon
                togglePassword.classList.add('fa-eye');
            } else {
                password.type = 'password';  // Sembunyikan password
                togglePassword.classList.remove('fa-eye');  // Ganti ikon
                togglePassword.classList.add('fa-eye-slash');
            }
        });
    </script>    
</body>
</html>
