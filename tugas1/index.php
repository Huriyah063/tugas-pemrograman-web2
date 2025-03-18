<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penilaian Siswa</title>
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
        .form-group {
            margin-bottom: 10px;
        }
        label {
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background: #80CBC4;
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Nilai Siswa</h2>
    <form action="hasil.php" method="post">
        <div class="form-group">
            <label>Nama Lengkap:</label>
            <input type="text" name="nama" required>
        </div>
        <div class="form-group">
            <label>Mata Kuliah:</label>
            <select name="mata_kuliah">
                <option value="Statistik dan Probilitas">Statistik dan Probilitas</option>
                <option value="Struktur Data">Basis Data</option>
                <option value="UI/UX">UI/UX</option> 
                <option value="Jaringan Komputer">Jaringan Komputer </option>
                <option value="Pemrograman web 2">Pemrograman Web 2</option>
                <option value="Komunikasi efektif">Komunikasi Efektif</option>
                <option value="PPKN">PPKN</option>
                <option value="Bahasa Inggris">Bahasa inggris</option>
            </select>
        </div>
        <div class="form-group">
            <label>Nilai UTS:</label>
            <input type="number" name="nilai_uts" required min="0" max="100">
        </div>
        <div class="form-group">
            <label>Nilai UAS:</label>
            <input type="number" name="nilai_uas" required min="0" max="100">
        </div>
        <div class="form-group">
            <label>Nilai Tugas/Praktikum:</label>
            <input type="number" name="nilai_tugas" required min="0" max="100">
        </div>
        <button type="submit" name="proses">Simpan</button>
    </form>
</div>

</body>
</html>
