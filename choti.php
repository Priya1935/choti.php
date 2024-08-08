<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .payment-form {
            max-width: 600px;
            margin: auto;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .payment-options img {
            margin: 10px 5px;
            width: 50px;
            height: auto;
        }
        .submit-btn {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="payment-form">
    <h2>Payment Form</h2>
    <form action="process_payment.php" method="post">
        <div class="form-group">
            <label for="name">Name on Card:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="card-number">Card Number:</label>
            <input type="text" id="card-number" name="card_number" required>
        </div>
        <div class="form-group">
            <label for="expiry-date">Expiry Date (MM/YY):</label>
            <input type="text" id="expiry-date" name="expiry_date" required>
        </div>
        <div class="form-group">
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>
        </div>

        <div class="payment-options">
            <label>Payment Options:</label>
            <img src="phonepay_image.png" alt="Phone Pay">
            <img src="googlepay_image.png" alt="Google Pay">
            <img src="qrscan_image.png" alt="QR Scan">
        </div>

        <button type="submit" class="submit-btn">Pay Now</button>
    </form>
</div>

</body>
</html>
<?php
// process_payment.php

// Sample processing code (replace with actual payment gateway integration)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $cardNumber = htmlspecialchars($_POST['card_number']);
    $expiryDate = htmlspecialchars($_POST['expiry_date']);
    $cvv = htmlspecialchars($_POST['cvv']);

    // Validate and process payment information here using a payment gateway API
    // For example, using Stripe or PayPal APIs

    // Redirect or display a message based on payment result
    echo "Payment processed for $name. Card Number: $cardNumber (this is just a placeholder).";
} else {
    echo "Invalid request method.";
}
?>
