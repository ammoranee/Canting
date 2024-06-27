<?php 
session_start();
include 'koneksi.php';
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM anak WHERE id = $id");
    echo "<script>alert('Data Berhasil Dihapus.')</script>";
    header("Location: monitoringanak.php");
}
$id = $_SESSION['user']['id'];
$data_anak = mysqli_query($conn, "SELECT * FROM anak WHERE user_id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Perkembangan Anak</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8e5;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 80%;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        table th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        .back {
            background-color: #306c3b;
            border: none;
            padding: 5px 10px;
            border-radius: 10px;
            font-weight: bold;
            color: #f0f5f1;
            text-decoration: none;
            text-align: start;
        }

        .chart-container {
            width: 100%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        canvas {
            width: 100% !important;
            height: auto !important;
        }

        .chart-title {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="container">
        <a href="monitoring.php" class="back">Kembali</a>
        <h1>Catatan Perkembangan Anak</h1>

        <div class="section">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tgl Lahir</th>
                        <th>Usia</th>
                        <th>Jenis Kelamin</th>
                        <th>Berat Badan (BB)</th>
                        <th>Tinggi Badan (TB)</th>
                        <th>Indeks Massa Tubuh (IMT)</th>
                        <th>Distribusi Kategori IMT</th>
                        <th>Hasil Catatan Perkembangan Anak</th>
                        <th>Catatan Rencana Tindak Lanjut</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    $data_array = [];
                    $q1_counts = [
                        'Underweight (Kurus)' => 0,
                        'Normal (Sehat)' => 0,
                        'Overweight (Berlebih)' => 0,
                        'Obese (Obesitas)' => 0
                    ];
                    while($row = mysqli_fetch_assoc($data_anak)) {
                        $data_array[] = $row;
                        $imt = $row['imt'];
                        if ($imt < 18.5) {
                            $category = "Underweight (Kurus)";
                        } elseif ($imt >= 18.5 && $imt < 24.9) {
                            $category = "Normal (Sehat)";
                        } elseif ($imt >= 24.9 && $imt < 29.9) {
                            $category = "Overweight (Berlebih)";
                        } else {
                            $category = "Obese (Obesitas)";
                        }
                        // Hitung q1 options
                        $q1_counts[$category]++;
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['tgl_lahir'] ?></td>
                        <td><?= $row['usia'] ?></td>
                        <td><?= $row['jenis_kelamin'] ?></td>
                        <td><?= $row['bb'] ?></td>
                        <td><?= $row['tb'] ?></td>
                        <td><?= $row['imt'] ?></td>
                        <td><?= $category ?></td>
                        <td><?= $row['c1'] ?></td>
                        <td><?= $row['c2'] ?></td>
                        <td>
                            <a href="editformanak.php?id=<?= $row['id'] ?>">Edit</a> |
                            <a href="monitoringanak.php?delete=<?= $row['id'] ?>"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                        </td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="chart-container">
        <div class="chart-title">Grafik Perkembangan Anak</div>
        <canvas id="developmentChart"></canvas>
    </div>
    <div class="chart-container">
        <div class="chart-title">Distribusi Kategori IMT</div>
        <canvas id="q1Chart"></canvas>
    </div>

    <script>
        const data = <?php echo json_encode($data_array); ?>;
        const names = data.map(item => item.nama);
        const weights = data.map(item => item.bb);
        const heights = data.map(item => item.tb);
        const imt = data.map(item => item.imt);

        const ctx = document.getElementById('developmentChart').getContext('2d');
        const developmentChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: names,
                datasets: [
                    {
                        label: 'Berat Badan (BB)',
                        data: weights,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                        yAxisID: 'y',
                    },
                    {
                        label: 'Tinggi Badan (TB)',
                        data: heights,
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 1,
                        yAxisID: 'y',
                    },
                    {
                        label: 'Indeks Massa Tubuh (IMT)',
                        data: imt,
                        backgroundColor: 'rgba(255, 159, 64, 0.2)',
                        borderColor: 'rgba(255, 159, 64, 1)',
                        borderWidth: 1,
                        yAxisID: 'y',
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Skala'
                        }
                    }
                }
            }
        });

        const q1Data = <?php echo json_encode($q1_counts); ?>;
        const q1Labels = Object.keys(q1Data);
        const q1Values = Object.values(q1Data);

        const ctxPie = document.getElementById('q1Chart').getContext('2d');
        const q1Chart = new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: q1Labels,
                datasets: [{
                    data: q1Values,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>
</body>
</html>
