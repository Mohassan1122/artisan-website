<!DOCTYPE html>
<html lang="en">

<head>

    <title>My Artisan</title>
    <link rel="icon" href="./images/D0Sm15i.png">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- Custom fonts for this template -->
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="index.css">

</head>

<body class="">
    <div class="container">
        <div class="mt-3 ml-3"><a href="index.php"><img src="./images/logo1.png" alt="Logo" width="200px" /></a></div>
    </div>
    <hr class="mb-5">
    <div class="container border " style="height:900px; width:500px; ">
        <div class="row" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
            <h3 class="mx-auto p-3 mr-4 ml-4  text-darker"> Get your free account</h3>

        </div>
        <form style="font-family: 'Arial Narrow', Arial, sans-serif; border-radius: 0.3em;" class="form-horizontal mr-4 ml-4 p-4" action="./include/action.php" method="POST" enctype="multipart/form-data">

            <div class="form-group p-1">
                <label for="fullName" class="col-sm-3 control-label">Full Name</label>

                <input type="text" id="fullName" name="fullName" placeholder="Full Name" class="form-control" autofocus>

            </div>
            <div class="form-group p-1">
                <label for="email" class="col-sm-3 control-label">Email* </label>

                <input type="email" id="email" name="email" placeholder="Email" class="form-control" >

            </div>
            <div class="form-group p-1">
                <label for="password" class="col-sm-3 control-label">Password*</label>

                <input type="password" id="password" name="user_password" placeholder="Password" class="form-control">

            </div>
            <div class="form-group p-1">
                <label for="password" class=" control-label">Confirm Password*</label>

                <input type="password" id="password" name="confirm_password" placeholder="Password" class="form-control">

            </div>

            <div class="form-group p-1">
                <label for="exampleFormControlSelect1">What Service do you want?</label>
                <select class="form-control" name="service" id="exampleFormControlSelect1">
                    <option selected>choose....</option>
                    <option>Artisan</option>
                    <option>Client</option>
                </select>
            </div>

            <div class="form-check mt-4">
                <input class="form-check-input" name="mark" type="checkbox" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    You agree to Artisan Network <a href="">User Agreement</a> and <a href="">Privacy policy, </a>
                </label>
            </div>

            <button type="submit" name="submit" class="btn btn-primary mt-4" style="width: 100%; ">Register</button>

            <p style="font-family: 'Times New Roman', Times, serif;" class="text-muted small-text text-center mt-3">or Register with</p>
            <div class="d-flex justify-content-between">
                <button type="button" style="background: #67cf7f; padding: 5px 30px; color: #fff;" class="btn"><i class="fab fa-google"></i> Google</button>
                <button type="button" style="background: #43619d; padding: 5px 30px; color: #fff;" class="btn"><i class="fab fa-facebook-f"></i> Facebook</button>
            </div>

        </form>


        <hr class="ml-5 mr-5">
        <div class="d-flex justify-content-between" style="font-family: 'Times New Roman', Times, serif;">
            <a class="ml-5" href="forgot.html" style="text-decoration: none;">Forgot password ?</a>
            <p class="mr-4 pr-3">Already on Artisan Network? <a href="login.php" style="text-decoration: none;">Log in</a></p>
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