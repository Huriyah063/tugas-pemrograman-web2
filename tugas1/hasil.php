<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penilaian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
            padding: 20px;
        }
        .container {
            width: 50%;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background: #B4EBE6;
            border: 1px solid #B4EBE6;
            border-radius: 5px;
        }
        a {
            display: block;
            margin-top: 15px;
            padding: 10px;
            text-align: center;
            background: #80CBC4;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Hasil Penilaian Siswa</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $mata_kuliah = $_POST['mata_kuliah'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];
        $nilai_tugas = $_POST['nilai_tugas'];

        // Menghitung nilai akhir (30% UTS, 30% UAS, 40% Tugas)
        $nilai_akhir = ($nilai_uts * 0.3) + ($nilai_uas * 0.3) + ($nilai_tugas * 0.4);

        // Menentukan Grade berdasarkan nilai akhir
        switch (true) {
            case ($nilai_akhir >= 85):
                $grade = "A";
                $predikat = "Sangat Memuaskan";
                break;
            case ($nilai_akhir >= 75):
                $grade = "B";
                $predikat = "Memuaskan";
                break;
            case ($nilai_akhir >= 65):
                $grade = "C";
                $predikat = "Cukup";
                break;
            case ($nilai_akhir >= 55):
                $grade = "D";
                $predikat = "Kurang";
                break;
            case ($nilai_akhir >= 0):
                $grade = "E";
                $predikat = "Sangat Kurang";
                break;
            default:
                $grade = "I";
                $predikat = "Tidak Ada";
        }

        // Menentukan status kelulusan
        $status = ($nilai_akhir >= 75) ? "Lulus" : "Tidak Lulus";

        // Menampilkan hasil
        echo "<div class='result'>";
        echo "<strong>Nama:</strong> $nama <br>";
        echo "<strong>Mata Kuliah:</strong> $mata_kuliah <br>";
        echo "<strong>Nilai UTS:</strong> $nilai_uts <br>";
        echo "<strong>Nilai UAS:</strong> $nilai_uas <br>";
        echo "<strong>Nilai Tugas/Praktikum:</strong> $nilai_tugas <br>";
        echo "<hr>";
        echo "<strong>Nilai Akhir:</strong> $nilai_akhir <br>";
        echo "<strong>Grade:</strong> $grade <br>";
        echo "<strong>Predikat:</strong> $predikat <br>";
        echo "<strong>Status:</strong> $status";
        echo "</div>";
    } else {
        echo "<p style='color:red;'>Akses tidak sah. Silakan isi formulir terlebih dahulu.</p>";
    }
    ?>

    <a href="index.php">Kembali ke Form</a>
</div>

</body>
</html>
