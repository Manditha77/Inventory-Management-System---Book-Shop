<?php
$servername = "localhost:3307";
$dBUsername = "root";
$dBPassword = "";
$dBName = "inventory-management-system---book-shop";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
   // echo "connect suuccessfully";
}
?>

  