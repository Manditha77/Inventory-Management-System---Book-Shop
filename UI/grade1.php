<?php
include "db_conn.php";

if(isset ($_POST['update'])) {
    $Item_No = $_POST['Item_No'];
    $Item_Name = $_POST['Item_Name'];
    $Quantity = $_POST['Quantity'];
    $Price = $_POST['Price'];

    $sql = "INSERT INTO `grade1`(`Item_No`, `Item_Name`, `Qauntity`, `Price`) VALUES ('$Item_No','$Item_Name','$Quantity','$Price')"

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=New record created successfully");
    }

    else {
        echo "Failed: " .mysqli_error($conn) 
       }


}

?>






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
        <h2 class="mb-4">Items Table</h2>

        
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Item_No</th>
                    <th>Item_Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
               
                    <td>item_no</td>
                    <td>item</td>
                    <td>quantity</td>
                    <td>price</td>
                    <td>Action</td>
                        
                    </td>
                </tr>
              
            </tbody>
        </table>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>

    