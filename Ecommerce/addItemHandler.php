<?php
//check if button was clicked
if(isset($_POST["btn_add"])){
    //fetching data from the form
    $productName=$_POST["p_name"];
    $productType=$_POST["p_type"];
    $productImage=$_FILES["p_image"]["name"];
    $tmpProductImage=$_FILES["p_image"]["tmp_name"];
    $productAmount=$_POST["p_amount"];
    $productQuantity=$_POST["p_quantity"];
    //folder for uploading item images
    $folder="Item_Images/".$productImage;
    //connect to db

    echo $productName;
    echo $productType;
    echo $productImage;

    require_once "connection.php";
    //prepare query
    $insertQuery="INSERT INTO `products`(`product_id`, `product_name`, `product_type`, `amount`, `quantity`, `product_image`) VALUES (null,'$productName','$productType','$productAmount','$productQuantity','$productImage')";
    //function to upload image to folder
    if(move_uploaded_file($tmpProductImage,$folder)){
        $save=mysqli_query($connection,$insertQuery);
        //check if save was succesfull

        if(isset($save)){
            //head to items page
            header(header:"location:home.php");
        }else{
            echo "Product Update Failed";
        }
    }else{
        echo "File upload failed";
    }
}