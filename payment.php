<?php
// Retrieve car model and price from URL parameters
$model = $_GET['model'] ?? '';
$price = $_GET['price'] ?? '';

// Validate if model and price are set
if (!$model || !$price) {
    // Redirect back to fleet page if parameters are missing
    header("Location: fleet.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
</head>

<body>
    <h2>Payment Page</h2>
    <p>Car Model: <?php echo $model; ?></p>
    <p>Price per Day: <?php echo $price; ?></p>

    <form action="process_payment.php" method="post">
        <label for="payment_method">Choose Payment Method:</label>
        <select id="payment_method" name="payment_method">
            <option value="credit_card">Credit Card</option>
            <option value="paypal">PayPal</option>
            <!-- Add more payment methods as needed -->
        </select>
        <br>
        <input type="submit" value="Proceed to Payment">
    </form>
</body>

</html>
    