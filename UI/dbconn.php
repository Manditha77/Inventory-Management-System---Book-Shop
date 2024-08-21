<?php
$servername = "localhost";
$username = "root";
$password = "Dulmi#12345";
$dbname = "book_inventory_management_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>