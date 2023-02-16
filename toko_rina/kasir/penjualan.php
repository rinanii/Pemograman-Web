<?php
include '../koneksi.php';
?>

<html>
    <head>
        <title> PENJUALAN </title>
    </head>
<body>
    <center>
        <h1> PENJUALAN </h1>
        <a href ="halaman_kasir.php"> Halaman Kasir </a> ||
        <a href ="penjualan_tambah.php"> Tambah </a> ||
        <a href ="../logout.php"> Logout </a>
    <table border="1">
        <tr>
            <th> No </th>
            <th> Barang </th>
            <th> Pelanggan </th>
            <th> Jumlah </th>
            <th> Aksi </th>
        </tr>
    <?php
        $sql = mysqli_query($koneksi, "SELECT * FROM penjualan
                            JOIN barang ON
                            barang.id_barang=penjualan.id_barang
                            JOIN pelanggan ON
                            pelanggan.id_pelanggan=penjualan.id_pelanggan");
        while ($data=mysqli_fetch_array($sql)){
    ?>
    <tr>
        <td> <?php echo $data['id_penjualan']; ?> </td>
        <td> <?php echo $data['barang']; ?> </td>
        <td> <?php echo $data['pelanggan']; ?> </td>
        <td> <?php echo $data['jumlah']; ?> </td>

        <td> <a href = "penjualan_hapus.php?id_penjualan=<?php echo
        $data['id_penjualan']; ?>"> Hapus </a> </td>
    </tr>

    <?php
        }
    ?>
    </table>
    </center>
    </body>
    </html>