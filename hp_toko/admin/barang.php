<?php
include '../koneksi.php';
session_start();
?>

<html>
<head>
    <title> Data Barang </title>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <style>
        h1 {
            font-size: 40px;
            font-family: 'Secular One', sans-serif;
            text-align: center;
            text-shadow: 3px 4px 3px 0.5 black ;
        }
    </style>
</head>
<body>
    <center>
        <h1> BARANG </h1>
        <form action="<?php $_SERVER ['PHP_SELF']; ?>" method='POST'>
            <a href = "halaman_admin.php"> Halaman Utama </a> ||
            <a href = "barang_tambah.php"> Tambah </a> ||
            <a href = "../logout.php"> Logout </a>

        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th> No </th>
                <th> Nama Barang </th>
                <th> Harga </th>
                <th> Stok </th>
                <th> Aksi </th>
            </tr>

        <?php
        $sql = mysqli_query($koneksi, "SELECT * FROM barang");
        while ($data = mysqli_fetch_array($sql)){
        ?>

            <tr>
                <td> <?php echo $data ['id_barang']; ?> </td>
                <td> <?php echo $data ['barang']; ?> </td>
                <td> <?php echo $data ['harga']; ?> </td>
                <td> <?php echo $data ['stok']; ?> </td>
                <td> <a href = "barang_edit.php?id_barang=<?php echo $data ['id_barang']; ?>"> Edit </a> ||
                     <a href = "barang_hapus.php?id_barang=<?php echo $data ['id_barang'] ?>"> Hapus </a> </td>
            </tr>
        <?php } ?>
        </table>
        </form>
        </center>
        </html>