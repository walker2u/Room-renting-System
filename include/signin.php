<?php
require 'controller.php';
require 'connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    login_owner($email, $password);

} else {
    header('Location:../index.php');
    die();
}