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