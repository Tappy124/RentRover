<?php
// Include the PHP file with database connection and user authentication functions
require_once("server.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Call login_user() function to authenticate user
    $login_result = login_user($username, $password);

    // Handle login result
    if ($login_result === "Login successful") {
        // Redirect user to dashboard or any other page
        header("Location: dashboard.php");
        exit();
    } else {
        $error_message = "Login failed. " . $login_result;
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    
    <div class="container">
    <Form action=">
            <h1>Login</h1>
            <div class="input-box">
                
                <input type="text" placeholder="Username" required id="username">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                
                <input type="password" placeholder="Password" required id="password">
                <i class='bx bxs-lock-alt'></i>
            </div>

          
            <button type="button" class="btn" onclick="validatesLogin()">Login</button>
            
            <div class="register-link">
                <p>Don't have an account? <a href="reg.html">Register</a></p>
            </div>
     
    </div>
    <img src="assets/images/rentrover.png" alt="logo">
    <script src="assets/js/script.js"></script>
</body>
</html>
