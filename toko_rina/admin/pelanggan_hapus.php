<?php
include '../koneksi.php';

if(isset($_GET['id_pelanggan'])){
    $id_pelanggan = $_GET['id_pelanggan'];
    $sql = mysqli_query($koneksi,"DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan' ");
    if($sql){
        header("location:pelanggan.php");
    } else{ 
        echo "Data Gagal Dihapus";
    }
}
?>