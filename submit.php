<?php
    include("connection.php");

        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $phoneNumber = $_POST["phoneNumber"];
        $course = $_POST["course"];
        $rollno = $_POST["rollno"];

        $sql = "INSERT INTO profile (name, email, password, rollno, phonenumber, course) VALUES ('$name', '$email', '$password', '$rollno', '$phoneNumber', '$course')";

        $result = mysqli_query($conn, $sql);

        if(!$result){
            echo "Error :" .mysqli_error($conn);
            exit;
        }

        header('location:login.html');

        mysqli_close($conn);   
?>  