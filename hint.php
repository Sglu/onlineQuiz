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





$result2=mysqli_query($conn,"SELECT * from hint where level=".$_SESSION['level'].";");
$row2=mysqli_fetch_array($result2,MYSQLI_ASSOC); 

echo $row2['hin'];

?>
