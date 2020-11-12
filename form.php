<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	<form action="proses.php" method="POST">
		<h2>Form</h2>
		<table>
			<tr>
				<td>Nama</td>
				<td>: <input type="text" name="Nama"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>: <input type="text" name="Nim"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>: <input type="text" name="Alamat"></td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>: 
					<input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
					<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</td>
			</tr>
			<tr>
				<td>Mata kuliah</td>
				<td>: <select name="matkul">
					<option value="">--pilih matkul--</option>
			        <option value="PAW C">PAW C</option>
			        <option value="Alpro B">Alpro B</option>
			        <option value="Sister A">Sister A</option>
			    	</select></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="kirim"></td>
			</tr>
		</table>
	</form>

<a href="tampil.php">Tampilkan data</a>

</body>
</html>