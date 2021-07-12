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


<?php

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM artisan WHERE id = '$id'";
  $id_query = mysqli_query($connection, $query);
  if (!$id_query) {
    die("QUERY FAILED" . mysqli_error($id_query));
  }

  if (mysqli_num_rows($id_query)) {
    $row = mysqli_fetch_assoc($id_query);
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

  <!-- header page -->
  <?php include './include/header.php'; ?>

  <br>
  <div class="container">

    <div class="col-md-9 mx-auto ">

      <div class="card mb-3">
        <div class="card-body text-center">
          <h1>User information.</h1>
          <img src="./image/<?php echo $row['file']  ?>" alt="user" class="img-responsive rounded-circle" width="150">
          <div class="mt-3">
            <h4>
              <h3><?php echo $row['fullName']  ?></h3>
            </h4>
            <p class="text-secondary mb-1">
              <h5>A skilled <?php echo $row['skill']  ?></h5>
            </p>
            <p class="text-muted font-size-sm">
              <h6><?php echo $row['home_address']  ?></h6>
            </p>
            <button class="btn btn-primary">Follow</button>
            <button class="btn btn-outline-primary">Message</button>
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-9 mx-auto">
      <div class="card ">
        <div class="card-body pl-4 mb-3">
          <div class="row  pl-4">
            <div class="col-sm-3">
              <h6 class="mb-0">Full Name</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              <?php echo $row['fullName']  ?>
            </div>
          </div>
          <hr>
          <div class="row pl-4">
            <div class="col-sm-3">
              <h6 class="mb-0">Email</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              <?php echo $row['email']  ?>
            </div>
          </div>
          <hr>
          <div class="row pl-4">
            <div class="col-sm-3">
              <h6 class="mb-0">Date of Birth</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              <?php echo $row['dateOfBirth']  ?>
            </div>
          </div>

          <hr>
          <div class="row pl-4">
            <div class="col-sm-3">
              <h6 class="mb-0">Gender</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              <?php echo $row['radio1']  ?>
            </div>
          </div>
          <hr>
          <div class="row pl-4">
            <div class="col-sm-3">
              <h6 class="mb-0">Mobile</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              <?php echo $row['phoneNumber']  ?>
            </div>
          </div>
          <hr>
          <div class="row pl-4">
            <div class="col-sm-3">
              <h6 class="mb-0">Address</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              <?php echo $row['home_address']  ?>
            </div>
          </div>
        </div>
        <a class="btn btn-info mx-auto mb-4" href="initialize.php">Make Pay</a>
      </div>
    </div>
  </div>

  <div style="clear: both;"></div>
  <hr>

  <div class="container ">
    <div class=" col-md-12 ">
      <div class="card">
        <div class="card-body ">
          <h4 class="card-title text-center">Recent Comments</h4>
          <h6 class="card-subtitle">Latest Comments section by users</h6>
        </div>

        <?php

        $query2 = "SELECT * FROM comment,artisan WHERE artisan.fullName=comment.artisan_name";
        $result = mysqli_query($connection, $query2);

        if (mysqli_num_rows($result)) {
          while ($row2 = mysqli_fetch_array($result)) {

        ?>
            <div class="d-flex flex-row comment-row">
              <div class="p-2"><span class="round"><img src="./image/<?php echo $row2['file1']  ?>" alt="user" width="50"></span></div>
              <div class="comment-text w-100">
                <ul>
                  <li>
                    <h5><?php echo $row2['name']  ?></h5>
                    <div class="comment-footer"> <span class="date"><?php echo $row2['number']  ?></span> </div>
                    <div class="comment-footer"> <span class="date"><?php echo $row2['date']  ?></span> </div>
                    <div class="comment-footer mr-5 pr-5">
                      <p class="mb-5"><?php echo $row2['txtMsg']  ?></p>
                    </div>
                  </li>

                </ul>
              </div>
            </div><?php

                }
              }

                  ?>




        <br><br>
        <h3 class="card-title text-center">Drop you comments</h3>
        <div class="container h-100">
          <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
              <!-- Form -->
              <form class="form-example" action="commentFunc.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Name " value="" />
                </div>
                <div class="form-group col-sm-2">
                  <!-- <label for="exampleFormControlInput1">id</label> -->
                  <input type="hidden" class="form-control" name="artisan_id" id="exampleFormControlInput1" value="<?php echo $row['id'];  ?>">
                </div>
                <div class="form-group col-md-6">
                  <!-- <label for="exampleFormControlInput1">id</label> -->
                  <input type="hidden" class="form-control" name="artisan_name" id="exampleFormControlInput1" value="<?php echo $row['fullName'];  ?>">
                </div>
                <div class="form-group">
                  <input type="number" name="number" class="form-control" placeholder="Phone Number " value="" />
                </div>
                <div class="form-group">
                  <input type="date" name="date" class="form-control" placeholder="Date " value="" />
                </div>
                <div class="form-group">
                  <textarea name="txtMsg" class="form-control" placeholder="Your Message " style="width: 100%; height: 150px;"></textarea>
                </div>
                <div class="form-group">
                  <p>Upload your passport:</p>
                  <input type="file" name="file1" class="form-control" placeholder="Passport " value="" />
                </div>
                <div class="text-center mb-3">
                  <input type="submit" name="btnSubmit" class="btn btn-info round" value="Send Message" />
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div class="container col-md-9">
  </div>
  <?php include './include/footer.php'; ?>
</body>