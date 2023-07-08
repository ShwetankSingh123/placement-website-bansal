<?php //print_r($_FILES["uploadfile"]);
include("connection.php");
error_reporting(0);

$userprofile = $_SESSION['username'];
$profilepassword = $_SESSION['password'];


if ($userprofile == true && $profilepassword == true) {
} else {
 // header('location:login.html');
}





$filename = $_FILES["stdimage"]["name"];
$tempname = $_FILES["stdimage"]["tmp_name"]; 

$folder ="images/".$filename;
//echo $tempname;
//echo $folder;
move_uploaded_file($tempname, $folder);
//echo "<img src='$folder' height='100px' width='100px'>"; 

$query = "UPDATE profile SET image='$folder' WHERE name=$userprofile";
//echo "hello";

$data = mysqli_query($conn,$query);
echo "hello";

echo $data;
        if($data){
           // echo "<script>alert('Updation Successful')</script>";
            header('location:personal.php');
          ?>
           <!-- <meta http-equiv="refresh" content="3; url=http://localhost/display.php"></meta>-->
          <?php
        }else{
          echo "Failed to save";
        }


//header("location:personal.php");





?>