<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carrental";

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

// Check if discount code is provided
if(isset($_POST["code"]) && $_POST["code"] != "") {
    $code = $_POST['code'];
    // Sanitize the discount code input
    $code = mysqli_real_escape_string($conn, $code);

    // Query to check if the discount code exists
    $sql = "SELECT * FROM codes WHERE code = '$code'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Check if any row is returned
        if(mysqli_num_rows($result) > 0) {
            // Discount code exists, do something
            // Fetch the discount details if needed
            $discount_row = mysqli_fetch_assoc($result);
            // Proceed with the booking process
        } else {
            // Discount code does not exist
            echo "Invalid discount code";
            exit();
        }
    } else {
        // Error occurred during query execution
        echo "Error: " . mysqli_error($conn);
        exit();
    }
}

// File upload
$target_dir = "uploads/DLpics";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0755, true); // creates the directory recursively
}

// Check if image file is uploaded
if(isset($_FILES["dlpic"]["tmp_name"]) && $_FILES["dlpic"]["tmp_name"] != "") {
    $target_file = $target_dir . "/" . basename($_FILES["dlpic"]["name"]);
    move_uploaded_file($_FILES["dlpic"]["tmp_name"], $target_file);
    echo "File uploaded successfully.";
} else {
    echo "No file uploaded.";
    exit();
}

// Function to generate random transaction ID
function generateTransactionID($length = 6) {
    $characters = '0123456789';
    $transactionID = '';
    for ($i = 0; $i < $length; $i++) {
        $transactionID .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $transactionID;
}

$transactionID = generateTransactionID();

// Prepare SQL statement to insert data into database
$sql = "INSERT INTO booking (pickuploc, returnloc, pickupdt, returndt, fullname, email, phone, dlpic, transaction_id, code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error: " . $conn->error); // Check for errors in prepare statement
}

$stmt->bind_param("ssssssisss", $pickuploc, $returnloc, $pickupdt, $returndt, $fullname, $email, $phone, $target_file, $transactionID, $code);

// Execute the query
if ($stmt->execute()) {
    // Close statement
    $stmt->close();
    // Close connection
    $conn->close();
    // Redirect to thank you page with transaction ID
    header("Location: thankyou.php?transaction_id=$transactionID");
    exit(); // Make sure no other code is executed after redirection
} else {
    echo "Error: " . $stmt->error; // Use $stmt->error instead of $conn->error
    // Close statement
    $stmt->close();
    // Close connection
    $conn->close();
}
?>
