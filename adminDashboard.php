<?php
session_start();

?>

<!--
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body{
            background: #d071fd;
        }
        table{
            background-color: white;
        }
        .update{
            background-color: blue;
            color: white;
            border-radius: 5px;
            height: 35px;
            width: 100px;
            font-size:18px
            
        }
    </style>

</head> -->


<?php

include("connection.php");
error_reporting(0);

//$userprofile = $_SESSION['username'];
//$profilepassword = $_SESSION['password'];


//if($userprofile == true && $profilepassword == true){

//}else{
// header('location:login.html');
//}

$query = "SELECT * FROM profile";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


$query1 = "SELECT COUNT(course) AS non_null_rows
FROM profile
WHERE course IS NOT NULL";
$data1 = mysqli_query($conn, $query1);
$result1 = mysqli_fetch_assoc($data1);
$count = $result1['non_null_rows'];


$query2 = "SELECT * FROM contactus";
$data2 = mysqli_query($conn, $query2);
$total2 = mysqli_num_rows($data2);


$query3 = "SELECT user FROM admin";
$data3 = mysqli_query($conn, $query3);
$result3 = mysqli_fetch_assoc($data3);



?>







<!--
<a href="adminlogout.php">
<input type="submit" name="logout" value="log Out" style="background: blue; color:whitesmoke; height: 35px; width:100px; border-radius: 20px; font-size:18px; cursor:pointer"/>
</a>-->


<!--echo "
        <tr>
            <td>".$row['rollno']."</td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['fname']."</td>
            <td>".$row['mname']."</td>
            <td>".$row['phonenumber']."</td>
            <td>".$row['course']."</td>  
            <td>".$row['highSchool']."</td>
            <td>".$row['Inter']."</td>
            <td>".$row['Diploma']."</td>
            <td>".$row['BTech']."</td>
            <td>".$row['Award']."</td>
            <td>".$row['training']."</td>
            <td>".$row['duration']."</td>
            <td>".$row['placeoftraining']."</td>
            <td><a href='Adminupdate_record.php?rollno=$row[rollno]'><input type='submit' value='edit' class='update'/></a></td>
        </tr>
        ";-->


<!-- #f3f3f3
            #009879-->
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Admin Portal</title>
    <link rel="stylesheet" href="css\newadmin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
            background-color: blue;
            color: white;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009098;
        }

        .update {
            background-color: blue;
            color: white;
            border-radius: 5px;
            height: 35px;
            width: 100px;
            font-size: 18px
        }

        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <?php include 'adminheader.php'; ?>
   
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Admin Dashboard</span>
            </div>

            <div class="profile-details">
                <!--   <img src="#" alt=""> --> <!-- change it later to image and remove the user icon-->
                <i class='bx bxs-user bx-lg'></i>
                <span class="admin_name"><?php echo $result3['user']; ?></span>
            </div>
        </nav>

        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Students</div>
                        <div class="number"><?php echo $total; ?></div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                        </div>
                    </div>
                    <!-- <i class='bx bx-cart-alt cart'></i> -->

                    <i class='bx bx-user bx-lg'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Placed Student</div>
                        <div class="number"><?php echo $count; ?></div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                        </div>
                    </div>
                    <!--  <i class='bx bxs-cart-add cart two' ></i> -->

                </div>

                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Messages & Enquiry</div>
                        <div class="number"><?php echo $total2; ?></div>
                        <div class="indicator">
                            <i class='bx bx-down-arrow-alt down'></i>
                        </div>
                    </div>
                    <i class='bx bx-message'></i>
                </div>
            </div>

            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Student Details</div>
                    <div class="sales-details">
                        <ul class="details">
                            <table class="styled-table">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>E-mail</th>
                                        <th>Roll No.</th>
                                        <th>Company</th>
                                        <th>Train & Cer</th>
                                        <th>Branch</th>
                                        <th>Roll no.</th>
                                        <th>High School</th>
                                        <th>Inter</th>
                                        <th>Diploma</th>
                                        <th>BTech</th>
                                        <th>Update Details</th>
                                    </tr>
                                </thead>
                                <?php if ($total != 0) {

                                    while ($row = mysqli_fetch_assoc($data)) {
                                        echo
                                        "<tbody>
              <tr>
                <td><a href='#'>" . $row['name'] . "</a></td>
                <td>" . $row['email'] . "</td>           
                <td>" . $row['phonenumber'] . "</td>
                <td>" . $row['course'] . "</td>  
                <td>" . $row['BTech'] . "</td>
                <td>" . $row['training'] . "</td>
                <td>" . $row['rollno'] . "</td>
                <td>" . $row['highSchool'] . "</td>
                <td>" . $row['Inter'] . "</td>
                <td>" . $row['Diploma'] . "</td>
                <td>" . $row['BTech'] . "</td>
                <td><a href='Adminupdate_record.php?rollno=$row[rollno]'><input type='submit' value='edit' class='update'/></a></td>
              </tr>
              ";
                                    }
                                }

                                ?>
                            </table>
                            <div class="button">
                                <a href="#">See All</a>
                            </div>
                    </div>

                </div>
            </div>
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



<!--<li><a href="#">Pending</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Delivered</a></li>
            <li><a href="#">Pending</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Delivered</a></li>
             <li><a href="#">Pending</a></li>
            <li><a href="#">Delivered</a></li>-->




<!--          echo "<li class='topic'>Student Name</li>";
            
            while($row = mysqli_fetch_assoc($data)){
              echo "<li><a href='#'>".$row['name']."</a></li>";
            } 
            
            echo "</ul>
              <ul class='details'>
           <li class='topic'>E-mail</li>";
            while($row = mysqli_fetch_assoc($data)){
               echo "<li><a href='#'>".$row['name']."</a></li>";
             } 
               
           
             
             echo"
           <li><a href='#'>".$row['email']."</a></li>
             
           
         </ul>
         <ul class='details'>
           <li class='topic'>Roll No.</li>
           <li><a href='#'>".$row['rollno']."</a></li>
           
         </ul>
         <ul class='details'>
           <li class='topic'>Company</li>
           <li><a href='#'>".$row['rollno']."</a></li>
          
         </ul>
         <ul class='details'>
           <li class='topic'>Train & Cer</li>
           <li><a href='#'>$204.98</a></li>
           
         </ul>
         <ul class='details'>
           <li class='topic'>Branch</li>
           <li><a href='#'>$204.98</a></li>
           
           
         </ul>
         <ul class='details'>
           <li class='topic'>Roll no.</li>
           <li><a href='#'>$204.98</a></li>
           
         </ul>
         </div>";-->





<?php
//if($total != 0){
//echo "Table Has record";

// while($row = mysqli_fetch_assoc($data)){
////  $name = $row['name'];
////  $email = $row['email'];
////  $fname = $row['fname'];
////  $mname = $row['mname'];
////  $phonenumber = $row['phonenumber'];
//// $course = $row['course'];

//  $highschool =$row['highSchool'];
// $inter = $row['Inter'];
// $diploma = $row['Diploma'];
//  $btech = $row['BTech'];
// $award = $row['Award'];
// $training = $row['training'];
// $duration = $row['duration'];
// $placeoftraining = $row['placeoftraining'];
//}

//}else{
//   echo "No record Found";
//}

?>