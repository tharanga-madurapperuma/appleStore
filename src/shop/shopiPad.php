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
</head>

<body>
    <custom-nav class="firstSection-navBar"></custom-nav>

    <div class="shop__wrapper">
        <div class="shop_header">
            <h1>Explore <span>iPad</span></h1>
        </div>
        <div class="shop_content">
            <?php
            foreach ($data as $document) {
                echo "<div class='shop_container'>";
                echo htmlspecialchars($document['iPad']);

                echo "<div class='shop-topImage'>";
                echo "<img src ='" . htmlspecialchars($document['imgSrc']) . "'>";
                echo "</div>";

                echo "<div class='shop-colors'>";
                foreach ($document['color'] as $color) {
                    echo "<div style=" . "background-color:" . $color . "></div>";
                }
                echo "</div>";

                echo "<div class='shop-spec'>";
                echo "<div>";
                echo "<span>" . htmlspecialchars($document['chip']) . "</span>" . "<br>";
                echo htmlspecialchars($document['cpu']) . "<br>";
                echo htmlspecialchars($document['capacity']) . "<br>";
                echo "</div>";

                echo "<div class='shop-spec-paragraph'>";
                echo htmlspecialchars($document['display']) . "<br>";
                echo htmlspecialchars($document['camera']) . "<br>";
                echo htmlspecialchars($document['usb']) . "<br>";
                echo htmlspecialchars($document['security']) . "<br>";
                echo htmlspecialchars($document['speaker']) . "<br>";
                echo htmlspecialchars($document['microphone']) . "<br>";
                echo htmlspecialchars($document['wifi']) . "<br>";
                echo htmlspecialchars($document['height']) . "<br>";
                echo htmlspecialchars($document['width']) . "<br>";
                echo htmlspecialchars($document['weight']) . "<br>";
                echo "</div>";

                echo "<div>";
                echo "$" . htmlspecialchars($document['price']) . ".00<br>";
                echo "</div>";
                echo "</div>";

                echo "<button class='shopiPad_buyButton'>";
                echo "Buy";
                echo "</button>";

                echo "</div>";
            }
            ?>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a79721002c.js" crossorigin="anonymous"></script>
    <script src="../../Components/customNav.js"></script>
</body>

</html>