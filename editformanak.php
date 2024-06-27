<?php 
session_start();
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM anak WHERE id=$id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

if(isset($_POST['nama'])){
    $data = $_POST;
    $value =array();
    foreach($data as $n=>$d){
        array_push($value,$d == ''? $n.'=0' : $n."='".$d."'");
    }
    $value = implode(', ', $value);
    $sql = "UPDATE anak "."  SET ".$value." WHERE id=$id";

    if ($conn->query($sql)) {
        echo "<script>alert('Data berhasil diupdate.')</script>";
        header("Location: monitoringanak.php");
        exit;
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
    <title>Catatan Perkembangan Anak</title>
    <style>
        /* CSS styles for the child development form */
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
        <h1>Catatan Perkembangan Anak</h1>
        <form action="" method="post">
            <div class="section">
                <h2>Data Anak</h2>
                <div class="content">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" placeholder="Masukkan Nama" name="nama" required value="<?= $data['nama'] ?>">

                    <label for="tanggal-lahir">Tanggal Lahir:</label>
                    <input type="date" id="tanggal-lahir" name="tgl_lahir" required value="<?= $data['tgl_lahir'] ?>">

                    <label for="usia">Usia:</label>
                    <input type="number" id="usia" placeholder="Masukkan Usia" name="usia" required value="<?= $data['usia'] ?>">

                    <label>Jenis Kelamin:</label>
                    <div class="radio-group">
                        <label><input type="radio" name="jenis_kelamin" value="laki-laki" required  <?php if ($data['jenis_kelamin'] == 'laki-laki') echo 'checked'; ?> > Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="perempuan" required <?php if ($data['jenis_kelamin'] == 'perempuan') echo 'checked'; ?>> Perempuan</label>
                    </div>
                </div>
            </div>

            <div class="section">
                <h2>Pertumbuhan Fisik</h2>
                <div class="content">
                    <label for="berat-badan">Berat Badan (kg):</label>
                    <input type="number" id="berat-badan" placeholder="Masukkan Berat Badan"name="bb" required value="<?= $data['bb'] ?>">

                    <label for="tinggi-badan">Tinggi Badan (cm):</label>
                    <input type="number" id="tinggi-badan" placeholder="Masukkan Tinggi Badan" name="tb" required value="<?= $data['tb'] ?>">

                    <label for="imt">Indeks Massa Tubuh:</label>
                    <input type="number" id="imt" placeholder="Masukkan IMT" name="imt" required value="<?= $data['imt'] ?>">
                    <p>* Cek Perhitungan IMT <a
                            href="https://drive.google.com/file/d/11Hy_NzgK6tmY6XxOa54HcBSBl4zBalbt/view?usp=sharing"
                            target="_blank">di sini</a></p>
                </div>
            </div>

            <div class="section">
                <h2>Analisis Perkembangan</h2>
                <div class="content">
                    <p>Berdasarkan hasil Index Massa Tubuh, berada dalam kategori apakah anak Anda?</p>
                    <div class="radio-group">
                        <label><input type="radio" name="q1" required value="underweight" <?= $data['q1'] == 'underweight' ? 'checked' : '' ?>> Underweight (Kurus)</label>
                        <label><input type="radio" name="q1" required value="normal" <?= $data['q1'] == 'normal' ? 'checked' : '' ?>> Normal (Sehat)</label>
                        <label><input type="radio" name="q1" required value="overweight" <?= $data['q1'] == 'overweight' ? 'checked' : '' ?>> Overweight (Berlebih)</label>
                        <label><input type="radio" name="q1" required value="obese" <?= $data['q1'] == 'obese' ? 'checked' : '' ?>> Obese (Obesitas)</label>
                    </div>

                    <div class="question-group">
                        <p>Apakah anak Anda mengalami keterlambatan dalam mencapai tonggak perkembangan motorik (e.g:
                            duduk, merangkak, berdiri, berjalan) yang sesuai dengan rentang usianya?</p>
                        <div class="options">
                            <label><input type="radio" name="q2" required value="1" <?php if ($data['q2'] == '1') echo 'checked'; ?> > Ya</label>
                            <label><input type="radio" name="q2" required value="0" <?php if ($data['q2'] == '0') echo 'checked'; ?> > Tidak</label>
                        </div>
                    </div>

                    <div class="question-group">
                        <p>Apakah anak Anda mengalami kesulitan dalam melakukan aktivitas motorik halus (e.g: memegang
                            mainan atau mengambil benda kecil)?</p>
                        <div class="options">
                            <label><input type="radio" name="q3" required value="1" <?php if ($data['q3'] == '1') echo 'checked'; ?> > Ya</label>
                            <label><input type="radio" name="q3" required value="0" <?php if ($data['q3'] == '0') echo 'checked'; ?> > Tidak</label>
                        </div>
                    </div>

                    <div class="question-group">
                        <p>Apakah anak Anda mengalami keterlambatan dalam perkembangan bicara atau bahasa?</p>
                        <div class="options">
                            <label><input type="radio" name="q4" required value="1" <?= $data['q4'] == '1' ? 'checked' : ''; ?> > Ya</label>
                            <label><input type="radio" name="q4" required value="0" <?= $data['q4'] == '0' ? 'checked' : ''; ?>  > Tidak</label>
                        </div>
                    </div>

                    <div class="question-group">
                        <p>Apakah anak Anda sering menolak makan atau memiliki nafsu makan yang rendah?</p>
                        <div class="options">
                            <label><input type="radio" name="q5" required value="1" <?= $data['q5'] == '1' ? 'checked' : ''; ?> > Ya</label>
                            <label><input type="radio" name="q5" required value="0" <?= $data['q5'] == '0' ? 'checked' : ''; ?> > Tidak</label>
                        </div>
                    </div>

                    <div class="question-group">
                        <p>Apakah anak Anda tetap mendapatkan ASI eksklusif hingga saat ini?</p>
                        <div class="options">
                            <label><input type="radio" name="q6" required value="1" <?= $data['q6'] == '1' ? 'checked' : ''; ?> > Ya</label>
                            <label><input type="radio" name="q6" required value="0" <?= $data['q6'] == '0' ? 'checked' : ''; ?> > Tidak</label>
                        </div>
                    </div>

                    <div class="question-group">
                        <p>Apakah makanan keseharian yang dikonsumsi anak Anda mengandung nutrisi yang cukup untuk
                            pertumbuhan dan perkembangannya?</p>
                        <div class="options">
                            <label><input type="radio" name="q7" required value="1" <?= $data['q7'] == '1' ? 'checked' : ''; ?> > Ya</label>
                            <label><input type="radio" name="q7" required value="0" <?= $data['q7'] == '0' ? 'checked' : ''; ?> > Tidak</label>
                        </div>
                    </div>

                    <div class="question-group">
                        <p>Apakah lingkungan tempat anak tinggal mendukung pertumbuhan dan perkembangannya?</p>
                        <div class="options">
                            <label><input type="radio" name="q8" required value="1" <?= $data['q8'] == '1' ? 'checked' : ''; ?> > Ya</label>
                            <label><input type="radio" name="q8" required value="0" <?= $data['q8'] == '0' ? 'checked' : ''; ?> > Tidak</label>
                        </div>
                    </div>

                    <div class="question-group">
                        <p>Apakah anak Anda memiliki akses yang cukup terhadap permainan atau aktivitas yang merangsang
                            pertumbuhan dan perkembangan seperti anak seusianya?</p>
                        <div class="options">
                            <label><input type="radio" name="q9" required value="1" <?= $data['q9'] == '1' ? 'checked' : ''; ?> > Ya</label>
                            <label><input type="radio" name="q9" required value="0" <?= $data['q9'] == '0' ? 'checked' : ''; ?> > Tidak</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <h2>Catatan Tambahan</h2>
                <div class="content">
                    <label for="catatan-pertumbuhan">Catat hal-hal penting terkait pertumbuhan anak Anda:</label>
                    <textarea id="catatan-pertumbuhan" name="c1" required 
                        placeholder="Catat hal-hal penting terkait pertumbuhan anak Anda"><?= $data['c1']?> </textarea>

                    <label for="catatan-rencana">Catat hal-hal penting terkait rencana tindak lanjut terhadap anak
                        Anda:</label>
                    <textarea id="catatan-rencana" name="c2" required
                        placeholder="Catat hal-hal penting terkait rencana tindak lanjut terhadap anak Anda"> <?= $data['c2'] ?> </textarea>
                </div>
            </div>

            <!-- Tombol Simpan -->
            <div class="section">
                <div class="content" style="text-align: center;">
                    <button  class="simpan">Simpan</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Script untuk menangani simpan data -->
      
</body>

</html>