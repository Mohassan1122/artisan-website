<?php
include_once 'db_connect.php';
session_start();

if (strlen($_SESSION['email']) == 0) {
    header('location: ./login.php');
} else {

    $email = $_SESSION['email'];
    $user = $connection->query("SELECT * FROM register WHERE email = '$email' ");
    $row = $user->fetch_array();
    $id = $row['id'];

    if (isset($_GET['id'])) {
        $serviceId = $_GET['id'];
    $result =  $connection->query("SELECT * FROM service_tb WHERE `reg_id` = '{$id}' AND `id`= '{$serviceId}' ");
    $service = $result->fetch_array();
    }
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

        <style>
            .title {

                margin-bottom: 50px;
                text-transform: uppercase;
            }

            .card-block {
                font-size: 1em;
                position: relative;
                margin: 0;
                padding: 1em;
                border: none;
                border-top: 1px solid rgba(34, 36, 38, .1);
                box-shadow: none;

            }

            .card {
                font-size: 1em;
                overflow: hidden;
                padding: 5;
                border: none;
                border-radius: .28571429rem;
                box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
                margin-top: 20px;
            }

            .carousel-indicators li {
                border-radius: 12px;
                width: 12px;
                height: 12px;
                background-color: #404040;
            }

            .carousel-indicators li {
                border-radius: 12px;
                width: 12px;
                height: 12px;
                background-color: #404040;
            }

            .carousel-indicators .active {
                background-color: white;
                max-width: 12px;
                margin: 0 3px;
                height: 12px;
            }

            .carousel-control-prev-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
            }

            .carousel-control-next-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
            }

            .btn {
                margin-top: auto;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary m-0 p-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-family: fantasy;">
                    <li class="nav-item ">
                        <a class="nav-link " href="#">Customer Care Number:</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="#">07036297921</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="#">07036297921</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Hello Mohammed Hassan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Sign out</a>
                        </li>
                    </ul>
                </span>
            </div>
        </nav>

        <!--Second navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0">
                    <a class="navbar-brand" style="margin-left: 100px;" href="./home.php"><img src="./images/logo1.png" alt="Logo" width="130px" /></a>
                </ul>
                <ul class="mb-lg-0 d-flex" style="font-family: 'Times New Roman', Times, serif;list-style-type: none;">
                    <li class="nav-item">
                        <a class="nav-link" style="color: black;" href="#">Make Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black;" href="#">Search Professional</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black;" href="#">Request Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black;" href="#">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black;" href="#">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black; margin-right: 100px;" href="#">Help</a>
                    </li>

                </ul>
            </div>
        </nav>
        <section>
            <div class="container mt-4">
                <h1>Artisant Detail Page</h1>
            </div>
            <div class="container py-4">
                <div class="card float-left bg-light">
                    <div class="row ">

                        <div class="col-sm-7">
                            <div class="card-body">
                                <div class="p-4">
                                    <p class="text-muted">Location</p>
                                    <h3 class="card-title"><?php echo htmlentities($service['blocation']) . " ".  htmlentities($service['city']) . " ". htmlentities($service['state'])." ". htmlentities($service['country']); ?></h3>
                                </div>

                                <div class="p-4">
                                    <p class="text-muted">Category</p>
                                    <h3 class="card-title"><?php echo htmlentities($service['bcart']); ?></h3>
                                </div>

                                <div class="p-4">
                                    <p class="text-muted">Phone Number</p>
                                    <div class="col-md-4">
                                        <h3 class="card-title bg-danger p-2 text-center"><?php echo htmlentities($service['bnumber']); ?></h3>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <p class="text-muted">Description</p>
                                    <h3 class="card-title"><?php echo htmlentities($service['bdescription']); ?></h3>
                                </div>


                            </div>
                        </div>

                        <div class="col-sm-5">
                            <img class="d-block w-100" src="./images/<?php echo htmlentities($service['bfile']); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class="container mt-4 p-4 text-center">
                    <p>©2021 Artisan Network, inc. All rights Reversed</p>
                    <span><a class="mt-4 text-dark" href="">Terms of Service</a> </span> <br>
                    <span><a class="text-dark" href="">Privacy Policy</a></span> <br>
                    <span><a class="text-dark" href="">Accessibility</a></span>

                </div>

            </footer>

        </section>


        <script src="./js/jquery/jquery.min.js"></script>
        <script src="./js/popper/popper.min.js"></script>
        <script src="./css/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
    </body>
<?php } ?>