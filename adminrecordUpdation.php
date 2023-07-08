<?php
include("connection.php");
//include("update_record.php");

        session_start();
        $rollno = $_SESSION['rollno'];


        //print_r($_FILES["uploadfile"]);
$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"]; 

$folder ="images/".$filename;
echo $tempname;
echo $folder;
move_uploaded_file($tempname, $folder);
echo "<img src='$folder' height='100px' width='100px'>";


       // echo $_GET['rollno'];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $image = $folder;
        //$password = $_POST["password"];
        $phoneNumber = $_POST["phonenumber"];
        $course = $_POST["course"];
        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $highSchool = $_POST["highschoolname"];
        $Inter = $_POST["inter"];
        $Diploma = $_POST["diploma"];
        $BTech = $_POST["btech"];
        $Award = $_POST["award"];
        $duration = $_POST["duration"];
        

        //$rollno = $_POST["rollno"];

        $query = "UPDATE profile SET name='$name', email='$email', image='$image', phonenumber='$phoneNumber', course='$course', fname='$fname', mname='$mname', highSchool='$highSchool', Inter='$Inter', Diploma='$Diploma', BTech='$BTech', Award='$Award', duration='$duration' WHERE rollno='$rollno'";

        $data = mysqli_query($conn,$query);

        if($data){
           // echo "<script>alert('Updation Successful')</script>";
            header('location:adminDashboard.php');
          ?>
           <!-- <meta http-equiv="refresh" content="3; url=http://localhost/display.php"></meta>-->
          <?php
        }else{
          echo "Failed to save";
        }
  


?>