<?php
    $db_hostName = "localhost";
    $db_userName = "root";
    $db_password = "";
    $db_name = "placementwebsite";


    $conn = mysqli_connect($db_hostName, $db_userName, $db_password, $db_name);

    if(!$conn){
        echo "Connection failed : ".mysqli_connect_error();
        exit;
    }else{
        //echo "<script>alert('Connection is Secured')</script>";
    }

?>