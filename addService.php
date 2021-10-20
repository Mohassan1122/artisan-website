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

                            </div>
                        </li>
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                <img src="./images/avater1.png" alt="profile" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                <a href="" class="dropdown-item">
                                    <i class="ti-settings text-primary"></i>
                                    Settings
                                </a>
                                <a href="./logout1.php" class="dropdown-item">
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
                        <a class="nav-link" href="#">
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
                                        <h3 class="mt-3"><?php echo $row['fullName'] ?></h>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12  stretch-card">
                                <div class="container mb-4 card position-relative">
                                    <div class="card-body">
                                        <h3> <i class="fas fa-plus pr-3"></i>Creat Service</h3>
                                        <div class="col-12 grid-margin">

                                            <form class="form-sample mt-4" style="font-family: Arial, Helvetica, sans-serif;" action="./include/action.php" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="reg_id" value="<?php echo $row['id'] ?>">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Business Name</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="bname" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Business Description</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="bdescription" class="form-control" placeholder="Description.." />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Business Category</label>
                                                            <div class="col-sm-9">
                                                                <select name="bcart" class="form-control">
                                                                    <option selected>...choose...</option>
                                                                    <option>Air Conditional Repair</option>
                                                                    <option>Aplliances Repair</option>
                                                                    <option>Fashion Design</option>
                                                                    <option>Electrician</option>
                                                                    <option>Web Design</option>
                                                                    <option>Graphic Design</option>
                                                                    <option>Bricklayer</option>
                                                                    <option>Mechanic</option>
                                                                    <option>Event Decoration</option>
                                                                    <option>painter</option>
                                                                    <option>Plumber</option>
                                                                    <option>Laundry Service</option>
                                                                    <option>Photography Service</option>
                                                                    <option>Cleaning Services</option>
                                                                    <option>Bardering Services</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Business Number</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="bnumber" class="form-control" placeholder="Business number.." />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="card-description">
                                                    Address
                                                </p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Address </label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="blocation" class="form-control" placeholder="business location" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">State</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="state" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">City</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="city" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Country</label>
                                                            <div class="col-sm-9">
                                                                <select name="country" class="form-control">
                                                                    <option>..Choose..</option>
                                                                    <option>America</option>
                                                                    <option>Italy</option>
                                                                    <option>Russia</option>
                                                                    <option>Britain</option>
                                                                    <option>Nigeria</option>
                                                                    <option>Ghana</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <p class="card-description">
                                                        Add Galary
                                                    </p>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Business Image</label>
                                                            <div class="col-sm-9">
                                                                <input type="file" name="bfile" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <button type="submit" name="service" class="btn btn-primary btn-rounded ">Create Service</button>
                                            </form>
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