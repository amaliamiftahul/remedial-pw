<?php
include_once("koneksi.php");

if(isset($_POST['update']))
{
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $jumlah=$_POST['jumlah'];

    $result = mysqli_query($konek, "UPDATE alat_band SET nama_ab='$nama', jumlah='$jumlah' WHERE id_ab='$id'");

    header("Location:dashboard.php");
}

$id=$_GET['id'];

$result=mysqli_query($konek, "SELECT * FROM alat_band WHERE id_ab='$id' ");

while($ambil=mysqli_fetch_array($result)){

?>
<html>
<head>  
    <title>Edit Data Alat Band</title>
</head>

<body>
    <a href="dashboard.php">Beranda</a>
    <br/><br/>

    <form method="post" action="edit.php">
        <table border="1">
            <tr> 
                <td>Nama Alat Band</td>
                <td><input type="text" name="nama" value="<?php echo $ambil['nama_ab'];?>" required ></td>
            </tr>
            <tr> 
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" value="<?php echo $ambil['jumlah'];?>" required ></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $ambil['id_ab'];?>"></td>
                <td colspan="2"><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
<?php } ?>
</body>
</html>