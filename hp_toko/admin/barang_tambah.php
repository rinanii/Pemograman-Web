<html>
<head>
    <title> Tambah Barang </title>
</head>
<body>
    <center>
        <h1> TAMBAH BARANG </h1>
        <form action="<?php $_SERVER ['PHP_SELF']; ?>" method="POST">
        <table>
            <tr>
                <td> Nama Barang </td>
                <td> : </td>
                <td> <input type="text" name="barang"> </td>
            </tr>

            <tr>
                <td> Harga </td>
                <td> : </td>
                <td> <input type="number" name="harga"> </td>
            </tr>

            <tr>
                <td> Stok </td>
                <td> : </td>
                <td> <input type="number" name="stok"> </td>
            </tr>

            <tr>
                <td> </td>
                <td> </td>
                <td> 
                    <input type="reset" name="reset"> 
                    <input type="submit" name="submit" value="Tambah">
                </td>
            </tr>
        </form>
        </table>
    </center>
</body>
</html>

<?php
include '../koneksi.php';
if(isset($_POST['submit'])){
    $barang = $_POST ['barang'];
    $harga = $_POST ['harga'];
    $stok = $_POST ['stok'];

    $sql = mysqli_query ($koneksi, "INSERT INTO barang VALUES('','$barang','$harga','$stok')");
    if($sql){
        header ('location:barang.php');
    } else {
        header ('location:barang_tambah.php');
    }
    exit;
}
?>