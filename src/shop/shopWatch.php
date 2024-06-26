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
            foreach ($data as $document) {
                echo "<div class='shop_containerWatch'>";

                echo "<div class='shop-topImage'>";
                echo "<img src ='" . htmlspecialchars($document['imgSrc']) . "'>";
                echo "</div>";

                echo "<div class='shop-spec'>";
                echo "<div>";
                echo htmlspecialchars($document['watch']) . "<br>";
                echo "</div>";

                echo "<div class='shop-spec-paragraph'>";
                echo htmlspecialchars($document['case']) . "<br>";
                echo htmlspecialchars($document['display']) . "<br>";
                echo htmlspecialchars($document['signal']) . "<br>";
                echo htmlspecialchars($document['processor']) . "<br>";
                echo htmlspecialchars($document['buttons']) . "<br>";
                echo htmlspecialchars($document['sensor']) . "<br>";
                echo htmlspecialchars($document['notifications']) . "<br>";
                echo htmlspecialchars($document['waterResist']) . "<br>";
                echo htmlspecialchars($document['lte']) . "<br>";
                echo htmlspecialchars($document['gps']) . "<br>";
                echo htmlspecialchars($document['speaker']) . "<br>";
                echo htmlspecialchars($document['capacity']) . "<br>";
                echo htmlspecialchars($document['chargingTime']) . "<br>";
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