<html>
<head>
    <title> Tambah Barang </title>
</head>
<body>
    <center>
        <h1> TAMBAH BARANG </h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method='POST'>
        Nama Barang : <input type="text" name="barang"><br/>
        Harga : <input type="number" name="harga"><br/>
        Stok : <input type="number" name="stok"><br/>
        <input type="submit" name="submit" value="Tambah">
        <input type="reset" name="reset">
</form>
</center>
</body>
</html>

<?php
include '../koneksi.php';
if(isset($_POST['submit'])){
    $barang = $_POST['barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $sql = mysqli_query ($koneksi, "INSERT INTO barang VALUES('','$barang','$harga','$stok')");
        if($sql){
            header ("location:barang.php");
        } else {
            header ("location:barang_tambah.php");
        }
        exit;
}
?>