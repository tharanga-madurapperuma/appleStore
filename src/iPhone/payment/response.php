<?php
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

require 'config.php';

//Set database connection to store transaction data 

// $dbConfig = [
//     'host' => 'localhost',
//     'username' => 'root',
//     'password' => '',
//     'name' => 'Apple'
// ];

if (empty($_GET['paymentId']) || empty($_GET['PayerID'])) {
    throw new Exception('The response is missing the paymentId and PayerID');
}

$paymentId = $_GET['paymentId'];
$payment = Payment::get($paymentId, $apiContext);

$execution = new PaymentExecution();
$execution->setPayerId($_GET['PayerID']);

try {
    // Take the payment
    $payment->execute($execution, $apiContext);

    try {
        //$db = new mysqli($dbConfig['host'], $dbConfig['username'], $dbConfig['password'], $dbConfig['name']);
        //Set relevent database connection
        $payment = Payment::get($paymentId, $apiContext);

        $data = [
            'product_id' => $payment->transactions[0]->item_list->items[0]->sku,
            'transaction_id' => $payment->getId(),
            'payment_amount' => $payment->transactions[0]->amount->total,
            'currency_code' => $payment->transactions[0]->amount->currency,
            'payment_status' => $payment->getState(),
            'invoice_id' => $payment->transactions[0]->invoice_number,
            'product_name' => $payment->transactions[0]->item_list->items[0]->name,
			'description' => $payment->transactions[0]->description,
        ];

        if ($data['payment_status'] === 'approved' /* Also it should be checked whether the data is stored successfully inside the databse with an AND operator*/) {
            $invoiceNo=$data['invoice_id'];
            $tID=$data['transaction_id'];
            $pAmount=$data['payment_amount'];
            $pStatus=$data['payment_status'];
            $proID=$data['product_id'];
            $proName=$data['product_name'];

            /*Checking row id (insert_id) of last stored data of relevent table(transaction table) to pass it for the "PaypalSuccess.php" page. This id will be used to retrive and display data at the 
            "PaypalSuccess.php" */
			//$inserids =$db->insert_id;

            //Sending data to payment success page (Here PaypalSuccess.php)
            header("location:http://localhost/appleStore-main/src/payment/paypalSuccess.php?invoiceNo=$invoiceNo&tID=$tID&pAmount=$pAmount&pStatus=$pStatus&proID=$proID&proName=$proName");
            exit(1);
        } else {
            // Payment failed
			//header("location:http://localhost/paypal-rest-api/PaypalFailed.php");
            exit(1);
        }

    } catch (Exception $e) {
        // Failed to retrieve payment from PayPal
    }

} catch (Exception $e) {
    // Failed to take payment
}


//Add payment to database

/* @param array $data Payment data
 * @return int|bool ID of new payment or false if failed
 */
// function addPayment($data)
// {
//     global $db;

//     if (is_array($data)) {
// 		//'isdsssss' --- i - integer, d - double, s - string, b - BLOB
//         $stmt = $db->prepare('INSERT INTO `payments` (product_id,transaction_id, payment_amount,currency_code, payment_status, invoice_id, product_name, createdtime) VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
//         $stmt->bind_param(
//             'isdsssss',
//             $data['product_id'],
//             $data['transaction_id'],
//             $data['payment_amount'],
//             $data['currency_code'],
//             $data['payment_status'],
//             $data['invoice_id'],
//             $data['product_name'],
//             date('Y-m-d H:i:s')
//         );
//         $stmt->execute();
//         $stmt->close();
		
//         return $db->insert_id;
//     }

//     return false;
// }