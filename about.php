<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFE'IN - About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Karantina:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .heroCarousel {
            height: 500px;
            width: 100%;
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

        .hero-line {
            width: 60px;
            height: 4px;
            background-color: #ffc107;
            margin-bottom: 20px;
        }



        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            padding-top: 90px;
        }


        .about-container {
            padding: 40px 10% 120px 10%;
            flex: 1;
        }

        /* Judul Halaman */
        .page-title {
            font-family: 'Karantina', cursive;
            font-size: 72px;
            color: #000080;
            margin-bottom: 60px;
            text-align: center;
            font-weight: 700;
            letter-spacing: 2px;
        }

        /* Banner Pengumuman Aplikasi */
        .app-announcement {
            background-color: #e2eadb;
            color: #;
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 60px;
            text-align: center;
            border: 1px solid rgba(2, 19, 13, 0.1);
        }

        .app-announcement h4 {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .btn-download {
            background-color: #000000;
            color: white;
            border-radius: 30px;
            padding: 8px 25px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
            margin-top: 10px;
        }

        .btn-download:hover {
            background-color: #b1cebb;
            color: white;
        }

        /* biar bisa di scroll */
        .fore-section {
            display: flex;
            gap: 60px;
            align-items: center;
            margin-bottom: 80px;
        }

        .fore-section.reverse {
            flex-direction: row-reverse;
        }


        .section-img-wrapper {
            width: 45%;
        }

        .section-img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 4px 15px #(0, 0, 0, 0.05);
        }

        .section-text {
            width: 55%;
        }

        .section-text span {
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #436850;
            font-weight: 600;
        }

        .section-text h3 {
            font-weight: 700;
            color: #000080;
            font-size: 32px;
            margin: 8px 0 20px 0;
        }

        .section-text p {
            color: #555;
            line-height: 1.8;
            font-size: 15px;
            text-align: justify;
        }

        .desktop-navbar {
            background-color: #ffffff;
            padding: 20px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.01);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .brand-nav {
            font-family: 'Karantina', cursive;
            font-size: 36px;
            font-weight: 700;
            color: #000080;
            text-decoration: none;
            letter-spacing: 1px;
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

        .location-section {
            background-color: #2f2fe4;
            color: #ffffff;
            padding: 100px;
            border-radius: 0 !important;
            display: flex;
            gap: 40px;
            align-items: center;
            margin-top: !important;
            border: 1px solid #E8E8E8;
            box-shadow: !important;
        }

        .location-info {
            width: 45%;
        }

        .location-info h3 {
            font-weight: 700;
            font-size: 28px;
            margin-bottom: 25px;
            color: #ffffff;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 20px;
        }

        .info-item i {
            font-size: 22px;
            color: #ffffff;
        }

        .info-item p {
            margin: 0;
            line-height: 1.6;
            font-size: 15px;
            color: #ffffff;
        }

        .map-container {
            position: relative;
            width: 55%;
            height: 280px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .map-img {
            widht: 100%;
            height: 100%;
            object-fit: cover;
        }

        .map-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #000080;
            font-weight: 600;
            font-size: 18px;
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
            <a href="index.php">Beranda</a>
            <a href="menu.php">Menu</a>
            <a href="about.php" class="active">About</a>
            <a href="event.php">event</a>
            <a href="kontak.php">Kontak</a>
        </div>
    </div>
    <div class="about-container">
        <h1 class="page-title">About COFFE'IN</h1>


        <!-- BANNER PEMBERITAHUAN UTAMA -->
        <div class="app-announcement">
            <h4>📢 PENGUMUMAN RESMI</h4>
            <p class="m-0 text-muted">Untuk memberikan pelayanan yang instan dan bebas antre, website kami kini berjalan
                sepenuhnya sebagai media informasi menu dan ekosistem digital. Seluruh aktivitas pemesanan wajib
                menggunakan aplikasi mobile official kami.</p>
            <a href="https://play.google.com" target="_blank" class="btn-download"><i class="bi bi-download"></i> Unduh
                Aplikasi</a>
        </div>

        <!-- SECTION 1: Our Story (Gambar Kiri, Teks Kanan) -->
        <div class="fore-section">
            <div class="section-img-wrapper">
                <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=600&auto=format&fit=crop"
                    alt="Suasana Cafe" class="section-img">
            </div>
            <div class="section-text">
                <span>Our Story</span>
                <h3>Grind The Essentials, Craft The Better Life</h3>
                <p>COFFE'IN lahir pada tahun 2026 membawa visi menyajikan esensi kopi premium dengan cara paling ringkas
                    tanpa merusak momen berhargamu . Kami memahami bahwa di dunia yang serba cepat ini, setiap detik
                    waktu Anda sangatlah berharga. Lewat racikan biji kopi pilihan terbaik nusantara, kami berdedikasi
                    menemani produktivitas harian Anda dengan cita rasa yang konstan dan membanggakan.</p>
            </div>
        </div>

        <!-- SECTION 2: Our Innovation (Gambar Kanan, Teks Kiri - REVERSE) -->
        <div class="fore-section reverse">
            <div class="section-img-wrapper">
                <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?q=80&w=600&auto=format&fit=crop"
                    alt="Coffee Tech" class="section-img">
            </div>
            <div class="section-text">
                <span>Our Innovation</span>
                <h3>Konsep Pick-Up Bebas Antre</h3>
                <p>Mengadaptasi sistem teknologi modern, COFFE'IN memisahkan diri dari cara lama pemesanan kopi
                    konvensional. Melalui integrasi aplikasi mobile terpusat, Anda dapat memesan menu kopi favorit Anda
                    saat masih di perjalanan, mengatur waktu pengambilan secara fleksibel, dan mengambilnya langsung di
                    bar kami tepat waktu tanpa perlu berdiri mengantre di kasir. Coffee made simple, life made better.
                </p>
            </div>
        </div>

        <!-- SECTION 3: Quality Commitment (Gambar Kiri, Teks Kanan) -->
        <div class="fore-section">
            <div class="section-img-wrapper">
                <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?q=80&w=600&auto=format&fit=crop"
                    alt="Premium Quality" class="section-img">
            </div>
            <div class="section-text">
                <span>Our Quality</span>
                <h3>100% Biji Kopi Lokal Bersertifikat Halal</h3>
                <p>Kualitas rasa adalah komitmen absolut kami. COFFE'IN hanya bekerja sama dengan petani lokal untuk
                    mengurasi biji kopi arabika dan robusta pilihan yang diproses secara higienis dan modern. Seluruh
                    bahan baku pendukung, mulai dari susu segar hingga sirup perasa alami kami dipastikan telah
                    mengantongi sertifikasi Halal MUI untuk menjaga rasa aman dan kepuasan di setiap tegukan kopi Anda.
                </p>
            </div>
        </div>
    </div>
    <!-- lokasi-->
    <div class="location-section">
        <div class="location-info">
            <h3>Visit Our Store</h3>
            <div class="info-item">
                <i class="bi bi-geo-alt-fill"></i>
                <div>
                    <p><strong>Alamat Utama:</strong></p>
                    <p>Jl. Kopi Nikmat No. 17, Jakarta Selatan</p>
                </div>
            </div>
            <div class="info-item">
                <i class="bi bi-clock-fill"></i>
                <div>
                    <p><strong>Operational Hours:</strong></p>
                    <p>Senin - Minggu (08.00 - 22.00 WIB)</p>
                </div>
            </div>
            <div class="info-item">
                <i class="bi bi-instagram"></i>
                <div>
                    <p><strong>Social Media:</strong></p>
                    <p>@coffein.id</p>
                </div>
            </div>
        </div>
        <div class="map-container">
            <img src="https://media.wired.com/photos/59269cd37034dc5f91bec0f1/master/pass/GoogleMapTA.jpg">

            <div class="map-overlay">
                <i class="bi bi-geo-alt-fill"
                    style="font-size: 40px; display: block; margin-bottom: 10px; color: #436850;"></i>
                <span>GOOGLE MAPS API INTEGRATION</span>
            </div>
        </div>
    </div>

</body>

</html>