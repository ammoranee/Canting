<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Cakap Stunting - Panduan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: white;
        }
        header img {
            height: 90px;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #306c3b;
            color: white;
            border-radius: 20px;
            text-decoration: none;
        }
        .container {
            display: flex;
            align-items: flex-start;
            padding: 40px 20px;
        }
        .container img {
            width: 325px;
            height: 350px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 100px;
            margin-left: 50px;
        }
        .text-container {
            max-width: 600px;
        }
        .text-container h2 {
            color: #2c6e3e;
            margin-bottom: 10px;
        }
        .text-container p {
            color: #333;
            line-height: 1.6;
            text-align: justify;
        }
        .register {
            background-color: #306c3b;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            font-weight: bold;
            color: #f0f5f1;
        }
        .btn-lihat-panduan {
            display: inline-block;
            padding: 12px 24px;
            background-color: #306c3b;
            color: white;
            border-radius: 20px;
            text-decoration: none;
            margin-top: 20px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .btn-lihat-panduan:hover {
            background-color: #2a5f32;
        }
    </style>
</head>
<body>
    <header>
        <img src="image/canting meri.png" alt="Logo">
        <nav>
            <a href="index.php" class="active">Beranda</a>
            <a href="tentangkami.php">Tentang Kami</a>
            <a href="faq.php">FAQ</a>
            <a href="panduan.php">Panduan</a>
            <a href="pengaduan.php">Pengaduan</a>
            <button id="btnDaftar" class="register">Daftar</button>
        </nav>
    </header>
    <div class="container">
        <img src="image/panduan_apl.png" alt="Panduan">
        <div class="text-container">
            <h2> PANDUAN <br> Aplikasi Canting</h2>
            <p>Sebuah sumber terpercaya untuk menjelaskan seputar bagaimana penggunaan aplikasi Canting.</p>
            <h3>Mengapa Anda Perlu Mengakses Panduan Aplikasi Canting?</h3>
            <p>1. Dapatkan panduan cara penggunaan aplikasi Canting untuk memudahkan pengguna dalam mengakses aplikasi kami.</p>
            <p>2. Aplikasi Canting dirancang untuk semua orang. Mudah diakses melalui komputer, tablet, atau ponsel pintar Anda, memberikan kemudahan dalam mencari informasi kapan pun dan di mana pun Anda membutuhkannya.</p>
            <p>3. Dengan menggunakan panduan kami, pengguna tidak perlu lagi khawatir untuk mempelajari Aplikasi Canting secara mandiri.</p>
            <h3>Bergabunglah dengan Kami Sekarang!</h3>
            <p>Ayo, jangan lewatkan kesempatan untuk mengakses Panduan Aplikasi Canting. Dengan bantuan Anda, kita bisa mengubah masa depan generasi penerus Kelurahan Meri menjadi lebih cerah. Kunjungi website kami sekarang juga!</p>
            <a href="https://putrisaptiaeryanti.my.canva.site/modul-panduan-aplikasi-canting" class="btn-lihat-panduan">Lihat Panduan</a>
        </div>
    </div>
    <script>
        document.getElementById('btnDaftar').onclick = function () {
            window.location.href = 'registration.php';
        };
    </script>
</body>
</html>
