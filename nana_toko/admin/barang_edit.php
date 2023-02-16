<?php
include '../koneksi.php';
session_start();

$id_barang = $_GET['id_barang'];
$sql = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id_barang'");
$data = mysqli_fetch_array($sql);
?>

<html>
<head>
<title> Edit Barang </title>
<body>
    <center>
        <h1> EDIT BARANG </h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="hidden" name="id_barang" value="<?php echo $data['id_barang']; ?>">
        Nama Barang : <input type="text" name="barang" value="<?php echo $data['barang']; ?>"><br/>
        Harga : <input type="number" name="harga" value="<?php echo $data['harga']; ?>"><br/>
        Stok : <input type="number" name="stok" value="<?php echo $data['stok']; ?>"><br/>
        <input type="submit" name="submit" value="EDIT">
        <input type="reset" name="reset">
</form>
</center>
</body>
</html>

<?php
include '../koneksi.php';
if(isset($_POST('submit'))){
    $id_barang = $_POST['id_barang'];
    $barang = $_POST['barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $sql = mysqli_query($koneksi, "UPDATE barang SET barang='$barang', harga='$harga', stok='$stok' WHERE id_barang='$id_barang'");
    if($sql){
        header ("location:barang.php");
    } else {
        header ("location:barang_edit.php");
    }
    exit;
}
?>