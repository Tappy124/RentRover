<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'carrental');

    // Check connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the booking ID and status from the form
    $booking_id = $_POST['booking_id'];
    $status = $_POST['status'];

    // Update the status of the booking in the database
    $query = "UPDATE booking SET status = '$status' WHERE id = $booking_id";
    $result = mysqli_query($db, $query);

    // Check if update was successful
    if ($result) {
        // Redirect back to the admin panel
        header("Location: bookings.php");
        exit();
    } else {
        // Display an error message
        echo "Error updating record: " . mysqli_error($db);
    }

    // Close the database connection
    mysqli_close($db);
}
?>
