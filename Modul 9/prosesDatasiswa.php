<?php
if (isset($_POST['Lihat Hasil'])){
    $namalkp = $_POST['namalkp'];
    $namapgl = $_POST['namapgl'];
    $jk = $_POST['jk'];
    $ttl = $_POST['ttl'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
}
?>

<html>
    <head>
        <title>Data Siswa</title>
    </head>

    <body>
        <h1>DATA SISWA</h1>

        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?= $namalkp ?></td>
            </tr>
            <tr>
                <td>Nama Panggilan</td>
                <td>:</td>
                <td><?= $namapgl ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?= $jk ?></td>
            </tr>
            <tr>
                <td>Tempat dan Tanggal Lahir</td>
                <td>:</td>
                <td><?= $namapgl ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?= $namapgl ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?= $namapgl ?></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><?= $namapgl ?></td>
            </tr>