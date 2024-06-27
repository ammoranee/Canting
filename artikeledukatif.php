<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel Edukatif</title>
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

        .sidebar ul li a.active {
            color: green; /* Warna teks saat aktif menjadi hijau */
        }

        .sidebar ul li a .icon {
            margin-right: 10px; /* Spasi antara ikon dan teks */
            color: inherit; /* Warisan warna dari parent (.sidebar ul li a) */
        } 

        /* Content Section Styles */
        .content {
            margin-left: 250px;
            flex: 1;
            padding: 20px;
        }

        .content h2 {
            color: green;
            text-align: center;
            position: relative;
            display: block;
            margin-bottom: 20px;
        }

        .content h2::after {
            content: '';
            display: block;
            width: 60%;
            height: 4px;
            background: linear-gradient(to right, transparent, green, transparent);
            position: absolute;
            bottom: -10px;
            left: 20%;
        }

        .article {
            display: flex;
            margin-bottom: 20px;
            align-items: center;
        }

        .article img {
            width: 100px;
            height: auto;
            margin-right: 20px;
        }

        .article .details {
            flex: 1; /* Take remaining space */
        }

        .article .details h3 {
            margin: 0;
            font-size: 18px;
            color: #333;
        }

        .article .details p {
            margin: 5px 0;
            font-size: 14px;
            color: #777;
        }

        /* Links in articles */
        .article h3 a {
            text-decoration: none;
            color: #000; /* Warna default teks */
            transition: color 0.3s; /* Transisi untuk perubahan warna */
        }

        .article h3 a:hover {
            color: green; /* Warna teks saat dihover menjadi hijau */
        }

        .article h3 a:active,
        .article h3 a:focus {
            color: green; /* Warna teks saat aktif atau difokuskan menjadi hijau */
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="image/canting mojokerto.png" alt="Logo">
        </div>
        <ul>
            <li><a href="dashboard.php"><span class="icon">&#x1F3E0;</span> Beranda</a></li>
            <li><a href="visimisi.php"><span class="icon">&#x1F441;</span> Visi dan Misi</a></li>
            <li><a href="#" class="active"><span class="icon">&#x1F4D6;</span> Artikel Edukatif</a></li>
            <li><a href="monitoring.php"><span class="icon">&#x1F4CA;</span> Monitoring</a></li>
            <li><a href="logout.php"><span class="icon">&#x1F6AA;</span> Keluar</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>ARTIKEL</h2>
        <div class="article">
            <img src="image/artikel1.jpeg" alt="Artikel 1">
            <div class="details">
                <h3><a href="https://putrisaptiaeryanti.my.canva.site/tumbuh-kerdil-di-tanah-agraria-berkenalan-dengan-stunting" target="_blank">TUMBUH KERDIL DI TANAH SUBUR : BERKENALAN DENGAN STUNTING</a></h3>
                <p><br>3 Juni 2024</p>
            </div>
        </div>
        <div class="article">
            <img src="image/artikel2.jpeg" alt="Artikel 2">
            <div class="details">
                <h3><a href="https://putrisaptiaeryanti.my.canva.site/ketika-laparan-bukanlah-penyebab-stunting-di-negeri-gemah-ripah-loh-jinawi" target="_blank">KETIKA LAPAR BUKANLAH PENYEBAB: STUNTING DI NEGERI GEMAH RIPAH LOH JINAWI</a></h3>
                <p><br>5 Juni 2024</p>
            </div>
        </div>
        <div class="article">
            <img src="image/artikel3.jpeg" alt="Artikel 3">
            <div class="details">
                <h3><a href="https://putrisaptiaeryanti.my.canva.site/ironi-di-piring-makan-siang-anak" target="_blank">IRONI DI PIRING MAKAN SIANG ANAK</a></h3>
                <p><br>6 Juni 2024</p>
            </div>
        </div>
        <div class="article">
            <img src="image/artikel4.jpeg" alt="Artikel 4">
            <div class="details">
                <h3><a href="https://putrisaptiaeryanti.my.canva.site/stunting-ketika-nutrisi-hanya-menjadi-second-choice" target="_blank">STUNTING: KETIKA NUTRISI HANYA MENJADI "SECOND CHOICE"</a></h3>
                <p><br>10 Juni 2024</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to handle navigation
            function navigateToPage(pageUrl, event) {
                event.preventDefault();
                window.location.href = pageUrl;
            }
    
            // Event listeners for sidebar buttons
            var sidebarLinks = document.querySelectorAll('.sidebar ul li a');
            sidebarLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    var pageUrl = link.getAttribute('href');
                    navigateToPage(pageUrl, event);
                });
            });
        });
    </script>
</body>
</html>
