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
                    <h2 id="item-name">Macbook</h2>
                    <p><b>Chip: </b><span id="item-chip"><?php echo htmlspecialchars($_POST['chip']) ?></span></p>
                    <p><b>CPU: </b><span id="item-cpu"><?php echo htmlspecialchars($_POST['cpu']) ?></span></p>
                    <p><b>Memory: </b><span id="item-memory"><?php echo htmlspecialchars($_POST['memory']) ?></span></p>
                    <p><b>GPU: </b><span id="item-gpu"><?php echo htmlspecialchars($_POST['gpu']) ?></span></p>
                    <p><b>Storage: </b><span id="item-storage"><?php echo htmlspecialchars($_POST['storage']) ?></span></p>
                    <p><b>Neural Engine: </b><span id="item-neuralengine"><?php echo htmlspecialchars($_POST['NeuralEngine']) ?></span></p>
                    <p><b>Display: </b><span id="item-display"><?php echo htmlspecialchars($_POST['display']) ?></span></p>
                    <p><b>Camera: </b><span id="item-camera"><?php echo htmlspecialchars($_POST['camera']) ?></span></p>
                    <p><b>Charging Port: </b><span id="item-chargingport"><?php echo htmlspecialchars($_POST['charginPort']) ?></span></p>
                    <p><b>USB: </b><span id="item-usb"><?php echo htmlspecialchars($_POST['usb']) ?></span></p>
                    <p><b>External Display: </b><span id="item-exdisplay"><?php echo htmlspecialchars($_POST['exDisplay']) ?></span></p>
                    <p><b>Keyboard: </b><span id="item-keyboard"><?php echo htmlspecialchars($_POST['keyboard']) ?></span></p>
                    <p><b>Trackpad: </b><span id="item-trackpad"><?php echo htmlspecialchars($_POST['trackpad']) ?></span></p>
                    <p><b>Power Adapter: </b><span id="item-poweradapter"><?php echo htmlspecialchars($_POST['powerAdapter']) ?></span></p>
                    <p class="price">Price: $<span id="item-price"><?php echo htmlspecialchars($_POST['price']) ?></span>.00</p>
                </div>
            </div>
            <div class="checkout-actions">
                <button class="btn-primary">Confirm Purchase</button>
            </div>
        </div>
    </div>
    <script></script>

</body>

</html>