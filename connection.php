<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'portoatio';

$connection = mysqli_connect($host, $username, $password, $database);
if(!$connection){
    echo 'Connection Failed...';
}
?>