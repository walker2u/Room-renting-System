<?php
function checkadminlogin($username,$password){
    require '../include/connection.php';
    $query = "select admin_id,admin_username,admin_password from admin where admin_username='$username' AND admin_password='$password'";
    //$result = mysqli_query($con,$query);
    $result = $con->query($query);
    if(mysqli_num_rows($result)==1){

        $result = mysqli_fetch_assoc($result);
        $_SESSION['admin_id']=$result['admin_id'];
        header('Location:dashboard.php');
        die();
    }
    else{
        echo "Wrong Credentials!";
    }
}