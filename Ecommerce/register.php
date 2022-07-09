<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            <a class="navbar-brand text-white brand" href="#" style="font-family: cursive;"> <i class=""></i> Shop</a>
                            
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
                        
            <!-- Navbar links -->
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white active" href="register.php">REGISTER</a>
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
        <form action="registerHandler.php" method="post">
            <h1 class="text-center">Register Here</h1>
            <input type="text" name="name" class="form-control" placeholder="Enter your Username" required><br>

            <input type="text" name="email" class="form-control" placeholder="Enter your Email" required><br>

            <input type="number" name="contact" class="form-control" placeholder="Input your Mobile Number" required><br>

            <input type="password" name="password" class="form-control" placeholder="Enter your password" required><br>

            <input type="submit" value="Register" name="btn_reg" class="btn btn-secondary btn-block"><br>
        </form>
    </div>
</body>
</html>