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

// File upload
$target_dir = "uploads/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0755, true); // creates the directory recursively
}

// Check if image file is uploaded
if(isset($_FILES["dlpic"]["tmp_name"]) && $_FILES["dlpic"]["tmp_name"] != "") {
    $target_file = $target_dir . basename($_FILES["dlpic"]["name"]);
    $check = getimagesize($_FILES["dlpic"]["tmp_name"]);
    if($check !== false) {
        move_uploaded_file($_FILES["dlpic"]["tmp_name"], $target_file);
        echo "File is an image - " . $check["mime"] . ".";
    } else {
        echo "File is not an image.";
        exit();
    }
} else {
    echo "No file uploaded.";
    exit();
}

// Prepare SQL statement to insert data into database
$sql = "INSERT INTO booking (pickuploc, returnloc, pickupdt, returndt, fullname, email, phone, dlpic) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error: " . $conn->error); // Check for errors in prepare statement
}

$stmt->bind_param("ssssssis", $pickuploc, $returnloc, $pickupdt, $returndt, $fullname, $email, $phone, $target_file);

// Execute the query
if ($stmt->execute()) {
    // Close statement
    $stmt->close();
    // Close connection
    $conn->close();
    // Redirect back to fleet page
    header("Location: thankyou.php");
    exit(); // Make sure no other code is executed after redirection
} else {
    echo "Error: " . $stmt->error; // Use $stmt->error instead of $conn->error
    // Close statement
    $stmt->close();
    // Close connection
    $conn->close();
}
?>
