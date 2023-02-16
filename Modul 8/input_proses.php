<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $alamat = $_POST['usia'];
    echo "Nama Anda adalah <b>$nama</b><br/>";
    echo "Usia Anda adalah <b>$usia tahun </b><br/>";
    echo "Alamat Anda adalah <b>$alamat </b><br/>";
}
?>