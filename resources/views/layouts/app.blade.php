<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <!-- Pastikan tidak ada kode yang mengakses objek pengguna jika belum login -->
        @auth
            <span>Hello, {{ Auth::user()->name }}</span>
        @else
            <span>Hello, Guest</span>
        @endauth
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
