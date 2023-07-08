<?php  include("connection.php");


//session_start();  

//echo $userprofile;


$roll = $_GET['rollno'];

//if($userprofile == true){
    
//}else{
   // header('location:login.html');
//}

$query = "SELECT * FROM profile where rollno = $roll";


$data = mysqli_query($conn,$query);

//$total = mysqli_num_rows($data);

$row = mysqli_fetch_assoc($data);


?>

<!DOCTYPE html>
<html>

<head>
  <title>Update Details</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
    integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="css\style.css">
</head>

<body>
  <div class="main-block">
   <!-- <div class="left-part">
      <i class="fas fa-graduation-cap"></i>
      <h1>Register to continue</h1>
      <p>Bansal Institute of Engineering & Technology, Lucknow</p>
      <hr>
      <p> provides best environment for learning and growing</p>

    </div>-->
    <form action="adminrecordUpdation.php" method="post" enctype="multipart/form-data">
      <div class="title">
        <i class="fas fa-pencil-alt"></i>
        <h2>Edit here</h2>
      </div>
      <div class="info">
        <input class="fname" type="text" value="<?php echo $row['name']; ?>" name="name" placeholder="Full name" required>
        <input type="text" value="<?php echo $row['email']; ?>" name="email" placeholder="Email">
        <input type="text" value="<?php echo $row['fname']; ?>" name="fname" placeholder="Father Name">
        <input type="text" value="<?php echo $row['mname']; ?>" name="mname" placeholder="Mother Name">
        <input type="text" value="<?php echo $row['phonenumber']; ?>" name="phonenumber" placeholder="PhoneNumber" >
        <input type="text" value="<?php echo $row['highSchool']; ?>" name="highschoolname" placeholder="High School Name">
        <input type="text" value="<?php echo $row['Inter']; ?>" name="inter" placeholder="Inter School Name">
        <input type="file" value="<?php echo $row['image']?>" name="image" >
        <input type="text" value="<?php echo $row['Diploma']; ?>" name="diploma" placeholder="Diploma">
        <input type="text" value="<?php echo $row['BTech']; ?>" name="btech" placeholder="B.Tech">
        <input type="text" value="<?php echo $row['Award']; ?>" name="award" placeholder="Awards">
        <input type="text" value="<?php echo $row['duration']; ?>" name="duration" placeholder="Duration">
        <input type="text" value="<?php echo $row['placeoftraining']; ?>" name="placeoftraining" placeholder="Place Of Training">


        <!--<input type="password" value="<?php //echo $row['password']; ?>" name="password" placeholder="Password" required>-->
         <!--<input type="text" value="<?php //echo $row['rollno']; ?>" name="rollno" placeholder="Roll Number" required>-->


        <select name="course" value="<?php echo $row['course']; ?>" required>
          <option value="" selected>Course type*</option>

          <option value="b_tech" <?php if($row['course']=='b_tech'){echo "selected";} ?>>Bachelors degree</option>
          <option value="m_tech" <?php if($row['course']=='m_tech'){echo "selected";} ?>>Masters degree</option>
          <option value="diploma" <?php if($row['course']=='diploma'){echo "selected";} ?>>Diploma</option>
          <option value="mba" <?php if($row['course']=='mba'){echo "selected";} ?>>MBA</option>
        </select>

      </div>
      <div class="checkbox">
        <input type="checkbox" name="checkbox"><span>I agree to the <a href="#"> Privacy Policy</a></span>
      </div>
      <button type="submit" name ="update" value="update">Save</button>
    </form>
    
  </div>
  
</body>

</html>
<?php
  session_start();
  $_SESSION['rollno'] = $roll;

?>

