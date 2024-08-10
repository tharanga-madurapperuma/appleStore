<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Components/components.css">
    <link rel="stylesheet" href="../../src/index.css">
    <link rel="stylesheet" href="./checkout.css">
    <title>Checkout Page</title>
</head>

<body>

    <div class="checkout-wrapper">
        <div class="checkout-header">
            <h1>Checkout</h1>
        </div>
        <div class="checkout-content">
            <div class="checkout-item">
                <img src="<?php echo htmlspecialchars($_POST['imgSrc']) ?>" id="item-image" alt="Product Image">
                <div class="checkout-details">
                    <h2 id="item-watch"><?php echo htmlspecialchars($_POST['watch']) ?></h2>
                    <p><b>Case: </b><span id="item-case"><?php echo htmlspecialchars($_POST['case']) ?></span></p>
                    <p><b>Display: </b><span id="item-display"><?php echo htmlspecialchars($_POST['display']) ?></span></p>
                    <p><b>Signal: </b><span id="item-signal"><?php echo htmlspecialchars($_POST['signal']) ?></span></p>
                    <p><b>Processor: </b><span id="item-processor"><?php echo htmlspecialchars($_POST['processor']) ?></span></p>
                    <p><b>Buttons: </b><span id="item-buttons"><?php echo htmlspecialchars($_POST['buttons']) ?></span></p>
                    <p><b>Sensor: </b><span id="item-sensor"><?php echo htmlspecialchars($_POST['sensor']) ?></span></p>
                    <p><b>Nitifications: </b><span id="item-notifications"><?php echo htmlspecialchars($_POST['notifications']) ?></span></p>
                    <p><b>Water Resist: </b><span id="item-waterResist"><?php echo htmlspecialchars($_POST['waterResist']) ?></span></p>
                    <p><b>LTE: </b><span id="item-lte"><?php echo htmlspecialchars($_POST['lte']) ?></span></p>
                    <p><b>GPS: </b><span id="item-gps"><?php echo htmlspecialchars($_POST['gps']) ?></span></p>
                    <p><b>Speaker: </b><span id="item-speaker"><?php echo htmlspecialchars($_POST['speaker']) ?></span></p>
                    <p><b>Capacity: </b><span id="item-capacity"><?php echo htmlspecialchars($_POST['capacity']) ?></span></p>
                    <p class="price">Price: $<span id="item-price"><?php echo htmlspecialchars($_POST['price']) ?></span>.00</p>
                </div>
            </div>
            <div class="checkout-actions">
                <form action="http://localhost/appleStore-main/src/payment/request.php" method="POST">
                    <input type="hidden" name="name" value="<?php echo htmlspecialchars($document['iPhone']); ?>">
                    <input type="hidden" name="imgSrc" value="<?php echo htmlspecialchars($document['imgSrc']); ?>">
                    <input type="hidden" name="color" value="<?php echo htmlspecialchars(json_encode($document['color'])); ?>">
                    <input type="hidden" name="chip" value="<?php echo htmlspecialchars($document['chip']); ?>">
                    <input type="hidden" name="cpu" value="<?php echo htmlspecialchars($document['cpu']); ?>">
                    <input type="hidden" name="storage" value="<?php echo htmlspecialchars($document['storage']); ?>">
                    <input type="hidden" name="gpu" value="<?php echo htmlspecialchars($document['gpu']); ?>">
                    <input type="hidden" name="display" value="<?php echo htmlspecialchars($document['display']); ?>">
                    <input type="hidden" name="glass" value="<?php echo htmlspecialchars($document['glass']); ?>">
                    <input type="hidden" name="NeuralEngine" value="<?php echo htmlspecialchars($document['NeuralEngine']); ?>">
                    <input type="hidden" name="camera" value="<?php echo htmlspecialchars($document['camera']); ?>">
                    <input type="hidden" name="charginPort" value="<?php echo htmlspecialchars($document['charginPort']); ?>">
                    <input type="hidden" name="usb" value="<?php echo htmlspecialchars($document['usb']); ?>">
                    <input type="hidden" name="battery" value="<?php echo htmlspecialchars($document['battery']); ?>">
                    <input type="hidden" name="security" value="<?php echo htmlspecialchars($document['security']); ?>">
                    <input type="hidden" name="signal" value="<?php echo htmlspecialchars($document['signal']); ?>">
                    <input type="hidden" name="price" value="<?php echo htmlspecialchars($document['price']); ?>">
                    <!-- <input type="hidden" name="amount" value="<?php echo $row['price']; ?>" > -->
                    <!-- Change values -->
                    <input type="hidden" name="item_number" value="A2848">
                    <input type="hidden" name="item_name" value="Apple Watch Series 10">
                    <input type="hidden" name="amount" value="799">
                    <!-- <input type="hidden" name="currency_code" value="USD" > -->
                    <button type="submit" class="btn-primary">Confirm Purchase</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>