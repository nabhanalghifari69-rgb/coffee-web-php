<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFE'IN - event</title>
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

        .page-header {
            padding: 60px 60px 30px 60px;
            color: #000080;
        }

        .page-title {
            font-size: 69px;
            font-weight: 600;
            margin-bottom: 90px !important;
            text-align: center;
            color: #2f2fe4;
        }

        .category-pills {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .cat-btn {
            padding: 8px 25px;
            border-radius: 20px;
            font-size: 15px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .cat-active {
            background-color: #ffffff;
            color: #2f2fe4;
            box-shadow: 0 4px 10px rgba(0, 0, 0, .2);
        }

        .cat-default {
            background-color: transparent;
            color: #000080 border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .card {
            transition: transform 0.3s ease;
            border-radius: 15px;
            /* Biar ujungnya melengkung */
            overflow: hidden;
        }

        .col-md-4 {
            padding-left: 45px !important;
            padding-right: 50px !important;
        }

        .card {
            margin-bottom: 30px;
            /* Jarak bawah antar kartu jika layar sempit */
        }

        .card:hover {
            transform: translateY(-10px);
            /* Efek melayang saat di-hover */
        }

        .card-img-top {
            height: 200px;
            /* Samakan tinggi gambar */
            object-fit: cover;
        }

        .card-title {
            font-weight: 700;
            color: #000080;
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
            z-index: 50;
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

        .collaboration-wrapper {
            background-color: #2f2fe4;
            color: #ffffff;
            padding: 80px 60px;
            border-radius: 0;
        }

        /* Section Lokasi & Map */
        .location-section {
            background-color: #2f2fe4;
            color: #ffffff;
            padding: 100px;
            border-radius: 0 !important;
            display: flex;
            gap: 40px;
            align-items: center;
            margin-top: 0 !important;
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

        .contact-form-section {
            background-color: #2f2fe4;
            color: white;
            padding: 85px 35px;
            width: 100%;
            margin: 0 auto;
        }

        .custom-from {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin: 0 auto;
        }

        .custom-form-input,
        .custom-form textarea {
            padding: 20px !important;
            border: 11px solid #000080;
            border-radius: 10px;
            font-size: 16px;
            width: 100%;
            margin-bottom: 10px;
        }

        .textarea {
            height: 150px !important;
        }

        .submit-btn {
            background-color: #000080;
            color: #ddd;
            padding: 18px 0;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 20px;
        }

        .submit-btn:hover {
            background-color: #0056b3;
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
    </div>
    <div class="container my-5">
        <h1 class="page-title text-center mb-5">Event & News</h1>

        <div class="row g-4 mb-5">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24" class="card-img-top"
                        alt="Event">
                    <div class="card-body p-4">
                        <small class="text-muted">April 17, 2026</small>
                        <h5 class="card-title mt-2">Affordable Hangout Spots</h5>
                        <p class="card-text text-muted small">coffe'in - Finding a comfortable place to hang out
                            without spending too much money...</p>
                        <a href="#" class="text-primary fw-bold text-decoration-none">Read More ></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348" class="card-img-top"
                        alt="Event">
                    <div class="card-body">
                        <small class="text-muted">April 17, 2026</small>
                        <h5 class="card-title mt-2">Delicious Yet Affordable Coffee</h5>
                        <p class="card-text text-muted small">coffe'in - Many people assume that great coffee always
                            comes with a high price tag...</p>
                        <a href="#" class="text-primary fw-bold text-decoration-none">Read More ></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085" class="card-img-top"
                        alt="Event">
                    <div class="card-body">
                        <small class="text-muted">April 17, 2026</small>
                        <h5 class="card-title mt-2">Coffee Business Opportunities</h5>
                        <p class="card-text text-muted small">coffe'in - The coffee industry in Indonesia is
                            experiencing rapid growth...</p>
                        <a href="#" class="text-primary fw-bold text-decoration-none">Read More ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="desktop-navbar">
        <a href="index.php" class="brand-nav">COFFE'IN</a>
        <div class="nav-links">
            <a href="index.php">Beranda</a>
            <a href="menu.php">Menu</a>
            <a href="about.php">About</a>
            <a href="event.php" class="active">event</a>
            <a href="kontak.php">Kontak</a>
        </div>
    </div>
    <section class="collaboration-wrapper">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h2>Contact for Event Collaboration</h2>
                    <p>Contact us to reserve your spot and enjoy a seamless homy coffee experience at your preferred
                        outlet.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-3 bg-white bg-opacity-25 rounded d-flex align-items-center">
                        <i class="bi bi-person-circle fs-2 me-3"></i>
                        <div>
                            <div class="fw-bold">Event Jakarta</div>

                            <div>0812-1953-3215</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-white bg-opacity-25 rounded d-flex align-items-center">
                        <i class="bi bi-person-circle fs-2 me-3"></i>
                        <div>
                            <div class="fw-bold">Event Banten</div>
                            <div>0895-3424-16047</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-white bg-opacity-25 rounded d-flex align-items-center">
                        <i class="bi bi-person-circle fs-2 me-3"></i>
                        <div>
                            <div class="fw-bold">Event Bandung</div>
                            <div>0815-1797-9058</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-white bg-opacity-25 rounded d-flex align-items-center">
                        <i class="bi bi-person-circle fs-2 me-3"></i>
                        <div>
                            <div class="fw-bold">Event Surabaya</div>
                            <div>0853-34372365</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-white bg-opacity-25 rounded d-flex align-items-center">
                        <i class="bi bi-person-circle fs-2 me-3"></i>
                        <div>
                            <div class="fw-bold">Event Bali</div>
                            <div>0812-xxxx-xxxx</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-white bg-opacity-25 rounded d-flex align-items-center">
                        <i class="bi bi-person-circle fs-2 me-3"></i>
                        <div>
                            <div class="fw-bold">Event Medan</div>
                            <div>0812-xxxx-xxxx</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-form-section">
        <h2>Send Us Your Message</h2>
        <p>Fill in yout name, subject, and message through our contact form and our team will get back to you as soon as
            possible.</p>

        <form action="#" method="POST" class="custom-from">
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <input type="tel" placeholder="Mobile Number" required>
            <textarea placeholder="Write Your Message" rows="5" requidred></textarea>
            <button type="submit" class="submit-btn">send message</button>
        </form>
    </section>

    <!-- SECTION LOKASI -->
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