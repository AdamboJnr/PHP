<?php
    session_start();
    //ensuring user is logged in
    if(!isset($_SESSION["id"])){
        header(header:"location:login.php");
    }
    //check link 
    if(isset($_GET["p_id"])){
        $productId = $_GET["p_id"];
        $productName = $_GET["p_name"];
        $productType = $_GET["p_type"];
        $productAmount = $_GET["p_amount"];
        $productQuantity = $_GET["p_quantity"];
        $productImage = $_GET["p_image"];
        $status = "Pending";
        $userId = $_SESSION["id"];
        $orderDate = date("d-m-Y");

        //connect to database
        require_once "connection.php";
        //prepare query
        $insertQuery="INSERT INTO `orders`(`order_id`, `product_name`, `user_id`, `product_type`, `quantity`, `amount`, `status`, `order_date`, `product_id`) VALUES (null,'$productName','$userId','$productType','$productQuantity','$productAmount','$status','$orderDate','$productId')";

        // echo "<script>window.alert('You have placed an order of ' + $productName + 'amount = ' + $productAmount)</script>";
        //save to db
        $save = mysqli_query($connection,$insertQuery);
        //check if save was succesfull
        if(isset($save)){
            echo "<script>window.alert('Order Placed succesfully')</script>";
            echo "<script>window.location.href='home.php'</script>";             
        }else{
            echo("Order was NOT placed..");
        }
    }