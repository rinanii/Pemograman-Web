<html>
<head>
    <title> Tambah Pelanggan </title>
</head>
<body>
    <center>
        <h1> TAMBAH PELANGGAN </h1>
        <form action="<?php $_SERVER ['PHP_SELF']; ?>" method="POST">
        <table>
            <tr>
                <td> Nama Pelanggan </td>
                <td> : </td>
                <td> <input type="text" name="pelanggan"> </td>
            </tr>

            <tr>
                <td> Alamat </td>
                <td> : </td>
                <td> <input type="text" name="alamat"> </td>
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
    $pelanggan = $_POST ['pelanggan'];
    $alamat = $_POST ['alamat'];

    $sql = mysqli_query ($koneksi, "INSERT INTO pelanggan VALUES('','$pelanggan','$alamat')");
    if($sql){
        header ('location:pelanggan.php');
    } else {
        header ('location:pelanggan_tambah.php');
    }
    exit;
}
?>