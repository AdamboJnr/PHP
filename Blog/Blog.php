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
                            <a class="nav-link text-white" href="Home.php">HOME</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link text-white" href="Blog.php">BLOG</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="allposts.php">TIMELINE</a>
                        </li>                         

                        <li class="nav-item">
                            <a class="nav-link text-white " href="profile.php">PROFILE</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="login.html">LOG IN</a>
                        </li>
                    </ul>
            </div>
        </div>

    </nav>
            <!-- End of Navbar -->
            <div class="container">
                <form action="blogUpdate.php" method="post" class="mt-5" enctype="multipart/form-data">
                    <h1 class="text-center">Post A Story</h1>

                    <textarea name="content" id="" cols="30" rows="5" class="form-control" required>Post Content</textarea><br>

                    <input type="file" name="picture" value="Choose Photo" class="form-control "><br>

                    <input type="submit" value="Post" class="btn btn-primary btn-block" name="btn_post">
                </form>                
            </div>
    </form>
</body>
</html>