<?php
session_start();
include '../connection.php';
// include '../pages/register.php';

if(isset($_POST['regis'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $queryPost = mysqli_query($connection, "INSERT INTO user (name, email, password) VALUES ('$username', '$email', '$password')");

    if(!$queryPost){
        header('location: ../pages/register.php?regis-gagal=gagal');
    } else {
        header('location: ../pages/login.php?regis-sukses=berhasil');
    }
}

?>