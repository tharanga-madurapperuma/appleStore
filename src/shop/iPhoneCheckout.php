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
                    <p><b>Storage: </b><span id="item-storage"><?php echo htmlspecialchars($_POST['storage']) ?></span></p>
                    <p><b>GPU: </b><span id="item-gpu"><?php echo htmlspecialchars($_POST['gpu']) ?></span></p>
                    <p><b>Display: </b><span id="item-display"><?php echo htmlspecialchars($_POST['display']) ?></span></p>
                    <p><b>Glass: </b><span id="item-glass"><?php echo htmlspecialchars($_POST['glass']) ?></span></p>
                    <p><b>Neural Engine: </b><span id="item-NeuralEngine"><?php echo htmlspecialchars($_POST['NeuralEngine']) ?></span></p>
                    <p><b>Camera: </b><span id="item-camera"><?php echo htmlspecialchars($_POST['camera']) ?></span></p>
                    <p><b>Charging Port: </b><span id="item-charginPort"><?php echo htmlspecialchars($_POST['charginPort']) ?></span></p>
                    <p><b>USB: </b><span id="item-usb"><?php echo htmlspecialchars($_POST['usb']) ?></span></p>
                    <p><b>Battery: </b><span id="item-battery"><?php echo htmlspecialchars($_POST['battery']) ?></span></p>
                    <p><b>Security: </b><span id="item-security"><?php echo htmlspecialchars($_POST['security']) ?></span></p>
                    <p><b>Signal: </b><span id="item-signal"><?php echo htmlspecialchars($_POST['signal']) ?></span></p>
                    <p class="price">Price: $<span id="item-price"><?php echo htmlspecialchars($_POST['price']) ?></span>.00</p>
                </div>
            </div>
            <div class="checkout-actions">
                <form action="../payment/request.php" method="POST">
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
                    <input type="hidden" name="item_number" value="A2846">
                    <input type="hidden" name="item_name" value="iPhone 15 Pro">
                    <input type="hidden" name="amount" value="999">
                    <!-- <input type="hidden" name="currency_code" value="USD" > -->
                    <button type="submit" class="btn-primary">Confirm Purchase</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>