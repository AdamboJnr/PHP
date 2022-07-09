<?php
session_start();
//check if button was clicked
if(isset($_POST["btn_comment"])){
    //fetch data
    $comment=$_POST["comment"];
    $postId=$_POST["postId"];
    $userId=$_SESSION['user_id'];
    $commentDate=date("Y-m-d h:i:sa");

    //connect to db
    require_once "connection.php";
    //prepare query
    $insertQuery="INSERT INTO `comment_table`(`comment_id`, `user_id`, `post_id`, `comment_content`, `comment_date`) VALUES (null,'$userId','$postId','$comment','$commentDate')";
    //save to database
    $save=mysqli_query($connect,$insertQuery);

    //check if commment was saved
    if(isset($save)){
       header(header:"location:comment.php");
    }else{
        echo "Comment was not Posted";
    }
}