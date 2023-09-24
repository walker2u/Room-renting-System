<?php
require 'include/connection.php';
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Rental Registration</title>
    <link rel="stylesheet" href="style/register.css">
</head>

<body>
    <?php
    if (isset($_SESSION['errors'])) {
        $errors = $_SESSION['errors'];
    }
    ?>
    <form class="form-container" method="post" action="include/signup.php">
        <h2>Room Rental Registration</h2>
        <input name="name" type="text" placeholder=" Enter full name" required>
        <?php
        if (isset($errors['empty_field'])) {
            echo "<p>" . $errors['empty_field'] . "</p>";
        }
        ?>
        <input name="email" type="email" placeholder="Enter email address" required>
        <?php
        if (isset($errors['invalid_email'])) {
            echo "<p>" . $errors['invalid_email'] . "</p>";
        }
        ?>
        <input name="phone" type="tel" placeholder="Enter phone number" required>
        <?php
        if (isset($errors['invalid_number'])) {
            echo "<p>" . $errors['invalid_number'] . "</p>";
        }
        ?>
        <input name="address" type="text" placeholder="Enter your address" required>
        <div class="password">
            <input name="password" type="password" placeholder="Password" size="8" required>
            <input name="confirm_password" type="password" placeholder="Confirm Password" size="8" required>
        </div>
        <?php
        if (isset($errors['password_mismatch'])) {
            echo "<p>" . $errors['password_mismatch'] . "</p>";
        }
        ?>
        <div class="terms">
            <input type="checkbox" /> I accept <a href="">Terms of Use</a>
        </div>
        <button type="submit" name="register">Register Now</button>
        <button class="button2">Already Registered?</button>
    </form>
    <!-- <script src="script/app.js"></script> -->

</body>

</html>