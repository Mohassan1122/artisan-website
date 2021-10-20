<?php
include_once 'db_connect.php';
session_start();

if (isset($_SESSION['email'])) {
    $new_email = $_SESSION['email'];

    $query2 = "SELECT * FROM register WHERE email = '$new_email'";
    $result = mysqli_query($connection, $query2);
    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_array($result);
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">


    <title>My Artisan</title>
    <link rel="icon" href="./images/D0Sm15i.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="./css/bootstrap-5.0.1-dist/css/bootstrap.min.css">

    <!-- Custom fonts for this template -->
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">




    <link rel="stylesheet" href="./themify-icons.css">
    <link rel="stylesheet" href="./style.css">
    <style>
        .container1 {
            max-width: 1170px;
            margin: auto;
        }

        img {
            max-width: 100%;
        }

        .inbox_people {
            background: #f8f8f8 none repeat scroll 0 0;
            float: left;
            overflow: hidden;
            width: 40%;
            border-right: 1px solid #c4c4c4;
        }

        .inbox_msg {
            border: 1px solid #c4c4c4;
            clear: both;
            overflow: hidden;
        }

        .top_spac {
            margin: 20px 0 0;
        }


        .recent_heading {
            float: left;
            width: 40%;
        }

        .srch_bar {
            display: inline-block;
            text-align: right;
            width: 60%;
        }

        .headind_srch {
            padding: 10px 29px 10px 20px;
            overflow: hidden;
            border-bottom: 1px solid #c4c4c4;
        }

        .recent_heading h4 {
            color: #05728f;
            font-size: 18px;
            margin: auto;
        }

        .srch_bar input {
            border: 1px solid #cdcdcd;
            border-width: 0 0 1px 0;
            width: 80%;
            padding: 2px 0 4px 6px;
            background: none;
        }

        .srch_bar .input-group-addon button {
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            border: medium none;
            padding: 0;
            color: #707070;
            font-size: 18px;
        }

        .srch_bar .input-group-addon {
            margin: 0 0 0 -27px;
        }

        .chat_ib h5 {
            font-size: 15px;
            color: #464646;
            margin: 0 0 8px 0;
        }

        .chat_ib h5 span {
            font-size: 13px;
            float: right;
        }

        .chat_ib p {
            font-size: 14px;
            color: #989898;
            margin: auto
        }

        .chat_img {
            float: left;
            width: 11%;
        }

        .chat_ib {
            float: left;
            padding: 0 0 0 15px;
            width: 88%;
        }

        .chat_people {
            overflow: hidden;
            clear: both;
        }

        .chat_list {
            border-bottom: 1px solid #c4c4c4;
            margin: 0;
            padding: 18px 16px 10px;
        }

        .inbox_chat {
            height: 550px;
            overflow-y: scroll;
        }

        .active_chat {
            background: #ebebeb;
        }

        .incoming_msg_img {
            display: inline-block;
            width: 6%;
        }

        .received_msg {
            display: inline-block;
            padding: 0 0 0 10px;
            vertical-align: top;
            width: 92%;
        }

        .received_withd_msg p {
            background: #ebebeb none repeat scroll 0 0;
            border-radius: 3px;
            color: #646464;
            font-size: 14px;
            margin: 0;
            padding: 5px 10px 5px 12px;
            width: 100%;
        }

        .time_date {
            color: #747474;
            display: block;
            font-size: 12px;
            margin: 8px 0 0;
        }

        .received_withd_msg {
            width: 57%;
        }

        .mesgs {
            float: left;
            padding: 30px 15px 0 25px;
            width: 60%;
        }

        .sent_msg p {
            background: #05728f none repeat scroll 0 0;
            border-radius: 3px;
            font-size: 14px;
            margin: 0;
            color: #fff;
            padding: 5px 10px 5px 12px;
            width: 100%;
        }

        .outgoing_msg {
            overflow: hidden;
            margin: 26px 0 26px;
        }

        .sent_msg {
            float: right;
            width: 46%;
        }

        .input_msg_write input {
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            border: medium none;
            color: #4c4c4c;
            font-size: 15px;
            min-height: 48px;
            width: 100%;
        }

        .type_msg {
            border-top: 1px solid #c4c4c4;
            position: relative;
        }

        .msg_send_btn {
            background: #05728f none repeat scroll 0 0;
            border: medium none;
            border-radius: 50%;
            color: #fff;
            cursor: pointer;
            font-size: 17px;
            height: 50px;
            position: absolute;
            right: 0;
            top: 11px;
            width: 70px;
        }

        .messaging {
            padding: 0 0 50px 0;
        }

        .msg_history {
            height: 516px;
            overflow-y: auto;
        }
    </style>

    <script>
        function getText() {

            var $a = document.getElementById('text').value;

            xhr = new XMLHttpRequest();
            xhr.open('POST', 'chatdb.php', true);
            xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
            xhr.send('chat=' + $a);
            document.getElementById('text').value = " ";
            xhr.onreadystatechange = function() {
                if (xhr.responseText) {

                }
            }
        }

        function setText() {

            xhr = new XMLHttpRequest();
            xhr.open('POST', 'chatFetch.php', true);
            xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
            xhr.send();
            xhr.onreadystatechange = function() {
                //	alert(xhr.responseText);
                document.getElementById('chatarea').innerHTML = xhr.responseText;
            }

        }
        setInterval("setText()", 2000);


        setInterval("users()", 3000);


        function users() {
            xhr1 = new XMLHttpRequest();
            xhr1.open('POST', 'userFetch.php', true);
            xhr1.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
            xhr1.send();
            xhr1.onreadystatechange = function() {
                //	alert(xhr.responseText);
                document.getElementById('loginperson').innerHTML = xhr1.responseText;
            }


        }
    </script>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar bg-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">

                <a class="navbar-brand brand-logo" style="margin-left: 60px;" href="./artisanHome.php"><img src="./images/logo1.png" alt="Logo" /></a>
            </div>
            <div class="navbar-menu-wrapper bg-light d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <i class="fas fa-bars"></i>
                </button>

                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown mr-1">
                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                            <i class="far fa-envelope"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                                </div>
                                <div class="item-content flex-grow">
                                    <h6 class="ellipsis font-weight-normal">David Grey
                                    </h6>
                                    <p class="font-weight-light small-text text-muted mb-0">
                                        The meeting is cancelled
                                    </p>
                                </div>
                            </a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="fas fa-bell"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <div class="item-icon bg-success">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Just now
                                    </p>
                                </div>
                            </a>

                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="./images/avater1.png" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a href="./dashboard_profile.php" class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a href="./logout1.php" class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper ">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas bg-light" id="sidebar" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"">
                <ul class=" nav">
                <li class="nav-item">
                    <a class="nav-link" href="./dashboard.php">
                        <i class="fas fa-tachometer-alt menu-icon"></i>
                        <span class="font-weight-bold menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./addService.php">
                        <i class="fas fa-plus menu-icon"></i>
                        <span class="menu-title">Add Service</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./yourService.php">
                        <i class="fas fa-calendar-plus menu-icon"></i>
                        <span class="menu-title">Your service</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./jobs.php">
                        <i class="fas fa-atlas menu-icon"></i>
                        <span class="menu-title">Jobs For You</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./messages.php">
                        <i class="far fa-envelope menu-icon"></i>
                        <span class="menu-title">Messages</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="fas fa-cogs menu-icon"></i>
                        <span class="menu-title">Settings</span>
                        <i class="fas fa-angle-down ml-3"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="./dashboard_profile.php"> Profile Settings </a></li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-sign-out-alt menu-icon"></i>
                        <span class="menu-title">Log Out</span>
                    </a>
                </li>


                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h3 class="mt-3">Mohammed Hassan</h>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12  stretch-card">
                            <div class="container mb-4 card position-relative">
                                <div class="card-body">
                                    <h3><i class="far fa-envelope mr-3"></i></i>Messages</h3>
                                    <div class="col-lg-12 grid-margin stretch-card">
                                        <div class="container1">
                                            <div class="messaging">
                                                <div class="inbox_msg">
                                                    <div class="inbox_people">
                                                        <div class="headind_srch">
                                                            <div class="recent_heading">
                                                                <h4><?php echo $row['fullName'] ?></h4>
                                                            </div>
                                                            <div class="srch_bar">
                                                                <div class="stylish-input-group">
                                                                    <input type="text" class="search-bar" placeholder="Search">
                                                                    <span class="input-group-addon">
                                                                        <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="inbox_chat">
                                                            <div class="chat_list active_chat">
                                                                <div class="chat_people">
                                                                    <div id="loginperson"></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="mesgs">
                                                        <div class="msg_history">
                                                            <div class="incoming_msg">
                                                                <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                                                <div class="received_msg">
                                                                    <div class="received_withd_msg">
                                                                        <p>Test which is a new approach to have all
                                                                            solutions</p>
                                                                        <span class="time_date"> 11:01 AM | June 9</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="outgoing_msg">
                                                                <div class="sent_msg">
                                                                    <p>Test which is a new approach to have all
                                                                        solutions</p>
                                                                    <span class="time_date"> 11:01 AM | June 9</span>
                                                                </div>
                                                            </div>
                                                            <div id="chatarea">

                                                            </div>
                                                        </div>
                                                        <form action="" method="post">
                                                            <div class="type_msg">
                                                                <div class="input_msg_write">
                                                                    <input type="text" class="write_msg" id="text" placeholder="Type a message" />
                                                                    <button type="submit" onclick="getText()" class="msg_send_btn">Send</button>
                                                                </div>
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
                        <footer class=" container mb-4">
                            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                <span class="text-muted ">Copyright © bootstrapdash.com 2020</span>
                                <span class=" float-sm-right "><a href="./index.php" target="_blank"> Artisan Network</a> for all</span>
                            </div>
                        </footer>
                    </div>
                    <!-- main-panel ends -->
                </div>
                <!-- page-body-wrapper ends -->
            </div>
            <!-- container-scroller -->

            <!-- plugins:js -->
            
    <script src="./js/jquery.min.js"></script>
            <script src="./vendor.bundle.base.js"></script>
            <script src="./off-canvas.js"></script>
            <script src="./template.js"></script>
            <!-- End custom js for this page-->
</body>

</html>