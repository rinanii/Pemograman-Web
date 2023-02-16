<?php
include '../koneksi.php';
session_start();
?>

<html>
    <head>
        <title> DATA PELANGGAN </title>
    </head>
    <body>
    <center>
        <h1> PELANGGAN </h1>
        <a href = "halaman_admin.php"> Halaman Utama </a> ||
        <a href = "pelanggan_tambah.php"> Tambah </a> ||
        <a href = "../logout.php"> Logout </a>

    <table border="1" cellpadding="5">
        <tr>
            <th> NO </th>
            <th> Pelanggan </th>
            <th> Alamat </th>
            <th> Aksi </th>
        </tr>

<?php
    $sql = mysqli_query($koneksi, "SELECT * FROM pelanggan");
    while ($data = mysqli_fetch_array($sql)){
?>
<tr>
    <td> <?php echo $data['id_pelanggan']; ?> </td>
    <td> <?php echo $data['pelanggan']; ?> </td>
    <td> <?php echo $data['alamat']; ?> </td>
    <td> <a href="pelanggan_edit.php?id_pelanggan=<?php echo $data['id_pelanggan']; ?>"> Edit </a> ||
         <a href="pelanggan_hapus.php?id_pelanggan=<?php echo $data['id_pelanggan']; ?>"> Hapus </a> </td>
</tr>
    <?php } ?>
    </table>
    </center>
    </body>
    </html>