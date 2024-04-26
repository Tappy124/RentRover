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
$pickuploc = $_POST['pickuploc'];
$returnloc = $_POST['returnloc'];
$pickupdt = $_POST['pickupdt'];
$returndt = $_POST['returndt'];
$fullname = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Prepare SQL statement to insert data into database
$sql = "INSERT INTO booking (pickuploc, returnloc, pickupdt, returndt, fullname, email, phone) VALUES (?, ?, ?, ?, ?, ?, ?)";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error: " . $conn->error); // Check for errors in prepare statement
}

$stmt->bind_param("ssssssi",$pickuploc, $returnloc, $pickupdt, $returndt, $fullname, $email, $phone);

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