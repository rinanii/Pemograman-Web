<?php
session_start();
global $username;
$level = array("admin","kasir");

function cekLogin(){
    include 'koneksi.php';
    $username = $_POST ['username'];
    $password = md5($_POST ['password']);
    $login = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($login);
    return $login;
}

if(!cekLogin()==null){
    $data = mysqli_fetch_assoc(cekLogin());

    if($data['level']==$level[0]){
        $_SESSION ['username'] = $username;
        $_SESSION ['level'] = "admin";
        $_SESSION ['id_user'] = $data ['id_user'];
        echo '<script language="javascript"> alert
        ("Anda Berhasil Login Sebagai Admin!");
        document.location="admin/halaman_admin.php";
        </script>';

    } else if ($data['level']==$level[1]){
        $_SESSION ['username'] = $username;
        $_SESSION ['level'] = "kasir";
        $_SESSION ['id_user'] = $data ['id_user'];
        echo '<script language="javascript"> alert
        ("Anda Berhasil Login Sebagai Kasir!");
        document.location="kasir/halaman_kasir.php";
        </script>';

    } else {
        echo "Login Gagal";
    }
}
?>