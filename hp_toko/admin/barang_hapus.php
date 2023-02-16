<?php
include_once '../koneksi.php';
$id_barang = $_GET ['id_barang'];
mysqli_query ($koneksi, "BEGIN");
$sql = mysqli_query($koneksi, "DELETE FROM barang WHERE id_barang='$id_barang'");
if ($sql){
    mysqli_query($koneksi, "COMMIT");o
    header ('location:barang.php');
} else {
    mysqli_query($koneksi, "ROLLBACK");
    echo "ROLLBACK DILAKUKAN";
}
?>