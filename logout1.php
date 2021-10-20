<?php
session_start();
include_once 'db_connect.php';
$email = $_SESSION['email'];
$query = mysqli_query($connection,"UPDATE register
SET status = '0' WHERE
email = '$email'");
    session_destroy();
    header("location: login.php");


?>