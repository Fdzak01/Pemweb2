<?php
require_once 'navbar.html';
require_once 'sidebar.html';
require_once 'koneksi.php';

$query = "SELECT pasien. *, kelurahan.nama as nama_kelurahan
            FROM pasien
            LEFT JOIN kelurahan ON pasien.kelurahan_id = kelurahan.id_kelurahan";

$pasiens = $dbh->query($query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemeriksaan Puskesmas Sukahati</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Data Pemeriksaan-Checkup</h1>
        <a href="create_periksa.php" class='btn btn-primary mt-4'>Data Baru</a>
        <table class="table table-bordered">
            <tr class="table-info">
                <th>No</th>
                <th>Tanggal</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <th>Tensi</th>
                <th>Keterangan</th>
                <th>Pasien</th>
                <th>Dokter</th>
                <th>Action</th>
            </tr>
            <?php
                        $nomer = 1;
                        $sql = "SELECT periksa.*, pasien.nama as nama_pasien, dokter.nama as nama_dokter 
                        FROM periksa 
                        INNER JOIN pasien ON periksa.pasien_id = pasien.id_pasien
                        INNER JOIN dokter ON periksa.dokter_id = dokter.id";
                        $stmt = $dbh->prepare($sql);
                        $stmt->execute();
                        $result = $stmt->fetchAll();
                        foreach ($result as $periksa) { ?>

            <tr>
                <td>
                    <?= $nomer++; ?>
                </td>
                <td>
                    <?= $periksa['tanggal']; ?>
                </td>
                <td>
                    <?= $periksa['berat']; ?>
                </td>
                <td>
                    <?= $periksa['tinggi']; ?>
                </td>
                <td>
                    <?= $periksa['tensi']; ?>
                </td>
                <td>
                    <?= $periksa['keterangan']; ?>
                </td>
                <td>
                    <?= $periksa['nama_pasien']; ?>
                </td>
                <td>
                    <?= $periksa['nama_dokter']; ?>
                </td>

                <td>
                    <a href="edit_periksa.php?id=<?=$periksa['id'];?>" class="btn btn-primary">Ubah</a>
                    <a href="proses_periksa.php?id=<?=$periksa['id'];?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php 
            }
            ?>
        </table>
    </div>
</body>

</html>

<?php require_once 'footer.html';?>