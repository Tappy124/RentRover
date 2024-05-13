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
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip_code = $_POST['zip_code'];
$card_name = $_POST['card_name'];
$card_number = $_POST['card_number'];
$exp_month = $_POST['exp_month'];
$exp_year = $_POST['exp_year'];
$cvv = $_POST['cvv'];
$discount_code = $_POST['discount_code'];

// Function to generate random transaction ID
function generateTransactionID($length = 6) {
    $characters = '0123456789';
    $transactionID = '';
    for ($i = 0; $i < $length; $i++) {
        $transactionID .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $transactionID;
}

$transaction_id = generateTransactionID();

// Prepare SQL statement to insert data into payment table
$sql = "INSERT INTO payment (full_name, email, address, city, state, zip_code, card_name, card_number, exp_month, exp_year, cvv, discount_code, transaction_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error: " . $conn->error); // Check for errors in prepare statement
}

$stmt->bind_param("sssssssssssss", $full_name, $email, $address, $city, $state, $zip_code, $card_name, $card_number, $exp_month, $exp_year, $cvv, $discount_code, $transaction_id);

// Execute the query
if ($stmt->execute()) {
    // Close statement
    $stmt->close();
    // Close connection
    $conn->close();
    // Redirect to thank you page or any other page
    header("Location: thankyou.php?transaction_id=$transaction_id");
    exit(); // Make sure no other code is executed after redirection
} else {
    echo "Error: " . $stmt->error; // Use $stmt->error instead of $conn->error
    // Close statement
    $stmt->close();
    // Close connection
    $conn->close();
}
?>
