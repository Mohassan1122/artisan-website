<?php
session_start();
include_once 'db_connect.php';
if (strlen($_SESSION['email']) == 0) {
    header('location: ./login.php');
} else {

    $email = $_SESSION['email'];
    $user = $connection->query("SELECT * FROM register WHERE email = '$email' ");
    $row = $user->fetch_array();
    $id = $row['id'];

    $query = mysqli_query($connection, "UPDATE register
  SET user_status = '1' WHERE
  id = '$id'");

    // $user2 = $conn->query("SELECT * FROM becomeseller_tb WHERE reg_id = '$id' ");
    // $row2 = $user2->fetch_array();

?>



    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="colorlib.com">


        <title>My Artisan</title>
        <link rel="icon" href="./images/D0Sm15i.png">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="./css/bootstrap-5.0.1-dist/css/bootstrap.min.css">

        <!-- Custom fonts for this template -->
        <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">




        <link rel="stylesheet" href="./themify-icons.css">
        <link rel="stylesheet" href="./style.css">
    </head>

    <body>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar bg-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">

                    <a class="navbar-brand brand-logo" style="margin-left: 60px;" href="./artisanHome.php"><img src="./images/logo1.png" alt="Logo" /></a>
                </div>
                <div class="navbar-menu-wrapper bg-light d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <i class="fas fa-bars"></i>
                    </button>

                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown mr-1">
                            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                                <i class="far fa-envelope"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
                                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                                <a class="dropdown-item">
                                    <div class="item-thumbnail">
                                        <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                                    </div>
                                    <div class="item-content flex-grow">
                                        <h6 class="ellipsis font-weight-normal">David Grey
                                        </h6>
                                        <p class="font-weight-light small-text text-muted mb-0">
                                            The meeting is cancelled
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="item-thumbnail">
                                        <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                                    </div>
                                    <div class="item-content flex-grow">
                                        <h6 class="ellipsis font-weight-normal">Tim Cook
                                        </h6>
                                        <p class="font-weight-light small-text text-muted mb-0">
                                            New product launch
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="item-thumbnail">
                                        <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                                    </div>
                                    <div class="item-content flex-grow">
                                        <h6 class="ellipsis font-weight-normal"> Johnson
                                        </h6>
                                        <p class="font-weight-light small-text text-muted mb-0">
                                            Upcoming board meeting
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                                <i class="fas fa-bell"></i>
                                <span class="count"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
                                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                                <a class="dropdown-item">
                                    <div class="item-thumbnail">
                                        <div class="item-icon bg-success">
                                            <i class="fas fa-bell"></i>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h6 class="font-weight-normal">Application Error</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            Just now
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="item-thumbnail">
                                        <div class="item-icon bg-warning">
                                            <i class="ti-settings mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h6 class="font-weight-normal">Settings</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            Private message
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="item-thumbnail">
                                        <div class="item-icon bg-info">
                                            <i class="ti-user mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h6 class="font-weight-normal">New user registration</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            2 days ago
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                <img src="./images/avater1.png" alt="profile" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item">
                                    <i class="ti-settings text-primary"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item">
                                    <i class="ti-power-off text-primary"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper ">
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas bg-light" id="sidebar" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"">
                <ul class=" nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./dashboard.php">
                            <i class="fas fa-tachometer-alt menu-icon"></i>
                            <span class="font-weight-bold menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./addService.php">
                            <i class="fas fa-plus menu-icon"></i>
                            <span class="menu-title">Add Service</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./yourService.php">
                            <i class="fas fa-calendar-plus menu-icon"></i>
                            <span class="menu-title">Your service</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./jobs.php">
                            <i class="fas fa-atlas menu-icon"></i>
                            <span class="menu-title">Jobs For You</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./messages.php">
                            <i class="far fa-envelope menu-icon"></i>
                            <span class="menu-title">Messages</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                            <i class="fas fa-cogs menu-icon"></i>
                            <span class="menu-title">Settings</span>
                            <i class="fas fa-angle-down ml-3"></i>
                        </a>
                        <div class="collapse" id="auth">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="./dashboard_profile.php"> Profile Settings </a></li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="pages/forms/basic_elements.html">
                            <i class="fas fa-sign-out-alt menu-icon"></i>
                            <span class="menu-title">Log Out</span>
                        </a>
                    </li>


                    </ul>
                </nav>
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="font-weight-bold mb-0"><?php echo $row['fullName'] ?></h4>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                                            <i class="fas fa-plus btn-icon-prepend"></i>Add Service
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12  stretch-card">
                                <div class="container card position-relative">
                                    <div class="card-body">
                                        <p class="card-title">Detailed Reports</p>
                                        <div class="row mb-4" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">

                                            <div class="col-md-3 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body mb-4">
                                                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                                            <h3 class="mt-4">0</h3>
                                                            <i class="fas fa-briefcase icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                                                        </div>
                                                        <p class="mt-3">Jobs For You</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <?php
                                                        $rowcount  =  mysqli_num_rows(mysqli_query($connection, "SELECT * FROM service_tb WHERE `reg_id` = '{$id}' "));
                                                        ?>
                                                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                                            <h3 class="mt-4"><?php echo ($rowcount); ?></h3>
                                                            <i class="fas fa-globe-americas icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                                                        </div>
                                                        <p class="mt-3">Services For You</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 grid-margin stretch-card">
                                                <div class="card">
                                                    <?php
                                                    $rowcount  =  mysqli_num_rows(mysqli_query($connection, "SELECT * FROM message_tb WHERE `chat_email` = '{$email}' "));

                                                    ?>
                                                    <div class="card-body">
                                                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                                            <h3 class="mt-4"><?php echo ($rowcount); ?></h3>
                                                            <i class="far fa-envelope icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                                                        </div>
                                                        <p class="mt-3">Messages</p>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class=" container mb-4">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted ">Copyright © bootstrapdash.com 2020</span>
                            <span class=" float-sm-right "><a href="./index.php" target="_blank"> Artisan Network</a> for all</span>
                        </div>
                    </footer>
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="./vendor.bundle.base.js"></script>
        <script src="./off-canvas.js"></script>
        <script src="./template.js"></script>
        <!-- End custom js for this page-->
    </body>

    </html>
<?php
} ?>