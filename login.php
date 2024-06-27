<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ffffff;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .image-section {
            flex: 1;
            background-color: #f8f8f5;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-section img {
            max-width: 100%;
            height: auto;
        }

        .form-section {
            flex: 1;
            background-color: #ffffff;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .logo {
            max-width: 200px;
            margin-bottom: 10px;
        }

        p {
            margin: 0;
            font-size: 16px;
            color: #333;
            font-weight: bold;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 400px;
        }

        .input-container {
            display: flex;
            align-items: center;
            width: 100%;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            background-color: #f8f8f5;
        }

        .input-container .icon {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        input {
            border: none;
            outline: none;
            flex: 1;
            padding: 10px;
            background-color: #f8f8f5;
        }

        button {
            width: 100%;
            padding: 15px;
            background-color: #007b33;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #005824;
        }

        a {
            color: #007b33;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        p a {
            font-weight: normal;
        }
    </style>
</head>

<?php
include 'koneksi.php';
session_start();

if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row;
        header('Location: dashboard.php');
        exit;
    } else {
        echo "<script>alert('Email atau password salah. Silakan coba lagi.')</script>";
    }
}

?>

<body>
    <div class="container">
        <div class="image-section">
            <img src="image/LOGIN CANTING.png" alt="Login Image">
        </div>
        <div class="form-section">
            <img src="image/canting mojokerto.png" alt="Logo" class="logo">
            <p>KELURAHAN MERI KOTA MOJOKERTO</p>
            <form id="loginForm" action="" method="post">
                <div class="input-container">
                    <img src="image/icon email.jpeg" alt="Email Icon" class="icon">
                    <input type="email" id="email" name="email" placeholder="Masukkan Email Anda" required>
                </div>
                <div class="input-container">
                    <img src="image/icon password.jpeg" alt="Password Icon" class="icon">
                    <input type="password" id="password" name="password" placeholder="Masukkan Password Anda" required>
                </div>
                <button type="submit">Masuk</button>
                <p>Belum memiliki akun? <a href="registration.php">Daftar</a></p>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Di sini bisa ditambahkan logika untuk validasi login (untuk contoh ini, saya skip validasi)
            document.getElementById('loginForm').submit();
        });
    </script>
</body>

</html>