<?php
include '../koneksi.php';
session_start();
?>

<html>
<head>
    <title> Data Barang </title>
</head>
<body>
    <center>
        <h1> Barang </h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
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
                <td> <?php echo $data['id_barang'] ?> </td>
                <td> <?php echo $data['barang'] ?> </td>
                <td> <?php echo $data['harga'] ?> </td>
                <td> <?php echo $data['stok'] ?> </td>
                <td> 
                     <a href = "barang_edit.php?id_barang=<?php echo $data['id_barang'] ?>"> EDIT </a> ||
                     <a href = "barang_hapus.php?id_barang=<?php echo $data['id_barang'] ?>"> HAPUS </a>
                </td>
        <?php } ?>
        </table>
        </form>
    </center>
</body>
</html>