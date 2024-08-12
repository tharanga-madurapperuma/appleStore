<?php
session_start();
include '../config/dbConnection.php';

$DB = getDBConnection();
$usersCollection = $DB->users;

if (isset($_POST["signUpBtn"])) {
    $defaultImage = '../../assets/users/guestUser.png';
    $imagePath = $defaultImage;

    if (isset($_FILES["profilePicture"]) && $_FILES["profilePicture"]["error"] == 0) {
        $file = $_FILES["profilePicture"];
        $maxFileSize = 5 * 1024 * 1024; // 5MB  

        $allowedExtensions = ['gif', 'jpeg', 'jpg', 'png'];

        // Check file type and extension
        $allowedTypes = ['image/gif', 'image/jpeg', 'image/png', 'image/pjpeg', 'image/x-png'];
        $allowedExtensions = ['gif', 'jpeg', 'jpg', 'png'];
        $uploadedFileType = $file['type'];
        $uploadedFileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        // Check file type
        if (!in_array($uploadedFileType, $allowedTypes) || !in_array($uploadedFileExtension, $allowedExtensions)) {
            echo "<script>alert('Error: Only JPEG, PNG, and GIF files are allowed.');</script>";
            exit();
        }

        // Check file size
        if ($file['size'] > $maxFileSize) {
            echo "<script>alert('Error: File size exceeds the maximum allowed size o    f 5MB.');</script>";
            exit();
        }

        // Move the uploaded file to a specific directory
        $uploadDir = '../../assets/users/';
        $uploadFile = $uploadDir . $file['name'];
        if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
            $imagePath = '../../assets/users/' . $file['name'];
        } else {
            echo "<script>alert('Error: Could not upload the file.');</script>";
            exit();
        }
    }

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = sha1($_POST["password"], false);
    $phoneNumber = $_POST["phoneNumber"];

    $data = array(
        "firstName" => $firstName,
        "lastName" => $lastName,
        "email" => $email,
        "password" => $password,
        "phoneNumber" => $phoneNumber,
        "profileImage" => $imagePath // Store the image path in the database
    );

    if ($usersCollection->findOne(['email' => $email]) == null) {
        $insert = $usersCollection->insertOne($data);
        // MongoDB ObjectID as a string
        $_SESSION['first_name'] = $firstName;
        $_SESSION['last_name'] = $lastName;
        $_SESSION['email'] = $email;
        $_SESSION['phone_number'] = $phoneNumber;
        $_SESSION['profile_image'] = $imagePath;

        echo "<script>
                localStorage.setItem('accountLogged', true);
                localStorage.setItem('first_name', '" . addslashes($firstName) . "');
                localStorage.setItem('profile_image', '" . addslashes($imagePath) . "');
                window.location.href = '../home/index.html';
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
}

if (isset($_POST["signInBtn"])) {
    $email = $_POST["email"];
    $password = sha1($_POST["password"], false);

    // Check if the user exists in the database
    $user = $usersCollection->findOne(['email' => $email]);

    if ($user == null) {
        echo "<div class='outer-box-error'>";
        echo "<h1>" . "User doesn't exist" . "</h1>";
        echo "<h4><a href='./signup.html'>" . "Back to Create Account" . "</a></h4>";
        echo "</div>";
        echo "<script>
                localStorage.setItem('accountLogged', false);
              </script>";
    } else {
        // Verify the password
        if ($user['password'] === $password) {
            // Store user data in session variables
            $userName = $user['firstName'];
            $_SESSION['first_name'] = $user['firstName'];
            $_SESSION['last_name'] = $user['lastName'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['phone_number'] = $user['phoneNumber'];
            $_SESSION['profile_image'] = $user['profileImage'];

            echo "<script>
                    localStorage.setItem('accountLogged', true);
                    localStorage.setItem('first_name', '" . addslashes($user['firstName']) . "');
                    localStorage.setItem('profile_image', '" . addslashes($user['profileImage']) . "');
                    window.location.href = '../home/index.html';
                </script>";

            // Redirect to a dashboard or home page
            //header("Location: ../home/index.html");
            exit();
        } else {
            echo "<div class='outer-box-error'>";
            echo "<h1>" . "Incorrect password" . "</h1>";
            echo "<h4><a href='./signin.html'>" . "Back to Sign In" . "</a></h4>";
            echo "</div>";
            echo "<script>
                    localStorage.setItem('accountLogged', false);
                    console.log('Variable set to false');
                  </script>";
        }
    }
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
</body>

</html>

<!-- // setTimeout(() => {
                    //     window.location.href = '../home/index.html';
                    // }, 100); -->