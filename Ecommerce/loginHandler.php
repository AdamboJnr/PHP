<?php
session_start();
//check if button was clicked
if(isset($_POST["btn_login"])){
    //fetch data
    $email=$_POST["email"];
    $password=$_POST["password"];

    //connect to db
    require_once "connection.php";
    //prepare query
    $loginQuery="SELECT * FROM `users_table` WHERE email='$email' AND password='$password' AND status='Active' ";
    //fetch from db
    $fetch=mysqli_query($connection,$loginQuery);
    //count users to see if any user was returned
    $count=mysqli_num_rows($fetch);

    if($count>0){
        //fetching the specific user details
        foreach($fetch as $user){
            $userType=$user["user_type"];
            $userId=$user["user_id"];
            $userName=$user["username"];
        }
        //assigning sessions
        $_SESSION["id"]=$userId;
        $_SESSION["username"]=$userName;

        //checking type of user to land specific page
        if($userType=="User"){
            header(header:"location:home.php");
        }elseif($userType=="Admin"){
            header(header:"location:users.php");
        }
    }else{
        // header(header:"location:login.php");
		echo "<script>window.alert('Login Failed. Please try again.')</script>";
		echo "<script>window.location.href='login.php?attempt=failed'</script>";        
    }
}