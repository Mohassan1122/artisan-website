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

if (isset($_GET['trxref'])) {
  $id = $_GET['trxref'];
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
          <h1>Contact Info</h1>
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
    </div>
  </div>

  <div style="clear: both;"></div>

  </div>
  </div>
  <div class="container col-md-9">
  </div>
  <?php include './include/footer.php'; ?>
</body>