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
                <img src="" id="item-image" alt="Product Image">
                <div class="checkout-details">
                    <h2 id="item-watch"></h2>
                    <p><b>Case: </b><span id="item-case"></span></p>
                    <p><b>Display: </b><span id="item-display"></span></p>
                    <p><b>Signal: </b><span id="item-signal"></span></p>
                    <p><b>Processor: </b><span id="item-processor"></span></p>
                    <p><b>Buttons: </b><span id="item-buttons"></span></p>
                    <p><b>Sensor: </b><span id="item-sensor"></span></p>
                    <p><b>Nitifications: </b><span id="item-notifications"></span></p>
                    <p><b>Water Resist: </b><span id="item-waterResist"></span></p>
                    <p><b>LTE: </b><span id="item-lte"></span></p>
                    <p><b>GPS: </b><span id="item-gps"></span></p>
                    <p><b>Speaker: </b><span id="item-speaker"></span></p>
                    <p><b>Capacity: </b><span id="item-capacity"></span></p>
                    <p class="price">Price: $<span id="item-price"></span>.00</p>
                </div>
            </div>
            <div class="checkout-actions">
                <button class="btn-primary" onclick="paymentGateway()">Confirm Purchase</button>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
    <script>
        // Retrieve data from URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        document.getElementById('item-watch').textContent = urlParams.get('watch');
        document.getElementById('item-image').src = urlParams.get('imgSrc');
        document.getElementById('item-case').textContent = urlParams.get('case');
        document.getElementById('item-display').textContent = urlParams.get('display');
        document.getElementById('item-signal').textContent = urlParams.get('signal');
        document.getElementById('item-processor').textContent = urlParams.get('processor');
        document.getElementById('item-buttons').textContent = urlParams.get('buttons');
        document.getElementById('item-sensor').textContent = urlParams.get('sensor');
        document.getElementById('item-notifications').textContent = urlParams.get('notifications');
        document.getElementById('item-waterResist').textContent = urlParams.get('waterResist');
        document.getElementById('item-lte').textContent = urlParams.get('lte');
        document.getElementById('item-gps').textContent = urlParams.get('gps');
        document.getElementById('item-speaker').textContent = urlParams.get('speaker');
        document.getElementById('item-capacity').textContent = urlParams.get('capacity');
        document.getElementById('item-price').textContent = urlParams.get('price');
    </script>
</body>

</html>