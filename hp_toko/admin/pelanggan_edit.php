<?php
include '../koneksi.php';
session_start();
if(isset($_GET['id_pelanggan'])){
    $id_pelanggan = $_GET['id_pelanggan'];
    $sql = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
    $data = mysqli_fetch_array($sql);
}
?>

<html>
<head>
    <title> Edit Pelanggan </title>
</head>
<body>
    <center>
        <h1> EDIT PELANGGAN </h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="id_pelanggan" value="<?php $data ['id_pelanggan']; ?>">
        
        <table>
            <tr>
                <td> Nama Pelanggan </td>
                <td> : </td>
                <td> <input type="text" name="pelanggan" value="<?php echo $data ['pelanggan']; ?>"> </td>
            </tr>
            
            <tr>
                <td> Alamat </td>
                <td> : </td>
                <td> <input type="text" name="alamat" value="<?php echo $data ['alamat']; ?>"> </td>
            </tr>

            <tr>
                <td> </td>
                <td> </td>
                <td> 
                    <input type="reset" name="reset">
                    <input type="submit" name="submit" value="Edit">
                </td>
            </tr>
        </table>
        </form>
    </center>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $pelanggan = $_POST ['pelanggan'];
    $alamat = $_POST ['alamat'];

    $sql = mysqli_query($koneksi, "UPDATE pelanggan SET pelanggan='$pelanggan', alamat='$alamat' WHERE id_pelanggan='$id_pelanggan'");
    if($sql){
        header('location:pelanggan.php');
    } else {
        header('location:pelanggan_edit.php');
    }
    exit;
}
?>