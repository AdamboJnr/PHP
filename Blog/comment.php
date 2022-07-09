<?php
session_start();
if(isset($_GET["p_id"])){
    //fetch data
    $postId=$_GET["p_id"];
    $postUser=$_GET["u_name"];
    $postedPic=$_GET["p_pic"];
    $postUserPic=$_GET["u_pic"];
    $postDate=$_GET["p_date"];
    $postContent=$_GET["p_content"];
}else{
    header(header:"location:Home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment</title>
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
            //fetch comments
            require_once "connection.php"; //connect to db

            $id=$_SESSION['user_id'];
            //prepare query
            $selectQuery="select * from `comment_table` left join `users_table` on comment_table.user_id=users_table.id where post_id='$postId' order by comment_date asc";
            //fetch from db
            $comments=mysqli_query($connect,$selectQuery);

            // $allComments=count($comments);

            if(!empty($postedPic)){
            echo "
            <div class='container shadow mb-3 p-3'>
                <img src='Profiles/".$postUserPic."' class='img-fluid rounded-circle' style=' height: 80px; width: 80px; float: left;'>
                <h4 class='ml-2 mt-4'>$postUser</h4>
                <p class='font-italic'>$postDate<p>
                <p class=' lead ml-1'>$postContent</p>
                <img src='Posted_img/".$postedPic."' class='img-fluid rounded' style=' height: 300px; width: 500px;'>
                <p id='likedby'></p>
                
                <div class='d-flex row mx-auto'>
                    <button class='btn btn-light col-4'><i class='fa fa-thumbs-up'></i></button>
                    <button class='btn btn-light col-4'><i class='fas fa-comment'></i></button>
                    <button class='btn btn-light col-4'><i class='fas fa-share-square'></i></button>
                </div>
           
            ";
            echo "<h3 class='mt-3 font-italic text-center'>Comments</h3>";
            foreach($comments as $comment){
                $cUserName=$comment["username"];
                $commentContent=$comment["comment_content"];
                // $postPic=$post["image"];
                $userPic=$comment["pic"];
                $commentId=$comment["comment_id"];
                $commentDate=$comment["comment_date"];
                echo "
                    <hr class='bg-light'>
                    <div class='container shadow p-3'>
                    <img src='Profiles/".$userPic."' class='img-fluid rounded-circle' style=' height: 80px; width: 80px; float: left;'>
                    <h4 class='ml-2 mt-4'>$cUserName</h4>
                    <p class='font-italic'>$commentDate<p>
                    <p class=' lead ml-1'>$commentContent</p>
                </div>
                ";                
            }               
            }else{
                echo "
                <div class='container shadow p-3'>
                    <img src='Profiles/".$postUserPic."' class='img-fluid rounded-circle' style=' height: 80px; width: 80px; float: left;'>
                    <h4 class='ml-2 mt-4'> $postUser</h4>
                    <p class='font-italic'>$postDate<p>
                    <p class=' lead ml-1'>$postContent</p>
                    <p id='likedby'></p>
                
                    <div class='d-flex row mx-auto'>
                        <button class='btn btn-light col-4'><i class='fa fa-thumbs-up'></i></button>
                        <button class='btn btn-light col-4'><i class='fas fa-comment'></i></button>
                        <button class='btn btn-light col-4'><i class='fas fa-share-square'></i></button>
                    </div>
                
                
                ";
                echo "<h3 class='mt-3 font-italic text-center'>Comments</h3>";
                foreach($comments as $comment){
                    $cUserName=$comment["username"];
                    $commentContent=$comment["comment_content"];
                    // $postPic=$post["image"];
                    $userPic=$comment["pic"];
                    $commentId=$comment["comment_id"];
                    $commentDate=$comment["comment_date"];
                    echo "
                        <hr class='bg-light'>
                        <div class='container shadow p-3'>
                            <img src='Profiles/".$userPic."' class='img-fluid rounded-circle' style=' height: 80px; width: 80px; float: left;'>
                            <h4 class='ml-2 mt-4'>$cUserName</h4>
                            <p class='font-italic'>$commentDate<p>
                            <p class=' lead ml-1'>$commentContent</p>
                        </div>
                    ";
                }                                 
            }            
        ?>
        <form action="commentHandler.php" method="post">
            <div class="container mt-3">
                <h4 class=" font-italic">Write Comment</h4>
                <textarea name="comment" id="" cols="30" rows="3" class="form-control" ></textarea><br>
                <input type="hidden" name="postId" value="<?php echo $postId;?>">
                <input type="submit" value="Comment" name="btn_comment" class="btn btn-primary"><br><br>
            </div>
        </form>
    </div>    
</body>
</html>