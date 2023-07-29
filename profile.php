<?php
session_start();

?>
<?php

include("connection.php");
error_reporting(0);

$userprofile = $_SESSION['username'];
$profilepassword = $_SESSION['password'];


if ($userprofile == true && $profilepassword == true) {
} else {
  header('location:login.html');
}

$query = "SELECT * FROM profile where name='$userprofile' and password='$profilepassword'";


$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if ($total != 0) {


  while ($row = mysqli_fetch_assoc($data)) {

    $rollno = $row['rollno'];
    $name = $row['name'];
    $email = $row['email'];
    $image = $row['image'];
    $fname = $row['fname'];
    $mname = $row['mname'];
    $phonenumber = $row['phonenumber'];
    $about = $row['about'];
    $address = $row['address'];
    $course = $row['course'];
    $branch = $row['branch'];
    $highschool = $row['highSchool'];
    $board = $row['board'];
    $highschoolyear = $row['highschoolyear'];
    $certificate10 = $row['10certificate'];
    $inter = $row['Inter'];
    $interyear = $row['interyear'];
    $certificate12 = $row['12certificate'];
    $collegename = $row['collegename'];
    $collegeyear = $row['collegeyear'];
    $collegecertificate = $row['collegecertificate'];
    $diploma = $row['Diploma'];
    $btech = $row['BTech'];
  }
} else {
  echo "No record Found";
}



$query2 = "SELECT * FROM training where name='$userprofile' and password='$profilepassword'";
$data2 = mysqli_query($conn, $query2);
$total2 = mysqli_num_rows($data2);
if ($total2 != 0) {
  while ($c = mysqli_fetch_assoc($data2)) {
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>


  </style>
</head>
<!--background-image: linear-gradient(to right, red , yellow);-->
<body style=" ">
  <center>
    <h1><?php echo $name; ?></h1><br>
    <?php echo $address; ?><br>
    <?php echo $email; ?>
  </center>
  <hr>
  <?php echo $about; ?>
  <div>
    <br>
  <?php 
  if($collegename!=null && $collegename !=""){
    echo  $collegeyear;
    echo "<h2>".$collegename."</h2>";
    if($course=="b_tech"){
      echo "<b>BACHELOR OF TECHNOLOGY,</b> ";
      if($branch=="computer science"){
          echo "Computer Science and Engineering";
      }
    }
  }
  ?>
  <br>
  <?php 
  if($inter!=null && $inter !=""){
    echo  $interyear;
    echo "<h2>".$inter."</h2>";
    if($course=="b_tech"){
      echo "<b>SENIOR SECONDARY,</b> ";
      if($branch=="computer science"){
          echo "Science";
      }
    }
  }
  ?>
  <br>
  <?php 
  if($highschool!=null && $highschool !=""){
    echo  $highschoolyear;
    echo "<h2>".$highschool."</h2>";
    if($board=="CBSE"){
      echo "<b>CBSE,</b>board";
      
    }else if($board=="ICSE"){
      echo "<b>ICSE,</b>board";
    }
  }
  ?>

  </div>



</body>

</html>