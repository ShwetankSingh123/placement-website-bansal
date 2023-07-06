<?php
session_start();

?>





<?php

include("connection.php");
error_reporting(0);

$userprofile = $_SESSION['username'];
$profilepassword = $_SESSION['password'];


if($userprofile == true && $profilepassword == true){
    
}else{
    header('location:login.html');
}

$query = "SELECT * FROM profile where name='$userprofile' and password='$profilepassword'";


$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);

?>
<!--
<h2 align="center">DISPLAY ALL RECORDS</h2>
<table border = "3" cellspacing = "7" align="center" width="100%">
    <tr>
        <th width="10%">Roll Number</th>
        <th width="10%">Full Name</th>
        <th width="10%">Email</th>
        <th width="10%">Father Name</th>
        <th width="10%">Mother Name</th>
        <th width="10%">Phone Number</th>
        <th width="10%">course</th>
        <th width="10%">High School</th>
        <th width="10%">Inter School</th>
        <th width="10%">Diploma</th>
        <th width="10%">B.Tech</th>
        <th width="10%">Award</th>
        <th width="10%">Training</th>
        <th width="10%">Duration</th>
        <th width="10%">Place Of Training</th>
        <th width="10%">Operations</th>
    </tr>
-->    

<?php
if($total != 0){
    //echo "Table Has record";
    
    while($row = mysqli_fetch_assoc($data)){
       
            $roolno = $row['rollno'];
            $name=$row['name'];
            $email=$row['email'];
            $fname=$row['fname'];
            $mname=$row['mname'];
            $phonenumber=$row['phonenumber'];
            $course=$row['course'];  
            $highschool=$row['highSchool'];
            $inter=$row['Inter'];
            $diploma=$row['Diploma'];
            $btech=$row['BTech'];
            $award=$row['Award'];
            $training=$row['training'];
            $duration=$row['duration'];
            $placeoftraining=$row['placeoftraining'];
            //<a href='update_record.php?rollno=$row[rollno]'><input type='submit' value='edit' class='update'/></a></td>
    
        
        
    }

}else{
    echo "No record Found";
}

?>
    

<!--</table>
<br/>
<a href="logout.php">
<input type="submit" name="logout" value="log Out" style="background: blue; color:whitesmoke; height: 35px; width:100px; border-radius: 20px; font-size:18px; cursor:pointer"/>
</a>-->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>User Portal</title>
    <link rel="stylesheet" href="admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">




     <style>
      .vl {
        border-left: 3px solid green;
        height: 50px;
      }
      </style>
      
      

   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxs-bank'></i>
      <span class="logo_name">BIET, Lucknow</span>
    </div>
    <div class="col-md-3 border-right">
      <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img style="border-radius: 100%; border: 1px solid white; margin-left: 15%;" class="rounded-circle mt-5" width="150px" src="1671707464292.jpg"></div>
      
  </div>
      <ul class="nav-links">
        <li>
          <a href="User.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="personal.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Personal Info.</span>
          </a>
        </li>
        <li>
          <a href="education.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Education</span>
          </a>
        </li>


        <li>
          <a href="TC.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Training & Certifi..</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Enquiry</span>
          </a>
        </li>

        <!-- <li>
          <a href="User_Update.html">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Update / Add Info.</span>
          </a>
        </li> -->
        <li class="log_out">
          <a href="#">
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
            User Name gdfbjfhbjrhd
            <!-- yaha ek user ka naam show karna hai -->
    </nav>



    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <!-- <div class="right-side">
            <div class="box-topic">User Email</div>
            <div class="d-flex flex-column align-items-center text-center p-2 py-5"><span class="font-weight-italic"></span></div>

          </div> -->
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Current Company</div>
            <div class="card">TATA Cunceltency Service</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
            </div>
          </div>
          <!--<i class='bx bxs-cart-add cart two' ></i>-->
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Messages & Enquiry</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
            </div>
          </div>
          <i class='bx bx-message' ></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Your Information</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Student Name</li>
              <li><a href="#"><?php echo $name;?></a></li>

            </ul>
            <div class="vl"></div>

            <ul class="details">
            <li class="topic">E-mail</li>
            <li><a href="#"><?php echo $email;?></a></li>

          </ul>
          <div class="vl"></div>
          <ul class="details">
            <li class="topic">Placed</li>
            <li><a href="#">Delivered</a></li>

          </ul>
          <div class="vl"></div>
          <ul class="details">
            <li class="topic">Company</li>
            <li><a href="#">$204.98</a></li>

          </ul>
          <div class="vl"></div>
          <ul class="details">
            <li class="topic">Train & Cer</li>
            <li><a href="#">$204.98</a></li>

          </ul>
          <div class="vl"></div>
          <ul class="details">
            <li class="topic">Branch</li>
            <li><a href="#">$204.98</a></li>

          </ul>
          <div class="vl"></div>
          <ul class="details">
            <li class="topic">Roll no.</li>
            <li><a href="#">$204.98</a></li>

          </ul>
          <div class="vl"></div>
          </div>
          <!-- <div class="button">
            <a href="#">See All</a>
          </div> -->
        </div>
        
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>