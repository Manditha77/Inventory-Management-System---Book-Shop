<?php
// Include the database connection
include 'db_connect.php';

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
            header("Location: login.php");
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

<!-- -------------------------------------------------html part---------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User SIGN UP</title>
    <link rel="stylesheet" href="style1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
    <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"--> 
</head>
<body>
    <div class="wrapper">
        <div>
            <h1>MIHIRA BOOK SHOP</h1>
            <h2>INVENTORY MANAGEMENT SYSTEM</h2>
        </div>
    
        <form method="post" action="">

        <h3>USER SIGN UP</h3>

        <?php if($message):?>
            <div class="alert">
                <?php echo $message;?>
        </div>
        <?php endif;?>    

        <div class="input-box">
            <input type="text" class="form-control" placeholder="USER NAME">
            <i class='bx bxs-user'></i>
        </div>

        
        <div class="input-box">
            <select class="form-control">
                <option value="" disabled selected>POSITION</option>
                <option value="Manager">Manager</option>
                <option value="Staff">Staff</option>
                <option value="Admin">Admin</option>
            </select>
            <i class='bx bxs-chevron-down'></i> <!-- Icon for the dropdown -->
        </div>

        <div class="input-box">
            <input type="email" class="form-control" placeholder="Email">
            <i class='bx bxs-envelope'></i>
        
        </div>

        <div class="input-box">
            <input type="password" class="form-control" placeholder="Password">
            <i class='bx bxs-lock-alt' ></i>
        </div> 

        <div class="input-box">
            <input type="password" class="form-control" placeholder="Re enter Password">
            <i class='bx bxs-lock-alt' ></i>
        </div>

        <button type="submit" class="btn btn-primary" class="btn">SIGN UP</button>
        </form>
    </div>
    
</body>
</html>



    