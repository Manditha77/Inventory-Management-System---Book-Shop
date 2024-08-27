<html>
    <html lang="en">
        <head>
            <meta chrset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE-edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="mainstyle.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
        </head>
            <title>Grade 1</title>
        </head>

        <body>
        
        <aside class="dashboard-sidebar">
        <div class="dashboard-header">
            <h3><div class="dashboard-logo">MIHIRA BOOK SHOP</h3></div>
         </div>
    
        
       
            <div class="dashboard-header">
                <h5><div class="dashboard-subtitle">INVENTORY MANAGEMENT SYSTEM</h5></div>
                </div>
        
        
        <nav class="dashboard-sidebar-menus">
            <ul class="dashboard-menu-list">
                <div class="Home"><li><a href="#"><i class="fa fa-home"></i><span>Home</span></a></li></div>
                <div class="Categories"><li><a href="#"><i class="fa fa-bookmark"></i><span>Categories</span></a></li></div>
                <div class="Suppliers"><li><a href="#"><i class="fa fa-shopping-bag"></i><span>Suppliers</span></a></li></div>
                <div class="Users"><li><a href="#"><i class="fa fa-user"></i><span>Users</span></a></li></div>
            </ul>
        </nav>
    </aside>


    <div class="container mt-5">
        <h2 class="mb-3">Grade 1</h2>
        <a href="add_new.php" class="btn btn-dark">Add New</a>

        <?php
        if (isset ($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        } ?>

        

        
        <table class="table table-hover text-center">
        <thead class="thead-dark">
            
  <?php
    // Include the database connection file
    include "db_conn.php";

    // Query to get information from the 'grade1' table
    $sql = "SELECT * FROM `grade1`";
    $result = mysqli_query($conn, $sql);


    // Check if there are any results
    if (mysqli_num_rows($result) > 0) {
?>
        <table class="table table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Item_No</th>
                    <th scope="col">Item_Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Fetch and display each row of data
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>    
                        <tr>
                            <td><?php echo $row['Item_No']; ?></td>
                            <td><?php echo $row['Item_Name']; ?></td>
                            <td><?php echo $row['Quantity']; ?></td>
                            <td><?php echo $row['Price']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['Item_No']; ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="delete.php?id=<?php echo $row['Item_No']; ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                            </td>
                        </tr>
                <?php
                    } // End of while loop
                ?>
            </tbody>
        </table>
<?php
    } 
    
?>
        
    
 </tbody>
</table>
       



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>

    