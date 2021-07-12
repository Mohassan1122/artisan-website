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
                        If you dont have an account with us, Please Create an account here.
                    </marquee>
                    <div class="site-heading p-2 ">
                        <h1 class="">my artisan</h1>
                        <span class="subheading m-2 p-2">A Place for all kinds of artisan form different part of the World</span>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <br>
    <div class="container border shadow">

        <div class="card m-4">

            <div class="card-header">
                <svg height="100" width="100">
                    <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="white" />
                    
                </svg>
                <svg height="80" width="100">
                    <path stroke="black" d="M5 40 l215 0" />
                </svg>
                <svg height="100" width="100">
                    <circle cx="50" cy="50" r="40" stroke="white" stroke-width="3" fill="white" />
                </svg>

                <h2 class="h1-responsive font-weight-bold text-center my-4">Registration Form</h2>
            </div>
            <div class="card-block">
                <div class="container">

                    <form class="form-horizontal" style="padding: 15px; margin: 0 auto; border-radius: 0.3em;" action="./include/action.php" method="POST">
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <span class="help-block">*Required fields</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="fullName" class="col-sm-3 control-label">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" id="fullName" name="fullName" placeholder="Full Name" class="form-control" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email* </label>
                            <div class="col-sm-9">
                                <input type="email" id="email" name="email" placeholder="Email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">Password*</label>
                            <div class="col-sm-9">
                                <input type="password" id="password" name="user_password" placeholder="Password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                            <div class="col-sm-9">
                                <input type="password" id="password" name="confirm_password" placeholder="Password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                            <div class="col-sm-9">
                                <input type="date" name="dateOfBirth" id="birthDate" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3">Gender</label>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="radio-inline pl-3">
                                            <input type="radio" name="radio1" id="femaleRadio" value="Female">Female
                                        </label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="radio-inline pl-3">
                                            <input type="radio" name="radio1" id="maleRadio" value="Male">Male
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2>Contact information</h2>
                        <div class="form-group">
                            <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                            <div class="col-sm-9">
                                <input type="number" name="phoneNumber" id="phoneNumber" placeholder="Phone number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber" class="col-sm-3 control-label">Phone number2 </label>
                            <div class="col-sm-9">
                                <input type="number" name="phoneNumber2" id="phoneNumber" placeholder="Phone number2" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Address" class="col-sm-3 control-label">Home Address</label>
                            <div class="col-sm-9">
                                <input type="text" id="home_address" name="home_address" placeholder="Home Address*" class="form-control" autofocus>
                            </div>
                        </div>
                        <h2>Skills information</h2>

                        <div class="form-group">
                            <label for="Address" class="col-sm-3 control-label">
                                <h5>Your Skill</h5>
                            </label>
                            <div class="col-sm-9">
                                <textarea name="skill" id="skill" placeholder="type in your skill*" cols="10" rows="5" class="form-control" autofocus></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9 ">

                                <p>Upload your passport:</p>
                                <input type="file" name="file">

                            </div>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>


                    </form>
                </div>
            </div>

        </div>
        <div class="container ml-4">
            <h3>Already a member? </p> <a href="login.php" class="btn btn-primary">LOGIN</a> </h3>
        </div>
    </div>

    <br />

    <?php include './include/footer.php'; ?>

</body>