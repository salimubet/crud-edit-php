<?php
include 'koneksi.php';

$id=$_GET['id'];
$hasil = $conn->query("SELECT * FROM tbl_097 where No=$id");
$row = $hasil->fetch_assoc()
/*
echo "<table border=1 width='75%'"; 
while ($row = $hasil->fetch_assoc()) {
	?>
	<tr>
		<td><?php echo $row['No']; ?></td>
		<td><?php echo $row['Nama']; ?></td>
		<td><?php echo $row['Nim']; ?></td>
		<td><?php echo $row['Alamat']; ?></td>
		<td><?php echo $row['Jk']; ?></td>
		<td><?php echo $row['Matkul']; ?></td>
		<td><a href="hapus.php?id=<?php echo $row['No'];?>"> Hapus </a> | <a href="edit.php?id=<?php echo $row['No'];?>
		
		"> Edit </a></td>
	</tr>

	<?php } ?>
</table>
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	<form action="proses-edit.php" method="POST">
		<h2>Edit Data</h2>
		<table>
			<tr>
				<td>Nama</td>
				<td>: <input type="text" name="Nama" value="<?php echo $row['Nama']; ?>">
				</td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>: <input type="text" name="Nim" value="<?php echo $row['Nim']; ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>: <input type="text" name="Alamat" value="<?php echo $row['Alamat']; ?>"></td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>: 
					<?php $jk = $row['Jk'];?>
					<input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($jk=='Laki-laki')?"checked":""?>> Laki-laki
					<input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jk=='Perempuan')?"checked":""?>> Perempuan</td>
			</tr>
			<tr>
				<td>Mata kuliah</td>
				<td>: 
					<?php $matkul = $row['Matkul']?>
					<select name="matkul">
					<option>--pilih matkul--</option>
			        <option <?php echo ($matkul=='PAW C')?"selected":""?>>PAW C</option>
			        <option <?php echo ($matkul=='Alpro B')?"selected":""?>>Alpro B</option>
			        <option <?php echo ($matkul=='Sister A')?"selected":""?>>Sister A</option>
			    	</select></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $row['No'] ?>"></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>

<a href="tampil.php">Batal Edit</a>
</body>
</html>