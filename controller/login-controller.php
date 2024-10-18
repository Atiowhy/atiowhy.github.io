<?php
session_start();
include '../connection.php';
// include '../pages/login.php';
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
    $login = mysqli_query($connection, "SELECT * FROM user WHERE email = '$email'");
    if(mysqli_num_rows($login) > 0){
        $rowUser = mysqli_fetch_assoc($login);
        if($rowUser['password'] == $password &&  $rowUser['email'] == $email){
            $_SESSION['email'] = $rowUser['email'];
            $_SESSION['ID'] = $rowUser['id'];
            header('location: ../pages/dashboard.php?login=berhasil');
        } else {
            header('location: ../pages/login.php?gagal=login-gagal');
        }
    }

?>