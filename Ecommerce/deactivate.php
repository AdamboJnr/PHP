<?php
//check if link is clicked
if(isset($_GET["u_id"])){
    //get the id
    $userId=$_GET["u_id"];
    $userName=$_GET["u_name"];
    $password=$_GET["pwd"];
    $email=$_GET["email"];
    $status="Deactivated";
    $userType=$_GET["u_type"];
    $contact=$_GET["contact"];
    //connect to db
    require_once "connection.php";
    //prepare query
    $updateQuery="UPDATE `users_table` SET `user_id`='$userId',`username`='$userName',`password`='$password',`email`='$email',`status`='$status',`user_type`='$userType',`phone_number`='$contact' WHERE user_id='$userId'";
    //fetch from db
    $save=mysqli_query($connection,$updateQuery);
    //check if save was succesfull
    if(isset($save)){
        header(header:"location:users.php");
    }else{
        echo "Detail wasn't updated. Try Again";
    }
}