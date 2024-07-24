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
        "phoneNumber" => $phoneNumber,
    );
}
?>

<html>

<head>
    <title>Login Account</title>
    <link rel="stylesheet" type="text/css" href="../index.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Roboto', sans-serif;
        }

        .outer-box-error {
            width: 500px;
            height: 200px;
            background: var(--apple-error-background);
            color: var(--apple-error-text);
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .outer-box-error>h1 {
            font-weight: 600;
        }

        .outer-box-error>h4>a {
            font-weight: 500;
            text-decoration: none;
            color: var(--apple-darkGray) !important;
        }

        .outer-box-success {
            width: 500px;
            height: 200px;
            background: var(--apple-successful);
            color: var(--apple-successful-text);
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 50px;
        }

        .outer-box-success>h1 {
            font-weight: 600;
        }

        .outer-box-success>h4>a {
            text-decoration: none;
            font-weight: 500;
            color: var(--apple-darkGray) !important;
        }
    </style>
</head>

<body>
    <?php

    if ($usersCollection->findOne(['email' => $email]) == null) {
        $insert = $usersCollection->insertOne($data);

        echo "<div class='outer-box-success'>";
        echo "<h1>" . "Account Creation Successfull" . "</h1>";
        echo "<h4><a href='../home/index.html'>" . "Back to Home" . "</a></h4>";
        echo "</div>";
        echo "<script>
                localStorage.setItem('accountLogged', true);
                console.log('Variable set to true');
              </script>";
    } else {
        echo "<div class='outer-box-error'>";
        echo "<h1>" . "User already exists" . "</h1>";
        echo "<h4><a href='./signup.html'>" . "Back to Create Account" . "</a></h4>";
        echo "</div>";
        echo "<script>
                localStorage.setItem('accountLogged', false);
                console.log('Variable set to false');
              </script>";
    }
    ?>
</body>

</html>