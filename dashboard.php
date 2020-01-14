<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
<h2>Anda Berhasil Login</h2>

<h2>Data Alat Band</h2>

<form>
	<table border="1">
		<tr>
			<th>Nomor</th>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Aksi</th>
		</tr>
		<?php
		include "koneksi.php";
		$query=mysqli_query($konek, "SELECT * FROM alat_band");
		$No=1;
		while ($ambil=mysqli_fetch_assoc($query)) {
			echo"<tr>";
			echo "<td>".$No."</td>";
			echo"<td>". $ambil['nama_ab']."</td>";
			echo"<td>".$ambil['jumlah']."</td>";
			echo "<td><a href='edit.php?id=$ambil[id_ab]'>Edit</a> | <a href='delete.php?id=$ambil[id_ab]'>Delete</a></td>";
			echo"</tr>";
		}
		?>
	</table><br>
	<a href="tambah.php">Tambah Data</a>
</form>

</body>
</html>