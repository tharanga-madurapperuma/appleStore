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
                    <h2 id="item-name"></h2>
                    <p><b>Chip: </b><span id="item-chip"></span></p>
                    <p><b>CPU: </b><span id="item-cpu"></span></p>
                    <p><b>Capacity: </b><span id="item-capacity"></span></p>
                    <p><b>Display: </b><span id="item-display"></span></p>
                    <p><b>Camera: </b><span id="item-camera"></span></p>
                    <p><b>USB: </b><span id="item-usb"></span></p>
                    <p><b>Security: </b><span id="item-security"></span></p>
                    <p><b>Speaker: </b><span id="item-speaker"></span></p>
                    <p><b>Microphone: </b><span id="item-microphone"></span></p>
                    <p><b>Wi-Fi: </b><span id="item-wifi"></span></p>
                    <p><b>Height: </b><span id="item-height"></span></p>
                    <p><b>Width: </b><span id="item-width"></span></p>
                    <p><b>Weight: </b><span id="item-weight"></span></p>
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
        document.getElementById('item-name').textContent = urlParams.get('name');
        document.getElementById('item-image').src = urlParams.get('imgSrc');
        document.getElementById('item-chip').textContent = urlParams.get('chip');
        document.getElementById('item-cpu').textContent = urlParams.get('cpu');
        document.getElementById('item-capacity').textContent = urlParams.get('capacity');
        document.getElementById('item-display').textContent = urlParams.get('display');
        document.getElementById('item-camera').textContent = urlParams.get('camera');
        document.getElementById('item-usb').textContent = urlParams.get('usb');
        document.getElementById('item-security').textContent = urlParams.get('security');
        document.getElementById('item-speaker').textContent = urlParams.get('speaker');
        document.getElementById('item-microphone').textContent = urlParams.get('microphone');
        document.getElementById('item-wifi').textContent = urlParams.get('wifi');
        document.getElementById('item-height').textContent = urlParams.get('height');
        document.getElementById('item-width').textContent = urlParams.get('width');
        document.getElementById('item-weight').textContent = urlParams.get('weight');
        document.getElementById('item-price').textContent = urlParams.get('price');
    </script>
</body>

</html>