<?php
error_reporting(0);

?>

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
  //echo "Table Has record";

  while ($row = mysqli_fetch_assoc($data)) {

    $rollno = $row['rollno'];
    $name = $row['name'];
    $email = $row['email'];
    $image = $row['image'];
    $fname = $row['fname'];
    $mname = $row['mname'];
    $phonenumber = $row['phonenumber'];
    $course = $row['course'];
    $highschool = $row['highSchool'];
    $board = $row['board'];
    $highschoolyear = $row['highschoolyear'];
    $highschoolcertificate = $row['10certificate'];
    $inter = $row['Inter'];
    $interschoolyear = $row['interyear'];
    $interschoolcertificate = $row['12certificate'];
    $collegename = $row['collegename'];
    $collegeyear = $row['collegeyear'];
    $diploma = $row['Diploma'];
    $btech = $row['BTech'];
    $branch = $row['branch'];
    $award = $row['Award'];
    $training = $row['training'];
    $duration = $row['duration'];
    $placeoftraining = $row['placeoftraining'];
    //<a href='update_record.php?rollno=$row[rollno]'><input type='submit' value='edit' class='update'/></a></td>



  }

  //$_SESSION['image']=$image;

} else {
  echo "No record Found";
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Education Portal</title>
  <link rel="stylesheet" href="admin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
    <i class='bx bxs-graduation'></i>
      <span class="logo_name">BIET, Lucknow</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="User.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="personal.php">
          <i class='bx bx-box'></i>
          <span class="links_name">Personal Info.</span>
        </a>
      </li>
      <li>
        <a href="education.php">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Education</span>
        </a>
      </li>


      <li>
        <a href="TC.php">
          <i class='bx bx-book-alt'></i>
          <span class="links_name">Training & Certif..</span>
        </a>
      </li>

      <li>
        <a href="projects.php">
          <i class='bx bx-message'></i>
          <span class="links_name">Projects</span>
        </a>
      </li>

      <!-- <li>
          <a href="User_Update.html">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Update / Add Info.</span>
          </a>
        </li> -->
        <li class="log_out">
        <a href="logout.php">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Student Portal</span>
      </div>

      <div class="profile-details">
        <?php echo $name;?>
        
    </nav>

    <form action="#" method="post" enctype="multipart/form-data">
      <div class="home-content">
        <div class="container rounded bg-white mt-5 mb-5">
          <div class="row mt-3">
            <div class="col-md-6"><label class="labels">HighSchool Name</label><input type="text" class="form-control" placeholder="name " value="<?php echo $highschool; ?>" name="highschoolname"></div>
            <div class="col-md-6">
                    <label class="labels">Board</label>
                    <select class="form-control" name="board" value="<?php echo $branch; ?>">
                      <option value="" selected>Board</option>

                      <option value="CBSE" <?php if ($board == 'CBSE') {
                                                          echo "selected";
                                                        } ?>>CBSE</option>
                      <option value="UP" <?php if ($board == 'UP') {
                                              echo "selected";
                                            } ?>>UP</option>
                      <option value="ICSE" <?php if ($board == 'ICSE') {
                                                      echo "selected";
                                                    } ?>>ICSE</option>
                      
                    </select>
                  </div>
            <div class="col-md-6"><label class="labels">Passing year - 10th</label><input type="text" class="form-control" placeholder="e.g., 2018 " value="<?php echo $highschoolyear; ?>" name="highschoolyear"></div>
            <div class="col-md-6"><label class="labels">10th Certificate</label><input type="file" class="form-control" placeholder="e.g., result.pdf " name="10certificate"></div>

            <hr>
            <div class="col-md-6"><label class="labels">Intermediate Name</label><input type="text" class="form-control" placeholder="name " value="<?php echo $inter; ?>" name="intername"></div>

            <div class="col-md-6"><label class="labels">Passing year - 12th</label><input type="text" class="form-control" placeholder="e.g., 2018" value="<?php echo $interschoolyear; ?>" name="interyear"></div>
            <div class="col-md-6"><label class="labels">12th Certificate</label><input type="file" class="form-control" placeholder="e.g., result.pdf " name="12certificate"></div>

            <hr>
            <div class="col-md-6"><label class="labels">College Name</label><input type="text" class="form-control" placeholder="name " value="<?php echo $collegename; ?>" name="collegename"></div>

            <div class="col-md-6"><label class="labels">Passing year - Graduation</label><input type="text" class="form-control" placeholder="e.g., 2024" value="<?php echo $collegeyear; ?>" name="collegeyear"></div>
            <div class="col-md-6"><label class="labels">Graduation Certificate</label><input type="file" class="form-control" placeholder="e.g., result.pdf " name="collegecertificate"></div>

          </div>
          <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Update Profile</button></div>
        </div>
    </form>

    <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script>



</body>

</html>



<?php

$highschoolname = $_POST["highschoolname"];
$board = $_POST["board"];
$intername = $_POST["intername"];
$collegename = $_POST["collegename"];
$highschoolyear = $_POST["highschoolyear"];
$interyear = $_POST["interyear"];
$collegeyear = $_POST["collegeyear"];



//echo $email;
//$highschoolname  != null && $highschoolname != "" && $intername!=null && $intername!="" && $collegename != null && $collegename !=""

if ($highschoolname  != null && $highschoolname != "") {

  $filename1 = $_FILES["10certificate"]["name"];
  $tempname1 = $_FILES["10certificate"]["tmp_name"];
  $filename2 = $_FILES["12certificate"]["name"];
  $tempname2 = $_FILES["12certificate"]["tmp_name"];
  $filename3 = $_FILES["collegecertificate"]["name"];
  $tempname3 = $_FILES["collegecertificate"]["tmp_name"];
  

  $folder1 = "certificates/" . $filename1;
  $folder2 = "certificates/" . $filename2;
  $folder3 = "certificates/" . $filename3;
  //echo $folder2;
  if ($filename1 != null && $filename1 != "") {
    move_uploaded_file($tempname1, $folder1);

    $query1 = "UPDATE profile SET 10certificate='$folder1'  WHERE rollno = $rollno";
    $data1 = mysqli_query($conn, $query1);
  }

  if ($filename2 != null && $filename2 != "") {
    move_uploaded_file($tempname2, $folder2);
    echo "hello";
    $query2 = "UPDATE profile SET 12certificate='$folder2'  WHERE rollno = $rollno";
    $data2 = mysqli_query($conn, $query2);
  }


  if ($filename3 != null && $filename3 != "") {
    move_uploaded_file($tempname3, $folder3);

    $query3 = "UPDATE profile SET collegecertificate='$folder3'  WHERE rollno = $rollno";
    $data3 = mysqli_query($conn, $query3);
  }

  $query4 = "UPDATE profile SET highSchool='$highschoolname', board='$board', Inter='$intername', collegename='$collegename', highschoolyear='$highschoolyear', interyear='$interyear', collegeyear='$collegeyear'  WHERE rollno = $rollno";
  $data4 = mysqli_query($conn, $query4);
  echo $data4;

  if ($data3 || $data1 || $data2 || $data4) {
    echo "heelo";
    // echo "<script>alert('Updation Successful')</script>";
    header('location:education.php');
?>
    <!-- <meta http-equiv="refresh" content="3; url=http://localhost/display.php"></meta>-->
<?php
  } else {
    echo "Failed to save";
  }
}



?>