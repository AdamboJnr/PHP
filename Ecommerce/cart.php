<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- connection to javascript -->
    <script src="Assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="Assets/bootstrap/js/popper.min.js"></script>
    <script src="Assets/bootstrap/js/bootstrap.js"></script>
    
    <!-- connection to CSS -->
    <link rel="stylesheet" href="Assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/bootstrap/css/custom.css">
    <!-- connection to font awesomes -->
    <link rel="stylesheet" href="Assets/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="Assets/fontawesome-free-5.15.4-web/css/fontawesome.min.css">
</head>
<body>
        <!-- Start of Navbar -->
        <nav class="navbar navbar-expand-md Navigation bg-dark sticky-top">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand text-white brand" href="#" style="font-family: cursive;"> <i class=""></i>Shop</a>
                            
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
                        
            <!-- Navbar links -->
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white active" href="home.php">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white active" href="cart.php">CART(1)</a>
                        </li>


                    </ul>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link text-white active" href="login.php">LOG IN</a>
                        </li>                                        
                    </ul>
                
            </div>
        </div>

    </nav> 
    <!-- End of Navbar -->
    <div class="container">
        <h1 class="text-center mb-3">Shopping Cart</h1>
        <?php
            //start fetching data
            if(isset($_GET['p_id'])){
                $productId = $_GET['p_id'];
                $productName = $_GET["p_name"];
                $productType = $_GET["p_type"];
                $productAmount = $_GET["p_amount"];
                $productQuantity = $_GET["p_quantity"];
                $productImage = $_GET["p_image"];
                //style the outlook
                echo "
                <table class='table table-hover table-responsive'> 
                <tr>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th>Product Type</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Buy Now</th>
                </tr>                
                <tr>
                <td>$productName</td>
                <td><img src='Item_Images/".$productImage."' class='img-fluid rounded' style=' '></td>
                <td>$productType</td>
                <td>1</td>
                <td>$productAmount</td>
                <td><a name='btn_order' class='btn btn-primary' href='cartHandler.php?p_id=$productId&p_name=$productName&p_type=$productType&p_amount=$productAmount&p_quantity=1&p_image=$productImage'>Order</a></td>
                </tr>
                ";               
            }
        ?>
    </div>
</body>
</html>