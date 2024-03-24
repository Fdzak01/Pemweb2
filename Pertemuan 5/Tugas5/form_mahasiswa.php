<?php require_once 'class_nilaimahasiswa.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <h1>Form Nilai Ujian</h1><hr>

    <form action="" method="POST">
        <div>
            <label for="nim">NIM</label>
            <input type="number" name="nim" id="nim" required>
        </div><br>
        <div>
            <label for="nim">Mata Kuliah</label>
            <input type="text" name="mk" id="nim" required>
        </div><br>
        <div>
            <label for="nilai">Nilai</label>
            <input type="number" name="nilai" id="nim" required>
        </div><br>
        <div>
            <button type="submit" name="submit">Hasil</button>
        </div>
    </form>

    <?php 

    if (isset($_POST['submit'])) {
    // Ambil data
    $nim = $_POST['nim'];
    $matakuliah = $_POST['mk'];
    $nilai = $_POST['nilai'];

    // Proses nilai
    $nilaiMahasiswa = new NilaiMahasiswa($matakuliah, $nilai, $nim);
    $hasilUjian = $nilaiMahasiswa->hasilujian();
    $grade = $nilaiMahasiswa->grade();
    ?>

    <ul>
        <li>NIM: <?= $nim ?></li>
        <li>Mata Kuliah: <?= $matakuliah ?></li>
        <li>Nilai: <?= $nilai ?></li>
        <li>Hasil Ujian: <?= $hasilUjian ?></li>
        <li>Grade: <?= $grade ?></li>
    </ul>
    <?php } ?>
    
    
</body>
</html>

