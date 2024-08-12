<?php
//include_once 'db_connection.php'; 
// $db_conn = mysqli_connect("localhost", "root", "", "Apple");
// // Check connection
// if($db_conn === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
// error_reporting(E_ALL);
// ini_set('display_errors','Off');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page</title>
    <link rel="stylesheet" href="paypalSuccess.css">
    <link rel="stylesheet" href="../../Components/components.css">
</head>

<body>
    <custom-nav class="firstSection-navBar"></custom-nav>
    <div class="wrapper-payment">
        <div class="container">
            <h2 class="title">You're all set.</h2>
            <p class="invoice">Invoice No: <?php echo $_GET['invoiceNo']; ?></p>
            <p class="subtitle">We'll send confirmation and delivery updates to:</p>
            <div class="email-box">
                <!-- User mail -->
                <!-- <?php echo htmlspecialchars($email); ?> -->
                <p>user@gmail.com</p>
            </div>
            <br>
            <div class="payment-details" style="text-align: left;">
                <hr>
                <h4>Payment Information</h4>
                <p>Reference Number: <?php echo $_GET['invoiceNo']; ?></p>
                <p>Transaction ID: <?php echo $_GET['tID']; ?></p>
                <p>Paid Amount: <b>$<?php echo $_GET['pAmount']; ?></b></p>
                <p>Payment Status: <?php echo $_GET['pStatus']; ?></p>
                <h4>Product Information</h4>
                <p>Product id: <?php echo $_GET['proID']; ?></p>
                <p>Product Name: <?php echo $_GET['proName']; ?></p>
            </div>

        </div>
    </div>
    <br>
    <script src="https://kit.fontawesome.com/a79721002c.js" crossorigin="anonymous"></script>
    <script src="../../Components/customNav.js"></script>
</body>

</html>