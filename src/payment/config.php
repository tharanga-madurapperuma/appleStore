<?php

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

require './autoload.php';

// For test payments we want to enable the sandbox mode. If you want to put live
// payments through then this setting needs changing to `false`.
$enableSandbox = true;

// PayPal settings. Change these to your account details and the relevant URLs
// for your site.
$paypalConfig = [
    'client_id' => 'AVbue3o-uvr2gjtiew-xd-aDyyAKRzhWKBk9MyynXuBqhhWQil4BZJyPlJmmqIoHd_YjuZAe152WW88y',
    'client_secret' => 'EJyH-pcXDFwz2o95rsyMbhTw-WfB8fHREuh-6PNGRcgYYNT6U02Kd7SWiamgwAlEtKmZIHL1Bh4dJjSG',
    'return_url' => 'http://localhost/appleStore/src/payment/response.php',
    'cancel_url' => 'http://localhost/appleStore/src/payment/payment-cancelled.html'
];

// Database settings. Change these for your database configuration.
// $dbConfig = [
//     'host' => 'localhost',
//     'username' => 'root',
//     'password' => '',
//     'name' => 'codeat21'
// ];

$apiContext = getApiContext($paypalConfig['client_id'], $paypalConfig['client_secret'], $enableSandbox);

/**
 * Set up a connection to the API
 *
 * @param string $clientId
 * @param string $clientSecret
 * @param bool   $enableSandbox Sandbox mode toggle, true for test payments
 * @return \PayPal\Rest\ApiContext
 */
function getApiContext($clientId, $clientSecret, $enableSandbox = false)
{
    $apiContext = new ApiContext(
        new OAuthTokenCredential($clientId, $clientSecret)
    );

    $apiContext->setConfig([
        'mode' => $enableSandbox ? 'sandbox' : 'live'
    ]);

    return $apiContext;
}
