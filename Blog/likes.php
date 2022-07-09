<?php
session_start();
$likeeId = $_SESSION['user_id'];
// echo $likeeId;
//check if link is clicked
if(isset($_GET["u_id"])){
    $userId = $_GET["u_id"];
    $postId = $_GET["p_id"];
    $userName = $_GET["u_name"];
    //connect to db
    require_once "connection.php";
    //query to check if user has already liked
    $checkQuery = "SELECT * FROM `likes` WHERE user_id='$likeeId' AND post_id='$postId' ";
    //check in db
    $likeStatus = mysqli_query($connect, $checkQuery);
    //confirm
    if(mysqli_num_rows($likeStatus)>0){
        //delete the record
        $deleteQuery = "DELETE FROM `likes` WHERE user_id='$userId' AND post_id='$postId' ";
        $delete = mysqli_query($connect, $deleteQuery);
        if(isset($delete)){
            header(header:"location:Home.php");
            echo "more than a row";
        }else{
            echo "Unable to update like button";
        }
    }else{
        //save the like details
        $insertQuery = "INSERT INTO `likes`(`like_id`, `username`, `user_id`, `post_id`) VALUES (null,'$userName','$userId','$postId') ";
        $save = mysqli_query($connect, $insertQuery);

        if(isset($save)){
            header(header:"location:Home.php");
        }else{
            echo "Unable to update like";
        }
    }
}