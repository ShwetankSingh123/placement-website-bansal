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
  $query3 = "SELECT * FROM training where name='$userprofile' and password='$profilepassword'";
  $data3 = mysqli_query($conn, $query3);
  $total3 = mysqli_num_rows($data3);
  if ($total3 != 0) {
    while ($row = mysqli_fetch_assoc($data)) {
      $award = $row['Award'];
      $training = $row['trainingprogram'];
      $trainingorganisation = $row['trainingorganisation'];
      $startdate = $row['startdate'];
      $enddate = $row['enddate'];
      $location = $row['location'];
      $description = $row['description'];
      $trainingCertificate = $row['trainingCertificate'];
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
        <span class="dashboard">Student Portal</span>
      </div>

      <div class="profile-details">
      <?php echo $user;?>
        <!-- yaha ek user ka naam show karna hai -->
    </nav>


    <form method="post" action="#" enctype="multipart/form-data">
      <div class="home-content">
        <div class="container rounded bg-white mt-5 mb-5">
          <div class="row">
            <h2 style="color:green">Training & Certification</h2>
            <div style="width:40%;">
              <!--  -->
              <div class="">
                <div class="col-lg-12">
                  <div id="row">
                    <div class="input-group m-3">
                      <div class="input-group-prepend">
                        <button class="btn btn-success size" id="DeleteRow" type="button">
                          Delete
                        </button>
                      </div>
                      <div>
                        <label> Training Program</label>
                        <input type="text" class="form-control m-input" value="<?php echo $training; ?>" name="trainingprogram">
                        <label> Organization</label>
                        <input type="text" class="form-control m-input" value="<?php echo $trainingorganisation; ?>" name="trainingorganisation">

                        <label> location</label>
                        <input type="text" class="form-control m-input" value="<?php echo $location; ?>" name="location">
                        <br>
                        <label> Start Date</label>
                        <input type="date" class="form-control m-input" placeholder="Start Date" value="<?php echo $startdate; ?>" name="startdate">
                        <br>
                        <label> End Date</label>
                        <input type="date" class="form-control m-input" placeholder="End Date" value="<?php echo $enddate; ?>" name="enddate">
                        <br>
                        <textarea name="description" id="" cols="39" rows="5" placeholder="Description"><?php echo $training; ?></textarea><br>
                        <label>Certificate file</label>
                        <input type="file" class="form-control m-input" name="trainingcertificate">
                      </div>

                    </div>
                  </div>

                  <div id="newinput"></div>
                  <button id="rowAdder" type="button" class="btn btn-dark">
                    <span class="bi bi-plus-square-dotted">
                    </span> ADD
                  </button>
                </div>
              </div>
              <!--  -->
            </div>
          </div>
        </div>
        <script type="text/javascript">
          $("#rowAdder").click(function() {
            newRowAdd =
              '<div id="row"> <div class="input-group m-3">' +
              '<div class="input-group-prepend">' +
              '<button style="width:80px; height:40px" class="btn btn-success" id="DeleteRow" type="button">' +
              'Delete</button> </div> <br/> ' +
              '<div>' +
              ' <label> Training Program</label>' +
              ' <input type="text" class="form-control m-input" value="<?php echo $training; ?>" name="trainingprogram">' +
              '<label> Organization</label>' +
              '<input type="text" class="form-control m-input" value="<?php echo $trainingorganisation; ?>" name="trainingorganisation">' +
              ' <label> location</label>' +

              ' <input type="text" class="form-control m-input" value="<?php echo $location; ?>" name="location">' +
              ' <br>' +
              '<label> Start Date</label>' +
              ' <input type="date" class="form-control m-input" placeholder="Start Date" value="<?php echo $startdate; ?>" name="startdate">' +
              ' <br>' +
              '<label> End Date</label>' +
              ' <input type="date" class="form-control m-input" placeholder="End Date" value="<?php echo $enddate; ?>" name="enddate">' +
              ' <br>' +
              ' <textarea name="description" id="" cols="39" rows="5" placeholder="Description"></textarea><br>' +
              ' <label>Certificate file</label>' +
              ' <input type="file" class="form-control m-input" name="trainingcertificate">' +
              ' </div>' +


              '</div> </div>';

            $('#newinput').append(newRowAdd);
          });
          $("body").on("click", "#DeleteRow", function() {
            $(this).parents("#row").remove();
          })
        </script>
      </div>

      </div>

      </div>
      <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Update Profile</button></div>
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

$trainingprogram = $_POST["trainingprogram"];
$trainingorganisation = $_POST["trainingorganisation"];
$startdate = $_POST["startdate"];
$enddate = $_POST["enddate"];
$location = $_POST["location"];
$description = $_POST["description"];





if ($trainingprogram  != null && $trainingprogram != "") {

  $filename = $_FILES["trainingcertificate"]["name"];
  $tempname = $_FILES["trainingcertificate"]["tmp_name"];

  $folder = "trainingcertificate/" . $filename;


  if ($filename != null && $filename != "") {
    move_uploaded_file($tempname, $folder);

    //$query1 = "UPDATE profile SET trainingCertificate='$folder'";
    //$query1 = "INSERT INTO training (trainingCertificate) VALUES ('$folder')";
    //$data1 = mysqli_query($conn, $query1);
    //echo $data2;



    //echo $rollno;
    $query2 = "INSERT INTO training (name, password, trainingprogram, trainingorganisation, startdate, enddate, location, description, trainingCertificate) VALUES ('$user', '$password', '$trainingprogram', '$trainingorganisation', '$startdate', '$enddate', '$location', '$description', '$folder')";

    $data2 = mysqli_query($conn, $query2);
  }


  if ($data2) {
    //echo "heelo";
    // echo "<script>alert('Updation Successful')</script>";
    header('location:TC.php');
  } else {
    echo "Failed to save";
  }
}



?>