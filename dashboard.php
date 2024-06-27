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
            width: 150px;
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
            color: #000;
            font-weight: bold;
            display: block;
            padding: 10px 20px;
            transition: color 0.3s;
        }

        .sidebar ul li a:hover {
            color: green;
        }

        .sidebar ul li a .icon {
            margin-right: 10px;
            color: #000;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            background-color: #fff;
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
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="image/canting mojokerto.png" alt="Logo Anting">
        </div>
        <ul>
            <li><a href="dashboard.php"><span class="icon">&#x1F3E0;</span><span style="color: green;">Beranda</span></a></li>
            <li><a href="visimisi.php" id="visiMisiLink"><span class="icon">&#x1F441;</span>Visi dan Misi</a></li>
            <li><a href="artikeledukatif.php" id="artikelEdukatifLink"><span class="icon">&#x1F4D6;</span>Artikel Edukatif</a></li>
            <li><a href="monitoring.php" id="monitoringLink"><span class="icon">&#x1F4CA;</span>Monitoring</a></li>
            <li><a href="logout.php" id="keluarLink"><span class="icon">&#x1F6AA;</span>Keluar</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="content">
            <img src="image/beranda.png" alt="Gambar 1">
            <p>
                Pemerintah Kota Mojokerto konsisten menunjukkan komitmen dalam upaya mewujudkan Zero New Stunting di tahun 2024. 
                Berbagai aksi dan program juga dilaksanakan dengan melibatkan berbagai stakeholder di lingkungan Pemkot, instansi vertikal, 
                dan masyarakat. Partisipasi aktif dari masyarakat sangat diharapkan, dengan kegiatan sosialisasi dan edukasi yang terus 
                digencarkan untuk meningkatkan kesadaran tentang pentingnya pencegahan stunting. Para kader kesehatan dan relawan juga 
                dilibatkan secara aktif dalam mengedukasi masyarakat tentang pola makan yang sehat dan pentingnya sanitasi yang baik.
            </p>
            <img src="image/program zero stunting.png" alt="Gambar 2">
            <img src="image/nomor beranda.jpeg" alt="Gambar 3">
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Menghubungkan tautan dengan id elemen yang sesuai
            var visiMisiLink = document.getElementById('visiMisiLink');
            visiMisiLink.addEventListener('click', function(event) {
                event.preventDefault();
                window.location.href = 'visimisi.php';
            });

            var artikelEdukatifLink = document.getElementById('artikelEdukatifLink');
            artikelEdukatifLink.addEventListener('click', function(event) {
                event.preventDefault();
                window.location.href = 'artikeledukatif.php';
            });

            var monitoringLink = document.getElementById('monitoringLink');
            monitoringLink.addEventListener('click', function(event) {
                event.preventDefault();
                window.location.href = 'monitoring.php';
            });

            var keluarLink = document.getElementById('keluarLink');
            keluarLink.addEventListener('click', function(event) {
                event.preventDefault();
                window.location.href = 'logout.php';
            });
        });
    </script>
</body>
</html>
