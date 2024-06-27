<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Cakap Stunting - Pengaduan</title>
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
            color: rgb(247, 243, 243);
            border-radius: 20px;
            text-decoration: none;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
            text-align: center;
        }
        .container h2 {
            color: #2c6e3e;
            margin-bottom: 10px;
        }
        .container p {
            color: #333;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        footer {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }
        footer p {
            margin: 5px 0;
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
    <h2>Form Pengaduan</h2>
    <h2>Cakap Stunting</h2>
    <p>Kami sangat terbuka terhadap masukan maupun pengaduan yang Anda berikan. Kami akan selalu berusaha untuk memberikan yang terbaik sesuai kebutuhan pengguna.</p>
    <a href="https://forms.gle/LdWyKSypukdjHgf2A" class="button">Ajukan Form Pengaduan</a>
</div>
<footer>
    <p>Support</p>
    <p>stitatis@gmail.com</p>
    <p>+62 812 3452-24294</p>
</footer>
<script>
    document.getElementById('btnDaftar').onclick = function () {
        window.location.href = 'registration.php';
    };
</script>
</body>
</html>
