<?php
session_start();

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
    <title>Profile</title>
</head>

<body>
    <custom-nav class="firstSection-navBar"></custom-nav>
    <div class="profile_box">
        <div>
            <img src="<?php echo htmlspecialchars($_SESSION['profile_image']); ?>" alt="profilePhoto" class="profile_Photo">
        </div>

        <h2 class="userName"><?php echo htmlspecialchars($_SESSION['first_name'] . ' ' . $_SESSION['last_name']); ?></h2>
        <p><b>Email: </b><?php echo htmlspecialchars($_SESSION['email']); ?></p>
        <p class="numberText"><b>Phone Number: </b><?php echo htmlspecialchars($_SESSION['phone_number']); ?></p>

        <div class="profile_btns">
            <button class="btn" onclick="editProfile()">Edit Profile</button>
            <button class="btn" onclick="logout()">Log Out</button>
        </div>
    </div>

    <script>
        function editProfile() {
            window.location.href = "./editProfile.php"
        }

        function logout() {
            localStorage.setItem('accountLogged', false);
            localStorage.setItem('profile_image', "../../assets/users/guestUser.png");
            window.location.href = "./logout.php"
        }
    </script>
    <script src="https://kit.fontawesome.com/a79721002c.js" crossorigin="anonymous"></script>
    <script src="../../Components/customNav.js"></script>
</body>

</html>