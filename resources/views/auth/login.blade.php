<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #AECBD6;
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper .form-control {
            padding-right: 40px; /* Add space for the icon */
        }

        .password-wrapper i {
            position: absolute;
            top: 75%; /* Move the icon closer to the bottom of the input field */
            transform: translateY(-50%);
            right: 15px;
            cursor: pointer;
            font-size: 16px; /* Increase the font size of the icon */
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="card p-4 shadow-lg w-100" style="max-width: 400px; background-color: #ffffff;">
        <div class="text-center mb-4">
            <h1 class="card-title text-black fw-bold">BrainSpace</h1>
        </div>
        <h2 class="text-center fw-bold mb-4 text-black">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label fw-bold text-black">Email</label>
                <input type="email" class="form-control bg-light border-0" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3 password-wrapper">
                <label for="password" class="form-label fw-bold text-black">Password</label>
                <input type="password" class="form-control bg-light border-0" id="password" name="password" placeholder="Password" required>
                <i class="fas fa-eye-slash"></i>
            </div>
            <button type="submit" class="btn btn-primary w-100">LOG IN</button>
            <div class="text-center mt-3">
                <p class="text-muted">Don't have an account? <a href="/register" class="text-primary">Sign up here</a></p>
            </div>
        </form>
    </div>

    <script>
        // Script to toggle password visibility
        const togglePassword = document.querySelector('.password-wrapper i');
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
    </script>
</body>
</html>