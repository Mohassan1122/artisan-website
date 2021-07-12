<?php
require_once 'db_connect.php';

session_start();

if (isset($_SESSION['email'])) {
    $new_email = $_SESSION['email'];
    
    $query2 = "SELECT * FROM artisan WHERE email = '$new_email'";
    $result = mysqli_query($connection, $query2);
    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_array($result);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>My Artisan</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="image/md.png">
</head>

<body class=" bg-light">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-static-top">
        <!-- Brand/logo -->

        <img src="image/pic01.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        <a class="navbar-brand" href="./index.php"> My Artisan</a>

        <div class="collapse  navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> HOME</a>
                <a class="nav-item nav-link" href="signup.php">Signup</a>
                <a class="nav-item nav-link" href="login.php">Signin</a>
                <a class="nav-item nav-link" href="#">About Us</a>
            </div>
        </div>

    </nav>

    <header class="masthead" style="background-image: url('image/Cap2.PNG')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 p-3 mt-4 mx-auto">
                    <marquee width="60%" direction="left" height="100px" class="text-light">
                        If you dont have an account with us, Please Create an account here.
                    </marquee>
                    <div class="site-heading p-2 ">
                        <h1 class="">my artisan</h1>
                        <span class="subheading m-2 p-2">A Place for all kinds of artisan form different part of the World</span>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <br>
    <div class="container border shadow">

        <div class="card m-4">

            <div class="card-header">
            <svg height="100" width="100">
                    <circle cx="50" cy="50" r="40" stroke="white" stroke-width="3" fill="white" />
                    
                </svg>
                <svg height="80" width="100">
                    <path stroke="black" d="M5 40 l215 0" />
                </svg>
                <svg height="100" width="100">
                    <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="white" />
                </svg>

                <h2 class="h1-responsive font-weight-bold text-center my-4">Registration Form</h2>
                <p class="lead text-center">Fill in Your Details</p>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 custom-col mx-auto">
                <div class="p-5">
                    <form action="./include/action.php" method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Location</label>
                            <input type="text" name="location" class="form-control" id="exampleFormControlInput1" placeholder="Your Location">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Biography</label>
                            <textarea class="form-control" name="biography" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Job Detail</label>
                            <textarea class="form-control" name="jobDetail" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group col-sm-2">
                            <!-- <label for="exampleFormControlInput1">id</label> -->
                            <input type="hidden" class="form-control" name="artisan_id" id="exampleFormControlInput1" value="<?php echo $row['id'];  ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Institution Attended</label>
                            <input type="text" class="form-control" name="institution" id="exampleFormControlInput1">
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="exampleFormControlSelect1">From</label>
                            <select class="form-control" name="yearFrom" id="exampleFormControlSelect1">
                                <option>2001</option>
                                <option>2002</option>
                                <option>2003</option>
                                <option>2004</option>
                                <option>2005</option>
                                <option>2006</option>
                                <option>2007</option>
                                <option>2008</option>
                                <option>2009</option>
                                <option>2010</option>
                                <option>2011</option>
                                <option>2012</option>
                                <option>2013</option>
                                <option>2014</option>
                                <option>2015</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="exampleFormControlSelect1">To</label>
                            <select class="form-control" name="yearTo" id="exampleFormControlSelect1">
                                <option>2010</option>
                                <option>2011</option>
                                <option>2012</option>
                                <option>2013</option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlInput1">Result Obtained</label>
                            <input type="text" class="form-control" name="result" id="exampleFormControlInput1" placeholder="FSLC/SSCE/ND/HND/DEGREE">
                        </div>

                        <div class="row justify-content-center align-items-center">
                            <input type="submit" name="submit2" class="btn btn-info">
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="container ml-4">
            <h3>Already a member? </p> <a href="login.php" class="btn btn-primary">LOGIN</a> </h3>
        </div>
    </div>

    <br />

    <?php require './include/footer.php'; ?>

</body>