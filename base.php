<?<?php
$servername = "localhost:3306";
$username = "root";
$password = "glu1234";

// Create connection
$conn = mysqli_connect($servername, $username, $password, "iq2");

// Check connection
if (mysqli_connect_errno()) {
    die("error".mysqli_connect_error() . PHP_EOL);
}
session_start();

?>
