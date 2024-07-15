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
                    <h2 id="item-name">Macbook</h2>
                    <p><b>Chip: </b><span id="item-chip"></span></p>
                    <p><b>CPU: </b><span id="item-cpu"></span></p>
                    <p><b>Memory: </b><span id="item-memory"></span></p>
                    <p><b>GPU: </b><span id="item-gpu"></span></p>
                    <p><b>Storage: </b><span id="item-storage"></span></p>
                    <p><b>Neural Engine: </b><span id="item-neuralengine"></span></p>
                    <p><b>Display: </b><span id="item-display"></span></p>
                    <p><b>Camera: </b><span id="item-camera"></span></p>
                    <p><b>Charging Port: </b><span id="item-chargingport"></span></p>
                    <p><b>USB: </b><span id="item-usb"></span></p>
                    <p><b>External Display: </b><span id="item-exdisplay"></span></p>
                    <p><b>Keyboard: </b><span id="item-keyboard"></span></p>
                    <p><b>Trackpad: </b><span id="item-trackpad"></span></p>
                    <p><b>Power Adapter: </b><span id="item-poweradapter"></span></p>
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
        document.getElementById('item-image').src = urlParams.get('imgSrc');
        document.getElementById('item-chip').textContent = urlParams.get('chip');
        document.getElementById('item-cpu').textContent = urlParams.get('cpu');
        document.getElementById('item-memory').textContent = urlParams.get('memory');
        document.getElementById('item-gpu').textContent = urlParams.get('gpu');
        document.getElementById('item-storage').textContent = urlParams.get('storage');
        document.getElementById('item-neuralengine').textContent = urlParams.get('NeuralEngine');
        document.getElementById('item-display').textContent = urlParams.get('display');
        document.getElementById('item-camera').textContent = urlParams.get('camera');
        document.getElementById('item-chargingport').textContent = urlParams.get('charginPort');
        document.getElementById('item-usb').textContent = urlParams.get('usb');
        document.getElementById('item-exdisplay').textContent = urlParams.get('exDisplay');
        document.getElementById('item-keyboard').textContent = urlParams.get('keyboard');
        document.getElementById('item-trackpad').textContent = urlParams.get('trackpad');
        document.getElementById('item-poweradapter').textContent = urlParams.get('powerAdapter');
        document.getElementById('item-price').textContent = urlParams.get('price');

        // function paymentGateway() {
        //     var xhttp = new XMLHttpRequest();
        //     xhttp.open("GET", "payHereProcess.php", true);

        //     xhttp.onload = function() {
        //         if (xhttp.readyState === xhttp.DONE && xhttp.status === 200) {
        //             alert(xhttp.responseText);
        //             var obj = JSON.parse(xhttp.responseText);

        //             // Payment completed. It can be a successful failure.
        //             payhere.onCompleted = function onCompleted(orderId) {
        //                 console.log("Payment completed. OrderID:" + orderId);
        //                 // Note: validate the payment and show success or failure page to the customer
        //             };

        //             // Payment window closed
        //             payhere.onDismissed = function onDismissed() {
        //                 // Note: Prompt user to pay again or show an error page
        //                 console.log("Payment dismissed");
        //             };

        //             // Error occurred
        //             payhere.onError = function onError(error) {
        //                 // Note: show an error page
        //                 console.log("Error:" + error);
        //             };

        //             // Put the payment variables here
        //             var payment = {
        //                 "sandbox": true,
        //                 "merchant_id": "1227649", // Replace your Merchant ID
        //                 "return_url": "http://localhost:3000/src/shop/macCheckout.php", // Important
        //                 "cancel_url": "http://localhost:3000/src/shop/macCheckout.php", // Important
        //                 "notify_url": "http://sample.com/notify",
        //                 "order_id": obj["order_id"],
        //                 "items": "Door bell wireles",
        //                 "amount": obj["amount"],
        //                 "currency": obj["currency"],
        //                 "hash": obj["hash"], // *Replace with generated hash retrieved from backend
        //                 "first_name": "Saman",
        //                 "last_name": "Perera",
        //                 "email": "samanp@gmail.com",
        //                 "phone": "0771234567",
        //                 "address": "No.1, Galle Road",
        //                 "city": "Colombo",
        //                 "country": "Sri Lanka",
        //                 "delivery_address": "No. 46, Galle road, Kalutara South",
        //                 "delivery_city": "Kalutara",
        //                 "delivery_country": "Sri Lanka",
        //                 "custom_1": "",
        //                 "custom_2": ""
        //             };
        //             payhere.startPayment(payment);
        //         }
        //         // xhttp.send();
        //         //MTc4MDkzNjQ4NjE0NjYzOTcyMjMzMTI4OTU5MTMzNzk0MTYxNjg3
        //     };
        // }
    </script>
</body>

</html>