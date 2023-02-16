<?php
include '../koneksi.php';
session_start();
if(isset($_GET['id_barang'])){
    $id_barang = $_GET['id_barang'];
    $sql = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id_barang'");
    $data = mysqli_fetch_array($sql);
}
?>

<html>
<head>
    <title> Edit Barang </title>
</head>
<body>
    <center>
        <h1> EDIT BARANG </h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="id_barang" value="<?php $data ['id_barang']; ?>">
        
        <table>
            <tr>
                <td> Nama Barang </td>
                <td> : </td>
                <td> <input type="text" name="barang" value="<?php echo $data ['barang']; ?>"> </td>
            </tr>
            
            <tr>
                <td> Harga </td>
                <td> : </td>
                <td> <input type="number" name="harga" value="<?php echo $data ['harga']; ?>"> </td>
            </tr>
            
            </tr>
                <td> Stok </td>
                <td> : </td>
                <td> <input type="number" name="stok" value="<?php echo $data ['stok']; ?>"> </td>
            </tr>

            <tr>
                <td> </td>
                <td> </td>
                <td> 
                    <input type="reset" name="reset">
                    <input type="submit" name="submit" value="Edit">
                </td>
            </tr>
        </table>
        </form>
    </center>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $barang = $_POST ['barang'];
    $harga = $_POST ['harga'];
    $stok = $_POST ['stok'];

    $sql = mysqli_query($koneksi, "UPDATE barang SET barang='$barang', harga='$harga', stok='$stok' WHERE id_barang='$id_barang'");
    if($sql){
        header('location:barang.php');
    } else {
        header('location:barang_edit.php');
    }
    exit;
}
?>