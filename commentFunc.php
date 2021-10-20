<?php
include_once './db_connect.php';


if (isset($_POST['btnSubmit'])) {
    if (empty($_POST['register_id']) || empty($_POST['register_name']) || empty($_POST['name']) || empty($_POST['number']) || empty($_POST['date']) || empty($_POST['txtMsg']) || empty($_FILES['file1'])) {
        exit("pls fill the form ".$_POST['register_name'].". <a href='../login.php'>return</a>");
    }
    $register_id = $_POST['register_id'];
    $register_name = $_POST['register_name'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    $txtMsg = $_POST['txtMsg'];
    $file1 = time() . '-' . $_FILES["file1"]["name"];



   // For image upload
   $target_dir = "image/";
   $target_file = $target_dir . basename($file1);
   // VALIDATION
   // validate image size. Size is calculated in Bytes
   if ($_FILES['file']['size'] > 200000) {
       echo "<script>alert('file size is much');</script>";
   }
   // check if file exists
   if (file_exists($target_file)) {
       echo "<script>alert('File already exists');</script>";
   }
   // Upload image only if no errors
   if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file)) {

    $sql = "INSERT INTO `comment` (`id`, `register_id`, `register_name`, `name`, `number`, `date`, `txtMsg`, `file1`) VALUES (NULL, '$register_id', '$register_name', '$name', '$number', '$date', '$txtMsg', '$file1')";
    $result = mysqli_query($connection, $sql);
    if ($result == true) {
        
    $query2 = "SELECT * FROM comment,register WHERE register.id=comment.register_id";
    $result = mysqli_query($connection, $query2);
    if (mysqli_fetch_array($result)) {
        $row = mysqli_fetch_array($result);
        header("location: loginResult.php?id=".$row['id'] );
    }

    
}

    mysqli_close($connection);

     
    }else {
        exit ("unsuccessful . <a href='../index.php'>return</a>");
    }
    
}
