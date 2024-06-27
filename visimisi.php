<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anting</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #f4f4d7;
            position: fixed;
            height: 100%;
            padding-top: 20px;
        }

        .sidebar .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar .logo img {
            width: 150px; /* Ukuran logo disesuaikan */
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 20px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #000; /* Warna default teks */
            font-weight: bold;
            display: block;
            padding: 10px 20px;
            transition: color 0.3s; /* Transisi untuk perubahan warna */
        }

        .sidebar ul li a:hover {
            color: green; /* Warna teks saat dihover menjadi hijau */
        }

        .sidebar ul li a .icon {
            margin-right: 10px; /* Spasi antara ikon dan teks */
            color: #000; /* Warna default ikon */
        }

        /* Icon styling */
        .sidebar ul li a .icon {
            color: #000; /* Warna default ikon */
        }

        .sidebar ul li a:hover .icon {
            color: green; /* Warna ikon saat dihover menjadi hijau */
        }

        .sidebar ul li a.active {
            color: green; /* Warna teks saat aktif menjadi hijau */
        }

        .sidebar ul li a.active .icon {
            color: green; /* Warna ikon saat aktif menjadi hijau */
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            background-color: #fff;
            flex: 1;
        }

        .content {
            max-width: 800px;
            margin: 0 auto;
        }

        .content img {
            width: 100%;
            height: auto;
            margin: 20px 0;
        }

        .content h2 {
            color: green; /* Warna hijau untuk judul "VISI & MISI" */
            text-align: center; /* Posisikan judul ke tengah */
            position: relative; /* Diperlukan untuk elemen yang berada di bawahnya */
            display: block; /* Agar gradient bisa diterapkan */
            margin-bottom: 20px; /* Jarak antara judul dan konten */
        }

        .content h2::after {
            content: '';
            display: block;
            width: 60%; /* Lebar garis bawah */
            height: 4px; /* Ketebalan garis bawah */
            background: linear-gradient(to right, transparent, green, transparent); /* Gradient warna hijau */
            position: absolute;
            bottom: -10px; /* Jarak garis bawah dari teks */
            left: 20%; /* Posisi horizontal garis bawah */
        }

        .visi-misi {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .visi-misi h3 {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            text-align: center; /* Posisikan teks h3 ke tengah */
        }

        .visi-misi p, .visi-misi ul {
            padding: 10px;
            margin: 10px 0;
            text-align: justify;
        }

        .visi-misi p::before, .visi-misi ul li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 5px;
            background-color: #4CAF50;
            border-radius: 2px;
        }

        .visi-misi p {
            padding-left: 20px;
            position: relative;
        }

        .visi-misi ul {
            list-style: none;
            padding-left: 0;
        }

        .visi-misi ul li {
            margin: 10px 0;
            padding-left: 20px;
            position: relative;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="image/canting mojokerto.png" alt="Logo Anting">
        </div>
        <ul>
            <li><a href="dashboard.php"><span class="icon">&#x1F3E0;</span>Beranda</a></li>
            <li><a href="visimisi.php" class="active"><span class="icon">&#x1F441;</span>Visi dan Misi</a></li>
            <li><a href="artikeledukatif.php"><span class="icon">&#x1F4D6;</span>Artikel Edukatif</a></li>
            <li><a href="monitoring.php"><span class="icon">&#x1F4CA;</span>Monitoring</a></li>
            <li><a href="logout.php"><span class="icon">&#x1F6AA;</span>Keluar</a></li>
        </ul>
    </div>    
    <div class="main-content">
        <div class="content">
            <h2>VISI & MISI</h2>
            <img src="image/gambar visi misi.png" alt="Visi Misi Image">
            <div class="visi-misi">
                <div class="visi">
                    <h3>VISI</h3>
                    <p>Menjadi portal layanan kesehatan masyarakat edukatif dalam pencegahan stunting di wilayah Kelurahan Meri Kota Mojokerto</p>
                </div>
                <div class="misi">
                    <h3>MISI</h3>
                    <ul>
                        <li>Menyelaraskan dan mendukung program kerja Pemerintah Kota Mojokerto dalam mengupayakan program Zero Stunting</li>
                        <li>Mewujudkan generasi sehat dan bebas stunting di Kelurahan Meri Kota Mojokerto sebagai langkah awal pencegahan stunting melalui teknologi informasi</li>
                        <li>Menyediakan platform yang mendukung partisipasi aktif dari masyarakat dalam melakukan pemantauan dan evaluasi rutin terhadap isu stunting di wilayah Kelurahan Meri Kota Mojokerto</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Event listener untuk tombol Beranda
            var berandaLink = document.querySelector('a[href="dashboard.php"]');
            berandaLink.addEventListener('click', function(event) {
                event.preventDefault();
                window.location.href = 'dashboard.php';
            });

            // Event listener untuk tombol Artikel Edukatif
            var artikelEdukatifLink = document.querySelector('a[href="artikeledukatif.php"]');
            artikelEdukatifLink.addEventListener('click', function(event) {
                event.preventDefault();
                window.location.href = 'artikeledukatif.php';
            });

            // Event listener untuk tombol Monitoring
            var monitoringLink = document.querySelector('a[href="monitoring.php"]');
            monitoringLink.addEventListener('click', function(event) {
                event.preventDefault();
                window.location.href = 'monitoring.php';
            });

            // Event listener untuk tombol Keluar
            var keluarLink = document.querySelector('a[href="logout.php"]');
            keluarLink.addEventListener('click', function(event) {
                event.preventDefault();
                window.location.href = 'logout.php';
            });
        });
    </script>
</body>
</html>
