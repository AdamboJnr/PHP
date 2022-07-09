<?php
session_start();
//check if button is clicked
if(isset($_POST["btn_reg"])){
    //fetching data from html form
    $email=$_POST["email"];
    $password=$_POST["upassword"];
    //connect to database
    require_once "connection.php";
    //prepare query
    $registeredUserQuery="SELECT * FROM `users_table` WHERE email='$email' and password='$password'";
    //use the query
    $ConfirmedUser=mysqli_query($connect,$registeredUserQuery);
    //confirm if there is user
    if(mysqli_num_rows($ConfirmedUser)>0){
        foreach($ConfirmedUser as $user){
            $userId=$user['id'];
        }
        $_SESSION['user_id']=$userId;
        header(header:"location:Home.php");
    }else{
		echo "<script>window.alert('Login Error. Please try again.')</script>";
		echo "<script>window.location.href='login.html?attempt=failed'</script>";
    }
}