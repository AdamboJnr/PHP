<?php
//check if button was clicked
if(isset($_POST["btn_reg"])){
    //fetch data
    $userName=$_POST["username"];
    $phoneNumber=$_POST["number"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $userImage=$_FILES["pic"]["name"];
    $tmpUserImage=$_FILES["pic"]["tmp_name"];
    //folder saving images
    $folder="Profiles/".$userImage;
    //connect to db 
    require_once "connection.php";
    //prepare query
    $insertQuery="INSERT INTO `users_table`(`id`, `username`, `pic`, `email`, `password`, `phone_number`) VALUES (null,'$userName','$userImage','$email','$password','$phoneNumber')";
    //function to upload image to folder
    if(move_uploaded_file($tmpUserImage,$folder)){
        $save=mysqli_query($connect,$insertQuery);
        //check if save was succesfull
        if(isset($save)){
            //head to login
            header(header:"location:login.html");
        }else{
            header(header:"location:register.php");
        }
    }else{
        echo "File upload failed";
    }
}