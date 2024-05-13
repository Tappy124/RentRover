<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
</head>
<body>
    <h1>Thank You for Booking!</h1>
    <p>Your transaction ID is: <?php echo $_GET['transaction_id']; ?></p>
    <p>We will get in touch with you shortly.</p>
    <a href="payment.php">Proceed to payment </a><br>
    <a href="index.php">Back to Home </a>
    
</body>
</html>
