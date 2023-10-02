<?php
require 'controller.php';
require 'connection.php';
session_start();

if (isset($_POST['register'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $hashpass = password_hash($password, PASSWORD_BCRYPT);

    $errors = [];
    if (empty($username) || empty($email) || empty($phone) || empty($address) || empty($password) || empty($confirm_password)) {
        $errors['empty_field'] = "Please Fill all Details!";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['invalid_email'] = "Please Enter valid Email!";
    }
    if ($password != $confirm_password) {
        $errors['password_mismatch'] = "PassWord and Confirm Password doesn't Match!";
    }
    if (strlen((string) $phone) != 10) {
        $errors['invalid_number'] = "Enter a valid number";
    }
    if ($errors>count($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location:../register.php');
        die();
    } else {
        register_owner($username, $email, $phone, $hashpass);
        header('Location:../login.php');
        die();
    }
} else {
    header('Location:../index.php');
    die();
}
?>