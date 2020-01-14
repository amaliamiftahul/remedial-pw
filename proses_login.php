<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($konek, "SELECT * FROM karyawan WHERE username='$username' and password= '$password' ");
$hasil = mysqli_num_rows($query);
 if (!$hasil) {
 	echo "<script>alert('Gagal login');window.location='login.php'</script>";
 }else {
 	echo "<script>alert('berhasil login');window.location='dashboard.php'</script>";
 }
?>