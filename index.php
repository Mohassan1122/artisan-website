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

  <?php include './include/header.php'; ?>
  <section class=" bg-light">
    <div class="p-4 ml-4 mr-4  text-center">
      <div class="container">
        <h3>How It Works..</h3>
        <p>Find and Connect with Artisan around your area or anywhere in Nigeria <br>
          With over 2million artisans in Nigeria.</p>
      </div>
    </div>






    <div class="container rounded" style="background-color: white;">
      <p class="lead mt-4 pt-4 text-center">Some of The Services we offer.</p>
      <div class="card-deck m-4">
        <div class="card mb-5 mr-5 ">
          <img class="card-img-top" src="image/tailor.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text"> <strong>Tailors</strong><br> Get tailors that can saw your wears perfectly for you.</p>
          </div>

        </div>
        <div class="card mb-5 mr-5">
          <img class="card-img-top" src="image/carpenter.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text"><strong>Carpenter</strong><br>Find woodworkers who makes or repairs wooden objects Close to you</p>
          </div>

        </div>
        <div class="card mb-5 mr-5">
          <img class="card-img-top" src="image/bricklayer.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text"><strong>Bricklayer</strong><br>In need of craftsman skilled in building with bricks.. We get that for you here..</p>
          </div>

        </div>
      </div>







      <div class="card-deck m-4 ">
        <div class="card mb-5 mr-5">
          <img class="card-img-top" src="image/photographer.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text"><strong>Photographers</strong><br>"Get photographers that made excellent portraits around you..</p>
          </div>

        </div>
        <div class="card mb-5 mr-5">
          <img class="card-img-top" src="image/event.jpeg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text"><strong>Event Managers</strong><br>Are you in need of Event Manager, search no more..</p>
          </div>

        </div>
        <div class="card mb-5 mr-5">
          <img class="card-img-top" src="image/catering.jpeg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text"><strong>Caterer</strong><br>You can also get someone who provides food and service for you occasions here..</p>
          </div>

        </div>
      </div>
    </div>

    <br>
    <hr>





    <div class="card-deck m-4 p-4 ">
      <h1 class="display-4 mx-auto">Read What the Government Says</h1>
      <div class="row">
        <div class="col col-lg-4 col-md-6 text-center ">
          <img class="m-5 rounded" style="max-width: 200px; max-height: 250px; margin: 20px;" src="image/pic1.jpg" alt="">
          <h5 class="lead"><a href="#" class="text-dark" style="text-decoration: none;">Lagos restates commitment to enhance capacity of Artisans</a></h5>
          <!-- <p> The Lagos State government has restated it’s resolve to continue enhancing the State’s
            Tradesmen and Artisans through policy formulation and implementations.</p> -->
        </div>
        <div class="col col-lg-4 col-md-6 text-center mt-0">
          <img class="m-5 rounded" style="max-width: 150px; max-height: 180px; margin: 20px;" src="image/pic4.PNG" alt="">
          <h5 class="lead"><a href="#" class="text-dark" style="text-decoration: none;"> produce artisans for the future Nigerian's should study its past</a></h5>
        </div>
        <div class="col col-lg-4 text-center mt-0">
          <img class="m-5 rounded" style="max-width: 200px; max-height: 250px; margin: 20px;" src="image/artisans.jpg" alt="">
          <h5 class="lead"><a href="#" class="text-dark" style="text-decoration: none;">Government charges artisans to embrace technology</a></h5>
          <!-- <p>The Kwara State government has charged artisans to use the invent of new technology to advance their trade.</p> -->
        </div>
      </div>
    </div>
    <div class="text-center">
      <a href="allSearch.php" class=" btn btn-outline-success p-3 m-4 ">Begin Your Search!</a>
    </div>
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