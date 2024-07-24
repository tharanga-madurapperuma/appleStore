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
                    <p><b>Storage: </b><span id="item-storage"></span></p>
                    <p><b>GPU: </b><span id="item-gpu"></span></p>
                    <p><b>Display: </b><span id="item-display"></span></p>
                    <p><b>Glass: </b><span id="item-glass"></span></p>
                    <p><b>Neural Engine: </b><span id="item-NeuralEngine"></span></p>
                    <p><b>Camera: </b><span id="item-camera"></span></p>
                    <p><b>Charging Port: </b><span id="item-charginPort"></span></p>
                    <p><b>USB: </b><span id="item-usb"></span></p>
                    <p><b>Battery: </b><span id="item-battery"></span></p>
                    <p><b>Security: </b><span id="item-security"></span></p>
                    <p><b>Signal: </b><span id="item-signal"></span></p>
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
        document.getElementById('item-storage').textContent = urlParams.get('storage');
        document.getElementById('item-gpu').textContent = urlParams.get('gpu');
        document.getElementById('item-display').textContent = urlParams.get('display');
        document.getElementById('item-glass').textContent = urlParams.get('glass');
        document.getElementById('item-NeuralEngine').textContent = urlParams.get('NeuralEngine');
        document.getElementById('item-camera').textContent = urlParams.get('camera');
        document.getElementById('item-charginPort').textContent = urlParams.get('charginPort');
        document.getElementById('item-usb').textContent = urlParams.get('usb');
        document.getElementById('item-battery').textContent = urlParams.get('battery');
        document.getElementById('item-security').textContent = urlParams.get('security');
        document.getElementById('item-signal').textContent = urlParams.get('signal');
        document.getElementById('item-price').textContent = urlParams.get('price');
    </script>
</body>

</html>