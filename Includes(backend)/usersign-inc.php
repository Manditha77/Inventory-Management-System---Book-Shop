<?php
// Include the database connection
include 'dbconn.php';

// Initialize message variable
$message = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate the inputs
    $username = trim($_POST['username']);
    $position = $_POST['position'];
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate username
    if (empty($username)) {
        $message = "Username is required!";
    } elseif (strlen($username) < 3) {
        $message = "Username must be at least 3 characters long!";
    } elseif (!preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
        $message = "Username can only contain letters, numbers, and underscores!";
    }

    // Validate position
    elseif (empty($position)) {
        $message = "Position is required!";
    }

    // Validate email
    elseif (empty($email)) {
        $message = "Email is required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format!";
    }

    // Validate password
    elseif (empty($password)) {
        $message = "Password is required!";
    } elseif (strlen($password) < 6) {
        $message = "Password must be at least 6 characters long!";
    }

    // Validate password confirmation
    elseif ($password !== $confirm_password) {
        $message = "Passwords do not match!";
    }

    // If all validations pass
    else {
        // Hash the password before storing it
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Prepare the SQL statement to insert user data
        $stmt = $conn->prepare("INSERT INTO users (username, position, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $position, $email, $hashed_password);

        // Execute the statement and check if successful
        if ($stmt->execute()) {
            $message = "User registered successfully!";
            header("Location: userlogin.php");
            exit(); 
        } else {
            $message = "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }

    // Close the connection
    $conn->close();
}
?>