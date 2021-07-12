<!DOCTYPE html>
<html lang="en">

<head>

  <title>Artisan Search</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- Custom fonts for this template -->
  <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="index.css">
  <link rel="icon" href="image/md.png">
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
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <!-- Brand/logo -->

    <img src="image/pic01.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    <a class="navbar-brand" href="./index"> My Artisan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

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
        <div class="col-lg-8 col-md-10 p-5 mt-4 mx-auto">
          <div class="site-heading m-2 p-2 ">
            <h1 class="">my artisan</h1>
          </div>
        </div>
      </div>
    </div>
  </header>





  <section id="feature" class="bg-light">
    <div class="container">
      <br />
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
          <h1 class="display-4"> SEARCH FOR YOUR ARTISAN</h1>
          <form class="card card-sm" action="search.php" method="POST">
            <div class="card-body row no-gutters align-items-center">
              <div class="col-auto">
                <i class="fas fa-search h4 text-body"></i>
              </div>
              <!--end of col-->
              <div class="col">
                <input class="form-control form-control-lg form-control-borderless" name="search" type="search" placeholder="Search for your Artisan">
              </div>
              <!--end of col-->
              <div class="col-auto">
                <button class="btn btn-lg btn-success" name="submit" type="submit">Search</button>
              </div>
              <!--end of col-->
            </div>
          </form>
        </div>
        <!--end of col-->
      </div>
    </div>
    <div class="container mt-5">
      <h6 class="text-center">YOUR SEARCH RESULT</h6>
            <?php
            require_once './db_connect.php';

            if (isset($_POST['submit'])) {
              if (empty($_POST['search'])) {
                die("fill the field");
              }
              $search = $_POST['search'];

              $query = "SELECT * FROM artisan WHERE skill LIKE '%$search%'";
              $search_query = mysqli_query($connection, $query);
              if (!$search_query) {
                die("QUERY FAILED" . mysqli_error($search_query));
              }
              $count = mysqli_num_rows($search_query); ?>
              <?php
              if ($count == 0) {
              echo "<h1><li>NO RESULT</li></h1>";
              } else {
              while ($row = mysqli_fetch_assoc($search_query)) {
              ?><?php
              $id = $row['id'];
            
              $query2 = "SELECT * FROM artisan, completeprofile WHERE artisan.id = $id  AND completeprofile.artisan_id=$id";
              $search_query2 = mysqli_query($connection, $query2);
              //print_r($search_query2);
              if (!$search_query) {
              die("QUERY FAILED" . mysqli_error($search_query2));
              }
              $row = mysqli_fetch_assoc($search_query2);?>
              <div class="row mt-5 p-3">
                    <div class="col-md-2">
                        <img src="./image/<?php echo $row['file'];  ?>" style="max-width: 100px;" alt="" />
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-10">
                        <div class="row align-items-center h-100">
                            <div class="col clear-fix">
                                
                                <a href="loginResult.php?id=<?php echo $row['artisan_id']; ?>" class=" btn btn-success m-4 float-right">
                                    Contact!
                                </a>
                                <p class="lead"><?php echo $row['fullName'];  ?>.</p>
                                <span style="font-size:medium; color:tomato;"><b><?php echo $row['skill'];  ?>....</b></span>
                                <h6><i class="fas fa-map-marker-alt"></i> <?php echo $row['location'];  ?>.</h6>
                                <p class="pr-4"><?php echo $row['jobDetail'];  ?>.</p>
                            </div>
                        </div>
                    </div>
                </div><?php

              }
              }
            }


            ?>

        </div>
    </div>
    <br><br>
    <hr>
  </section>

  <div class="container contact-form">
    <form method="post">
      <h3>Drop Us a Message</h3>
      <div class="row text-center">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
          </div>
          <div class="form-group">
            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
          </div>
          <div class="form-group">
            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
          </div>

          <div class="form-group">
            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="btnSubmit" class="btn btn-info round" value="Send Message" />
          </div>
        </div>


      </div>
    </form>
  </div>

  <?php include './include/footer.php'; ?>
</body>





