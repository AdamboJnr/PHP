<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Home</title>
    <!-- connection to javascript -->
    <script src="Assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="Assets/bootstrap/js/popper.min.js"></script>
    <script src="Assets/bootstrap/js/bootstrap.js"></script>
    
    <!-- connection to CSS -->
    <link rel="stylesheet" href="Assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/bootstrap/css/custom.css">
    <!-- connection to font awesomes -->
    <link rel="stylesheet" href="Assets/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="Assets/fontawesome-free-5.15.4-web/css/fontawesome.min.css">
    <script>
        function likePost(){
            let like;
            like=document.getElementById("likes").innerHTML;
            console.log(like);
            // like++;
            document.getElementById("likes").innerHTML=like++;
            console.log(like);
        }
    </script>        
</head>
<body>
    <!-- Start of Navbar -->
    <nav class="navbar navbar-expand-md Navigation bg-dark sticky-top">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand text-white brand" href="#" style="font-family: cursive;"> <i class="fas fa-fire fa-lg"></i> F Society</a>
                            
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
                        
            <!-- Navbar links -->
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white active" href="Home.php">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white active" href="Blog.php">BLOG</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white active" href="allposts.php">TIMELINE</a>
                        </li>                        

                        <li class="nav-item">
                            <a class="nav-link text-white " href="profile.php">PROFILE</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="login.php">LOG OUT</a>
                        </li>
                    </ul>
            </div>
        </div>

    </nav> 
    <!-- End of Navbar -->
    <div class="container mt-3">
        <?php
        //connect to db
        require_once "connection.php";
        //prepare query
        $selectQuery="select * from `posts` left join `users_table` on posts.userId=users_table.id order by postDate desc";
        //fetch from db
        $posts=mysqli_query($connect,$selectQuery);
        //use loop to print
        foreach($posts as $post){
            $userId=$post["id"];
            $userName=$post["username"];
            $postContent=$post["content"];
            $postPic=$post["image"];
            $userPic=$post["pic"];
            $postId=$post["postId"];
            $postDate=$post["postDate"];

            //fetching number of likes
            $likeQuery = "SELECT * FROM `likes` WHERE post_id='$postId' ";
            $likes = mysqli_query($connect,$likeQuery);
            $likesCount = mysqli_num_rows($likes);
            //fetching number of comments
            $commentQuery = "SELECT * FROM `comment_table` WHERE  post_id='$postId' ";
            $comments = mysqli_query($connect,$commentQuery);
            $commentCount = mysqli_num_rows($comments);            

            if(!empty($postPic)){
                echo "
                <div class='container shadow mb-2 p-3'>
                    <img src='Profiles/".$userPic."' class='img-fluid rounded-circle' style=' height: 80px; width: 80px; float: left;'>
                    <h4 class='ml-2 mt-4'>$userName</h4>
                    <p class='font-italic'>$postDate<p>
                    <p class=' lead ml-1'>$postContent</p>
                    <img src='Posted_img/".$postPic."' class='img-fluid rounded' style=' height: 300px; width: 450px;'>
                    <p id='likedby'></p>
                    <hr class='bg-light'>
                    <div class='d-flex row mx-auto'>
                    <a href='likes.php?p_id=$postId&u_id=$userId&u_name=$userName' class='btn btn-light col-4'><i class='fa fa-thumbs-up'> $likesCount</i></a>
                        <a href='comment.php?p_id=$postId&u_pic=$userPic&u_name=$userName&p_date=$postDate&p_content=$postContent&p_pic=$postPic' class='btn btn-light col-4'><i class='fas fa-comment'> $commentCount</i></a>
                        <button class='btn btn-light col-4'><i class='fas fa-share-square'></i></button>
                    </div>
                </div>
                ";                
            }else{
                echo "
                <div class='container shadow mb-2 p-3'>
                    <img src='Profiles/".$userPic."' class='img-fluid rounded-circle' style=' height: 80px; width: 80px; float: left;'>
                    <h4 class='ml-2 mt-4'>$userName</h4>
                    <p class='font-italic'>$postDate<p>
                    <p class=' lead ml-1'>$postContent</p>
                    <p id='likedby'></p>
                    <hr class='bg-light'>
                    <div class='d-flex row mx-auto'>
                    <a href='likes.php?p_id=$postId&u_id=$userId&u_name=$userName' class='btn btn-light col-4'><i class='fa fa-thumbs-up'> $likesCount</i></a>
                        <a href='comment.php?p_id=$postId&u_pic=$userPic&u_name=$userName&p_date=$postDate&p_content=$postContent&p_pic=$postPic' class='btn btn-light col-4'><i class='fas fa-comment'> $commentCount</i></a>
                        <button class='btn btn-light col-4'><i class='fas fa-share-square'></i></button>
                    </div>
                </div>
                ";                 
            }

        }
        ?>
    </div>   
</body>
</html>