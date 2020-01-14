<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Alat Band</title>
</head>
<body>
	<a href="dashboard.php">Beranda</a><br><br>
	<form method="post" action="proses_tambah.php">
		<table border="1">
			<tr>
				<th>Nama Alat Band</th>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<th>Jumlah</th>
				<td>:</td>
				<td><input type="text" name="jumlah" required></td>
			</tr>
			<tr>
				<td colspan="3"><input name="tambah" type="submit" value="Tambah"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="reset" value="Reset"></td>
			</tr>
		</table>
	</form>
</body>
</html> 