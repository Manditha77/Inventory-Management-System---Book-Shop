<?php
include "db_conn.php";

if(isset($_POST['submit'])){
    $Item_Name = $_POST['Item_Name'];
    $Quantity = $_POST['Quantity'];
    $Price = $_POST['Price'];

    $sql = "UPDATE INTO grade1(Item_No, Item_Name, Quantity, Price) VALUES (NULL,'$Item_Name','$Quantity','$Price')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: index.php?msg=New record created successfully");
    }

    else{
        echo "Failed: " .mysqli_error($conn);
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
            <title>Edit</title>
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
                <div class="Home"><li><a href="DashBoard.php"><i class="fa fa-home"></i><span>Home</span></a></li></div>
                <div class="Categories"><li><a href="ManageCategories.php"><i class="fa fa-bookmark"></i><span>Categories</span></a></li></div>
                <div class="Suppliers"><li><a href="#"><i class="fa fa-shopping-bag"></i><span>Suppliers</span></a></li></div>
                <div class="Users"><li><a href="#"><i class="fa fa-user"></i><span>Users</span></a></li></div>
            </ul>
        </nav>
    </aside>

    <div class="container mt-5">
    <h1 class="mb-3" style="text-align:center"><b>Edit User Information</b></h2>

    


    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width300px;">
            <div class="row">
                <div class="col">
                    <label class="form-label">Item Name : </lable>
                    <input type="text" class="form-control" name="Item_Name"   value = "<?php echo $row['Item_Name'] ?>">
                    </div>   
                  
            
            <div class="row">
                <div class="col">
                    <label class="form-label">Quantity : </lable>
                    <input type="text" class="form-control" name="Quantity" value = "<?php echo $row['Quantity'] ?>">
            </div>  

            <div class="row">
                <div class="col">
                    <label class="form-label">Price : </lable>
                    <input type="text" class="form-control" name="Price" value = "<?php echo $row['Price'] ?>">
            </div>
            
          


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>