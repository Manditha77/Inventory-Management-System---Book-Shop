<?php
    $severname = "localhost 3307";
    $username = "root";
    $password = "Dulmi#12345";

    $conn = mysqli_connect($servername, $username, $password );

    if(!$conn){
        die("connection failed: " .mysqli_connect_error());
    }

    echo "Connect Successfully";