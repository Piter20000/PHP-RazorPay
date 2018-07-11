<?php

require_once ('RazorPay/config.php');

?>

<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <form action="change.php" method="POST">
        <!-- Note that the amount is in paise = 50 INR -->
        <script
            src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="<?php echo $razor_api_key; ?>"
            data-amount="500000"
            data-buttontext="Pay with Razorpay"
            data-name="RazorPay solution"
            data-description="Testing"
            data-image="https://your-awesome-site.com/your_logo.jpg"
            data-prefill.name="Piotr Murdzia"
            data-prefill.email="piotr.murdzia.data@gmail.com"
            data-theme.color="#F37254"></script>
        <input type="hidden" value="Hidden Element" name="hidden" />
        <input type="hidden" value="name" name="name" />
        <input type="hidden" value="data" name="data" />
        <input type="hidden" value="costam" name="jakies dane" />
    </form>
    <style>
        .razorpay-payment-button{
            color: #ffffff !important;
            background-color: #7266ba;
            border-color: #7266ba;
            font-size: 14px;
            padding: 10px;
        }
    </style>
</body>
</html>