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

  <!-- header page -->
  <?php include './include/header.php'; ?>

  
  <hr>

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