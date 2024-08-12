<?php
include '../config/dbConnection.php';

$DB = getDBConnection();
$collection = $DB->iPad;

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
    <title>Explore iPad</title>
    <base target="_blank">
</head>

<body>
    <custom-nav class="firstSection-navBar"></custom-nav>

    <div class="shop__wrapper">
        <div class="shop_header">
            <h1>Explore <span>iPad</span></h1>
        </div>
        <div class="shop_content">
            <?php
            foreach ($data as $document) : ?>
                <div class='shop_container'>
                    <?php echo htmlspecialchars($document['iPad']); ?>

                    <div class='shop-topImage'>
                        <img src='<?php echo htmlspecialchars($document['imgSrc']); ?>'>
                    </div>

                    <div class='shop-colors'>
                        <?php foreach ($document['color'] as $color) : ?>
                            <div style='background-color:<?php echo $color; ?>'></div>
                        <?php endforeach; ?>
                    </div>

                    <div class='shop-spec'>
                        <div>
                            <span><?php echo htmlspecialchars($document['chip']); ?></span><br>
                            <?php echo htmlspecialchars($document['cpu']); ?> <br>
                            <?php echo htmlspecialchars($document['capacity']); ?><br>
                        </div>

                        <div class='shop-spec-paragraph'>
                            <?php echo htmlspecialchars($document['display']); ?><br>
                            <?php echo htmlspecialchars($document['camera']); ?><br>
                            <?php echo htmlspecialchars($document['usb']); ?><br>
                            <?php echo htmlspecialchars($document['security']); ?><br>
                            <?php echo htmlspecialchars($document['speaker']); ?><br>
                            <?php echo htmlspecialchars($document['microphone']); ?><br>
                            <?php echo htmlspecialchars($document['wifi']); ?><br>
                            <?php echo htmlspecialchars($document['height']); ?><br>
                            <?php echo htmlspecialchars($document['width']); ?><br>
                            <?php echo htmlspecialchars($document['weight']); ?><br>
                        </div>

                        <div>
                            $<?php echo htmlspecialchars($document['price']); ?>.00<br>
                        </div>
                    </div>

                    <form action="./iPadCheckout.php" method="POST">
                        <input type="hidden" name="name" value="<?php echo htmlspecialchars($document['iPad']); ?>">
                        <input type="hidden" name="imgSrc" value="<?php echo htmlspecialchars($document['imgSrc']); ?>">
                        <input type="hidden" name="color" value="<?php echo htmlspecialchars(json_encode($document['color'])); ?>">
                        <input type="hidden" name="chip" value="<?php echo htmlspecialchars($document['chip']); ?>">
                        <input type="hidden" name="cpu" value="<?php echo htmlspecialchars($document['cpu']); ?>">
                        <input type="hidden" name="capacity" value="<?php echo htmlspecialchars($document['capacity']); ?>">
                        <input type="hidden" name="display" value="<?php echo htmlspecialchars($document['display']); ?>">
                        <input type="hidden" name="camera" value="<?php echo htmlspecialchars($document['camera']); ?>">
                        <input type="hidden" name="usb" value="<?php echo htmlspecialchars($document['usb']); ?>">
                        <input type="hidden" name="security" value="<?php echo htmlspecialchars($document['security']); ?>">
                        <input type="hidden" name="speaker" value="<?php echo htmlspecialchars($document['speaker']); ?>">
                        <input type="hidden" name="microphone" value="<?php echo htmlspecialchars($document['microphone']); ?>">
                        <input type="hidden" name="wifi" value="<?php echo htmlspecialchars($document['wifi']); ?>">
                        <input type="hidden" name="height" value="<?php echo htmlspecialchars($document['height']); ?>">
                        <input type="hidden" name="width" value="<?php echo htmlspecialchars($document['width']); ?>">
                        <input type="hidden" name="weight" value="<?php echo htmlspecialchars($document['weight']); ?>">
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