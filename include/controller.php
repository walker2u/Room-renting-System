<?php
function register_owner($name,$email,$phone,$password){
    require('connection.php');

    $query = "insert into owners(owner_name,owner_email,owner_phone,owner_password) values(?,?,?,?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param('ssss',$name,$email,$phone,$password);
    $stmt->execute();
}