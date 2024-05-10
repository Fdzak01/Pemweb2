<?php
require_once 'koneksi.php'; 


$_nama = $_POST['nama'];
$_gender = $_POST['gender'];
$_tmp_lahir = $_POST['tmp_lahir'];
$_tgl_lahir = $_POST['tgl_lahir'];
$_kategori = $_POST['kategori'];
$_telpon = $_POST['telpon'];
$_alamat = $_POST['alamat'];
$_unit_kerja = $_POST['unit_kerja'];
$_proses = $_POST['proses'];

// simpan data ke array $data

$data =[
    $_nama,$_gender, $_tmp_lahir, $_tgl_lahir, $_kategori, $_telpon, $_alamat, $_unit_kerja
];
if ($_proses == 'tambah') {
    $sql = 'INSERT INTO dokter(
        nama, gender, tmp_lahir, tgl_lahir, kategori, telpon, alamat, unit_kerja_id) VALUES(
        ?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = $dbh->prepare($sql);
        $stmt->execute($data);
}elseif ($_proses == 'edit') {
    $id_dokter = $_POST['id'];
    $data[] = $id_dokter;
    $sql = 'UPDATE dokter SET nama=?, gender=?, tmp_lahir=?, tgl_lahir=?, kategori=?,
    telpon=?, alamat=?, unit_kerja_id=? WHERE id=?';

    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
}else{
    $id_dokter = $_GET['id'];
    $sql = "DELETE FROM dokter WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id_dokter]);
}
header('Location: data_dokter.php');
?>