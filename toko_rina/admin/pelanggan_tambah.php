<html>
    <head>
        <title> TAMBAH PELANGGAN </title>
    </head>
    <body>
    <center>
        <h1> TAMBAH PELANGGAN </h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" 
        method='POST'>
        Nama Pelanggan : <input type="text" name="pelanggan"><br/>
        Alamat : <input type="text" name="alamat"><br/>
        <input type="submit" name="submit" value="Tambah">
        <input type="reset" name="reset"> 
    </form>
    </center>
    </body>
    </html>

<?php
include '../koneksi.php';
if(isset($_POST['submit'])){
    $pelanggan = $_POST['pelanggan'];
    $alamat = $_POST['alamat'];
    $sql = mysqli_query($koneksi, "INSERT INTO pelanggan VALUES('','$pelanggan','$alamat')");
        if($sql){
            header("location:pelanggan.php");
        }else{
            header("location:pelanggan_tambah.php");
        }
        exit;
}
?>