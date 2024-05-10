<?php
require_once 'navbar.html';
require_once 'sidebar.html';
require_once 'koneksi.php';
$id_pasien = $_GET['id'];
if($id_pasien){
    $query = 'SELECT * FROM pasien WHERE id_pasien=?';
    $stmt = $dbh->prepare($query);
    $stmt->execute([$id_pasien]); 
    $pasien = $stmt->fetch();
}
$query_kelurahan= 'SELECT * FROM kelurahan';
$kelurahans = $dbh->query($query_kelurahan)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Create Data Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Daftar Pasien</h2>
        <form method="POST" class='ms-4 me-4' action="proses_pasien.php">
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Kode</label>
                <div class="col-8">
                    <input id="kode" name="kode" type="text" required="required" value='<?= $pasien['kode']; ?>' class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama_lengkap" name="nama_lengkap" type="text" required="required"  value='<?= $pasien['nama']; ?>' class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                <div class="col-8">
                    <input id="tmp_lahir" name="tmp_lahir" type="text" required="required"  value='<?= $pasien['tmp_lahir']; ?>' class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                <div class="col-8">
                    <input id="tgl_lahir" name="tgl_lahir" type="date" required="required"  value='<?= $pasien['tgl_lahir']; ?>' class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="gender" class="col-4 col-form-label">Jenis Kelamin</label>
                <div class="col-8">
                    <div class='form-check form-check-inline'>
                        <input id="gender_laki" name="gender" type="radio" required="required"  <?= ($pasien['gender'] == 'L' ? 'checked' :'') ?> class="form-check-input"
                            value="Laki-Laki">
                        <label for="gender_laki" class="form-check-label">Laki-Laki</label>
                    </div>
                    <div class='form-check form-check-inline'>
                        <input id="gender_perempuan" name="gender" type="radio" required="required" <?= ($pasien['gender'] == 'P' ? 'checked' :'') ?>
                            class="form-check-input" value="Perempuan">
                        <label for="gender_perempuan" class="form-check-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" type="text" required="required"  value='<?= $pasien['email']; ?>' class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="alamat" class="col-4 col-form-label">Alamat</label>
                <div class="col-8">
                    <input id="alamat" name="alamat" type="text" required="required"  value='<?= $pasien['alamat']; ?>' class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="kelurahan" class="col-4 col-form-label">Kelurahan</label>
                <div class="col-8">
                    <select id="kelurahan" name="kelurahan" class="form-select" required="required">
                        <?php foreach($kelurahans as $kelurahan){
                            $selected = ($kelurahan['id_kelurahan']== $pasien['kelurahan_id']) ? 'selected' : '';
                        ?>
                            <option value="<?= $kelurahan['id_kelurahan'];?>" <?= $selected; ?>><?= $kelurahan['nama']; ?></option>
                            
                        <?php } ?>
                    </select>
                </div>
            </div>
            <?php if($id_pasien){ ?>
                <input type="hidden" name="id" value="<?= $id_pasien; ?>">
            <?php } ?>
            <div class="form-group row mt-2">
                <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-primary" value='edit'>Update Data</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script
</body>

</html>