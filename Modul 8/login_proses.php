<?php
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username=="admin" AND $password="123456"){
        echo "<h1> ANDA BERHASIL LOGIN </h1>";
    } else{
        echo "<h1> <font color=red> LOGIN GAGAL !!! </font> </h1>";
    }
}
?>