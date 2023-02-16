<?php
include '../koneksi.php';
session_start();

$id_pelanggan = $_GET['id_pelanggan'];
$sql = mysqli_query($koneksi, "SELECT * from pelanggan WHERE id_pelanggan='$id_pelanggan'");
$data = mysqli_fetch_array($sql);
?>

<html>
    <head>
        <title> EDIT PELANGGAN </title>
    </head>
    <body>
    <center>
        <h1> EDIT PELANGGAN </h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method='POST'>
        <input type="hidden" name="id_pelanggan" value="<?php echo $data['id_pelanggan'];?>">
        Nama Pelanggan : <input type="text" name="pelanggan" value ="<?php echo $data['pelanggan'];?>"> <br/>
        Alamat : <input type="eext" name="alamat"  value ="<?php echo $data['alamat'];?>"> <br/>
        <input type="submit" name="submit" value="EDIT">
        <input type="reset" name="reset"> 
        </form>
    </center>
</body>
</html>

<?php
include '../koneksi.php';
if(isset($_POST['submit'])){
    $id_pelanggan = $_POST['id_pelanggan'];
    $pelanggan = $_POST['pelanggan'];
    $alamat = $_POST['alamat'];
    $sql = mysqli_query($koneksi, "UPDATE pelanggan SET pelanggan='$pelanggan', alamat='$alamat' ");
        if($sql){
            header("location:pelanggan.php");
        }else{
            header("location:pelanggan_edit.php");
        }
        exit;
}
?>