<?php
session_start();
// if(!isset($_SESSION["user_id"])){
//     header(header:"location:login.php");
// }
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="Assets/fontawesome-free-5.15.4-web/css/all.css">
  <link rel="stylesheet" href="Assets/fontawesome-free-5.15.4-web/css/fontawesome.min.css">
  <!-- CSS Files -->
  <link href="Assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="Assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <!-- <link href="Assets/demo/demo.css" rel="stylesheet" /> -->
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          Shop
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="dashboard.php">
              <p>Dashboard</p>
            </a>
          </li>



          <li class="">
                <a href="#propertiesSubMenu" data-toggle="collapse" class="dropdown-toggle" aria-expanded="false" class="">Products</a>
                <ul class="collpse lisst-unstyled" id="propertiesSubMenu">
                    <li class="active"> 
                        <a href="addingItems.php">Add Product</a>
                    </li>

                    <li>
                        <a href="bought.php">Bought Products</a>
                    </li>                    

                    <li>
                        <a href="allProducts.php">All Products</a>
                    </li>                        
                </ul>
            </li>          

          <li>
            <a href="users.php">
              <p>Users</p>
            </a>
          </li>

          <li>
            <a href="orders.php">
              <p>Orders</p>
            </a>
          </li>

          <li>
            <a href="#">
              <p>Reports</p>
            </a>
          </li>

          <li>
            <a href="login.php">
              <p>LogOut</p>
            </a>
          </li> 

        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
          </div>
            <a class="navbar-brand" href="dashboard.php">Admin Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content bg-light">
        <div class="row">
          <div class="col-md-12">
            <h3 class="description">Add Item</h3>
          </div>
        </div>

        <div class="container">
            <form action="addItemHandler.php" method="post" enctype="multipart/form-data">
                <input type="text" name="p_name" class="form-control" placeholder="Product Name" required><br>
                
                <select name="p_type" id="" class="form-control">
                    <option value="">Product Type</option>
                    <option value="health">Health</option>
                    <option value="food">Food</option>
                    <option value="clothing">Clothing</option>
                    <option value="electronics">Electronics</option>
                    <option value="shoes">Shoes</option>
                </select><br>

                <input type="file" name="p_image" class="form-control" required><br>

                <input type="number" name="p_amount" class="form-control" placeholder="Product Amount" required><br>

                <input type="number" name="p_quantity" class="form-control" placeholder="Available Quantity" required><br>

                <input type="submit" value="Add Item" class="btn btn-secondary btn-block" name="btn_add"><br>
            </form>
        </div>
        
        

      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="Assets/js/core/jquery.min.js"></script>
  <script src="Assets/js/core/popper.min.js"></script>
  <script src="Assets/js/core/bootstrap.min.js"></script>
  <script src="Assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="Assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>
</html>