<?php 
include 'koneksi.php';
$id=$_GET['id'];
?><br><?php

$sql= "delete from tbl_097 where No=$id";

$hasil = $conn->query($sql);
if (!$hasil) {
	echo "Hapus data Gagal";
}else{
	echo "Hapus data Berhasil";
}
?>
<br><a href="tampil.php">Tampilkan data</a>