<?php
    session_start();
    if(isset($_SESSION['user_id'])){    
    }else{
        header('Location: login.php');
    }
    $name       = $_SESSION['firstname'] . ' ' . $_SESSION['middlename'] . ' ' . $_SESSION['lastname'];
    $org_name   = "St. Patrick's Nursing and Mid-wifery Training College";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/dashboard/Content/images/logo55.png">
    <title>Student Self-Service Login</title>

    <script src="assets/dashboard/Scripts/jquery-2.1.3.min.js"></script>
    <link href="https://apps.knust.edu.gh/students/Content/css?v=5apMUnSW4-ygwNOCL66JuDWuD3_1uX4C6dBWJiAasxg1"
        rel="stylesheet" />

    <script src="https://apps.knust.edu.gh/students/bundles/modernizr?v=wBEWDufH_8Md-Pbioxomt90vm6tJN2Pyy9u9zHtWsPo1">
    </script>

    <link href="assets/dashboard/Content/custom29d9.css?v=2.35" rel="stylesheet" />
    <link href="assets/dashboard/Content/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/dashboard/Content/sweetalert.css" rel="stylesheet" />
    <link href="assets/dashboard/Content/jquery.dateselect.css" rel="stylesheet" />
    <style>
        .navbar-inverse {
            background: #76e013;
            border-bottom: 1px solid #76e013;
            /*-webkit-box-shadow: 0px 5px 15px 0px rgba(52, 73, 94,1.0);
            -moz-box-shadow: 0px 5px 15px 0px rgba(52, 73, 94,1.0);
            box-shadow: 0px 5px 15px 0px rgba(52, 73, 94,1.0);*/
        }

        .navbar-inverse .navbar-nav>li>a {
            color: rgb(253, 253, 253);
        }

        .navbar-inverse .navbar-toggle {
            border-color: white !important;
            background-color: #76e013 !important;
        }

        .navbar-inverse .navbar-toggle:hover {
            border-color: white !important;
            background-color: #76e013 !important;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            /* background-image: url("assets/dashboard/Content/images/bg.jpg"); */
            /* background-image: url(assets/img/2019-11-02.jpg) no-repeat center center fixed; */
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            /* height: 100vh; */
            /* overflow: hidden; */
        }

        #wrapper {
            min-height: 100%;
            position: relative;
        }

        #header {
            padding: 10px;
            margin-bottom: 35px;
        }

        #content {
            padding: 10px;
            padding-bottom: 80px;
        }

        footer {
            width: 100%;
            height: 80px;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .xs-hidden {
            display: inline-block !important;
        }

        @media(max-width: 374px) {
            .xs-hidden {
                display: none !important;
            }

            .navbar-brand {
                margin-left: -35px !important;
            }
        }

        .hand_cursor{
            cursor: pointer;
        }
    </style>

</head>

<body>
    <div id="wrapper">
        <div id="header">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="dashboard.php">
                            <img src="assets/dashboard/Content/images/logo55.png" class="xs-hidden">
                            <div id="knustname">SPNMTC <div style="display:inline-block;" class="xs-hidden">APPS</div>
                                PORTAL | STUDENTS</div>
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="dashboard.php">Home</a></li>
                            <li><a href="#">About</a></li>
                        </ul>
                        <form action="/students/Account/LogOff" class="navbar-right" id="logoutForm" method="post">
                            <input name="__RequestVerificationToken" type="hidden"
                                value="YVW26qwGktSRfBW3Ol80uBGN0V67qP4SFaPU3UGiz5QjUkFIxhGhnLjqSAzhMDKEubhahBhC3WRaTAbwUt28ehj1e57l7QqmUA37sak2HfYc4WmPWKpkDpLjv_wM7zCqtRZdjlEnH-Vpl2v8fyzRyA2" />
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                <li>
                                    <a>Hello <?= $name; ?></a>
                                </li>
                                <li>
                                    <a href="confirm_student_id.php">Change Password</a>
                                </li>

                                <li class="hand_cursor" onclick="Logout()">
                                    <a>Log off</a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>