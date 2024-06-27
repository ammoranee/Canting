<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Cakap Stunting - FAQ</title>
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
        }
        .faq {
            margin-top: 5px;
        }
        .faq h3 {
            color: #2c6e3e;
            margin-bottom: 20px;
            cursor: pointer;
        }
        .faq-item {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }
        .faq-item p {
            margin: 5px 0;
            display: none;
        }
        .faq-item input {
            display: none;
        }
        .faq-item input:checked + label::after {
            transform: rotate(180deg);
        }
        .faq-item label {
            cursor: pointer;
            display: flex;
            align-items: center;
            font-weight: bold;
        }
        .faq-item label::after {
            content: "\25BE";
            margin-left: auto;
            font-size: 14px;
            transform: rotate(0deg);
            transition: transform 0.3s ease;
        }
        .faq-item input:checked + label::after {
            transform: rotate(180deg);
        }
        .faq-item input:checked + label + p {
            display: block;
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
    <script>
        document.getElementById('tentangKamiButton').addEventListener('click', function(event) {
            event.preventDefault();
        });
        document.getElementById('faqButton').addEventListener('click', function(event) {
            event.preventDefault();
        });

        function goToHomepage() {
            window.open('index.php', '_blank');
        }
    </script>
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
        <img src="image/gambar faq.png" alt="FAQ">
        <div class="text-container">
            <h2>FREQUENTLY ASKED QUESTION <br> Cakap Stunting</h2>
            <p>Temukan semua kebutuhan informasi terkait aplikasi Canting disini!</p>
            <div class="faq">
                <div class="faq-item">
                    <input type="checkbox" id="faq1">
                    <label for="faq1">! Gabung dan jadilah bagian dari gerakan melawan stunting!</label>
                    <p>Dengan diiringi tekad yang bulat, mari kita mulai Gerakan Melawan Stunting untuk mewujudkan target Zero New Stunting!</p>
                </div>
                <div class="faq-item">
                    <input type="checkbox" id="faq2">
                    <label for="faq2">? APA ITU CANTING?</label>
                    <p>Canting (Cakap Stunting) adalah sebuah website yang ditujukan untuk memberikan wawasan dan monitoring terhadap masyarakat di Kelurahan Meri, Kota Mojokerto, khususnya bagi ibu hamil dan orang tua dengan balita. Website ini bertujuan untuk meningkatkan pemahaman tentang stunting serta memberikan informasi terkait gizi, kesehatan, dan perkembangan anak secara berkelanjutan.</p>
                </div>
                <div class="faq-item">
                    <input type="checkbox" id="faq3">
                    <label for="faq3">? BAGAIMANA CANTING MENGATASI KEBUTUHAN ANDA?</label>
                    <p>Canting membantu mengatasi kebutuhan masyarakat dengan menyediakan informasi dan monitoring mengenai stunting . Melalui fitur-fitur seperti artikel edukatif, dan monitoring pertumbuhan anak, Canting berperan sebagai sumber pengetahuan yang dapat membantu orang tua dan ibu hamil untuk memberikan perawatan yang optimal bagi anak-anak mereka.</p>
                </div>
                <div class="faq-item">
                    <input type="checkbox" id="faq4">
                    <label for="faq4">? SIAPA SAJA YANG DIPERBOLEHKAN MENDAFTAR?</label>
                    <p>Canting terbuka untuk semua orang tua, ibu hamil, dan warga masyarakat di Kelurahan Meri, Kota Mojokerto yang ingin mendapatkan informasi dan manfaat dari platform ini. Pendaftaran dapat dilakukan oleh siapa saja yang tertarik untuk memantau dan meningkatkan kesehatan anak-anak mereka.</p>
                </div>
                <div class="faq-item">
                    <input type="checkbox" id="faq5">
                    <label for="faq5">? BAGAIMANA CARA MENGGUNAKAN APLIKASI INI?</label>
                    <p>Untuk menggunakan Canting, pengguna dapat mengunjungi website resmi Canting. Setelah mendaftar, pengguna akan memiliki akses ke berbagai fitur seperti artikel dan form monitoring pertumbuhan anak. Canting dirancang untuk mudah digunakan dan diakses oleh semua orang, sehingga memudahkan dalam memperoleh informasi yang relevan dan bermanfaat terkait stunting dan gizi anak.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk menangani klik tombol Daftar
        document.getElementById('btnDaftar').onclick = function () {
            window.location.href =
            'registration.php'; // Mengarahkan ke halaman registrasi.html saat tombol Daftar diklik
        };
 
    </script>

</body>
</html>