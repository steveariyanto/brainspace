<html>
<head>
    <title>Ubah Profil</title>
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
    </style>
</head>
<body>
    <div class="profile-card">
        <i class="fas fa-user-circle"></i>
        <h2>steveariyanto</h2>
        <p>steve.ariyanto@itbss.ac.id</p>
        <a href="{{ route('profile.ganti.password') }}" class="btn btn-custom">Ubah Password</a>
        <form action="{{ route('logout') }}" method="POST" style="margin-top: 20px;">
            @csrf
            <button type="submit" class="btn-custom">Logout</button>
        </form>
    </div>
</body>
</html>