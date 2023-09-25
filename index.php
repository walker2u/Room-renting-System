<?php
    session_start();
    require 'include/connection.php';
    if(!isset($_SESSION['admin_id'])){
        header('Location:login.php');
        die();
    }
    else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room-Renting-System</title>
    <link rel="stylesheet" href="style/home.css">
</head>

<body>
    <nav>
        <h1 id="logo">Room-Renting</h1>
        <ul id="nav-links">
            <li><a href="#" class="links">Home</a></li>
            <li><a href="#" class="links">About</a></li>
            <li><a href="#" class="links">Contact</a></li>
            <li><button><a href="#">RENT</a></button></li>
        </ul>
    </nav>
</body>

</html>

<?php } ?>