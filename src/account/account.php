<?php
require "../../vendor/autoload.php";

$databaseConnection = new MongoDB\Client();
$myDatabase = $databaseConnection->appleStore;
$usersCollection = $myDatabase->users;

if (isset($_POST["signUpBtn"])) {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = sha1($_POST["password"], false);
    $adress = $_POST["adress"];
    $streetOne = $_POST["streetOne"];
    $streetTwo = $_POST["streetTwo"];
    $district = $_POST["district"];
    $province = $_POST["province"];
    $password = $_POST["password"];
    $phoneNumber = $_POST["phoneNumber"];

    $data = array(
        "firstName" => $firstName,
        "lastName" => $lastName,
        "email" => $email,
        "password" => $password,
        "adress" => $adress,
        "streetOne" => $streetOne,
        "streetTwo" => $streetTwo,
        "district" => $district,
        "province" => $province,
        "password" => $password,
        "phoneNumber" => $phoneNumber,
    );

    if ($usersCollection->findOne(['email' => $email]) == null) {
        $insert = $usersCollection->insertOne($data);
    } else {
        echo "user already exists";
    }
} else if (isset($_POST["signInBtn"])) {
    echo "sign in button connected";
}
