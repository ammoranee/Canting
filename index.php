<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Cakap Stunting</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #000;
            line-height: 1.6;
            margin-top: 20px;
        }

        header {
            background-color: #fff;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        header img {
            height: 90px;
            display: block;
        }

        nav {
            display: flex;
            gap: 20px;
            margin-left: auto;
        }

        nav a {
            text-decoration: none;
            color: black;
            font-size: 16px;
            font-weight: bold;
            position: relative;
        }

        nav a.active {
            color: black;
        }

        .register {
            background-color: #306c3b;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            font-weight: bold;
            color: #f0f5f1;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .container h1 {
            font-size: 36px;
            color: #000;
            margin-bottom: 10px;
        }

        .container h1 span {
            color: #306c3b;
        }

        .container h2 {
            font-size: 30px;
            color: #306c3b;
            margin-top: 0;
        }

        .container p {
            color: #000;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .container .btn {
            background-color: #306c3b;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 30px;
            cursor: pointer;
        }

        .image-container {
            max-width: 400px;
            flex: 1 1 400px;
            margin-top: 20px;
            text-align: center;
        }

        .image-container img {
            width: 100%;
            height: auto;
            object-fit: cover;
            display: block;
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
        <div>
            <h1>Selamat Datang di <span>Portal</span></h1>
            <h2>Layanan Kesehatan Masyarakat</h2>
            <p>dikhususkan bagi warga Kelurahan Meri</p>
            <button id="btnMasuk" class="btn">Masuk</button>
        </div>
        <div class="image-container">
            <img src="image/CANTING BERANDA.png" alt="Deskripsi Gambar">
        </div>
    </div>

    <script>
        document.getElementById('btnDaftar').onclick = function () {
            window.location.href = 'registration.php';
        };

        document.getElementById('btnMasuk').onclick = function () {
            window.location.href = 'login.php';
        };
    </script>
</body>

</html>
