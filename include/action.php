<?php

require_once '../db_connect.php';
session_start();
//it has two part, thethe index where the user register and login page
//first we check if user fill the form
if (isset($_POST['submit'])) {
    //security check
    $fullName = mysqli_real_escape_string($connection, $_POST['fullName']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['user_password']);
    $confirm_password = mysqli_real_escape_string($connection, $_POST['confirm_password']);
    $service = mysqli_real_escape_string($connection, $_POST['service']);


    if (empty($_POST['fullName']) || empty($_POST['email']) || empty($_POST['user_password']) || empty($_POST['confirm_password'])) {
        echo "<script>alert('Fill all field');</script>";
        echo "<script>window.location.href='../signup.php';</script>";
    }
    //check if user chooser service
    if ($_POST['service'] == 'choose....') {
        echo "<script>alert('Fill all Field');</script>";
        echo "<script>window.location.href='../signup.php';</script>";
    }

    //check weader the two password are the same
    if ($_POST['user_password'] !== $_POST['confirm_password']) {
        echo "<script>alert('please fill in the correct password');</script>";
        echo "<script>window.location.href='../signup.php';</script>";
    }
    //validate email
    $pattern = '/^\\w+((-\\w+)|(\\.\\w+))*\\@[A-Za-z0-9]+((\\.|-)[A-Za-z0-9]+)*\\.[A-Za-z0-9]+$/';
    if (!preg_match($pattern, $_POST['email'])) {
        echo "<script>alert('please use a valid email address');</script>";
        echo "<script>window.location.href='../signup.php';</script>";
    }
    //password lenght
    $pattern = '/^.{6,20}$/';
    if (!preg_match($pattern, $_POST['user_password'])) {
        echo "<script>alert('password not strong');</script>";
        echo "<script>window.location.href='../signup.php';</script>";
    }


    //check if user already exist
    $sql = "SELECT * FROM register WHERE `email` = '{$email}' ";
    $result = mysqli_query($connection, $sql);
    if (mysqli_error($connection)) {
        echo "<script>alert('Connection Error');</script>";
        echo "<script>window.location.href='../signup.php';</script>";
    }

    $num_row = mysqli_num_rows($result);
    if ($num_row != 0) {
        echo "<script>alert('email already exists');</script>";
        echo "<script>window.location.href='../signup.php';</script>";
    } else {
        mysqli_free_result($result);
        //increpting password
        $password = md5($password);
        $sql = "INSERT INTO `register` (`fullName`, `email`, `user_password`, `service`) 
               VALUES ('{$fullName}', '{$email}', '{$password}', '{$service}' )";
        $result = mysqli_query($connection, $sql);
        if (true == $result) {
            if ($_POST['service'] == 'Artisan') {
                header("location: ../login.php");
            } else if ($_POST['service'] == 'Client') {
                header("location: ../login.php");
            }
        } else {
            echo "<script>alert('Signup Not Successfull');</script>";
            echo "<script>window.location.href='../signup.php';</script>";
        }

        //close connection
        mysqli_close($connection);
    }
}

