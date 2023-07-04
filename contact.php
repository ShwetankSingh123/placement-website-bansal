<?php
    include("connection.php");

        $name = $_POST["name"];
        $email = $_POST["email"];
        $number = $_POST["number"];
        
        $course = $_POST["courses"];
        $gender = $_POST["gender"];

        $sql = "INSERT INTO contactus (name, email, number, course, gender) VALUES ('$name', '$email', '$number', '$course', '$gender')";

        $result = mysqli_query($conn, $sql);

        if(!$result){
            echo "Error :" .mysqli_error($conn);
            exit;
        }

        mysqli_close($conn);   
?>  