<!-- <html>
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
</html> -->

<html>
<head>
    <title>Ubah Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }
        .profile-card {
            background-color: #ffffff;
            text-align: center;
            padding: 30px;
            border-radius: 15px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .profile-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        .profile-card .fa-user-circle {
            font-size: 70px;
            color: #2C3E50;
            margin-bottom: 20px;
        }
        .profile-card h2 {
            font-size: 28px;
            font-weight: bold;
            color: #34495E;
            margin: 10px 0 5px;
        }
        .profile-card p {
            font-size: 16px;
            color: #7F8C8D;
            margin: 0 0 20px;
        }
        .btn-custom {
            background-color: #FF5C5C;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
            text-decoration: none;
        }
        .btn -custom:hover {
            background-color: #E74C3C;
            transform: scale(1.05);
        }
        form button {
            background-color: #2C3E50;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            font-size: 16px;
            margin-top: 15px;
            transition: background-color 0.3s, transform 0.2s;
        }
        form button:hover {
            background-color: #34495E;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <i class="fas fa-user-circle"></i>
        <h2>steveariyanto</h2>
        <p>steve.ariyanto@itbss.ac.id</p>
        <a href="{{ route('profile.ganti.password') }}" class="btn-custom">Ubah Password</a>
        <form action="{{ route('logout') }}" method="POST" style="margin-top: 20px;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>
