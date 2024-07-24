<?php
include '../config/dbConnection.php';

$DB = getDBConnection();
$collection = $DB->watch;

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
    <title>Explore Watch</title>
</head>

<body>
    <custom-nav class="firstSection-navBar"></custom-nav>

    <div class="shop__wrapper">
        <div class="shop_header">
            <h1>Explore <span>Watch</span></h1>
        </div>
        <div class="shop_content">
            <?php
            foreach ($data as $document) : ?>
                <div class='shop_containerWatch'>

                    <div class='shop-topImage'>
                        <img src='<?php echo htmlspecialchars($document['imgSrc']); ?>'>
                    </div>

                    <div class='shop-spec'>
                        <div>
                            <?php echo htmlspecialchars($document['watch']); ?> <br>
                        </div>

                        <div class='shop-spec-paragraph'>
                            <?php echo htmlspecialchars($document['case']); ?> <br>
                            <?php echo htmlspecialchars($document['display']); ?> <br>
                            <?php echo htmlspecialchars($document['signal']); ?> <br>
                            <?php echo htmlspecialchars($document['processor']); ?> <br>
                            <?php echo htmlspecialchars($document['buttons']); ?> <br>
                            <?php echo htmlspecialchars($document['sensor']); ?> <br>
                            <?php echo htmlspecialchars($document['notifications']); ?> <br>
                            <?php echo htmlspecialchars($document['waterResist']); ?> <br>
                            <?php echo htmlspecialchars($document['lte']); ?> <br>
                            <?php echo htmlspecialchars($document['gps']); ?> <br>
                            <?php echo htmlspecialchars($document['speaker']); ?> <br>
                            <?php echo htmlspecialchars($document['capacity']); ?> <br>
                            <?php echo htmlspecialchars($document['chargingTime']); ?> <br>
                        </div>

                        <div>
                            $<?php echo htmlspecialchars($document['price']); ?>.00<br>
                        </div>
                    </div>

                    <form action="./watchCheckout.php" method="GET">
                        <input type="hidden" name="watch" value="<?php echo htmlspecialchars($document['watch']); ?>">
                        <input type="hidden" name="imgSrc" value="<?php echo htmlspecialchars($document['imgSrc']); ?>">
                        <input type="hidden" name="case" value="<?php echo htmlspecialchars(json_encode($document['case'])); ?>">
                        <input type="hidden" name="display" value="<?php echo htmlspecialchars($document['display']); ?>">
                        <input type="hidden" name="signal" value="<?php echo htmlspecialchars($document['signal']); ?>">
                        <input type="hidden" name="processor" value="<?php echo htmlspecialchars($document['processor']); ?>">
                        <input type="hidden" name="buttons" value="<?php echo htmlspecialchars($document['buttons']); ?>">
                        <input type="hidden" name="sensor" value="<?php echo htmlspecialchars($document['sensor']); ?>">
                        <input type="hidden" name="notifications" value="<?php echo htmlspecialchars($document['notifications']); ?>">
                        <input type="hidden" name="waterResist" value="<?php echo htmlspecialchars($document['waterResist']); ?>">
                        <input type="hidden" name="lte" value="<?php echo htmlspecialchars($document['lte']); ?>">
                        <input type="hidden" name="gps" value="<?php echo htmlspecialchars($document['gps']); ?>">
                        <input type="hidden" name="speaker" value="<?php echo htmlspecialchars($document['speaker']); ?>">
                        <input type="hidden" name="capacity" value="<?php echo htmlspecialchars($document['chargingTime']); ?>">
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