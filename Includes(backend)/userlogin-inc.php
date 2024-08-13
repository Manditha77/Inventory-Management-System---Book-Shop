<?php
if (isset($_POST["submit"])){

    $userName = $_POST["username"];
    $password = $_POST["password"];

    if (empty($userName) || empty($password)) {
        header("Location: ../UI/userlogin.html?error=emptyfields");
        exit();
    }
}