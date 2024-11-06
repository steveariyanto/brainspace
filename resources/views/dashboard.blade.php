<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrainSpace</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .d-flex {
            display: flex;
            height: 100%;
        }

        .sidebar {
            width: 250px;
            background-color: #006d5b;
            color: white;
            display: flex;
            flex-direction: column;
            padding: 20px;
            height: 100vh;
            overflow-y: auto;
        }

        .sidebar-header {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .sidebar-nav {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .sidebar-nav a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 8px 12px;
            border-radius: 5px;
        }

        .sidebar-nav a:hover {
            background-color: #005f4f;
        }

        .sidebar-nav i {
            margin-right: 10px;
        }

        .sidebar-footer {
            margin-top: auto;
            font-size: 0.875rem;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }

        .content img {
            height: 350px;
            object-fit: cover;
            width: 100%;
        }

        .search-bar input {
            width: 100%;
            padding: 10px;
            border-radius: 20px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body class="bg-light">
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">BrainSpace</div>
            <nav class="sidebar-nav">
                <a href="#">
                    <i class="fas fa-home"></i> Dashboard
                </a>
                <a href="#">
                    <i class="fas fa-user"></i> Users
                </a>
                <a href="#">
                    <i class="fas fa-file-alt"></i> Project
                </a>
                <a href="#">
                    <i class="fas fa-bell"></i> Notifications
                </a>
            </nav>
            <div class="sidebar-footer">
                <h2 class="fs-6 fw-bold">Tentang Kami</h2>
                <p class="fs-6">Institut Teknologi dan Bisnis Sabda Setia</p>
            </div>
        </div>

        <!-- Main Content -->
        <div class="content">
            <div class="position-relative mb-4">
                <img src="https://itbss.ac.id/wp-content/uploads/2023/10/IMG_7818-1-scaled.jpg"
                     alt="Gedung ITBSS" class="img-fluid w-100">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-50 d-flex flex-column justify-content-center align-items-center text-white text-center p-3">
                    <h2 class="fs-4 fw-bold">Repositori Proyek Mahasiswa Institut Teknologi dan Bisnis Sabda Setia</h2>
                    <p class="mt-2">Selamat datang di Repositori Proyek Mahasiswa. Di sini, Anda dapat mengakses proyek inovatif mahasiswa, termasuk PowerPoint, Paper, dan Laporan Proyek dari berbagai bidang ilmu. Platform ini mendukung kemajuan akademik dan berbagi gagasan baru.</p>
                </div>
            </div>

            <div class="input-group mb-4">
                <input type="text" class="form-control p-3" placeholder="Apa yang ingin kamu cari?">
            </div>

            <div class="row g-3">
                <div class="col-md-4">
                    <p>Analisis Efektivitas Aplikasi Luminds Dalam Mendukung Kesehatan Mental Generasi Z Menggunakan Analisis SWOT</p>
                </div>
                <div class="col-md-4">
                    <p>PERANCANGAN SISTEM ABSENSI MAHASISWA BERBASIS IOT DAN KARTU RFID</p>
                </div>
                <div class="col-md-4">
                    <p>PPT Kelompok 8 - Kepemimpinan Strategis</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>