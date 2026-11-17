<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFE'IN - Coffee Made Simple</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Karantina:wght@400;700&family=Pirata+One&family=Poppins:wght@400;600;700&display=swap"
        rel="stylesheet">

    <style>
        .heroCarousel {
            height: 500px;
            width: 100%;
        }

        .hero-line {
            width: 60px;
            height: 4px;
            background-color: #ffc107;
            margin-bottom: 20px;
        }
        /* Pastikan caption tidak menabrak bawah */
        .carousel-caption {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            /* Ini yang bikin teks rata kiri */
            z-index: 2;
        }


        .desktop-navbar {
            height: 100px;
            background-color: #ffffff;
            padding: 0 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.01);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 50;
        }

        .brand-nav {
            display: flex;
            align-items: center;
            height: 100%;
            text-decoration: none;
            font-family: 'karantina', cursive !important;
            font-size: 36px !important;
            font-weight: 700 !important;
            color: #000080 !important;
        }

        .nav-links a {
            color: #000080;
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
            margin-left: 40px;
            transition: 0.3s;
            opacity: 0, 6;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #000080;
            font-weight: 700;
            opacity: 1;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #ffffff;
            color: #000080;
        }

        .hero-content {
            text-align: center;
            margin-top: 30px;
        }

        .hero-content h1 {
            font-family: 'Karantina', cursive;
            font-size: 80px;
        }

        .hero-content p {
            font-family: 'Pirata One', cursive;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .btn-menu {
            background-color: #2f2fe4;
            color: white;
            padding: 15px 50px;
            border-radius: 50px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-menu:hover {
            background-color: #fff;
            color: #2f2fe4;
        }

        .about-section {
            background-color: #ffffff;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .about-section img {
            width: 500px !important;
            height: 500px !important;
            object-fit: contain !important;
        }

        .list-unstyled li {
            font-size: 1.1rem;
            color: #000080;
        }
    </style>
</head>

<body>

    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24" class="d-block w-100"
                    style="height: 500px; object-fit: cover; filter: brightness(60%);">
            </div>
        </div>

        <!-- Hapus justify-content-center, ganti dengan p-5 atau px-5 -->
        <div class="carousel-caption d-flex flex-column text-start h-100" style="padding-left: 100px;">
            <div style="max-width: 600px; margin-top: auto; margin-bottom: auto;">
                <div class="hero-line"></div>
                <h1 style="color: white;">COFFE'IN</h1>
                <p style="color: white;"> A cozy place where moments turn into memories bringing people together through
                    coffee and
                    shared experiences</p>
            </div>
        </div>
    </div>
    <div class="desktop-navbar">
        <a href="index.php" class="brand-nav">COFFE'IN</a>
        <div class="nav-links">
            <a href="index.php" class="active">Beranda</a>
            <a href="menu.php">Menu</a>
            <a href="about.php">About</a>
            <a href="event.php">event</a>
            <a href="kontak.php">Kontak</a>

        </div>
    </div>

    <div class="hero-content">
        <h1>COFFE'IN</h1>
        <p>Coffee made simple</p>
    </div>
    <section class="about-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="aset/img/cofe.png" class="img-fluid rounded" alt="Coffe'in Team">
                </div>

                <div class="col-md-6">
                    <h2 class="fw-bold text-primary">Kami bertujuan untuk menjadi Jaringan kepada masyarakat sebagai hub
                        coffeeshop yang autentik</h2>
                    <p class="mt-3">COFFE'IN adalah konsep Homy Coffeeshop dengan keunggulan sebagai berikut:</p>

                    <ul class="list-unstyled mt-4">
                        <li class="mb-3">✅ Harga yang relatif terjangkau dengan produk berkualitas</li>
                        <li class="mb-3">✅ Menu lengkap minuman, makanan ringan, dan hidangan utama</li>
                        <li class="mb-3">✅ Tempat berbagi cerita, pengetahuan, dan kreativitas</li>
                        <li class="mb-3">✅ Menyediakan ruang yang nyaman untuk bekerja dari mana saja</li>
                        <li class="mb-3">✅ Menyediakan photoboth buat kalian yang mempunyai pasangan atau just friend
                            saja</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>