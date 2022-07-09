<?php
//check if link was clicked
if(isset($_GET["o_id"])){
    //start fetching data
    $orderId = $_GET["o_id"];
    $productName = $_GET["p_name"];
    $userId = $_GET["u_id"];
    $productType = $_GET["p_type"];
    $productId = $_GET["p_id"];
    $quantity = $_GET["quantity"];
    $status = "Rejected";
    $orderedDate = $_GET["o_date"];
    $amount = $_GET["amount"];
    //connnect to db
    require_once "connection.php";
    //prepare query
    $updateQuery="UPDATE `orders` SET `order_id`='$orderId',`product_name`='$productName',`user_id`='$userId',`product_type`='$productType',`quantity`='$quantity',`amount`='$amount',`status`='$status',`order_date`='$orderedDate',`product_id`='$productId' WHERE order_id='$orderId'";
    //update on db
    $update = mysqli_query($connection,$updateQuery);
    //check if updated
    if(isset($update)){
        header(header:"location:orders.php");
    }else{
        echo "Failed to update record";
    }
}