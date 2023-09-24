<?php
include('../../include/connection.php');
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $query = "select * from admin where admin_username=?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $user);
    if ($stmt->execute() == true) {
        $res = $stmt->get_result();
        if (mysqli_num_rows($res) == 1) {

            $result = mysqli_fetch_assoc($res);
            if (password_verify($pass, $result['admin_password'])) {
                $_SESSION['admin_id'] = $result['admin_id'];
                header('Location:../dashboard.php');
            } else {
                $_SESSION['error2'] = "Wrong Password!!";
                header('Location:../index.php');
                die();
            }
        } else {
            $_SESSION['error1'] = "Wrong Credentials!";
            header('Location:../index.php');
            die();
        }
    } else {
        die('Internal Error, Query Not Executed!');
    }
}
else{
    header('Location:../index.php');
    die();
}