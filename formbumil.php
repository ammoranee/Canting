<?php 
session_start();
if(isset($_POST['nama'])){
    include 'koneksi.php';
    $data = $_POST;
    $data['created_at'] = date('Y-m-d H:i:s');
    $data['user_id'] = $_SESSION['user']['id'];
    $field=array();
    $value =array();
    foreach($data as $n=>$d){
        array_push($field,$n);
        array_push($value,$d == ''? '0' : "'".$d."'");
    }
    $value = implode(', ', $value);
    $field = implode(', ', $field);
    $sql = "INSERT INTO ibu "." (".$field.") VALUES (".$value.")";
    if ($conn->query($sql)) {
        echo "<script>alert('Data Berhasilimpan'); window.location='monitoring.php';</script>";
    } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Perkembangan Ibu Hamil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8e5;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            background-color: #e5f2e5;
            padding: 10px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #2f6627;
            margin: 0 -20px 20px;
            border-radius: 8px 8px 0 0;
        }

        .section {
            margin-bottom: 20px;
        }

        .section h2 {
            background-color: #f0f0f0;
            padding: 10px;
            font-size: 20px;
            color: #333;
            border-bottom: 2px solid #ccc;
            margin: 0;
        }

        .section .content {
            padding: 20px;
            border: 1px solid #ccc;
            border-top: none;
        }

        .section .content label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .section .content input[type="text"],
        .section .content input[type="date"],
        .section .content input[type="number"],
        .section .content select,
        .section .content textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .section .content input[type="radio"] {
            margin-right: 10px;
        }

        .section .content .radio-group {
            margin-bottom: 20px;
        }

        .section .content .radio-group label {
            font-weight: normal;
            margin-right: 20px;
        }

        .section .content .question-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .section .content .question-group .options {
            display: flex;
        }

        .section .content .question-group .options label {
            margin-left: 10px;
            font-weight: normal;
        }

        .section .content .notes {
            margin-bottom: 20px;
        }

        .section .content .notes textarea {
            height: 100px;
        }

        .simpan {
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
    <div class="container">
        <h1>Catatan Perkembangan Ibu Hamil</h1>
        <form action="" method="post">
            <div class="section">
                <h2>Data Ibu Hamil</h2>
                <div class="content">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" placeholder="Masukkan Nama" name="nama" required>

                    <label for="tanggal-lahir">Tanggal Lahir:</label>
                    <input type="date" id="tanggal-lahir" name="tgl_lahir" required>

                    <label for="usia">Usia:</label>
                    <input type="number" id="usia" placeholder="Masukkan Usia" name="usia" required>
                </div>
            </div>

            <div class="section">
                <h2>Pertumbuhan Fisik</h2>
                <div class="content">
                    <label for="berat-badan">Berat Badan (kg):</label>
                    <input type="number" id="berat-badan" placeholder="Masukkan Berat Badan" name="bb" required>

                    <label for="tinggi-badan">Tinggi Badan (cm):</label>
                    <input type="number" id="tinggi-badan" placeholder="Masukkan Tinggi Badan" name="tb" required>

                    <label for="usia-kandungan">Usia Kandungan (minggu):</label>
                    <input type="number" id="usia-kandungan" placeholder="Masukkan Usia Kandungan" name="usia_hamil" required>

                    <label for="kehamilan-ke">Kehamilan ke-:</label>
                    <input type="number" id="kehamilan-ke" placeholder="0" name="hamil_ke" required>

                    <label for="imt">Indeks Massa Tubuh:</label>
                    <input type="number" id="imt" placeholder="Masukkan IMT" name="imt" required>
                    <p>* Cek Perhitungan IMT <a
                            href="https://drive.google.com/file/d/11Hy_NzgK6tmY6XxOa54HcBSBl4zBalbt/view?usp=sharing"
                            target="_blank">di sini</a></p>
                </div>
            </div>

            <div class="section">
                <h2>Analisis Perkembangan</h2>
                <div class="content">
                    <p>Berdasarkan hasil Index Massa Tubuh, berada dalam kategori apakah Anda?</p>
                    <div class="radio-group">
                        <label><input type="radio" name="q1" required value="underweight"> Underweight (Kurus)</label>
                        <label><input type="radio" name="q1" required value="normal"> Normal (Sehat)</label>
                        <label><input type="radio" name="q1" required value="overweight"> Overweight (Berlebih)</label>
                        <label><input type="radio" name="q1" required value="obese"> Obese (Obesitas)</label>
                    </div>

                    <div class="question-group">
                        <p>Apakah kenaikan berat badan ibu sesuai dengan rekomendasi medis?</p>
                        <div class="options">
                            <label><input type="radio" name="q2" required value="1"> Ya</label>
                            <label><input type="radio" name="q2" required value="0"> Tidak</label>
                        </div>
                    </div>

                    <div class="question-group">
                        <p>Apakah ibu mengonsumsi makanan / vitamin bergizi sesuai anjuran?</p>
                        <div class="options">
                            <label><input type="radio" name="q3" required value="1"> Ya</label>
                            <label><input type="radio" name="q3" required value="0"> Tidak</label>
                        </div>
                    </div>

                    <div class="question-group">
                        <p>Apakah ukuran janin sesuai dengan usia kehamilannya berdasarkan pemeriksaan USG?</p>
                        <div class="options">
                            <label><input type="radio" name="q4" required value="1"> Ya</label>
                            <label><input type="radio" name="q4" required value="0"> Tidak</label>
                        </div>
                    </div>

                    <div class="question-group">
                        <p>Apakah ada indikasi janin mengalami pertumbuhan yang lambat?</p>
                        <div class="options">
                            <label><input type="radio" name="q5" required value="1"> Ya</label>
                            <label><input type="radio" name="q5" required value="0"> Tidak</label>
                        </div>
                    </div>
                    <div class="question-group">
                        <p>Apakah ibu merokok atau mengonsumsi alkohol selama kehamilan?</p>
                        <div class="options">
                            <label><input type="radio" name="q6" required value="1"> Ya</label>
                            <label><input type="radio" name="q6" required value="0"> Tidak</label>
                        </div>
                    </div>

                    <div class="question-group">
                        <p>Apakah ibu mendapatkan dukungan emosional yang cukup dari orang terdekat?</p>
                        <div class="options">
                            <label><input type="radio" name="q7" required value="1"> Ya</label>
                            <label><input type="radio" name="q7" required value="0"> Tidak</label>
                        </div>
                    </div>

                    <div class="question-group">
                        <p>Apakah ibu pernah berkonsultasi dengan ahli gizi selama kehamilan ini?</p>
                        <div class="options">
                            <label><input type="radio" name="q8" required value="1"> Ya</label>
                            <label><input type="radio" name="q8" required value="0"> Tidak</label>
                        </div>
                    </div>

                    <div class="question-group">
                        <p>Apakah ibu memiliki riwayat penyakit kronis seperti diabetes atau hipertensi?</p>
                        <div class="options">
                            <label><input type="radio" name="q9" required value="1"> Ya</label>
                            <label><input type="radio" name="q9" required value="0"> Tidak</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <h2>Catatan Tambahan</h2>
                <div class="content">
                    <label for="catatan-pertumbuhan">Catat hal-hal penting terkait kesehatan ibu dan perkembangan
                        janin:</label>
                    <textarea id="catatan-pertumbuhan" name="c1" required
                        placeholder="Catat hal-hal penting terkait kesehatan ibu dan perkembangan janin"></textarea>

                    <label for="catatan-rencana">Catat hal-hal penting terkait rencana tindak lanjut terhadap Ibu dan
                        calon bayi:</label>
                    <textarea id="catatan-rencana" name="c2" required
                        placeholder="Catat hal-hal penting terkait rencana tindak lanjut terhadap Ibu dan calon bayi"></textarea>
                </div>
            </div>
    </div>
    <div class="container">
        <!-- Konten form yang telah ada -->

        <!-- Tombol Simpan -->
        <div class="section">
            <div class="content" style="text-align: center;">
                <button class="simpan">Simpan</button>
            </div>
        </div>
        </form>
    </div>


</body>

</html>