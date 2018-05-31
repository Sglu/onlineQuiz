<?php

$servername = "localhost:3306";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, "iq2");

// Check connection
if (mysqli_connect_errno()) {
   
    die("xjkkkkl".mysqli_connect_error() . PHP_EOL);
    
}
session_start();


$q = $_REQUEST["q"];
$_SESSION['time'] = $q;

mysqli_query($conn,"UPDATE user set level='".$_SESSION['level']."',time='".$q."',status = '".time()."' where name='".$_SESSION['user']."';");


?>
