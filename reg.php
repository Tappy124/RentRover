<?php include('server.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/login.css">

</head>
<body>
    <div class="container">
        <form action="server.php" method="post">
            <?php include('errors.php'); ?>
            <h1>Register</h1>
            
            <div class="input-box">
                <input type="text" placeholder="First Name" required name="firstName">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Last Name" required name="lastName">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" value="" placeholder="Email"><?php echo $email; ?>

                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="text" name="username" value="" placeholder="Username"><?php echo $username; ?>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password"  name="password_1" placeholder="Password">

                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password_2" placeholder="Confirm password">
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" class="btn" name="reg_user">Sign Up</button>
            
            <div class="login-link">
                <p>Already have an account? <a href="login.html">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>