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
</head>
<body>
    <div class="container">
        <h1 class="title">You're all set.</h1>
        <p class="subtitile">Invoice No: <?php echo $_GET['invoiceNo'];?></p>
        <p class="subtitle">We'll send confirmation and delivery updates to:</p>
        <div class="email-box">
            <!-- User mail -->
            <!-- <?php echo htmlspecialchars($email); ?> -->
            <p>user@gmail.com</p>
        </div>
        <br>
        <div style="text-align: left;">
        <hr>
            <h4>Payment Information</h4>
            <p>Reference Number: <?php echo $_GET['invoiceNo'];?></p>
            <p>Transaction ID: <?php echo $_GET['tID']; ?></p>
            <p>Paid Amount: $<?php echo $_GET['pAmount']; ?></p>
            <p>Payment Status: <?php echo $_GET['pStatus']; ?></p>
            <h4>Product Information</h4>
            <p>Product id: <?php echo $_GET['proID']; ?></p>
            <p>Product Name: <?php echo $_GET['proName']; ?></p>
        </div>

    </div>
    <br>

</body>
</html>