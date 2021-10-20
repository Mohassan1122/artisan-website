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

    $query = mysqli_query($connection, "UPDATE register
  SET status = '1' WHERE
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


        <link rel="stylesheet" href="index.css">

        <link rel="stylesheet" href="./css/grid.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/camera.css" />
        <link rel="stylesheet" href="./css/owl.carousel.css" />
        <script src="./js/jquery.js"></script>
        <script src="./js/jquery-migrate-1.2.1.js"></script>
        <script src="./js/jquery.equalheights.js"></script>
        <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="./js/jquery.mobile.customized.min.js"></script>
        <!--<![endif]-->
        <script src="./js/camera.js"></script>
        <script src="./js/owl.carousel.js"></script>

        <link rel="stylesheet" href="./css/styles.css">

        <style>
            .form-control-borderless {
                border: none;
            }

            .form-control-borderless:hover,
            .form-control-borderless:active,
            .form-control-borderless:focus {
                border: none;
                outline: none;
                box-shadow: none;
            }


            .card {
                border: none;
                background: #eee
            }

            .search {
                width: 100%;
                margin-bottom: auto;
                margin-top: 20px;
                height: 50px;
                background-color: #fff;
                padding: 10px;
                border-radius: 5px
            }

            .search-input {
                color: white;
                border: 0;
                outline: 0;
                background: none;
                width: 0;
                margin-top: 5px;
                caret-color: transparent;
                line-height: 20px;
                transition: width 0.4s linear
            }

            .search .search-input {
                padding: 0 10px;
                width: 100%;
                caret-color: #536bf6;
                font-size: 19px;
                font-weight: 300;
                color: black;
                transition: width 0.4s linear
            }

            .search-icon {
                height: 34px;
                width: 34px;
                float: right;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                background-color: #536bf6;
                font-size: 10px;
                bottom: 30px;
                position: relative;
                border-radius: 5px
            }

            .search-icon:hover {
                color: #fff !important
            }

            a:link {
                text-decoration: none
            }

            .mg-text span {
                font-size: 12px
            }

            .mg-text {
                line-height: 14px
            }


            .card {
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
                transition: all 0.2s ease-in-out;
                box-sizing: border-box;
                margin-top: 10px;
                margin-bottom: 10px;
                background-color: #FFF;
            }

            .card:hover {
                box-shadow: 0 5px 5px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
            }

            .card>.card-inner {
                padding: 10px;
            }

            .card .header h2,
            h3 {
                margin-bottom: 0px;
                margin-top: 0px;
            }

            .card .header {
                margin-bottom: 5px;
            }

            .card img {
                width: 100%;
            }
        </style>
    </head>

    <body style="background-color: white;">
        <div class="page">



            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" style="margin-left: 60px;" href="./home.php"><img src="./images/logo1.png" alt="Logo" width="130px" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-lg-0">
                            <form class="d-flex">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </ul>
                        <ul class="mb-lg-0 d-flex" style="font-family: 'Times New Roman', Times, serif;">
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
                                <a class="nav-link" style="color: black;" href="#">Help</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle  active" style="color: black;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo $row['fullName'] ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
                                    <li><a class="dropdown-item" href="dashboard_profile.php">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="logout1.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>




            <section id="content">
                <div class="ic">search for the client need !</div>
                <div class="camera-wrapper">
                    <div id="camera" class="camera-wrap">
                        <div data-src="./images/index_slide01.jpg">
                            <div class="fadeIn camera_caption">

                                <?php include './include/artisanSearch.php'; ?>

                            </div>
                        </div>
                        <div data-src="./images/index_slide02.jpg">
                            <div class="fadeIn camera_caption">
                                <?php include './include/artisanSearch.php'; ?>
                            </div>
                        </div>
                        <div data-src="./images/index_slide03.jpg">
                            <div class="fadeIn camera_caption">
                                <?php include './include/artisanSearch.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="text-center m-5 p-5 mt-0 pt-0  mb-0 pb-0">
                    <h1 class="header_2 mt-4 pt-4">Popular professional services</h1>
                    <p class="text_2 color_2 maxheight m-4 p-3 mt-2 pt-0">
                        Find Artisans in Nigeria
                    </p>
                    <div class="  mt-3">
                        <div class="row mx-auto">
                            <?php
                            $user = $connection->query("SELECT * FROM service_tb ");
                            while ($result = mysqli_fetch_assoc($user)) :
                            ?>
                                <div class="col-md-3"><a href="./detail.php?id=<?php echo htmlentities($result['id']); ?>">
                                        <img src="./images/<?php echo htmlentities($result['bfile']); ?>" width="150px" alt="">

                                        <h3 class="text_2 mt-3 color_2 maxheight1"><?php echo htmlentities($result['bcart']); ?></h3>
                                        <p class="text_3 color_2 maxheight m-4 p-3 mt-0 pt-0">
                                            <?php echo htmlentities($result['bdescription']); ?>
                                        </p>
                                    </a>
                                </div>
                            <?php endwhile; ?>

                        </div>


                    </div>

                </div>


                <div class="container my-5">

                    <h1 class="header_1">Directory Categories</h1>
                    <div class="row my-4">

                        <div class="col-md-3">
                            <div class="card">
                                <a href="./cartDetail.php">
                                    <div class="image">
                                        <img src="./image/tailor.jpg" width="120px" />
                                    </div>
                                    <div class="card-inner">

                                        <h2 class="text_4">4 Artisan</h2>
                                        <h3 class="text_2">Tailor</h2>

                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <div class="image">
                                    <img src="./image/vitor-monthay-JL2n-GWXCJo-unsplash (1) (1).jpg" style="max-width: 100%; max-height: 150px;" />
                                </div>
                                <div class="card-inner">

                                    <h2 class="text_4">4 Artisan</h2>
                                    <h3 class="text_2">Event Decorators</h2>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="image">
                                    <img src="./image/bricklayers.jpg" style="max-width: 100%; max-height: 150px;" />
                                </div>
                                <div class="card-inner">

                                    <h2 class="text_4">4 Artisan</h2>
                                    <h3 class="text_2">Bricklayer</h2>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <div class="image">
                                    <img src="./images/logo6.jpg" style="max-width: 100%; max-height: 150px;" />
                                </div>
                                <div class="card-inner">

                                    <h2 class="text_4">21 Artisan</h2>
                                    <h3 class="text_2">Website Desigers</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-3">
                            <div class="card">
                                <a href="./cartDetail.php">
                                    <div class="image">
                                        <img src="./images/index-3_img03.jpg" style="max-width: 100%; max-height: 150px;" />
                                    </div>
                                    <div class="card-inner">

                                        <h2 class="text_4">6 Artisan</h2>
                                        <h3 class="text_2">Electricians</h2>

                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="image">
                                    <img src="./images/logo4.png" style="max-width: 100%; max-height: 150px;" />
                                </div>
                                <div class="card-inner">

                                    <h2 class="text_4">9 Artisan</h2>
                                    <h3 class="text_2">Graphic Designers</h2>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="image">
                                    <img src="http://loremflickr.com/320/150?random=3" />
                                </div>
                                <div class="card-inner">

                                    <h2 class="text_4">4 Artisan</h2>
                                    <h3 class="text_2">Plumber</h2>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="image">
                                    <img src="http://loremflickr.com/320/150" />
                                </div>
                                <div class="card-inner">

                                    <h2 class="text_4">4 Artisan</h2>
                                    <h3 class="text_2">Painter</h2>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>






            </section>


        </div>
        <?php include './include/footer.php'; ?>

        <script src="./js/script.js"></script>

        <script src="./js/jquery/jquery.min.js"></script>
        <script src="./js/popper/popper.min.js"></script>
        <script src="./css/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
<?php } ?>