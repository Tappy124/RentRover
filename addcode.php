<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'carrental');

    // Check connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve data from form
    $code = $_POST['code'];
    $discount = $_POST['discount'];

    // Prepare SQL query
    $query = "INSERT INTO codes (code, discount) VALUES ('$code', $discount)";

    // Execute query
    if (mysqli_query($db, $query)) {
        mysqli_close($db);
        header("Location: code.php"); // Redirect to promo codes page
        exit();
    } else {    
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }

    // Close database connection
    mysqli_close($db);
}
?>
