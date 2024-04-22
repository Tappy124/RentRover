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
$userName = $_POST['userName'];
$password = $_POST['password'];

// Prepare SQL statement to insert data into database
$sql = "INSERT INTO registration (firstname, lastname, email, username, password) VALUES (?, ?, ?, ?, ?)";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error: " . $conn->error); // Check for errors in prepare statement
}

$stmt->bind_param("sssss", $firstName, $lastName, $email, $userName, $password);

// Execute the query
if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error; // Use $stmt->error instead of $conn->error
}

// Close statement
$stmt->close();

// Close connection
$conn->close();
?>