<html>
<head>
    <title>Ganti Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #6CA0DC;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .profile-card {
            background-color: #6CA0DC;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
        }
        .profile-card .fa-user-circle {
            font-size: 50px;
            color: black;
        }
        .profile-card h2 {
            font-size: 24px;
            font-weight: bold;
            color: black;
            margin: 10px 0 5px;
        }
        .profile-card p {
            font-size: 16px;
            color: black;
            margin: 0 0 20px;
        }
        .btn-custom {
            background-color: #FF5C5C;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            font-size: 16px;
            margin: 5px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-control {
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <i class="fas fa-user-circle"></i>
        <h2>{{ $user->name }}</h2>
        <p>{{ $user->email }}</p>
        
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('profile.ganti.password') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="current_password">Password Saat Ini</label>
                <input type="password" class="form-control" id="current_password" name="current_password" required>
            </div>
            <div class="form-group">
                <label for="new_password">Password Baru</label>
                <input type="password" class="form-control" id="new_password" name="password" required>
            </div>
            <div class="form-group">
                <label for="new_password_confirmation">Konfirmasi Password Baru</label>
                <input type="password" class="form-control" id="new_password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>

        <!-- Tombol Kembali -->
        <div class="form-group mt-3">
            <a href="{{ url('/') }}" class="btn btn-secondary">Kembali ke Home</a>
        </div>
    </div>
</body>
</html>
