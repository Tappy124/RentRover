<?php
// Database connection
$servername = "localhost"; // Change this to your database server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "carrental"; // Change this to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$userName = $_POST['username'];
$password1 = $_POST['password_1'];
$password2 = $_POST['password_2'];

// Check if form data is set
if (!isset($firstName, $lastName, $email, $userName, $password1, $password2)) {
    die("Error: All form fields must be filled.");
}

// Check if passwords match
if ($password1 !== $password2) {
    die("Error: Passwords do not match.");
}

// Prepare SQL statement to insert data into database
$sql = "INSERT INTO registration (firstname, lastname, email, username, password_1, password_2) VALUES (?, ?, ?, ?, ?, ?)";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error: " . $conn->error); // Check for errors in prepare statement
}

$stmt->bind_param("ssssss", $firstName, $lastName, $email, $userName, $password1, $password2);

// Execute the query
if ($stmt->execute()) {
    // Redirect to login page
    header("Location: login.php");
    exit();
} else {
    die("Error: " . $stmt->error);
}

// Close statement
$stmt->close();

// Close connection
$conn->close();
?>
