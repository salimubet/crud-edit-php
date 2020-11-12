<?php
include 'koneksi.php';

$hasil = $conn->query("SELECT * FROM tbl_097");

echo "<table border=1"; 
while ($row = $hasil->fetch_assoc()) {
	?>
	<tr>
		<td><?php echo $row['No']; ?></td>
		<td><?php echo $row['Nama']; ?></td>
		<td><?php echo $row['Nim']; ?></td>
		<td><?php echo $row['Alamat']; ?></td>
		<td><?php echo $row['Jk']; ?></td>
		<td><?php echo $row['Matkul']; ?></td>
		<td><a href="hapus.php?id=<?php echo $row['No'];?>"> Hapus </a> | <a href="edit.php?id=<?php echo $row['No'];?>"> Edit </a></td>
	</tr>

	<?php } ?>
</table>
<br><a href="form.php">Tambah data</a>