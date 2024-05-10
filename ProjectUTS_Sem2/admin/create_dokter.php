<?php
require_once 'navbar.html';
require_once 'sidebar.html';
require_once 'koneksi.php';
$query = 'SELECT * FROM unit_kerja';
$unit_kejas = $dbh->query($query);
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
    <h2>Daftar Pasien</h2>
    <form method="POST" class='ms-4 me-4' action="proses_dokter.php">
      <div class="form-group row mt-2">
        <label for="nama" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
          <input id="nama" name="nama" type="text" required="required" class="form-control">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="gender" class="col-4 col-form-label">Jenis Kelamin</label>
        <div class="col-8">
          <div class='form-check form-check-inline'>
            <input id="gender_laki" name="gender" type="radio" required="required" class="form-check-input"
              value="Laki-Laki">
            <label for="gender_laki" class="form-check-label">Laki-Laki</label>
          </div>
          <div class='form-check form-check-inline'>
            <input id="gender_perempuan" name="gender" type="radio" required="required" class="form-check-input"
              value="Perempuan">
            <label for="gender_perempuan" class="form-check-label">Perempuan</label>
          </div>
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
        <div class="col-8">
          <input id="tmp_lahir" name="tmp_lahir" type="text" required="required" class="form-control">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
        <div class="col-8">
          <input id="tgl_lahir" name="tgl_lahir" type="date" required="required" class="form-control">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="kategori" class="col-4 col-form-label">kategori</label>
        <div class="col-8">
          <input id="kategori" name="kategori" type="text" required="required" class="form-control">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="telpon" class="col-4 col-form-label">Telpon</label>
        <div class="col-8">
          <input id="telpon" name="telpon" type="number" required="required" class="form-control">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="alamat" class="col-4 col-form-label">Alamat</label>
        <div class="col-8">
          <input id="alamat" name="alamat" type="text" required="required" class="form-control">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="unit_kerja" class="col-4 col-form-label">Unit Kerja</label>
        <div class="col-8">
          <select id="unit_kerja" name="unit_kerja" class="form-select" required="required">
            <option value="">Pilih Unit Kerja</option>
            <?php foreach($unit_kejas as $unit_keja): ?>
            <option value="<?= $unit_keja['id']; ?>">
              <?= $unit_keja['nama']; ?>
            </option>
            <?php endforeach; ?>
          </select>
        </div>

      </div>
      <div class="form-group row mt-2">
        <div class="offset-4 col-8">
          <button name="proses" type="submit" value='tambah' class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script
</body>

</html>