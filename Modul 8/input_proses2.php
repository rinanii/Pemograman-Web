<?php
if(isset($_GET['simpan'])){
    $nama = $_GET['nama'];
    $usia = $_GET['usia'];
    $alamat = $_GET['usia'];
    echo "Nama Anda adalah <b>$nama</b><br/>";
    echo "Usia Anda adalah <b>$usia tahun </b><br/>";
    echo "Alamat Anda di <b>$alamat </b><br/>";
}
?>