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
    $new_email = addslashes($_POST['new_email']);
    $new_password = addslashes($_POST['new_password']);

    $result1 = mysqli_query($connection, "SELECT user_password FROM artisan WHERE `email` = '{$new_email}'");

    if (mysqli_error($connection)) {
        $erorr.="Connection failed";
        $errorCount++;
    }
    if (mysqli_num_rows($result1) === 0) {
        $erorr.="<li> Account does not Exist </li> ";
        $errorCount++;
    }
    $new_password = md5($new_password);
    $row = mysqli_fetch_array($result1);
    mysqli_free_result($result1); 
    
    if ($new_password == $row['user_password']) {

        $query2 = "SELECT * FROM artisan WHERE `email` = '$new_email'";
                $result = mysqli_query($connection, $query2);
                if (mysqli_fetch_array($result)) {
                    $_SESSION['email'] = $new_email;
                    $_SESSION['id'] = $id;
                    header("location: dashboard.php");
                }
                


                mysqli_close($connection);
            
     }else {
        $erorr.="<li> Password does not Exist</li>";
        $errorCount++;
    }
    if ($errorCount !== 0) {
        header("Location: ./login.php?erorr=" . $erorr);
        die();
    }
}
?>