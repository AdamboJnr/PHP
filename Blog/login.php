<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>login</title>
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
    <nav class="navbar navbar-expand-md Navigation bg-dark">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand text-white brand" href="#" style="font-family: cursive;"> <i class="fas fa-fire fa-lg"></i> F Society</a>
                            
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
                        
            <!-- Navbar links -->
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white " href="register.php">REGISTER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white active" href="login.php">LOG IN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 
    <!-- End of Navbar -->
    <div class="container">
        <form action="loginHandler.php" method="post" class="mt-5">
            <h1 class="text-center">login Here</h1>

            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required><br>

            <input type="password" name="upassword" class="form-control" placeholder="Enter Your Password" required><br>

    
            <input type="submit" value="login" class="btn btn-primary" name="btn_reg">
            <button class="btn btn-secondary">Cancel</button>
        </form>
    </div>
</body>
</html>