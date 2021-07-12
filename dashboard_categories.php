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
//edit
if (isset($_GET['edit'])) {
    $email = $_SESSION['email'];
    $update = true;
    $record = mysqli_query($connection, "SELECT * FROM artisan WHERE email='$email'");

    if (count($record) == 1) {
        $n = mysqli_fetch_array($record);
    }
} ?>
<?php
//update
if (isset($_GET['edit'])) {

    if (isset($_POST['update'])) {
        $email = $_SESSION['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $address = $_POST['home_address'];
        $skill = $_POST['skill'];
        $file = $_POST['file'];

        $update = mysqli_query($connection, "UPDATE artisan SET phoneNumber='$phoneNumber', home_address='$address', skill='$skill', file='$file' WHERE  email='$email'");
        header("location: dashboard_categories.php");
    }
}
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($connection, "DELETE FROM artisan WHERE id=$id");
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

<body>

    <nav class="navbar navbar-expand-md bg-dark mb-3 navbar-dark fixed-top">
        <!-- Brand/logo -->

        <img src="image/pic01.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        <a class="navbar-brand" href="./index.php">My Artisan</a>
        <div class="collapse  navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link " href="index.php"><i class="fa fa-home" aria-hidden="true"></i> HOME SITE</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-address-card"> </i> <?php echo $row['fullName'];  ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="signup.php">Signup</a>
                        <a class="dropdown-item" href="dashboard.php">Dashboard</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout1.php">LOGOUT</a>
                    </div>
                </li>

            </div>
        </div>

    </nav>

    <header class="masthead" style="background-image: url('image/Cap2.PNG')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 p-5 mt-4 mx-auto">
                    <div class="site-heading m-4 p-4 ">
                        <h1 class="">my artisan</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container-fluid" id="main">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col-md-3 col-lg-2 sidebar-offcanvas bg-light pl-0" id="sidebar" role="navigation">
                <ul class="nav flex-column pl-0 pt-5 mt-3">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="fas fa-arrows-alt-v"></i> Posts▾</a>
                        <ul class="list-unstyled flex-column pl-3 collapse" id="submenu1" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="dashboard_post.php">View all Posts</a></li>
                            <li class="nav-item"><a class="nav-link" href="dashboard_addPost.php">Add Post</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="dashboard_profile.php"><i class="fas fa-address-card"></i> Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout1.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </div>
            <!--/col-->

            <div class="col main p-5">
                <div class="col main">
                    <div class="text-center">
                        <h1 class="display-4 d-none d-sm-block">
                            Welcome to Your Profile Page!
                        </h1>
                        <p class="lead p-4">This page is design to give you some important information about your website. You can used the link at the sidebar to navigate to the most important area you need. </p>
                    </div>
                    <div class="col-md-12 pt-4">
                        <div class="col-md-4 float-right ">
                            <h4>Add Categories</h4>
                            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                                <div class="form-group">
                                    <label for="text" class="control-label">Phone Number</label>
                                    <input type="text" class="form-control" name="phoneNumber" value="<?php if (isset($n['phoneNumber'])) {
                                                                                                            echo $n['phoneNumber'];
                                                                                                        }   ?>">
                                </div>
                                <div class="form-group">
                                    <label for="text" class="control-label">Home Address</label>
                                    <input type="text" class="form-control" name="home_address" value="<?php if (isset($n['home_address'])) {
                                                                                                            echo $n['home_address'];
                                                                                                        }   ?>">
                                </div>
                                <div class="form-group">
                                    <label for="text" class="control-label">Your Skill</label>
                                    <input type="text" class="form-control" name="skill" value="<?php if (isset($n['skill'])) {
                                                                                                    echo $n['skill'];
                                                                                                }   ?>">
                                </div>
                                <div class="form-group">
                                    <label for="text" class="control-label">Profile Pic</label>
                                    <input type="text" class="form-control" name="file" value="<?php if (isset($n['file'])) {
                                                                                                    echo $n['file'];
                                                                                                }   ?>">
                                </div>

                                <div class="form-group text-center">

                                    <button class="btn" type="submit" name="update" style="background: #556B2F;">update</button>
                                    <a href="dashboard_categories.php?del=<?php echo $row['id']; ?>" class="btn btn-info">Delete</a>
                                </div>

                            </form>
                        </div>

                        <div class="col-md-8 text-center float-left">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>Info</th>
                                        <th><a href="dashboard_categories.php?edit=1" class="btn btn-info">Edit</a></th>


                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>

                                        <td><?php echo $row['fullName'];  ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>

                                        <td><?php echo $row['email'];  ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>

                                        <td><?php echo $row['user_password'];  ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>

                                        <td><?php echo $row['dateOfBirth'];  ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>

                                        <td><?php echo $row['radio1'];  ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>

                                        <td><?php echo $row['phoneNumber'];  ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>

                                        <td><?php echo $row['home_address'];  ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>

                                        <td><?php echo $row['skill'];  ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>

                                        <td><?php echo $row['file'];  ?></td>
                                        <td></td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <hr>
                <h3 class=" mt-5 text-center">Interesting Things You need to Know About Us.</h3>

                <div class="row mb-3">
                    <div class="container">
                        <div class=" text-center">
                            
                                <p><strong>Mr. Hassan</strong> is a website designer who partners with arts organizations/Indivituals to expand their reach beyond their walls by creating a range of printed materials with a focus on publicizing them.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './include/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>