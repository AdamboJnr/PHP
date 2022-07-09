<?php
//check if button was clicked
if(isset($_POST["btn_reg"])){
    //start fetching data
    $userName=$_POST["name"];
    $email=$_POST["email"];
    $contact=$_POST["contact"];
    $password=$_POST["password"];
    $status="Active";
    $userType=$_POST["usertype"];
    //connect to db
    require_once "connection.php";
    //prepare Query
    $insertQuery="INSERT INTO `users_table`(`user_id`, `username`, `password`, `email`, `status`, `user_type`, `phone_number`) VALUES (null,'$userName','$password','$email','$status','$userType','$contact')";
    //insert to database
    $save=mysqli_query($connection,$insertQuery);
    //check if save was succesful
    if(isset($save)){
        header(header:"location:users.php");
    }else{
        echo "Details were not succesfully saved";
    }
}
?>