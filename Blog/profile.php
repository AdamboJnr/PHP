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
</head>
<body>
            <!-- Start of Navbar -->
    <nav class="navbar navbar-expand-md Navigation bg-dark sticky-top">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand text-white" href="#" style="font-family: cursive;"><i class="fas fa-fire fa-lg"></i> F Society</a>
                            
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
                            <a class="nav-link text-white" href="login.php">LOG IN</a>
                        </li>
                    </ul>
            </div>
        </div>

    </nav>
    <!-- End of Navbar -->
    <div class="container">
    <?php
        //connect to db
        require_once "connection.php";

        $id=$_SESSION['user_id'];
        //prepare query
        $selectQuery="SELECT * FROM `users_table` WHERE id ='$id'";
        //fetch from db
        $posts=mysqli_query($connect,$selectQuery);
        //use loop to print

        foreach($posts as $post){
            $userId=$post["id"];
            $userName=$post["username"];
            $userPic=$post["pic"];
            $email=$post["email"];
            $phoneNumber=$post["phone_number"];
            $userPassword=$post["password"];
        }
        
        $_SESSION["user_pic"]=$userPic;

        echo "
        <div class='container mb-2 p-3 shadow'>
            <h1 class='text-center'>Your Profile</h1>

            <img src='Profiles/".$userPic."' class='img-fluid rounded-circle' style=' height: 80px; width: 80px; float: left;'><br>
            <h4 class='ml-2'>$userName</h4><br>

            <form action='updateProfile.php' method='post' enctype='multipart/form-data'>
            <div class='container mt-4'>
                <label for='username'>UserName</label>
                <input type='text' name='username' value='$userName' class='form-control' placeholder='Enter Your Username' required><br>
    
                <input type='hidden' value='$userPic' name='pic' class='form-control'>
    
                <label for='number'>Phone Number</label>
                <input type='number' name='number' value='$phoneNumber' class='form-control' placeholder='Enter Your Phone Number' required><br>
    
                <label for='email'>Email</label>
                <input type='email' name='email' value='$email' class='form-control' placeholder='Key in your Email' required><br>
    
                <label for='password'>Password</label>
                <input type='password' name='password' value='$userPassword' class='form-control' placeholder='Type your password' required><br>
    
                <input type='submit' value='Update' class='btn btn-primary btn-block' name='btn_reg'>
            </div>
        </form>            
        </div><br>                           
        ";
        ?>
        
    </div>
</body>
</html>