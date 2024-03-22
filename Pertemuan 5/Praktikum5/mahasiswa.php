<?php require_once 'class_mahasiswa.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Angkatan</th>
                <th>IPK</th>
                <th>Predikat</th>
            </tr>
            <tr>
                <td>1</td>
                <td><?= $mahasiswa1->nim; ?></td>
                <td><?= $mahasiswa1->nama; ?></td>
                <td><?= $mahasiswa1->prodi; ?></td>
                <td><?= $mahasiswa1->angkatan; ?></td>
                <td><?= $mahasiswa1->ipk; ?></td>
                <td><?= $mahasiswa1->predikat_ipk(); ?></td>
            </tr>
            <tr></tr>
        </table>
    </div>
</body>
</html>