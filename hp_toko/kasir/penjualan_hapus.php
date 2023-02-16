<?php
include_once '../koneksi.php';
$id_penjualan = $_GET ['id_penjulan'];
mysqli_query ($koneksi, "BEGIN");
$sql = mysqli_query($koneksi, "DELETE FROM penjualan WHERE id_penjualan='$id_penjualan'");
if ($sql){
    mysqli_query($koneksi, "COMMIT");
    header ('location:penjualan.php');
} else {
    mysqli_query($koneksi, "ROLLBACK");
    echo "ROLLBACK DILAKUKAN";
}
?>