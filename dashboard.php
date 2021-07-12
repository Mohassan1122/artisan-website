<?php
include_once 'db_connect.php';
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

<body>

    <nav class="navbar navbar-expand-md bg-dark mb-3 navbar-dark fixed-top">
        <!-- Brand/logo -->

        <img src="image/pic01.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        <a class="navbar-brand" href="./index.php">My Artisan</a>
        <div class="collapse  navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link " href="index.php"><i class="fa fa-home" aria-hidden="true"></i> HOME SITE</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-address-card"> </i> <?php echo $row['fullName'] ;  ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="signup.php">Signup</a>
                        <a class="dropdown-item" href="dashboard_profile.php">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout1.php">LOGOUT</a>
                    </div>
                </li>

            </div>
        </div>

    </nav>

    <header class="masthead" style="background-image: url('image/Cap2.PNG')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 p-5 mt-4 mx-auto">
                    <div class="site-heading m-4 p-4 ">
                        <h1 class="">my artisan</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container-fluid" id="main">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col-md-3 col-lg-2 sidebar-offcanvas bg-light pl-0" id="sidebar" role="navigation">
                <ul class="nav flex-column pl-0 pt-5 mt-3">
                    <li class="nav-item"><a class="nav-link link-unstyled text-dark" href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    <li class="nav-item">
                        <a class="nav-link link-unstyled  text-dark" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="fas fa-arrows-alt-v"></i> Posts▾</a>
                        <ul class="list-unstyled flex-column pl-3 collapse" id="submenu1" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link link-unstyled text-dark" href="dashboard_post.php">View all Posts</a></li>
                            <li class="nav-item"><a class="nav-link link-unstyled text-dark" href="dashboard_addPost.php">Add Post</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link link-unstyled text-dark" href="dashboard_profile.php"><i class="fas fa-address-card"></i> Profile</a></li>
                    <li class="nav-item"><a class="nav-link link-unstyled text-dark" href="dashboard_categories.php"><i class="fas fa-wrench"></i> Categories</a></li>
                    <li class="nav-item"><a class="nav-link link-unstyled text-dark" href="#"><i class="fas fa-users"></i> Complete Your PROFILE</a></li>
                    <li class="nav-item"><a class="nav-link link-unstyled text-dark" href="logout1.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </div>
            <!--/col-->
            <div class="container p-4">
                <div class="col main p-5 m-3">
                    <div class="text-center">
                        <h1 class="display-4 d-none d-sm-block">
                            Welcome to Your Website!
                        </h1>
                        <p class="lead p-4">This page is design to give you some important information about your website. You can used the link at the sidebar to navigate to the most important area you need. </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <img src="./image/<?php echo $row['file'];  ?>" class="rounded float-right" width="200" alt="passport">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <hr>

                <div class="container p-4">
                    <h3 class="text-center p-4">Some couple of things you get here</h3><br>
                    <div class="row m-4">
                        <div class="col-lg-4">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home1">
                                    <ul>
                                        <li class="lead">View Your Profile</li>
                                        <li class="lead">Edit Your Profile</li>
                                        <li class="lead">Delete Input From Your Profile</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-8">

                            <div role="tabpanel" class="tab-pane active" id="home1">
                                <ul>
                                    <li class="lead">update Your Profile</li>
                                    <li class="lead">View Users Posts</li>
                                    <li class="lead">Add Posts</li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './include/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>