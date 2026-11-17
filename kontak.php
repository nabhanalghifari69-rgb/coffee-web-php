<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFE'IN - Kontak & Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Karantina:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            padding-top: 100px;
        }

        .page-header {
            background-color: #000080;
            padding: 60px 60px 30px 60px;
            color: white;
            text-align: center;
        }

        .page-title {
            font-size: 48px;
            font-weight: 600;
            margin: 0;
        }

        .kontak-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .info-box {
            background-color: #fff;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .info-item i {
            font-size: 24px;
            color: #2f2fe4;
        }

        .info-item p {
            margin: 0;
            font-size: 16px;
        }

        .form-box {
            background-color: #fff;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .form-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: 600;
            color: #333;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px;
            border: 1px solid #ddd;
        }

        .form-control:focus {
            border-color: #2f2fe4;
            box-shadow: 0 0 5px rgba(47, 47, 228, 0.2);
        }

        .btn-reservasi {
            background-color: #25D366;
            color: white;
            border: none;
            border-radius: 12px;
            padding: 12px;
            font-weight: 600;
            width: 100%;
            transition: 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-reservasi:hover {
            background-color: #1ebe57;
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
            opacity: 0.6;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #000080;
            font-weight: 700;
            opacity: 1;
        }
    </style>
</head>

<body>


    <div class="page-header">
        <h1 class="page-title">Contact Us</h1>
    </div>

    <div class="kontak-container">
        <div class="info-box">
            <div class="info-item"><i class="bi bi-geo-alt-fill"></i>
                <p>Jl. Kopi Nikmat No. 17, Jakarta Selatan</p>
            </div>
            <div class="info-item"><i class="bi bi-telephone-fill"></i>
                <p>+62 812-3456-7890</p>
            </div>
            <div class="info-item"><i class="bi bi-clock-fill"></i>
                <p>Senin - Minggu (08.00 - 22.00 WIB)</p>
            </div>
            <div class="info-item"><i class="bi bi-instagram"></i>
                <p>@coffein.id</p>
            </div>
        </div>
        <div class="form-box">
            <h2 class="form-title">Reservasi Meja</h2>
            <form id="reservasiForm">
                <div class="mb-3"><label class="form-label">Nama Lengkap</label><input type="text" id="nama"
                        class="form-control" placeholder="Masukkan nama anda" required></div>
                <div class="row mb-3">
                    <div class="col-md-6"><label class="form-label">Tanggal</label><input type="date" id="tanggal"
                            class="form-control" required></div>
                    <div class="col-md-6"><label class="form-label">Jumlah Orang</label><select id="jumlah"
                            class="form-control" required>
                            <option value="1 - 2 Orang">1 - 2 Orang</option>
                            <option value="3 - 4 Orang">3 - 4 Orang</option>
                            <option value="5 - 10 Orang">5 - 10 Orang</option>
                        </select></div>
                </div>
                <button type="submit" class="btn-reservasi"><i class="bi bi-whatsapp"></i> Kirim via WhatsApp</button>
            </form>
        </div>
    </div>
    <div class="desktop-navbar">
        <a href="index.php" class="brand-nav">COFFE'IN</a>
        <div class="nav-links">
            <a href="index.php">Beranda</a>
            <a href="menu.php">Menu</a>
            <a href="about.php">About</a>
            <a href="event.php">event</a>
            <a href="kontak.php" class="active">Kontak</a>
        </div>
    </div>
    <script>
        document.getElementById('reservasiForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const nama = document.getElementById('nama').value;
            const tanggal = document.getElementById('tanggal').value;
            const jumlah = document.getElementById('jumlah').value;
            const nomorWA = "62123456789";
            const pesan = `Halo COFFE'IN, saya mau reservasi meja.%0A%0ANama: ${nama}%0ATanggal: ${tanggal}%0AJumlah: ${jumlah}`;
            window.open(`https://wa.me/${nomorWA}?text=${pesan}`, '_blank');
        });
    </script>

</body>

</html>