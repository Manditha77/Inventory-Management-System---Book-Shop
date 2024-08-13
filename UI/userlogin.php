<?php
session_start();
?>

<html>
<head>
    <title>Inventory Management System | User Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="wrapper1 text-center">
            <form action="../Includes(backend)/userlogin-inc.php" method="post" novalidate>
                <h1><b>MIHIRA BOOK SHOP</b></h1>
                <h3><b>Inventory Management System</b></h3>

                <!-- Display Errors -->
                <?php
                if (isset($_SESSION['errors']) && count($_SESSION['errors']) > 0) {
                    foreach ($_SESSION['errors'] as $error) {
                        echo "<div class='alert alert-danger custom-alert'>$error</div>";
                    }
                    // Clear errors after displaying them
                    unset($_SESSION['errors']);
                }
                ?>

                <div class="wrapper2">
                    <div class="input-box position-relative">
                        <input type="text" name="username" placeholder="Username" required>
                        <i class='bx bxs-user position-absolute'></i>
                    </div>
                    <div class="input-box position-relative">
                        <input type="password" name="password" placeholder="Password" required>
                        <i class='bx bxs-lock-alt position-absolute'></i>
                    </div>
                    <button type="submit" class="btn" name="submit">Login</button>
                    <div class="signup-link">
                        <p>Don't have an account? <a href="signup.html">Sign Up</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>