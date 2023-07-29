<?php
include('connection.php');
session_start();
if (isset($_SESSION['role'])) {
} else {
    echo "<script>alert('you need to login first');
    window.location.href='../index';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - <?php echo $_SESSION['username']; ?></title>
    <link rel="icon" type="image/png" href="../img/vimeo.png">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/tinymce/tinymce.min.js"></script>
    <script src="js/tinymce/script.js"></script>

    <link href="css/sb-admin.css" rel="stylesheet">
    <style>
        .panel-red>.panel-heading {
            border-color: #6f78d1;
            color: #fdd;
            background-color: #538fd9;
        }

        .panel-red {
            border-color: #4faed9;
        }

        .panel-yellow {
            border-color: #5bafa8;
        }

        .panel-yellow>.panel-heading {
            border-color: #3cd0cd;
            color: #edd3d3;
            background-color: #46b0c8;
        }

        .panel-yellow>a {
            color: #4b91ab;
        }

        .panel-red>a {
            color: #4f53d9;
        }

        body {
            margin-top: 100px;
            background-color: #382f83;
            color: #537679;
        }

        .navbar-inverse {
            background-color: #3105fb;
            border-color: #ffffff;
        }

        .navbar-inverse .navbar-brand {
            color: #ffebeb;
        }

        .top-nav>li>a {
    padding-top: 15px;
    padding-bottom: 15px;
    line-height: 20px;
    color: #eeeaea;
}
    </style>
</head>

<body>