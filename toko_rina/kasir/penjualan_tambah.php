<?php
include '../koneksi.php';
session_start();
?>

<html>
    <head>
        <title> TAMBAH PENJUALAN </title>
    </head>
<body>
    <center>
        <h1> Tambah Penjualan </h1>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    Barang : <select name="barang">
                <?php 
                     $sql = mysqli_query ($koneksi, "SELECT * FROM barang");
                     while ($barang=mysqli_fetch_array($sql)){
                ?>
                <option value="<?php echo $barang['id_barang'];?>">
                        <?php echo $barang['barang'];?>
                </option>
               <?php  } ?>
              </select> </br>
    Pelanggan : <select name="pelanggan">
                <?php 
                     $sql = mysqli_query ($koneksi, "SELECT * FROM pelanggan");
                     while ($pelanggan=mysqli_fetch_array($sql)){
                ?>
                <option value="<?php echo $pelanggan['id_pelanggan'];?>">
                        <?php echo $pelanggan['pelanggan'];?>
                </option>
               <?php  } ?>
              </select> </br>
    Jumlah : <input type="number" name="jumlah" required></br>
    <input type ="submit" name="submit" value="Tambah">
    <input type ="reset" name="reset">
    </form>
     </center>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $barang = $_POST['barang'];
    $pelanggan = $_POST['pelanggan'];
    $jumlah = $_POST['jumlah'];
    $sql = mysqli_query($koneksi, "INSERT INTO penjualan VALUES
    ('','$barang','$pelanggan','$jumlah')");
    if ($sql){
        header("location:penjualan.php");
    }else{
        header("location:penjualan_tambah.php");
    }
    exit;
}
?>