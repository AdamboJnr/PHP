<?php
session_start();
//Check if button has been clicked
if(isset($_POST["btn_post"])){
    //fetching data
    $postContent=$_POST["content"];
    $postPic=$_FILES["picture"]["name"];
    $tmpPostPic=$_FILES["picture"]["tmp_name"];
    $postedTime=date("Y-m-d h:i:sa");
    $userId=$_SESSION['user_id'];
    //folder for saving uploaded pictures in post
    $folder="Posted_img/".$postPic;
    //connect to database
    require_once "connection.php";
    //prepare query
    $insertQuery="INSERT INTO `posts`(`postId`, `userId`, `content`, `image`, `postDate`) VALUES (null,'$userId','$postContent','$postPic','$postedTime')";
    //save to database
    $save=mysqli_query($connect,$insertQuery);
    
    if(move_uploaded_file($tmpPostPic,$folder)){
        echo "Image was uploaded";
    }
    //check if it was succesfully saved
    if(isset($save)){
        header(header:"location:Home.php");
    }else{
        echo "Post was not updated";
    }
}