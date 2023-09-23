<?php 
  require 'include/connection.php';
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
    <form class="form-container">
        <h2>Room Rental Registration</h2>
        <input type="text" placeholder=" Enter full name" required>
        <input type="email" placeholder="Enter email address" required>
        <input type="tel" placeholder="Enter phone number" required>
        <input type="text" placeholder="Enter your address" required>
        <div class="password">
            <input type="password" placeholder="Password" size="8" required>
            <input type="password" placeholder="Confirm Password" size="8" required>
        </div>
        <div class="terms">
            <input type="checkbox" /> I accept <a href="">Terms of Use</a>
        </div>
        <button>Register Now</button>
        <button class="button2">Already Registered?</button>
    </form>
    <!-- <script src="script/app.js"></script> -->

</body>

</html>