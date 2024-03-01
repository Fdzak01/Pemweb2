<?php
$namalengkap = $_GET['nama_lengkap'];
$username = $_GET['username'];
$password = $_GET['password'];

echo "<h1>Selamat {$namalengkap}, Kamu Sudah Terdaftar</h1>";
echo "<h3>Username : {$username}</h3>";
echo "<h3>Password : {$password}</h3>";
?>