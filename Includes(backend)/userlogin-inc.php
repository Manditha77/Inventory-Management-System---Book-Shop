<?php
session_start();

include('dbconfig-inc.php');

if (isset($_POST["submit"])) {
    $userName = $_POST["username"];
    $password = $_POST["password"];

    $errors = array();

    if (empty($userName) || empty($password)) {
        array_push($errors, "All fields are required");
    } else {
        // Prepare a statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
        $stmt->bind_param("s", $userName);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Verify the password (assuming passwords are hashed in the database)
            if ($password === $row['password']) {
                // Success: The username and password are correct
                // You can set session variables here and redirect to a different page
                $_SESSION['user'] = $row['username'];
                header("Location: ../UI/ManageCategories.php");
                exit();
            } else {
                array_push($errors, "Incorrect password");
            }
        } else {
            array_push($errors, "Username not found");
        }

        $stmt->close();
    }

    if (count($errors) > 0) {
        // Store errors in session
        $_SESSION['errors'] = $errors;
        // Redirect back to the login page
        header("Location: ../UI/userlogin.php");
        exit();
    }
}