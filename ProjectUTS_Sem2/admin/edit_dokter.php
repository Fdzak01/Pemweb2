<?php
require_once 'navbar.html';
require_once 'sidebar.html';
require_once 'koneksi.php';
$id_dokter = $_GET['id'];
if($id_dokter){
    $query = 'SELECT * FROM dokter WHERE id = ?';
    $stmt = $dbh->prepare($query);
    $stmt->execute([$id_dokter]); 
    $dokter = $stmt->fetch();
}
$query_unit_kerja= 'SELECT * FROM unit_kerja';
$unit_kerjas = $dbh->query($query_unit_kerja)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Create Data Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Form Pembaharuan Data Dokter</h2>
        <form method="POST" class='ms-4 me-4' action="proses_dokter.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" required="required" value='<?= $dokter['nama'] ?? ''; ?>' class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="gender" class="col-4 col-form-label">Jenis Kelamin</label>
                <div class="col-8">
                    <input id="gender" name="gender" type="text" required="required"  value='<?= $dokter['gender'] ?? ''; ?>' class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                <div class="col-8">
                    <input id="tmp_lahir" name="tmp_lahir" type="text" required="required"  value='<?= $dokter['tmp_lahir'] ?? ''; ?>' class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                <div class="col-8">
                    <input id="tgl_lahir" name="tgl_lahir" type="date" required="required"  value='<?= $dokter['tgl_lahir'] ?? ''; ?>' class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="kategori" class="col-4 col-form-label">Kategori</label>
                <div class="col-8">
                    <input id="kategori" name="kategori" type="text" required="required"  value='<?= $dokter['kategori'] ?? ''; ?>' class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="telpon" class="col-4 col-form-label">Telpon</label>
                <div class="col-8">
                    <input id="telpon" name="telpon" type="text" required="required"  value='<?= $dokter['telpon'] ?? ''; ?>' class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="alamat" class="col-4 col-form-label">Alamat</label>
                <div class="col-8">
                    <input id="alamat" name="alamat" type="text" required="required"  value='<?= $dokter['alamat'] ?? ''; ?>' class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="unit_kerja" class="col-4 col-form-label">Unit Kerja</label>
                <div class="col-8">
                    <select id="unit_kerja" name="unit_kerja" class="form-select" required="required">
                        <?php foreach($unit_kerjas as $unit_kerja){
                            $selected = ($unit_kerja['id_unit_kerja']== $dokter['unit_kerja_id']) ? 'selected' : '';
                        ?>
                            <option value="<?= $unit_kerja['id'];?>" <?= $selected; ?>><?= $unit_kerja['nama']; ?></option>
                            
                        <?php } ?>
                    </select>
                </div>
            </div>
            <?php if($id_dokter){ ?>
                <input type="hidden" name="id" value="<?= $id_dokter; ?>">
            <?php } ?>
            <div class="form-group row mt-2">
                <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-primary" value='edit'>Update</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script
</body>

</html>
