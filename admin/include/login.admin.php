<?php
include('../../include/connection.php');
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $query = "select admin_id,admin_username,admin_password from admin where admin_username=? AND admin_password=?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ss", $user, $pass);
    if ($stmt->execute() == true) {
        $res = $stmt->get_result();
        if (mysqli_num_rows($res) == 1) {

            $result = mysqli_fetch_assoc($res);
            $_SESSION['admin_id'] = $result['admin_id'];
            header('Location:../dashboard.php');
            die();
        } else {
            $_SESSION['error']="Wrong Credentials!";
            header('Location:../index.php');
        }
    }
    else{
        die('Internal Error, Query Not Executed!');
    }
}



// if($_SESSION['REQUEST_METHOD']=='POST'){
//     $user = $_SESSION['username'];
//     $pass = $_SESSION['password'];
//     $query = "select admin_id,admin_username,admin_password from admin where admin_username='$user' AND admin_password='$pass'";
//     $result = $con->query($query);
//     if(mysqli_num_rows($result)==1){

//         $result = mysqli_fetch_assoc($result);
//         $_SESSION['admin_id']=$result['admin_id'];
//         header('Location:dashboard.php');
//         die();
//     }
//     else{
//         echo "Wrong Credentials!";
//     }
// }