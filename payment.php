<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="assets/css/pay.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap">
   
</head>
<body>

<div class="container">

    <form action="pay.php" method="POST" id="paymentForm" onsubmit="return validateForm()">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <!-- Billing address fields -->
                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="full_name" placeholder="John Doe" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="email" placeholder="example@example.com" required>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address" placeholder="address" required>
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="city" placeholder="city" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" name="state" placeholder="state" required>
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" name="zip_code" placeholder="zipcode" required>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <!-- Payment fields -->
                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="assets/images/card.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name="card_name" placeholder="cardholder name" required>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="text" name="card_number" placeholder="card no." required>
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" name="exp_month" placeholder="month" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="text" name="exp_year" placeholder="year" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="cvv" placeholder="CVV" required>
                    </div>
                </div>

                <!-- Discount promotion code input field -->
                <div class="inputBox">
                    <span>Discount Code :</span>
                    <input type="text" name="discount_code" placeholder="Enter your discount code">
                </div>

            </div>

        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">

        <!-- Success message box -->
        <div class="message-box _success" id="successMessage" style="display: none;">
            <h2>Your payment was successful</h2>
            <p>Thank you for your payment. We will be in contact with more details shortly.</p>
        </div>

        <!-- Failure message box -->
        <div class="message-box _failed" id="failedMessage" style="display: none;">
            <h2>Your payment failed</h2>
            <p>Try again later.</p>
        </div>

    </form>

</div>

<script src="assets/js/pay.js"></script>



</body>
</html>
