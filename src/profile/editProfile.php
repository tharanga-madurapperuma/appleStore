<?php
session_start();
include '../config/dbConnection.php';

$DB = getDBConnection();
$usersCollection = $DB->users;

// Fetch the current user data from the session
$email = $_SESSION['email'];
$user = $usersCollection->findOne(['email' => $email]);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

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
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];

    // Update the session variables
    $_SESSION['first_name'] = $firstName;
    $_SESSION['last_name'] = $lastName;
    $_SESSION['email'] = $email;
    $_SESSION['phone_number'] = $phoneNumber;
    $_SESSION['profile_image'] = $imagePath;

    // Update the database
    $usersCollection->updateOne(
        ['email' => $email],
        ['$set' => [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'phoneNumber' => $phoneNumber,
            "profileImage" => $imagePath
        ]]
    );

    // Redirect to profile page or show a success message
    echo "<script>alert('Profile updated successfully!');
        window.location.href = './profile.php';
        </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./profile.css">
    <link rel="stylesheet" href="../../Components/components.css">
    <title>Edit Profile</title>
</head>

<body>
    <custom-nav class="firstSection-navBar"></custom-nav>
    <div class="edit_container">
        <h2>Edit Your Profile</h2>
        <form action="./editProfile.php" method="POST" enctype="multipart/form-data">

            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" value="<?php echo htmlspecialchars($_SESSION['first_name']); ?>" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" value="<?php echo htmlspecialchars($_SESSION['last_name']); ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" required>

            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" value="<?php echo htmlspecialchars($_SESSION['phone_number']); ?>" required>

            <label for="profilePhoto">Change Profile Photo:</label>
            <input type="file" id="profilePicture" name="profilePicture" accept="image/*">
            <div>
                <button type="submit" class="editProfile-btn">Save Changes</button>
            </div>

        </form>
    </div>
    <script src="https://kit.fontawesome.com/a79721002c.js" crossorigin="anonymous"></script>
    <script src="../../Components/customNav.js"></script>
</body>

</html>