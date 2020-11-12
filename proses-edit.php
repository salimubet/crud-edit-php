<?php
include 'koneksi.php';

$data=$_POST['id'];
$Nama=$_POST['Nama'];
$Nim=$_POST['Nim'];
$Alamat=$_POST['Alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$matkul=$_POST['matkul'];


$sql = "update tbl_097 set Nama='$Nama', Nim='$Nim', Alamat='$Alamat', Jk='$jenis_kelamin', Matkul='$matkul' where No=$data";

?><br><?php

$hasil = $conn->query($sql);
if (!$hasil) {
	echo "Edit data Gagal";
}else{
	echo "Edit data Berhasil";
}

?>
<br><a href="tampil.php">Tampilkan data</a>