if (isset($_POST['service'])) {

    //security check
    $reg_id = mysqli_real_escape_string($connection, $_POST['reg_id']);
    $bname = mysqli_real_escape_string($connection, $_POST['bname']);
    $bdescription = mysqli_real_escape_string($connection, $_POST['bdescription']);
    $bcart = mysqli_real_escape_string($connection, $_POST['bcart']);
    $bnumber = mysqli_real_escape_string($connection, $_POST['bnumber']);
    $blocation = mysqli_real_escape_string($connection, $_POST['blocation']);
    $state = mysqli_real_escape_string($connection, $_POST['state']);
    $city = mysqli_real_escape_string($connection, $_POST['city']);
    $country = mysqli_real_escape_string($connection, $_POST['country']);
    $profileImageName = time() . '-' . $_FILES["bfile"]["name"];
    // echo $reg_id;
    // exit;

    if (
        empty($_POST['reg_id']) || empty($_POST['bname']) || empty($_POST['bdescription']) || empty($_POST['bcart']) ||  empty($_POST['bnumber'])
        || empty($_POST['blocation'] || empty($_POST['state']) || empty($_POST['city']) || empty($_POST['country']))
    ) {
        echo "<script>alert('Fill all field');</script>";
        echo "<script>window.location.href='../addService.php';</script>";
    }

    //check weader the two password are the same
    if ($_POST['bcart'] == '...choose...' || $_POST['country'] == '..Choose..') {
        echo "<script>alert('Fill all Field');</script>";
        echo "<script>window.location.href='../addService.php';</script>";
    }

    // For image upload
    $target_dir = "../images/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if ($_FILES['bfile']['size'] > 2000000) {
        echo "<script>alert('size 200kb');</script>";
        echo "<script>window.location.href='../addService.php';</script>";
    }
    // check if file exists
    if (file_exists($target_file)) {
        echo "<script>alert('File already exists');</script>";
        echo "<script>window.location.href='../addService.php';</script>";
    }
    // Upload image only if no errors
    if (move_uploaded_file($_FILES["bfile"]["tmp_name"], $target_file)) {

        $user_check_query = "SELECT * FROM service_tb WHERE reg_id='$reg_id' LIMIT 1";
        $result = mysqli_query($connection, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        // if name exists
        if ($user['bname'] === $bname) {

            echo "<script>alert('Business Name Already exist');</script>";
            echo "<script>window.location.href='../addService.php';</script>";
        } else {



            $sql = "INSERT INTO `service_tb` (`reg_id`, `bname`, `bdescription`, `bcart`, `bnumber`, `blocation`, `state`, `city`, `country`, `bfile`) 
                        VALUES ('{$reg_id}', '{$bname}', '{$bdescription}', '{$bcart}', '{$bnumber}', '{$blocation}', '{$state}', '{$city}', '{$country}', '{$profileImageName}' )";
            $result = mysqli_query($connection, $sql);
            if (true == $result) {
                echo "<script>alert('Created Successfull');</script>";
                echo "<script>window.location.href='../addService.php';</script>";
            } else {
                echo "<script>alert('Signup Not Successfull');</script>";
                echo "<script>window.location.href='../addService.php';</script>";
            }
        }
    }
    //close connection
    mysqli_close($connection);
}



if (isset($_POST['submit2'])) {
    if (empty($_POST['location']) || empty($_POST['biography']) || empty($_POST['jobDetail']) || empty($_POST['register_id']) || empty($_POST['institution']) || empty($_POST['yearFrom']) || empty($_POST['yearTo']) || empty($_POST['result'])) {

        echo "<script>alert('Fill all Fields');</script>";
        echo "<script>window.location.href='../detail.php';</script>";
    }
    $location = addslashes($_POST['location']);
    $biography = addslashes($_POST['biography']);
    $jobDetail = addslashes($_POST['jobDetail']);
    $register_id = addslashes($_POST['register_id']);
    $institution = addslashes($_POST['institution']);
    $yearFrom = addslashes($_POST['yearFrom']);
    $yearTo = addslashes($_POST['yearTo']);
    $result = addslashes($_POST['result']);

    $sql = "INSERT INTO `completeprofile`(`location`, `biography`, `jobDetail`, `register_id`, `institution`, `yearFrom`, `yearTo`, `result`) VALUES  ('{$location}', '{$biography}', '{$jobDetail}', '{$register_id}', '{$institution}', '{$yearFrom}', '{$yearTo}', '{$result}') ";
    $result = mysqli_query($connection, $sql);
    if (true == $result) {
        header('Location: ../login.php?msg=' . $msg);
    } else {

        echo "<script>alert('Unsuccessful');</script>";
        echo "<script>window.location.href='../detail.php';</script>";
    }

    //close connection
    mysqli_close($connection);
}
