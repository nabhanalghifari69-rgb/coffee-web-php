<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFE'IN - Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Karantina:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* Pastikan container punya tinggi tetap */
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
            font-size: 80px;
            font-weight: 600;
            margin-bottom: 70px;
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


        .menu-container {
            padding: 40px 60px 120px 60px;
        }

        .menu-card {
            background-color: #ffffff;
            border-radius: 20px;
            /* Sudut melengkung halus */
            padding: 22px;

            /* RAHASIA BAYANGAN TIMBUL TEBAL (Nyebar ke semua sisi) */
            box-shadow:
                0 10px 30px rgba(0, 0, 0, 0.15),
                /* Bayangan soft yang menyebar luas */
                0 4px 12px rgba(0, 0, 0, 0.08),
                /* Bayangan tegas di bagian bawah kartu */
                0 0 1px rgba(0, 0, 0, 0.2);
            /* Garis halus di sekeliling kartu */

            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            /* Transisi bayangan yang smooth */
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        /* EFEK PAS KURSOR DEKET (Bayangan makin tebal & melebar) */
        .menu-card:hover {
            transform: translateY(-10px);
            /* Kartu naik ke atas */

            /* Bayangannya berubah jadi agak kebiruan mengikuti tema COFFE'IN */
            box-shadow:
                0 20px 40px rgba(47, 47, 228, 0.25),
                /* Pendaran bayangan biru tebal */
                0 10px 20px rgba(47, 47, 228, 0.15);
        }

        .menu-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 14px;
            /* Corner radius gambar menyesuaikan kartu */
            margin-bottom: 15px;
            background-color: #f1f1f1;

            /* Gambar juga dikasih bayangan tipis biar gak flat di dalem kartu */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .menu-name {
            font-size: 18px;
            font-weight: 700;
            color: #000;
            margin-bottom: 5px;
        }

        .menu-desc {
            font-size: 13px;
            color: #666;
            margin-bottom: 15px;
            flex-grow: 1;
        }

        .menu-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .menu-price {
            font-size: 16px;
            font-weight: 700;
            color: #2f2fe4;
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

        .navbar-logo {
            height: 60px width: auto;
            margin-right: 15px;
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

        /* Section Lokasi & Map */
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
            box-shadow: 0 !important;
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
                <p style="color: white;"> A cozy place where moments turn into memories bringing people together through coffee and
                shared experiences</p>
            </div>
        </div>
    </div>
    <div class="page-header">
        <h1 class="page-title">Our Menu</h1>
        <div class="category-pills">
            <?php
            $kategori_dipilih = isset($_GET['kategori']) ? $_GET['kategori'] : 'signature';
            ?>
            <a href="menu.php?kategori=signature"
                class="cat-btn <?php echo ($kategori_dipilih == 'signature') ? 'cat-active' : 'cat-default'; ?>">Signature
                Coffee</a>
            <a href="menu.php?kategori=coffee"
                class="cat-btn <?php echo ($kategori_dipilih == 'coffee') ? 'cat-active' : 'cat-default'; ?>">Coffee</a>
            <a href="menu.php?kategori=non-coffee"
                class="cat-btn <?php echo ($kategori_dipilih == 'non-coffee') ? 'cat-active' : 'cat-default'; ?>">Non-Coffee</a>
            <a href="menu.php?kategori=snacks"
                class="cat-btn <?php echo ($kategori_dipilih == 'snacks') ? 'cat-active' : 'cat-default'; ?>">Snacks
                Series</a>
        </div>
    </div>

    <div class="menu-container">
        <div class="row g-4">
            <?php
            $daftar_menu = [
                // --- KELOMPOK MENU SIGNATURE COFFEE ---
                ['nama' => 'Aren Coffee Milk', 'harga' => 'Rp 20.000', 'desc' => 'Perpaduan espresso, susu creamy, dan manisnya gula aren asli lokal.', 'img' => 'https://images.unsplash.com/photo-1541167760496-1628856ab772?q=80&w=600&auto=format&fit=crop', 'kategori' => 'signature'],
                ['nama' => 'Caramel Cloud Latte', 'harga' => 'Rp 22.000', 'desc' => 'Minuman kopi dengan sirup karamel dan foam tebal selembut awan.', 'img' => 'https://tse1.mm.bing.net/th/id/OIP.5No2gaVJINnOV63qhJT78gHaGt?pid=ImgDet&w=178&h=161&c=7&dpr=1,5&o=7&rm=3', 'kategori' => 'signature'],
                ['nama' => 'Sea Salt Caramel', 'harga' => 'Rp 25.000', 'desc' => 'Kopi susu karamel gurih dengan sentuhan krim foam asin sea salt.', 'img' => 'https://lifestyleofafoodie.com/wp-content/uploads/2022/10/Starbucks-salted-caramel-cold-foam-cold-brew-7-of-14.jpg', 'kategori' => 'signature'],
                ['nama' => 'Biscoff Crunchy Latte', 'harga' => 'Rp 26.000', 'desc' => 'Kopi susu dengan campuran selai Lotus Biscoff dan remahan biskuit.', 'img' => 'https://images.unsplash.com/photo-1578314675249-a6910f80cc4e?q=80&w=600&auto=format&fit=crop', 'kategori' => 'signature'],
                ['nama' => 'Butterscotch Dream', 'harga' => 'Rp 24.000', 'desc' => 'Kopi manis gurih dengan aroma mentega karamel khas permen klasik.', 'img' => 'https://images.unsplash.com/photo-1461023058943-07fcbe16d735?q=80&w=600&auto=format&fit=crop', 'kategori' => 'signature'],
                ['nama' => 'creamy biscuit coffe', 'harga' => 'Rp 22.000', 'desc' => 'Kopi susu dengan rasa biskuit manis yang gurih dan nikmat.', 'img' => 'https://thumbs.dreamstime.com/b/elegant-layered-coffee-drink-biscuit-inviting-featuring-distinct-layers-rich-frothy-milk-elegantly-garnished-412167381.jpg?w=768https://thumbs.dreamstime.com/b/elegant-layered-coffee-drink-biscuit-inviting-featuring-distinct-layers-rich-frothy-milk-elegantly-garnished-412167381.jpg?w=768https://thumbs.dreamstime.com/b/elegant-layered-coffee-drink-biscuit-inviting-featuring-distinct-layers-rich-frothy-milk-elegantly-garnished-412167381.jpg?w=768https://thumbs.dreamstime.com/b/elegant-layered-coffee-drink-biscuit-inviting-featuring-distinct-layers-rich-frothy-milk-elegantly-garnished-412167381.jpg?w=768', 'kategori' => 'signature'],

                // --- KELOMPOK MENU COFFEE BIASA ---
                ['nama' => 'Americano', 'harga' => 'Rp 15.000', 'desc' => 'Double shot espresso dicampur air, cocok buat pecinta kopi hitam.', 'img' => 'https://littlebitrecipes.com/wp-content/uploads/2023/07/iced-americano-l.jpg', 'kategori' => 'coffee'],
                ['nama' => 'Café Latte', 'harga' => 'Rp 18.000', 'desc' => 'Kombinasi espresso mantap dengan steamed milk lembut yang dominan.', 'img' => 'https://images.unsplash.com/photo-1541167760496-1628856ab772?q=80&w=600&auto=format&fit=crop', 'kategori' => 'coffee'],
                ['nama' => 'espreso', 'harga' => 'Rp 15.000', 'desc' => 'Sari kopi murni yang diekstrak pekat dengan aroma super kuat.', 'img' => 'https://www.thespruceeats.com/thmb/HJrjMfXdLGHbgMhnM0fMkDx9XPQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/what-is-espresso-765702-hero-03_cropped-ffbc0c7cf45a46ff846843040c8f370c.jpg', 'kategori' => 'coffee'],
                ['nama' => 'cappucino', 'harga' => 'Rp 15.000', 'desc' => 'Kombinasi seimbang espresso, susu, dan busa susu tebal tabur cokelat.', 'img' => 'https://images.unsplash.com/photo-1534778101976-62847782c213?q=80&w=600&auto=format&fit=crop', 'kategori' => 'coffee'],
                ['nama' => 'flat white', 'harga' => 'Rp 18.000', 'desc' => 'Kopi susu khas Aussie dengan busa tipis, rasa espresso lebih menonjol.', 'img' => 'https://cdn.shopify.com/s/files/1/0838/4525/files/What_Is_an_Iced_Flat_White_1024x1024.jpg?v=1767887183', 'kategori' => 'coffee'],
                ['nama' => 'piccolo', 'harga' => 'Rp 15.000', 'desc' => 'Menu cafe latte versi mini di gelas kecil dengan tendangan kopi kuat.', 'img' => 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?q=80&w=600&auto=format&fit=crop', 'kategori' => 'coffee'],

                // --- KELOMPOK MENU NON-COFFEE ---
                ['nama' => 'Matcha Latte', 'harga' => 'Rp 22.000', 'desc' => 'Teh hijau Jepang premium asli yang diaduk dengan susu segar murni.', 'img' => 'https://itoen-ultrajaya.co.id/wp-content/uploads/2024/08/08-06-matcha-latte-no-sugar.jpg', 'kategori' => 'non-coffee'],
                ['nama' => 'Premium Chocolate', 'harga' => 'Rp 20.000', 'desc' => 'Cokelat dark premium yang lumer kental berpadu dengan creamy susu.', 'img' => 'https://images.unsplash.com/photo-1544787219-7f47ccb76574?q=80&w=600&auto=format&fit=crop', 'kategori' => 'non-coffee'],
                ['nama' => 'Red Velvet Latte', 'harga' => 'Rp 20.000', 'desc' => 'Minuman manis varian kue red velvet gurih dengan sensasi rasa cokelat.', 'img' => 'https://tse4.mm.bing.net/th/id/OIP.yAhuVSKQyqMxEw8eqT9cBQHaIC?rs=1&pid=ImgDetMain&o=7&rm=3', 'kategori' => 'non-coffee'],
                ['nama' => 'Taro Milky Sweet', 'harga' => 'Rp 20.000', 'desc' => 'Minuman rasa talas ungu manis yang legit dipadu susu segar.', 'img' => 'https://images.unsplash.com/photo-1579954115545-a95591f28bfc?q=80&w=600&auto=format&fit=crop', 'kategori' => 'non-coffee'],
                ['nama' => 'Iced Lychee Tea', 'harga' => 'Rp 17.000', 'desc' => 'Teh es manis premium rasa buah leci segar ditambah buah leci asli.', 'img' => 'https://images.unsplash.com/photo-1556679343-c7306c1976bc?q=80&w=600&auto=format&fit=crop', 'kategori' => 'non-coffee'],
                ['nama' => 'Strawberry Mojito', 'harga' => 'Rp 19.000', 'desc' => 'Mocktail segar dari strawberry, daun mint, jus lemon, dan soda.', 'img' => 'https://tse2.mm.bing.net/th/id/OIP.MhbSwB4G2MGsOjzrSR3UdgHaLH?rs=1&pid=ImgDetMain&o=7&rm=3', 'kategori' => 'non-coffee'],

                // --- KELOMPOK MENU SNACKS ---
                ['nama' => 'French Fries', 'harga' => 'Rp 15.000', 'desc' => 'Kentang goreng potongan lurus yang gurih, renyah, dan asinnya pas.', 'img' => 'https://images.unsplash.com/photo-1573080496219-bb080dd4f877?q=80&w=600&auto=format&fit=crop', 'kategori' => 'snacks'],
                ['nama' => 'Croissant Butter', 'harga' => 'Rp 22.000', 'desc' => 'Pastry mentega garing di luar lunak di dalam, pas buat temen ngopi.', 'img' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?q=80&w=600&auto=format&fit=crop', 'kategori' => 'snacks'],
                ['nama' => 'Cireng Bumbu Rujak', 'harga' => 'Rp 14.000', 'desc' => 'Camilan aci goreng renyah kenyal khas lokal dengan saus bumbu rujak pedas.', 'img' => 'data:image/webp;base64,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', 'kategori' => 'snacks'],
                ['nama' => 'Platter Mix Finger', 'harga' => 'Rp 25.000', 'desc' => 'Piring kombinasi berisi kentang goreng, sosis sapi, dan nugget ayam.', 'img' => 'https://tse1.mm.bing.net/th/id/OIP.8c_phU1w9io1QVjsgdO5lAHaHx?rs=1&pid=ImgDetMain&o=7&rm=3', 'kategori' => 'snacks'],
                ['nama' => 'Churro Chocolate Dip', 'harga' => 'Rp 18.000', 'desc' => 'Donat stik ala Spanyol dengan cocolan saus cokelat hitam.', 'img' => 'https://images.unsplash.com/photo-1587314168485-3236d6710814?q=80&w=600&auto=format&fit=crop', 'kategori' => 'snacks'],
                ['nama' => 'Singkong Keju', 'harga' => 'Rp 15.000', 'desc' => 'Singkong merekah empuk gurih bertabur keju parut melimpah.', 'img' => 'https://malaysia-asia.my/wp-content/uploads/2014/05/pisang-cheese-tawau.jpg', 'kategori' => 'snacks'],
                ['nama' => 'Cilung Premium Gamon', 'harga' => 'Rp 12.000', 'desc' => 'Aci digulung crispy kenyal khas lokal dengan toping bumbu rahasia.', 'img' => 'https://th.bing.com/th/id/OIP.S-k886qQJbtClQy5OnUsIgHaE5?w=272&h=182&c=7&r=0&o=7&dpr=1.5&pid=1.7&rm=3', 'kategori' => 'snacks'],
            ];

            foreach ($daftar_menu as $menu) {
                if ($menu['kategori'] == $kategori_dipilih) {
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="menu-card">
                            <img src="<?php echo $menu['img']; ?>" class="menu-img" alt="<?php echo $menu['nama']; ?>">
                            <div class="menu-name"><?php echo $menu['nama']; ?></div>
                            <div class="menu-desc"><?php echo $menu['desc']; ?></div>
                            <div class="menu-price"><?php echo $menu['harga']; ?></div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>

    <div class="desktop-navbar">
        <a href="index.php" class="brand-nav">COFFE'IN</a>
        <div class="nav-links">
            <a href="index.php">Beranda</a>
            <a href="menu.php" class="active">Menu</a>
            <a href="about.php">About</a>
            <a href="event.php">event</a>
            <a href="kontak.php">kontak</a>
        </div>
    </div>
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