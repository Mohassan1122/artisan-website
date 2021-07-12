
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

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-static-top">
        <!-- Brand/logo -->
        
            <img src="image/pic01.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
           <a class="navbar-brand" href="./index.php"> My Artisan</a>
        

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
                <div class="col-lg-8 col-md-10 p-3 mt-4 mx-auto">
                    <marquee width="60%" direction="left" height="100px" class="text-light">
                        Login Your account here.
                    </marquee>
                    <div class="site-heading p-2 ">
                        <h1 class="">my artisan</h1>
                        <span class="subheading m-2 p-2">A Place for all kinds of artisan form different part of the World</span>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php
    if (isset($_GET['msg'])) {
    ?>
        <pre>
<div class="container border shadow rounded text-center  text-dark col-md-12 mb-n1  bg-light">
<?php
        echo "<h1> Welcome To Artisan Site </h1>";
        echo "<p class=\"lead p-4\">Weldone, By signingup, you've taken your first step towords a happier, easy life. we'll do everything we can to help and surpport you..</p> ";
?>
</div>
            </pre>
    <?php
    }

    ?>
    <?php
    if (isset($_GET['erorr'])) {
    ?>
        <pre>
<div class="container border shadow rounded text-center  text-dark col-md-12 mb-n1  bg-light">
<?php
        echo "<ul>" . $_GET['erorr'] . "</ul>";
        
?>
</div>
            </pre>
    <?php
    }

    ?>
    <br>
    <div class="container border shadow" style="text-align:center; height:500px; width:500px; background-color:#fff;">
        <div class="row" style="height: 90px;width:500px; background-color:#868e96;">
            <h1 class="mx-auto p-3 text-white"><i class="fa fa-lock" aria-hidden="true"></i> Login</h1>

        </div><br /><br />
        <form class="form-horizontal" style="padding: 15px; margin: 0 auto; border-radius: 0.3em;" action="function.php" method="POST">

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                </div>
                <input type="text" name="new_email" class="form-control" placeholder="username or email" />
            </div><br />

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-key icon"></i></span>
                </div>
                <input type="Password" name="new_password" class="form-control" placeholder="password" />
            </div><br />

            <button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-off"></span> Login</button>
        </form>
        <br />
        <br />

        <center>
            <div style="border:1px solid black;height:1px;width:300px;"></div>
        </center><br />
        <div class="footer">
            <p>Don't have an Account! <a href="signup.php">Sign Up Here</a></p>
            <p>Forgot <a href="#">Password?</a></p>
        </div>

    </div>
    <br />
    <?php include './include/footer.php'; ?>


</body>