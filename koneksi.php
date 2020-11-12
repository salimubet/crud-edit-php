<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "salim";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Mengecek koneksi
if (!$conn) {
  die("Koneksi Gagal: " . mysqli_connect_error());
}
echo "Koneksi Berhasil";
?>