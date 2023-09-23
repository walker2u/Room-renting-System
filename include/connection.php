<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "rentingsystem";

$con = new mysqli($host,$user,$pass,$db);

if($con->connect_error){
    die("Connection Failed!");
}