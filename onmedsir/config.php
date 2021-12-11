<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name= "onlinemedicine";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
  die(mysqli_connect_error($conn));
  
}

echo " Database connected ";
?>

