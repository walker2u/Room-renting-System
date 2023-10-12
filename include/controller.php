<?php
function register_owner($name, $email, $phone, $password)
{
    require('connection.php');

    $query = "insert into owners(owner_name,owner_email,owner_phone,owner_password) values(?,?,?,?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param('ssss', $name, $email, $phone, $password);
    $check = $stmt->execute();
    if (!$check) {
        header('Location:error.html');
        die();
    }
}

function login_owner($email, $password)
{
    include('connection.php');
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $query = "select * from owners where owner_email=?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $email);
    if ($stmt->execute() == true) {
        $res = $stmt->get_result();
        if (mysqli_num_rows($res) == 1) {
            $result = mysqli_fetch_assoc($res);
            if (password_verify($pass, $result['owner_password'])) {
                $_SESSION['owner_id'] = $result['owner_id'];
                echo "<script>window.location.href = '../index.php'</script>";
                header('Location:../index.php');
                die();
            } else {
                $_SESSION['error2'] = "Wrong Password!!";
                header('Location:../login.php');
                die();
            }
        } else {
            $_SESSION['error1'] = "Wrong Credentials!";
            header('Location:../login.php');
            die();
        }
    } else {
        die('Internal Error, Query Not Executed!');
    }

}

function generate_id()
{

    require 'connection.php';
}