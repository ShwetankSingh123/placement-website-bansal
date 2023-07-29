<?php

session_start();

//echo $_SESSION['rollno'];
//$image=$_COOKIE["userimage"];
//print_r($_GET["userimage"]);

//$image = $_GET["userimage"];
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
    $about = $row['about'];
    $highschool = $row['highSchool'];
    $inter = $row['Inter'];
    $address = $row['address'];
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
  <title>Admin Portal</title>
  <link rel="stylesheet" href="admin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
  .vl {
    border-left: 3px solid green;
    height: 20px;
  }
</style>

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
        <?php echo $name; ?>

      </div>
    </nav>



    <div class="home-content">
      <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
          <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="<?php echo $image; ?>"><span class="font-weight-bold"><?php echo $name; ?></span><span class="text-black-50"><?php echo $email; ?></span><span> </span></div>

          </div>
          <div class="col-md-5 border-right">
            <div class="p-3 py-5">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right">Personal Information</h4>
              </div>
              <form method="post" action="#" enctype="multipart/form-data">
                <div class="row mt-2">
                  <!--<div class="col-md-6"><label class="labels">Full Name</label><input type="text" class="form-control" placeholder="first name" name="name" value=""></div>-->

                  <div class="col-md-6"><label class="labels">E-mail</label><input type="text" class="form-control" value="<?php echo $email; ?>" placeholder="E-amail" name="email"></div>
                  <div class="col-md-6"><label class="labels">Roll Number</label><input type="text" class="form-control" value="<?php echo $rollno; ?>" placeholder="Roll No." name="roll No."></div>
                  <!-- <div class="col-md-6"><label class="labels">Branch</label><input type="text" class="form-control" placeholder="Branch"></div> -->
                  <div class="col-md-6">
                    <label class="labels">Branch</label>
                    <select class="form-control" name="branch" value="<?php echo $branch; ?>">
                      <option value="" selected>Branch</option>

                      <option value="computer science" <?php if ($branch == 'computer science') {
                                                          echo "selected";
                                                        } ?>>COMPUTER SCIENCE</option>
                      <option value="civil" <?php if ($branch == 'civil') {
                                              echo "selected";
                                            } ?>>CIVIL</option>
                      <option value="biotechnology" <?php if ($branch == 'biotechnology') {
                                                      echo "selected";
                                                    } ?>>BIOTECHNOLOGY</option>
                      <option value="mba" <?php if ($branch == 'mba') {
                                            echo "selected";
                                          } ?>>MECHENICAL</option>
                    </select>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-12"><label class="labels">Phone Number</label><input type="text" class="form-control" placeholder="enter phone number" value="<?php echo $phonenumber; ?>"></div>
                  <br><br>
                  <div class="col-md-12"><label class="labels">Adress</label><input type="text" class="form-control" placeholder="address" value="<?php echo $address; ?>" name="address"></div>
                  <br><br>
                  <div class="col-md-12"><label class="labels">Change Profile Picture</label><input type="file" class="form-control" name="stdimage" value="<?php echo $image; ?>"></div>
                </div><br>
                <div class="col-md-12"><label class="labels">About</label><textarea class="form-control" name="about"><?php echo $about;?></textarea></div>

                <div class="mt-5 text-center"><input class="btn btn-primary profile-button" type="submit" value="Update Profile"></div>
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

$email = $_POST["email"];
$branch = $_POST["branch"];
$about = $_POST["about"];
$address = $_POST["address"];

//echo $address;
//echo $email;


if ($email  != null && $email != "" && $about !="" && $about!=null && $address != null && $address != ""){

  $filename = $_FILES["stdimage"]["name"];
  $tempname = $_FILES["stdimage"]["tmp_name"];

  $folder = "images/" . $filename;
  //echo $tempname;
  //echo $folder;

  if ($filename != null && $filename != "") {
    move_uploaded_file($tempname, $folder);

    $query1 = "UPDATE profile SET image='$folder' WHERE rollno = $rollno";

    $data2 = mysqli_query($conn, $query1);
    //echo $data2;
  }


  //echo $rollno;



  $query3 = "UPDATE profile SET email='$email',branch='$branch',about='$about', address ='$address' WHERE rollno = $rollno";
  $data3 = mysqli_query($conn, $query3);


  if ($data3) {
    //echo "heelo";
    // echo "<script>alert('Updation Successful')</script>";
    header('location:personal.php');
?>
    <!-- <meta http-equiv="refresh" content="3; url=http://localhost/display.php"></meta>-->
<?php
  } else {
    echo "Failed to save";
  }
}



?>