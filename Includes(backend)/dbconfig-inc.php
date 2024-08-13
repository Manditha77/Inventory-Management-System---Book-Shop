<?php
$servername = "localhost:3307";
$dBUsername = "root";
$dBPassword = "";
$dBName = "mihira_bookshop";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>