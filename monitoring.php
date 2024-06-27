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
    <title>Monitoring</title>
    <style>
        /* CSS styles for your main dashboard */
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            min-height: 100vh;
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
            display: flex;
            align-items: center;
            padding: 10px 20px;
            transition: color 0.3s;
        }

        .sidebar ul li a:hover {
            color: green;
        }

        .sidebar ul li a.active {
            color: green;
        }

        .sidebar ul li a .icon {
            margin-right: 10px;
            font-size: 20px;
        }

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

        .image-above-links {
            text-align: center;
            margin-bottom: 20px;
        }

        .image-above-links img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-links {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 30px;
        }

        .form-links a {
            text-decoration: none;
            color: #fff;
            background-color: #007b00;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            width: 200px;
            margin-bottom: 10px;
            transition: background-color 0.3s ease;
            display: block;
        }

        .form-links a:hover {
            background-color: #005a00;
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
            <li><a href="artikeledukatif.php"><span class="icon">&#x1F4D6;</span> Artikel Edukatif</a></li>
            <li><a href="monitoring.php" class="active"><span class="icon">&#x1F4CA;</span> Monitoring</a></li>
            <li><a href="logout.php"><span class="icon">&#x1F6AA;</span> Keluar</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>MONITORING</h2>
        <div class="image-above-links">
            <img src="image/gambar monitoring.png" alt="Monitoring Image">
        </div>
        <div class="form-links">
            <a href="formanak.php">Form Anak</a>
            <a href="formbumil.php">Form Bumil</a>
            <a href="monitoringanak.php">Cek Monitoring Anak</a>
            <a href="monitoringibu.php">Cek Monitoring Bumil</a>
        </div>
    </div>
</body>
</html>
