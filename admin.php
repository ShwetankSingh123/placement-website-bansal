<?php
session_start(); // Start the session

// Check if the admin is already logged in, redirect to admin dashboard
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: adminDashboard.php");
    exit;
}




// Check if the login form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the username and password are correct
    $username = 'admin@gmail.com'; // Replace with the actual admin username
    $password = 'zxcvbnm'; // Replace with the actual admin password
    
    if ($_POST['userName'] === $username && $_POST['userPassword'] === $password) {
        // Admin credentials are correct, create a session and redirect to admin dashboard
        $_SESSION['admin_logged_in'] = true;
        header("Location: adminDashboard.php");
        exit;
    } else {
        // Invalid admin credentials
        $error_message = "Invalid username or password!";
    }
}
?>

