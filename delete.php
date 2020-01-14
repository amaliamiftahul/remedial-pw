<?php

include_once("koneksi.php");

$id=$_GET['id'];

$result = mysqli_query($konek, "DELETE FROM alat_band WHERE id_ab=$id");

header("location:dashboard.php");
?>