<?php
require_once 'navbar.html';
require_once 'sidebar.html';

require_once 'koneksi.php';
$query = "SELECT pasien.*, kelurahan.nama as nama_kelurahan
            FROM pasien
            LEFT JOIN kelurahan ON pasien.kelurahan_id = kelurahan.id_kelurahan";
$pasiens = $dbh->query($query)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <h1>Data Pasien</h1>
        <a style ='margin : 5px;' href="create_pasien.php" class ='btn btn-primary mt-4'>Data baru</a>
        <table class="table table-bordered mt-2">
            <tr class="table-success">
                <th>No</th>
                <th>Kode pasien</th>
                <th>Nama</th>
                <th>J. Kelamin</th>
                <th>Tem. Lahir</th>
                <th>Tggl. Lahir</th>
                <th>Kelurahan</th>
                <th>Aksi</th>
            </tr>
            <?php 
            $no = 1;
            foreach($pasiens as $pasien){ ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $pasien['kode']; ?></td>
                <td><?= $pasien['nama']; ?></td>
                <td><?= $pasien['gender']; ?></td>
                <td><?= $pasien['tmp_lahir']; ?></td>
                <td><?= $pasien['tgl_lahir']; ?></td>
                <td><?= $pasien['nama_kelurahan']; ?></td>
                <td>
                    <a href="edit_pasien.php?id=<?=$pasien['id_pasien'];?>" class="btn btn-primary">Ubah</a>
                    <a href="proses_pasien.php?id=<?=$pasien['id_pasien'];?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body> 
</html>










<?php require_once 'footer.html';?>