<?php
include '../config/dbConnection.php';

$DB = getDBConnection();
$collection = $DB->iPhone;

$data = $collection->find();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Components/components.css">
    <link rel="stylesheet" href="../../src/index.css">
    <link rel="stylesheet" href="./shop.css">
    <title>Explore iPhone</title>
</head>

<body>
    <custom-nav class="firstSection-navBar"></custom-nav>

    <div class="shop__wrapper">
        <div class="shop_header">
            <h1>Explore <span>iPhone</span></h1>
        </div>
        <div class="shop_content">
            <?php
            foreach ($data as $document) : ?>
                <div class='shop_container'>
                    <?php echo htmlspecialchars($document['iPhone']); ?>

                    <div class='shop-topImage'>
                        <img src='<?php echo htmlspecialchars($document['imgSrc']); ?>'>
                    </div>

                    <div class='shop-colors'>
                        <?php foreach ($document['color'] as $color) : ?>
                            <div style='background-color:<?php echo $color ?>'></div>
                        <?php endforeach; ?>
                    </div>

                    <div class='shop-spec'>
                        <div>
                            <span><?php echo htmlspecialchars($document['chip']); ?></span><br>
                            <?php echo htmlspecialchars($document['cpu']); ?> <br>
                            <?php echo htmlspecialchars($document['storage']); ?><br>
                        </div>

                        <div class='shop-spec-paragraph'>
                            <?php echo htmlspecialchars($document['gpu']); ?><br>
                            <?php echo htmlspecialchars($document['display']); ?><br>
                            <?php echo htmlspecialchars($document['glass']); ?><br>
                            <?php echo htmlspecialchars($document['NeuralEngine']); ?><br>
                            <?php echo htmlspecialchars($document['camera']); ?><br>
                            <?php echo htmlspecialchars($document['charginPort']); ?><br>
                            <?php echo htmlspecialchars($document['usb']); ?><br>
                            <?php echo htmlspecialchars($document['battery']); ?><br>
                            <?php echo htmlspecialchars($document['security']); ?><br>
                            <?php echo htmlspecialchars($document['signal']); ?><br>
                        </div>

                        <div>
                            $<?php echo htmlspecialchars($document['price']); ?>.00<br>
                        </div>
                    </div>

                    <form action="./iPhoneCheckout.php" method="POST">
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
                        <button type="submit" class='shopiPad_buyButton'>Buy</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a79721002c.js" crossorigin="anonymous"></script>
    <script src="../../Components/customNav.js"></script>
</body>

</html>