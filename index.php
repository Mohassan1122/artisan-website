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



    <div class="wrapper" id="stuck_container">


      <nav class="navbar navbar-expand-lg navbar-light bg-defualt p-0 m-0">

        <a class="navbar-brand" style="margin-left: 60px;" href="./home.php"><img src="./images/logo1.png" alt="Logo" width="200px" /></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto">
            <form class="d-flex">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </ul>
          <span class="navbar-text">
            <ul class="navbar-nav  m-0 p-0"  style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Find Talent</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">Why Artisan</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#">Find Work</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./login.php">Sign In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-success" style="margin-right: 20px; color: white;" href="./signup.php">Join Us</a>
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
          <ul class="mb-lg-0 d-flex mx-auto" style="font-family: 'Times New Roman', Times, serif;">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle  active" style="color: black;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Admin & Customer Support
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="dashboard_profile.php">Event Management</a></li>
                <li><a class="dropdown-item" href="logout1.php">Articles</a></li>
                <li><a class="dropdown-item" href="logout1.php">Development & IT</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: black;" href="#">Graphics & Design</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: black;" href="#">Sales & Marketing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: black;" href="#">Request Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: black;" href="#">Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: black;" href="#">Finance & Accounting</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: black;" href="#">Photographer</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle  active" style="color: black;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Other Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="dashboard.php">Admin & Customer Support</a></li>
                <li><a class="dropdown-item" href="dashboard_profile.php">Event Management</a></li>
                <li><a class="dropdown-item" href="logout1.php">Articles</a></li>
                <li><a class="dropdown-item" href="logout1.php">Development & IT</a></li>
              </ul>
            </li>
          </ul>

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
        <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active  mt-3" data-bs-interval="5000">
              <div class="row mx-auto">
                <div class="col-md-3">
                  <img src="./image/deco1.png" width="150px" alt="">
                  <h3 class="text_2 mt-3 color_2 maxheight1"><a href="#">Event Decoration</a></h3>
                  <p class="text_3 color_2 maxheight m-4 p-3 mt-0 pt-0">
                    Build your Brand Logo design
                  </p>

                </div>
                <div class="col-md-3">
                  <img src="./images/logo4.png" width="180px" alt="">
                  <h3 class="text_2 mt-2 color_2 maxheight1"><a href="#">Wordpress</a></h3>
                  <p class="text_3 color_2 maxheight m-4 p-3 mt-0 pt-0">
                    Customize your Wordpress
                  </p>
                </div>
                <div class="col-md-3">
                  <img src="./images/logo2.png" width="150px" alt="">
                  <h3 class="text_2 color_2 maxheight1"><a href="#">Voice Over</a></h3>
                  <p class="text_3 color_2 maxheight m-4 p-3 mt-0 pt-0">
                    Share your message to the world
                  </p>
                </div>
                <div class="col-md-3">
                  <img src="./images/logo5.png" width="100px" alt="">
                  <h3 class="text_2 mt-3 color_2 maxheight1"><a href="#">Social Media</a></h3>
                  <p class="text_3 color_2 maxheight m-4 p-3 mt-0 pt-0">
                    Reach more customers through social media
                  </p>
                </div>


              </div>
              <div class="row mx-auto mt-4">
                <div class="col-md-3 ">
                  <img src="./image/tailor.jpg" width="200px" alt="">
                  <h3 class="text_2 mt-3 color_2 maxheight1"><a href="#">Tailors</a></h3>
                  <p class="text_3 color_2 maxheight m-4 p-3 mt-0 pt-0">
                    Build your Brand Logo design
                  </p>

                </div>
                <div class="col-md-3">
                  <img src="./image/bricklayer.jpg" width="200px" alt="">
                  <h3 class="text_2 mt-3 color_2 maxheight1"><a href="#">Event Decoration</a></h3>
                  <p class="text_3 color_2 maxheight m-4 p-3 mt-0 pt-0">
                    Build your Brand Logo design
                  </p>
                </div>
                <div class="col-md-3">
                  <img src="./image/event.jpeg" width="200px" alt="">
                  <h3 class="text_2 mt-3 color_2 maxheight1"><a href="#">Event Decoration</a></h3>
                  <p class="text_3 color_2 maxheight m-4 p-3 mt-0 pt-0">
                    Build your Brand Logo design
                  </p>
                </div>
                <div class="col-md-3">
                  <img src="./image/tailor.jpg" width="200px" alt="">
                  <h3 class="text_2 mt-3 color_2 maxheight1"><a href="#">Event Decoration</a></h3>
                  <p class="text_3 color_2 maxheight m-4 p-3 mt-0 pt-0">
                    Build your Brand Logo design
                  </p>
                </div>

              </div>

            </div>
            <div class="carousel-item  mt-3" data-bs-interval="2000">
              <div class="row mx-auto">
                <div class=" col-md-3 ">
                  <img src="./image/tailor.jpg" width="200px" alt="">
                  <h3 class="text_2 mt-3 color_2 maxheight1"><a href="#">Event Decoration</a></h3>
                  <p class="text_3 color_2 maxheight m-4 p-3 mt-0 pt-0">
                    Build your Brand Logo design
                  </p>
                </div>
                <div class="col-md-3">
                  <img src="./image/tailor.jpg" width="200px" alt="">
                  <h3 class="text_2 mt-3 color_2 maxheight1"><a href="#">Event Decoration</a></h3>
                  <p class="text_3 color_2 maxheight m-4 p-3 mt-0 pt-0">
                    Build your Brand Logo design
                  </p>
                </div>
                <div class="col-md-3">
                  <img src="./image/tailor.jpg" width="200px" alt="">
                  <h3 class="text_2 mt-3 color_2 maxheight1"><a href="#">Event Decoration</a></h3>
                  <p class="text_3 color_2 maxheight m-4 p-3 mt-0 pt-0">
                    Build your Brand Logo design
                  </p>
                </div>
                <div class="col-md-3">
                  <img src="./image/tailor.jpg" width="200px" alt="">
                  <h3 class="text_2 mt-3 color_2 maxheight1"><a href="#">Event Decoration</a></h3>
                  <p class="text_3 color_2 maxheight m-4 p-3 mt-0 pt-0">
                    Build your Brand Logo design
                  </p>
                </div>


              </div>
              <div class=" row mx-auto mt-4">
                <div class=" col-md-3 ">
                  <img src="./image/tailor.jpg" width="200px" alt="">
                  <h3 class="text_2 mt-3 color_2 maxheight1"><a href="#">Event Decoration</a></h3>
                  <p class="text_3 color_2 maxheight m-4 p-3 mt-0 pt-0">
                    Build your Brand Logo design
                  </p>
                </div>
                <div class="col-md-3">
                  <img src="./image/tailor.jpg" width="200px" alt="">
                  <h3 class="text_2 mt-3 color_2 maxheight1"><a href="#">Event Decoration</a></h3>
                  <p class="text_3 color_2 maxheight m-4 p-3 mt-0 pt-0">
                    Build your Brand Logo design
                  </p>
                </div>
                <div class="col-md-3">
                  <img src="./image/tailor.jpg" width="200px" alt="">
                  <h3 class="text_2 mt-3 color_2 maxheight1"><a href="#">Event Decoration</a></h3>
                  <p class="text_3 color_2 maxheight m-4 p-3 mt-0 pt-0">
                    Build your Brand Logo design
                  </p>
                </div>
                <div class="col-md-3">
                  <img src="./image/tailor.jpg" width="200px" alt="">
                  <h3 class="text_2 mt-3 color_2 maxheight1"><a href="#">Event Decoration</a></h3>
                  <p class="text_3 color_2 maxheight m-4 p-3 mt-0 pt-0">
                    Build your Brand Logo design
                  </p>
                </div>
              </div>
            </div>
            <button class=" carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>



      <div class="bg_1 wrap_2 wrap_4 mb-4">
        <div class="row">
          <div class="row  offset-sm-2 offset-md-0">
            <div class="row">
              <div class="col-md-12">
                <div class="box_1">
                  <div class="container">
                    <div class="col-md-12">
                      <img src="./images/logo6.jpg" class=" mx-auto" alt="Nature" style="width:1200px; height:600px; border-radius: 20px">
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="container">
        <div class="row  mt-5 ">
          <div class=" col-md-6 p-5 pb-0 pt-0">
            <p class="h2 mb-3">Talented Artisans at your fingertips</h1>
            <h4 class="text_2">The best for every budget</h4>
            <p class="pb-0 pt-0 ">Find high-quality services at every price point. No hourly rates, just project-based pricing.</p>
            <h4 class="text_2">Quality work done quickly</h4>
            <p class="pb-0 pt-0 ">Find the right freelancer to begin working on your project within minutes.</p>
            <h4 class="text_2">Protected payments, every time</h4>
            <p class="pb-0 pt-0 ">Always know what you'll pay upfront. Your payment isn't released until you approve the work.</p>
            <h4 class="text_2">24/7 support</h4>
            <p class="pb-0 pt-0 ">Questions? Our round-the-clock support team is available to help anytime, anywhere.</p>
          </div>
          <div class=" col-md-6">
            <img src="./images/index-3_img02.jpg" style="width:600px; border-radius: 20px" alt="Image 1" />
            <div class="row">
              <div class="col-md-6 ">
                <h4 class="m-3 p-3 pt-0 pb-0" style="border:1px solid black; border-radius: 20px"> <a href="">Accounting </a></h4>
                <h4 class="m-3 p-3 pt-0 pb-0" style="border:1px solid black; border-radius: 20px"> <a href=""> Financial Analysis</a></h4>
                <h4 class="m-3 p-3 pt-0 pb-0" style="border:1px solid black; border-radius: 20px"> <a href=""> Tax Preparation</a></h4>
              </div>
              <div class="col-md-6 ">
                <h4 class="m-3 p-3 pt-0 pb-0" style="border:1px solid black; border-radius: 20px"> <a href="">Bookkeeping</a></h4>
                <h4 class="m-3 p-3 pt-0 pb-0" style="border:1px solid black; border-radius: 20px"> <a href="">Instructional Design</a></h4>
                <h4 class="m-3 p-3 pt-0 pb-0" style="border:1px solid black; border-radius: 20px"> <a href=""> Business Analysis</a></h4>
              </div>
            </div>

          </div>
        </div>
      </div>



      <div style="background-color: #040f54;">
        <div class="row mt-4 ml-4 mr-4 p-4">
          <div class="col-sm-5 col-md-7 color_1">
            <h2 class="header_2 indent_1 text-center p-4">
              Our Staff
            </h2>
            <div class="box_4 p-5">
              <p class="text_5 p-4 pt-0">
                Kivamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id
                dictum ai commodo luctus libero. Praesent faucibus malesuada faucibus. Donec laoreet
                metus
                id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                consectetur orci sed nulla facilisis consequat. Curabitur vel lorem sit amet nulla
                ullamcorper fermentum. In vitae varius augue, eu consectetur
              </p>
              <div class="row mx-auto p-4">
                <div class="col-md-4">
                  <ul class="list_2 text_6">
                    <li><a href="#">Helen Tompson</a></li>
                    <li><a href="#">Sandra Hullock</a></li>
                    <li><a href="#">Jessica Ariston</a></li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <ul class="list_2 text_6">
                    <li><a href="#">Max Grey</a></li>
                    <li><a href="#">Anete Puga</a></li>
                    <li><a href="#">Kevin Wood</a></li>
                  </ul>
                </div>
              </div>
              <div>
                <a class="btn btn-info" style="margin-left: 180px;" href="#">view all</a>
              </div>

            </div>
          </div>

          <div class="col-sm-5 p-3 pt-5 mt-3 offset-sm-2 col-md-5 offset-md-0">
            <div class="img-wrap pt-4">
              <img class="img_2" src="./images/index-1_img03.jpg" alt="Image 3" />
              <img class="img_2" src="./images/index-1_img04.jpg" alt="Image 4" />
              <img class="img_2" src="./images/index-1_img05.jpg" alt="Image 5" />
              <img class="img_2" src="./images/index-1_img06.jpg" alt="Image 6" />
              <img class="img_2" src="./images/index-1_img07.jpg" alt="Image 7" />
              <img class="img_2" src="./images/index-1_img08.jpg" alt="Image 8" />
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="container my-5">

        <h1 class="header_1">Directory Categories</h1>
        <div class="row my-4">

          <div class="col-md-3">
            <div class="card">
              <div class="image">
                <img src="./image/tailor.jpg" width="120px" />
              </div>
              <div class="card-inner">

                <h2 class="text_4">4 Artisan</h2>
                <h3 class="text_2">Tailor</h2>

              </div>
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
              <div class="image">
                <img src="./images/index-3_img03.jpg" style="max-width: 100%; max-height: 150px;" />
              </div>
              <div class="card-inner">

                <h2 class="text_4">6 Artisan</h2>
                <h3 class="text_2">Electricians</h2>

              </div>
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

    <div class="card-deck m-4">
      <h1 class=" text_1 text-center">Read What the Government Says</h1>
      <div class="row">
        <div class="col col-lg-4 col-md-6 text-center ">
          <img class="m-5 rounded" style="max-width: 200px; max-height: 250px; margin: 20px;" src="image/pic1.jpg" alt="">
          <h5 class="lead m-5 mt-0 mb-0 p-5 pt-0 pb-0"><a href="#" class="text-dark" style="text-decoration: none;">Lagos restates commitment to enhance capacity of Artisans</a></h5>
          <!-- <p> The Lagos State government has restated it’s resolve to continue enhancing the State’s
            Tradesmen and Artisans through policy formulation and implementations.</p> -->
        </div>
        <div class="col col-lg-4 col-md-6 text-center mt-0">
          <img class="m-5 rounded" style="max-width: 150px; max-height: 180px; margin: 20px;" src="image/pic4.PNG" alt="">
          <h5 class="lead  m-5 mt-0 mb-0 p-5 pt-0 pb-0"><a href="#" class="text-dark" style="text-decoration: none;"> produce artisans for the future Nigerian's should study its past</a></h5>
        </div>
        <div class="col col-lg-4 text-center mt-0">
          <img class="m-5 rounded" style="max-width: 200px; max-height: 250px; margin: 20px;" src="image/artisans.jpg" alt="">
          <h5 class="lead  m-5 mt-0 mb-0 p-5 pt-0 pb-0"><a href="#" class="text-dark" style="text-decoration: none;">Government charges artisans to embrace technology</a></h5>
          <!-- <p>The Kwara State government has charged artisans to use the invent of new technology to advance their trade.</p> -->
        </div>
      </div>
    </div>
    <div class="text-center">
      <a href="allSearch.php" class=" btn btn-outline-success p-3 m-4 ">Begin Your Search!</a>
    </div>
    </section>
  </div>
  <?php include './include/footer.php'; ?>

  <script src="./js/script.js"></script>

  <script src="./js/jquery/jquery.min.js"></script>
  <script src="./js/popper/popper.min.js"></script>
  <script src="./css/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
</body>