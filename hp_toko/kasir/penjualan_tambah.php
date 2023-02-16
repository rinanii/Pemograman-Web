<?php
include '../koneksi.php';
session_start();
?>

<html>
<head>
    <title> Tambah Penjualan </title>
</head>
<body>
    <center>
        <h1> TAMBAH PENJUALAN </h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
            <tr>
                <td> Barang </td>
                <td> : </td>
                <td> <select name="barang">
                    <?php
                $sql = mysqli_query($koneksi, "SELECT * FROM barang");
                while ($barang = mysqli_fetch_array($sql)){ ?>
                <option value="<?php echo $barang['id_barang']; ?>">
                               <?php echo $barang['barang']; ?>
                </option> 
                <?php } ?>
                </select> </td>
            </tr>

            <tr>
                <td> Pelanggan </td>
                <td> : </td>
                <td> <select name="pelanggan">
                    <?php
                $sql = mysqli_query($koneksi, "SELECT * FROM pelanggan");
                while ($pelanggan = mysqli_fetch_array($sql)){ ?>
                <option value="<?php echo $pelanggan['id_pelanggan']; ?>">
                               <?php echo $pelanggan['pelanggan']; ?>
                </option> 
                <?php } ?>
                </select> </td>
            </tr>

            <tr>
                <td> Jumlah </td>
                <td> : </td>
                <td> <input type="number" name="jumlah" required> </td>
            </tr>

            <tr>
                <td> </td>
                <td> </td>
                <td> 
                     <input type="reset" name="reset">
                     <input type="submit" name="submit" value="Tambah">
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
    $pelanggan = $_POST ['pelanggan'];
    $jumlah = $_POST ['jumlah'];

    $sql = mysqli_query ($koneksi, "INSERT INTO penjualan VALUES('','$barang','$pelanggan','$jumlah')");
    if($sql){
        header ('location:penjualan.php');
    } else {
        header ('location:penjualan_tambah.php');
    }
    exit;
}
?>