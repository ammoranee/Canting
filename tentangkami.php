<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Cakap Stunting - Tentang Kami</title>
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
            color: rgb(249, 247, 247);
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
        <img src="image/gambar tetang kami.png" alt="Tentang Kami">
        <div class="text-container">
            <h2>TENTANG KAMI</h2>
            <p>Selamat datang di Canting (Cakap Stunting), sebuah website yang bertujuan untuk memberikan informasi dan monitoring terkait stunting kepada masyarakat di Kelurahan Meri, Kota Mojokerto. Kami berkomitmen untuk membantu orang tua dan ibu hamil dalam memahami pentingnya gizi, kesehatan, dan perkembangan anak secara berkelanjutan. Melalui berbagai fitur edukatif dan alat monitoring, Canting berperan sebagai platform untuk meningkatkan kualitas kesehatan masyarakat.</p>
        </div>
    </div>
    <script>
        document.getElementById('btnDaftar').onclick = function () {
            window.location.href =
            'registration.php'; 
        };

    </script>
</body>
</html>
