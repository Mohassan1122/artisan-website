<!DOCTYPE html>
<html lang="en">

<head>

<title>My Artisan</title>
  <link rel="icon" href="./images/D0Sm15i.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" >

    <!-- Custom fonts for this template -->
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="index.css">
</head>

<body class=" bg-default">
    <div class="container">
        <div class="mt-3 ml-3"><a href="index.php"><img src="./images/logo1.png" alt="Logo" width="200px" /></a></div>
    </div>
    <hr>

    <div class="container border" style="height:600px; width:500px; ">
        <div class="row" style="font-family: Arial, Helvetica, sans-serif;">
            <h3 class="mx-auto p-3 mt-4 mr-4 ml-4  text-darker"> Log in to Artisan Network</h3>

        </div>
        <form class="form-horizontal mr-4 ml-4 p-4" style=" border-radius: 0.3em;" action="function.php" method="POST">

            <div class="input-group p-2">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                </div>
                <input type="text" name="new_email" class="form-control" placeholder="username or email" />
            </div><br />

            <div class="input-group mt-3 p-2">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-key icon"></i></span>
                </div>
                <input type="Password" name="new_password" class="form-control" placeholder="password" />
            </div><br />

            <div class="form-check ">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember password
                </label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mt-4" style="width: 100%; "><span class="glyphicon glyphicon-off"></span> SIGN IN</button>


            <p style="font-family: 'Times New Roman', Times, serif;" class="text-muted small-text text-center mt-3">or login with</p>
            <div class="d-flex justify-content-between">
                <button type="button" style="background: #67cf7f; padding: 5px 30px; color: #fff;" class="btn"><i class="fab fa-google"></i> Google</button>
                <button type="button" style="background: #43619d; padding: 5px 30px; color: #fff;" class="btn"><i class="fab fa-facebook-f"></i> Facebook</button>
            </div>

        </form>
        <hr class="ml-5 mr-5">
        <div class="d-flex justify-content-between" style="font-family: 'Times New Roman', Times, serif;">
            <a class="ml-5" href="forgot.html" style="text-decoration: none;">Forgot password ?</a>
            <p class="mr-4 pr-3">Don't have an Account? <a href="signup.php" style="text-decoration: none;">Join now</a></p>
        </div>

    </div>
    <footer style="background-color: #f0efe6;">
        <div class="container mt-4 p-4 text-center">
            <p>©2021 Artisan Network, inc. All rights Reversed</p>
            <span><a class="mt-4 text-dark" href="">Terms of Service</a> </span> <br>
            <span><a class="text-dark" href="">Privacy Policy</a></span> <br>
            <span><a class="text-dark" href="">Accessibility</a></span>

        </div>

    </footer>




</body>