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
                            <a class="nav-link text-white active" href="cart.php">CART(0)</a>
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
        <h1 class="text-center font-italic mt-2">Top Categories</h1>
        <!-- First Category -->
        <h4 class="font-italic">Food</h4>
        <div class="row">
            <?php
                //connect to db
                require_once "connection.php";
                //prepare query
                $selectQuery="SELECT * FROM `products` WHERE product_type='food' AND quantity > 0 ";
                //fetch the items
                $foodItems=mysqli_query($connection,$selectQuery);
                foreach($foodItems as $fItem){
                    $productId=$fItem["product_id"];
                    $productName=$fItem["product_name"];
                    $productType=$fItem["product_type"];
                    $productAmount=$fItem["amount"];
                    $productQuantity=$fItem["quantity"];
                    $productImage=$fItem["product_image"];
                    //style the product outlook
                    echo "
                        <div class='col-md-4 col-sm-6 col-xs-12 mb-3'>
                            <div>
                            <div class='property-photo'>
                            <a href='#'>
                                <img src='Item_Images/".$productImage."' class='img-fluid rounded' style=' height: 180px; width: 370px;'>
                            </a>
                            </div>
                            <div class='mt-3'>
                                <h5 class=''>".$productName."</h5>
                                <h6 class=''><span class='font-weight-bold font-italic'> Ksh ".$productAmount."  </h6>
                                <div class='d-flex text-warning'>
                                    <span><i class='fas fa-star'></i></span>
                                    <span><i class='fas fa-star'></i></span>
                                    <span><i class='fas fa-star'></i></span>
                                    <span><i class='fas fa-star'></i></span>
                                    <span><i class='fas fa-star-half'></i></span><br><br>
                                </div> 
                            </div>
                            <a class='btn btn-secondary btn-block' href='cart.php?p_id=$productId&p_name=$productName&p_type=$productType&p_amount=$productAmount&p_quantity=$productQuantity&p_image=$productImage'>Proceed To Buy</a>
                        </div>
                    </div>                     
                    ";                    
                }
            ?>
        </div>
        
        <!-- Second Category -->
        <h4 class="font-italic">Clothing</h4>
        <div class="row">
            <?php
                //connect to db
                require_once "connection.php";
                //prepare query
                $selectQuery="SELECT * FROM `products` WHERE product_type='clothing' AND quantity > 0 ";
                //fetch the items
                $foodItems=mysqli_query($connection,$selectQuery);
                foreach($foodItems as $fItem){
                    $productId=$fItem["product_id"];
                    $productName=$fItem["product_name"];
                    $productType=$fItem["product_type"];
                    $productAmount=$fItem["amount"];
                    $productQuantity=$fItem["quantity"];
                    $productImage=$fItem["product_image"];
                    //style the product outlook
                    echo "
                        <div class='col-md-4 col-sm-6 col-xs-12 mb-3'>
                            <div>
                            <div class='property-photo'>
                            <a href='#'>
                                <img src='Item_Images/".$productImage."' class='img-fluid rounded' style=' height: 180px; width: 370px;'>
                            </a>
                            </div>
                            <div class='mt-3'>
                                <h5>".$productName."</h5>
                                <h6><span class='font-weight-bold font-italic'> Ksh ".$productAmount."  </h6>
                                <div class='d-flex text-warning'>
                                <span><i class='fas fa-star'></i></span>
                                <span><i class='fas fa-star'></i></span>
                                <span><i class='fas fa-star'></i></span>
                                <span><i class='fas fa-star'></i></span>
                                <span><i class='fas fa-star-half'></i></span><br><br>
                            </div> 
                            </div>
                            <a class='btn btn-secondary btn-block' href='cart.php?p_id=$productId&p_name=$productName&p_type=$productType&p_amount=$productAmount&p_quantity=$productQuantity&p_image=$productImage'>Proceed To Buy</a>
                        </div>
                    </div>                     
                    ";                    
                }
            ?>
        </div>

        <!-- Third Category -->
        <h4 class="font-italic">Electronics</h4>
        <div class="row">
            <?php
                //connect to db
                require_once "connection.php";
                //prepare query
                $selectQuery="SELECT * FROM `products` WHERE product_type='electronics' AND quantity > 0 ";
                //fetch the items
                $foodItems=mysqli_query($connection,$selectQuery);
                foreach($foodItems as $fItem){
                    $productId=$fItem["product_id"];
                    $productName=$fItem["product_name"];
                    $productType=$fItem["product_type"];
                    $productAmount=$fItem["amount"];
                    $productQuantity=$fItem["quantity"];
                    $productImage=$fItem["product_image"];
                    //style the product outlook
                    echo "
                        <div class='col-md-4 col-sm-6 col-xs-12 mb-3'>
                            <div>
                            <div class='property-photo'>
                            <a href='#'>
                                <img src='Item_Images/".$productImage."' class='img-fluid rounded' style=' height: 180px; width: 370px;'>
                            </a>
                            </div>
                            <div class='mt-3'>
                                <h5>".$productName."</h5>
                                <h6><span class='font-weight-bold font-italic'> Ksh ".$productAmount."  </h6>
                                <div class='d-flex text-warning'>
                                    <span><i class='fas fa-star'></i></span>
                                    <span><i class='fas fa-star'></i></span>
                                    <span><i class='fas fa-star'></i></span>
                                    <span><i class='fas fa-star'></i></span>
                                    <span><i class='fas fa-star-half'></i></span><br><br>
                                </div>    
                            </div>
                            <a class='btn btn-secondary btn-block' href='cart.php?p_id=$productId&p_name=$productName&p_type=$productType&p_amount=$productAmount&p_quantity=$productQuantity&p_image=$productImage'>Proceed To Buy</a>
                        </div>
                    </div>                     
                    ";                    
                }
            ?>
        </div>
    </div>
</body>
</html>