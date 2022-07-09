<?php
session_start();
$id=$_SESSION['user_id'];
//check if button was clicked
if(isset($_POST["btn_reg"])){
        $userName=$_POST["username"];
        $phoneNumber=$_POST["number"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $userImage=$_SESSION["user_pic"];
        //connect to db 
        require_once "connection.php";


        //prepare query
        $updateQuery="UPDATE `users_table` SET `id`='$id',`username`='$userName',`pic`='$userImage',`email`='$email',`password`='$password',`phone_number`='$phoneNumber' WHERE id='$id'";
        //Save to db
        $save=mysqli_query($connect,$updateQuery);
        //check if save was succesfull
        if(isset($save)){
            //head to login
            header(header:"location:profile.php");
        }else{
            echo "Updating details failed";
        }     
}