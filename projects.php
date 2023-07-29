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
  $query3 = "SELECT * FROM projects where user='$userprofile' and password='$profilepassword'";
  
  $data3 = mysqli_query($conn, $query3);
  //echo "heelo";

  $total3 = mysqli_num_rows($data3);
  if ($total3 != 0) {
    while ($row = mysqli_fetch_assoc($data)) {
      $projectname = $row['projectname'];
      $projectdescription = $row['projectdescription'];
      $pstartdate = $row['pstartdate'];
      $penddate = $row['penddate'];
    }
  }




  $user = $userprofile;
  $password = $profilepassword;
} else {
  echo "No record Found";
}

?>











<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Admin Portal</title>
  <link rel="stylesheet" href="admin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  </script>
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
        <span class="dashboard">Projects</span>
      </div>

      <div class="profile-details">
        <?php echo $user; ?>
        <!-- yaha ek user ka naam show karna hai -->
    </nav>





    <form action="#" method="post" enctype="multipart/form-data">
      <div class="home-content">
        <div class="container rounded bg-white mt-5 mb-5">
          <div class="row mt-3">
            <div class="col-md-12"><label class="labels">Project Name*</label><input type="text" class="form-control" placeholder="ex. Sphere Shooter" value="<?php echo $projectname; ?>" name="projectname" required></div>

            <div class="col-md-12"><label class="labels">Description</label><textarea class="form-control" name="projectdescription" placeholder="ex. This is an android game. I have tried to make user friendly UI."><?php echo $projectdescription; ?></textarea></div>


            <div class="col-md-6"><label class="labels">Start Date</label><input type="date" class="form-control" placeholder="name " value="<?php echo $pstartdate; ?>" name="pstartdate"></div>

            <div class="col-md-6"><label class="labels">End Date</label><input type="date" class="form-control" placeholder="e.g., 2018" value="<?php echo $penddate; ?>" name="penddate"></div>
          </div>
          <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Update Profile</button></div>
        </div>
    </form>


  </section>




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

$projectname = $_POST["projectname"];
$projectdescription = $_POST["projectdescription"];
$pstartdate = $_POST["pstartdate"];
$penddate = $_POST["penddate"];






if ($projectname  != null && $projectname != "") {

 

  //echo $rollno;
  $query2 = "INSERT INTO projects (projectname, projectdescription, pstartdate, penddate, user, password) VALUES ('$projectname', '$projectdescription', '$pstartdate', '$penddate', '$user', '$password')";

  $data2 = mysqli_query($conn, $query2);
  //}


  if ($data2) {
    //echo "heelo";
    // echo "<script>alert('Updation Successful')</script>";
    header('location:user.php');
  } else {
    echo "Failed to save";
  }
}



?>