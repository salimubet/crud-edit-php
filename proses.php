<?php
include 'koneksi.php';

$Nama=$_POST['Nama'];
$Nim=$_POST['Nim'];
$Alamat=$_POST['Alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$matkul=$_POST['matkul'];

$sql = "insert into tbl_097 values (null,'$Nama','$Nim','$Alamat','$jenis_kelamin','$matkul' )";

?><br><?php

if ($conn->query($sql) == TRUE) {
	echo "Berhasil menambahkan data";
} else {
	echo "Gagal menambahkan data".$sql."<br>".$conn->error;
}
$conn->close();
?>
<br><a href="tampil.php">Tampilkan data</a>