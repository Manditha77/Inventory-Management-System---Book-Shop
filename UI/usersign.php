<?php
$message = "";
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
    
        <form method="post" action="../Includes(backend)/usersign-inc.php">

        <h3>USER SIGN UP</h3>

        <?php if($message):?>
            <div class="alert">
                <?php echo $message;?>
        </div>
        <?php endif;?>    

        <div class="input-box">
        <input type="text" class="form-control" name="username" placeholder="USER NAME" required>
            <i class='bx bxs-user'></i>
        </div>

        
        <div class="input-box">
            <select class="form-control" name="position"required>
                <option value="" disabled selected>POSITION</option>
                <option value="Manager">Manager</option>
                <option value="Staff">Staff</option>
                <option value="Admin">Admin</option>
            </select>
            <i class='bx bxs-chevron-down'></i> <!-- Icon for the dropdown -->
        </div>

        <div class="input-box">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
            <i class='bx bxs-envelope'></i>
        
        </div>

        <div class="input-box">
            <input type="password" class="form-control" name="password"placeholder="Password" required>
            <i class='bx bxs-lock-alt' ></i>
        </div> 

        <div class="input-box">
            <input type="password" class="form-control" name="confirm_password"placeholder="Re enter Password"required>
            <i class='bx bxs-lock-alt' ></i>
        </div>

        <button type="submit" class="btn btn-primary" >SIGN UP</button>
        
        </form>
    </div>
    
</body>
</html>



    