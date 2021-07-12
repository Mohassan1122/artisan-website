<?php
include_once './db_connect.php';


if (isset($_POST['btnSubmit'])) {
    if (empty($_POST['artisan_id']) || empty($_POST['artisan_name']) || empty($_POST['name']) || empty($_POST['number']) || empty($_POST['date']) || empty($_POST['txtMsg']) || empty($_FILES['file1'])) {
        exit("pls fill the form ".$_POST['artisan_name'].". <a href='../login.php'>return</a>");
    }
    $artisan_id = $_POST['artisan_id'];
    $artisan_name = $_POST['artisan_name'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    $txtMsg = $_POST['txtMsg'];
    $file1 = ($_FILES['file1']['name']);
    
    $target = "image/";
    $target = $target . basename( $_FILES['file1']['name']); 

    if(move_uploaded_file($_FILES["file1"]["tmp_name"], $target)) {
    $sql = "INSERT INTO `comment` (`id`, `artisan_id`, `artisan_name`, `name`, `number`, `date`, `txtMsg`, `file1`) VALUES (NULL, '$artisan_id', '$artisan_name', '$name', '$number', '$date', '$txtMsg', '$file1')";
    $result = mysqli_query($connection, $sql);
    if ($result == true) {
        
    $query2 = "SELECT * FROM comment,artisan WHERE artisan.id=comment.artisan_id";
    $result = mysqli_query($connection, $query2);
    if (mysqli_fetch_array($result)) {
        $row = mysqli_fetch_array($result);
        header("location: loginResult.php?id=". $row['id'] );
    }

    
}

    mysqli_close($connection);

     
    }else {
        exit ("unsuccessful . <a href='../index.php'>return</a>");
    }
    
}
