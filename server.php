<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'carrental');

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    if (!$result) {
        die("Query failed: " . mysqli_error($db));
    }

    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = password_hash($password_1, PASSWORD_DEFAULT); //encrypt the password before saving in the database

        $query = "INSERT INTO users (username, email, password) 
                  VALUES('$username', '$email', '$password')";
        if (mysqli_query($db, $query)) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($db);
        }
    }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Username and password are required";
        header('location: login.php');
        exit();
    }

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($db, $query);

    if (!$result || mysqli_num_rows($result) == 0) {
        $_SESSION['error'] = "Username not found";
        header('location: login.php');
        exit();
    }

    $user = mysqli_fetch_assoc($result);
    
    if (password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";

        if ($user['isAdmin'] == 1) {
            header('location: admin.php');
            exit();
        } else {
            header('location: index.php');
            exit();
        }
    } else {
        $_SESSION['error'] = "Incorrect password";
        header('location: login.php');
        exit();
    }
}
?>