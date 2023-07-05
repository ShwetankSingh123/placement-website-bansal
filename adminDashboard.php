<?php
session_start();

?>


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

</head>


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


$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);

?>
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
    

<?php
if($total != 0){
    //echo "Table Has record";
    
    while($row = mysqli_fetch_assoc($data)){
        echo "
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
        ";
        
    }

}else{
    echo "No record Found";
}

?>
    

</table>
<br/>
<a href="adminlogout.php">
<input type="submit" name="logout" value="log Out" style="background: blue; color:whitesmoke; height: 35px; width:100px; border-radius: 20px; font-size:18px; cursor:pointer"/>
</a>