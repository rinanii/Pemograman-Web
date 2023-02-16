<?php
include '../koneksi.php';

if(isset($_GET['id_barang'])){
    $id_barang = $_GET['id_barang'];
    $sql = mysqli_query($koneksi,"DELETE FROM barang WHERE id_barang='$id_barang' ");
    if($sql){
        header("location:barang.php");
    } else{ 
        echo "Data Gagal Dihapus";
    }
}
?>