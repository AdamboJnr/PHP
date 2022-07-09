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
    <form action="registerHandler.php" method="post" enctype="multipart/form-data">
        <div class="container mt-4">
            <h1 class="text-center">Register Here</h1>
            <input type="text" name="username" class="form-control" placeholder="Enter Your Username" required><br>

            <input type="file" name="pic" class="form-control" required><br>

            <input type="number" name="number" class="form-control" placeholder="Enter Your Phone Number" required><br>

            <input type="email" name="email" class="form-control" placeholder="Key in your Email" required><br>

            <input type="password" name="password" class="form-control" placeholder="Type your password" required><br>

            <input type="submit" value="Register" class="btn btn-primary btn-block" name="btn_reg">
        </div>
    </form>
</body>
</html>