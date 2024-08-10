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
                    <h2 id="item-name"><?php echo htmlspecialchars($_POST['name']) ?></h2>
                    <p><b>Chip: </b><span id="item-chip"><?php echo htmlspecialchars($_POST['chip']) ?></span></p>
                    <p><b>CPU: </b><span id="item-cpu"><?php echo htmlspecialchars($_POST['cpu']) ?></span></p>
                    <p><b>Capacity: </b><span id="item-capacity"><?php echo htmlspecialchars($_POST['capacity']) ?></span></p>
                    <p><b>Display: </b><span id="item-display"><?php echo htmlspecialchars($_POST['display']) ?></span></p>
                    <p><b>Camera: </b><span id="item-camera"><?php echo htmlspecialchars($_POST['camera']) ?></span></p>
                    <p><b>USB: </b><span id="item-usb"><?php echo htmlspecialchars($_POST['usb']) ?></span></p>
                    <p><b>Security: </b><span id="item-security"><?php echo htmlspecialchars($_POST['security']) ?></span></p>
                    <p><b>Speaker: </b><span id="item-speaker"><?php echo htmlspecialchars($_POST['speaker']) ?></span></p>
                    <p><b>Microphone: </b><span id="item-microphone"><?php echo htmlspecialchars($_POST['microphone']) ?></span></p>
                    <p><b>Wi-Fi: </b><span id="item-wifi"><?php echo htmlspecialchars($_POST['wifi']) ?></span></p>
                    <p><b>Height: </b><span id="item-height"><?php echo htmlspecialchars($_POST['height']) ?></span></p>
                    <p><b>Width: </b><span id="item-width"><?php echo htmlspecialchars($_POST['width']) ?></span></p>
                    <p><b>Weight: </b><span id="item-weight"><?php echo htmlspecialchars($_POST['weight']) ?></span></p>
                    <p class="price">Price: $<span id="item-price"><?php echo htmlspecialchars($_POST['price']) ?></span>.00</p>
                </div>
            </div>
            <div class="checkout-actions">
                <button class="btn-primary">Confirm Purchase</button>
            </div>
        </div>
    </div>
</body>

</html>