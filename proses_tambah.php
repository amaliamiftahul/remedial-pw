<?php
include_once("koneksi.php");

if (isset($_POST['tambah'])) {
	$nama=$_POST['nama'];
	$jumlah=$_POST['jumlah'];

	$result = mysqli_query($konek, "INSERT INTO alat_band(nama_ab, jumlah) values ('$nama', '$jumlah')");

	header("location:dashboard.php");
}

?>