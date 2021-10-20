<?php
include_once './db_connect.php';
session_start();

if (isset($_POST['submit'])) {
    $erorr = "";
    $errorCount = 0;
    if (empty($_POST['new_email']) || empty($_POST['new_password'])) {
        $error .= "<li>all field</li>";
        $errorCount++;
       
    }
    $new_email = mysqli_real_escape_string($connection, $_POST['new_email']);
    $new_password = mysqli_real_escape_string($connection, $_POST['new_password']);

    $result1 = mysqli_query($connection, "SELECT user_password FROM register WHERE `email` = '{$new_email}'");

    if (mysqli_error($connection)) {
        echo "<script>alert('Connection failed');</script>";
        echo "<script>window.location.href='login.php';</script>";
    }
    if (mysqli_num_rows($result1) === 0) {
        echo "<script>alert('Account does not Exist');</script>";
        echo "<script>window.location.href='login.php';</script>";
    }
    $new_password = md5($new_password);
    $row = mysqli_fetch_array($result1);
    mysqli_free_result($result1); 
    
    if ($new_password == $row['user_password']) {

        $query2 = "SELECT * FROM register WHERE `email` = '$new_email'";
                $result = mysqli_query($connection, $query2);
                if ($row = mysqli_fetch_array($result)) {
                    $_SESSION['email'] = $new_email;

                    if($row['service'] == 'Artisan')
                    {
                        header("location: artisanHome.php");
                    }
                    else if($row['service'] == 'Client')
                    {
                        header("location: clientHome.php");
                    }

                    
                }
                


                mysqli_close($connection);
            
     }else {
        echo "<script>alert(' Password does not Exist');</script>";
        echo "<script>window.location.href='login.php';</script>";
    }
}
