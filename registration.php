<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registration</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f8f5;
        }

        .container {
            display: flex;
            min-height: 100vh;
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            margin: 20px;
            align-items: center;
        }

        .image-section {
            flex: 1;
            background-color: #f8f8f5;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .image-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .form-section {
            flex: 1;
            background-color: #e9ede4;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input,
        textarea {
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        button {
            padding: 10px;
            background-color: #2c6e3e;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #245a30;
        }

        p {
            margin-top: 20px;
            font-size: 12px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">

        <?php
            include 'koneksi.php';
            if(isset($_POST['email'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $telepon = $_POST['telepon'];
                $cek_email = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
                if(mysqli_num_rows($cek_email) > 0) {
                    echo "Email sudah terdaftar.";
                }else{
                    $sql = "INSERT INTO user (email, password, nama, alamat, telepon) VALUES ('$email', '$password', '$nama', '$alamat', '$telepon')";
                    $result = mysqli_query($conn, $sql);
                    if($result) {
                        echo "Data berhasil ditambahkan.";
                        header('Location: login.php');
                        exit;
                    } else {    
                        echo "Data gagal ditambahkan.";
                    }

                }
             
            }
        ?>

        <div class="image-section">
            <img src="image/login.jpeg" alt="Registration Image">
        </div>
        <div class="form-section">
            <form id="registrationForm" action="" method="post">
                <label for="name">Nama*</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>

                <label for="email">Email*</label>
                <input type="email" id="email" name="email" placeholder="Masukkan Email" required>

                <label for="password">Password*</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password" required>

                <label for="address">Alamat*</label>
                <textarea id="address" name="alamat" placeholder="Masukkan Alamat" required></textarea>

                <label for="phone">No. Telepon*</label>
                <input type="tel" id="phone" name="telepon" placeholder="Masukkan No. Telepon" required>

                <button type="submit">Daftar</button>
                <p>* Menunjukkan pernyataan wajib diisi</p>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // Anda bisa menambahkan logika untuk memvalidasi data form di sini, jika perlu
            // window.location.href = 'dashboard.html'; // Mengalihkan ke halaman dashboard setelah submit
            document.getElementById('registrationForm').submit();
        });
    </script>
</body>
</html>
