<?php
$proses = $_GET['proses'];
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas =$_GET['nilai_tugas'];

echo 'Proses           :' . $proses;
echo '<br/>Nama Siswa  :' . $nama;
echo '<br/>Mata Kuliah :' . $matkul;
echo '<br/>Nilai UTS   :' . $nilai_uts;
echo '<br/>Nilai UAS   :' . $nilai_uas;
echo '<br/>Nilai Tugas :' . $nilai_tugas;

?>