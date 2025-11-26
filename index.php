<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sovereigns</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Gaya Navbar */
        .navbar {
            background-color: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .navbar-brand img {
            height: 50px;
        }
        .nav-link {
            color: white !important;
            font-weight: 500;
            margin: 0 10px;
        }
        .nav-link:hover {
            color: #4e73df !important;
        }

        /* Gaya khusus untuk Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                        url('assets/img/hero-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .hero-title {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
        .btn-cta {
            padding: 12px 30px;
            font-size: 1.1rem;
            border-radius: 50px;
            background-color: #4e73df;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-cta:hover {
            background-color: #2e59d9;
            transform: scale(1.05);
        }

        /* Section Tentang */
        #tentang {
            padding: 100px 20px;
            background-color: #f8f9fa;
        }
        .section-title {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #333;
        }
        .section-text {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #555;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <!-- Logo Kelas -->
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png" alt="Logo Kelas"> <!-- Ganti dengan path logo Anda -->
            </a>

            <!-- Tombol collapse untuk mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu Navigasi -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang Sovereigns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kegiatan">Kegiatan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="hero-title">Selamat Datang di Sovereigns</h1>
                    <p class="hero-subtitle">"Menuju Generasi Cerdas, Mandiri, dan Berprestasi"</p>
                    <a href="#tentang" class="btn btn-cta">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Tentang Sovereigns -->
    <section id="tentang">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="section-title text-center">Apa Itu Sovereigns?</h2>
                    <p class="section-text">
                        Sovereigns adalah sebuah komunitas atau kelas yang dibentuk untuk menciptakan generasi muda yang mandiri, kritis, dan berprestasi. 
                        Kami percaya bahwa pendidikan tidak hanya terbatas pada ruang kelas, tetapi juga melalui kegiatan nyata, kerja sama tim, dan pengembangan diri.
                        Dengan semangat "Menuju Generasi Cerdas, Mandiri, dan Berprestasi", Sovereigns terus berupaya memberikan kontribusi positif bagi lingkungan dan masyarakat sekitar.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>