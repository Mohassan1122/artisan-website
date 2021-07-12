<?php

require_once '../db_connect.php';
session_start();
//it has two part, thethe index where the user register and login page
//first we check if user fill the form
if (isset($_POST['submit'])) {
    if (empty($_POST['fullName']) || empty($_POST['email']) || empty($_POST['user_password']) || empty($_POST['confirm_password']) || empty($_POST['dateOfBirth']) || empty($_POST['radio1']) || empty($_POST['phoneNumber']) || empty($_POST['home_address'])
        || empty($_POST['skill']) || empty($_POST['file'])
    ) {
        echo 'please fill all the field';
    }

    //check weader the two password are the same
    if ($_POST['user_password'] !== $_POST['confirm_password']) {
        exit("please fill in the correct password . <a href='index.php'>return</a>");
    }
    //validate email
    $pattern = '/^\\w+((-\\w+)|(\\.\\w+))*\\@[A-Za-z0-9]+((\\.|-)[A-Za-z0-9]+)*\\.[A-Za-z0-9]+$/';
    if (!preg_match($pattern, $_POST['email'])) {
        exit("please use a valid email address . <a href='index.php'>return</a>");
    }
    //password lenght
    $pattern = '/^.{6,20}$/';
    if (!preg_match($pattern, $_POST['user_password'])) {
        exit("password not strong . <a href='index.php'>return</a>");
    }
    //security check
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['user_password'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $radio1 = $_POST['radio1'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['home_address'];
    $skill = $_POST['skill'];
    $file = $_POST['file'];

    $sql = "SELECT * FROM artisan WHERE `email` = '{$email}' ";
    $result = mysqli_query($connection, $sql);
    if (mysqli_error($connection)) {
        exit("sql error . <a href='index.php'>return</a>");
    }
    if (0 !== mysqli_num_rows($result)) {
        exit("email already exists . <a href='index.php'>return</a>");
    }
    mysqli_free_result($result);
    //increpting password
    $password = md5($password);
    $sql = "INSERT INTO `artisan` (`id`, `fullName`, `email`, `user_password`, `dateOfBirth`, `radio1`, `phoneNumber`, `home_address`, `skill`, `file`) VALUES (NULL, '{$fullName}', '{$email}', '{$password}', '{$dateOfBirth}', '{$radio1}', '{$phoneNumber}', '{$address}', '{$skill}', '{$file}' )";
    $result = mysqli_query($connection, $sql);
    if (true == $result) {
        $_SESSION['email'] = $email;
        header('Location: ../detail.php');
    } else {
        exit("unsuccessful . <a href='../index.php'>return</a>");
    }

    //close connection
    mysqli_close($connection);
} ?>


<?php

if (isset($_POST['submit2'])) {
    if (empty($_POST['location']) || empty($_POST['biography']) || empty($_POST['jobDetail']) || empty($_POST['artisan_id']) || empty($_POST['institution']) || empty($_POST['yearFrom']) || empty($_POST['yearTo']) || empty($_POST['result'])) {
        header('Location: ../dashboard_profile.php?erorr='.$erorr);
        die();
    }
    $location = addslashes($_POST['location']);
    $biography = addslashes($_POST['biography']);
    $jobDetail = addslashes($_POST['jobDetail']);
    $artisan_id = addslashes($_POST['artisan_id']);
    $institution = addslashes($_POST['institution']);
    $yearFrom = addslashes($_POST['yearFrom']);
    $yearTo = addslashes($_POST['yearTo']);
    $result = addslashes($_POST['result']);

    $sql = "INSERT INTO `completeprofile`(`id`, `location`, `biography`, `jobDetail`, `artisan_id`, `institution`, `yearFrom`, `yearTo`, `result`) VALUES  (NULL, '{$location}', '{$biography}', '{$jobDetail}', '{$artisan_id}', '{$institution}', '{$yearFrom}', '{$yearTo}', '{$result}') ";
    $result = mysqli_query($connection, $sql);
    if (true == $result) {
        header('Location: ../login.php?msg='.$msg);
    } else {
        echo 'unsuccessful';
    }

    //close connection
    mysqli_close($connection);
}

?>