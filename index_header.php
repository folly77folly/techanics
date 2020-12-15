
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Techanics</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/index.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="assets/css/profile.css">
  <link rel="stylesheet" type="text/css" href="assets/css/prddesc.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
  <header class="section-header">
    <section class="header-main border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-4 col-md-4 col-5"> <a href="#" class="brand-wrap" data-abc="true">
                 <!-- <span class="logo">TECHANICS</span> </a>  -->
                 <a class="navbar-brand mr-auto logo" href=""><img src="assets/img/mainlogo.jpeg" alt="logo"></a>
                </div>
                <div class="col-lg-4 col-xl-5 col-sm-8 col-md-4 d-none d-md-block">
                    <form action="#" class="search-wrap">
                        <div class="input-group w-100"> <input type="text" class="form-control search-form" style="width:35%; background-color: #e2ecee;" placeholder="Search">
                            <div class="input-group-append"> <button class="btn  search-button" type="submit"> <i class="fas fa fa-search" style="color: #fff;"></i> </button> </div>
                        </div>
                    </form>
                </div>
        <nav class="nav-menu d-none d-lg-block ml-auto">
        <ul>
          <li <?php if(isset($home))echo 'class="active"'; ?>><a href="">Home</a></li>
          <li class="drop-down"><a href="">Services</a>
            <ul>
              <li><a href="products_buy.php">Shop</a></li>
              <li><a href="products_rent.php">Rent</a></li>
              <li><a href="repair.php">Repair</a></li>
              <li><a href="custom.php">Custom PC</a></li>
              <li><a href="amc.php">AMC</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="">Account</a>
            <ul>
              <li><a href="Profile.php">Profile</a></li>
              <li><a href="myorder.php">My Orders</a></li>
              <li><a href="cart.php"><!--<i class="fa fa-cart-arrow-down"></i>-->Cart</a></li>
              <li><a href="wishlist.php">Wishlist</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <?php if(isset($_SESSION['user_id'])){ ?>
                <li><a href="indexlogout.php">Logout</a></li>
              <?php 
            }
              ?>
            </ul>
          </li>
          
        </ul>
      </nav>
            </div>
        </div>
        
    </section>
    <nav class="navbar navbar-expand-md navbar-main">
        <div class="container-fluid">
            <form class="d-md-none my-2">
                <div class="input-group"> <input type="search" name="search" class="form-control" placeholder="Search" required="">
                    <div class="input-group-append"> <button type="submit" class="btn btn-secondary"> <i class="fa fa-search"></i> </button> </div>
                </div>
            </form> <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#dropdown6" aria-expanded="false"> <span class="navbar-toggler-icon"></span> </button>
            <div class="navbar-collapse collapse" id="dropdown6" style="">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" data-abc="true" aria-expanded="false">Laptops</a>
                        <div class="dropdown-menu"> <a class="dropdown-item" href="" data-abc="true">Lenovo</a> <a class="dropdown-item" href="" data-abc="true">Dell</a> <a class="dropdown-item" href="" data-abc="true">HP</a> <a class="dropdown-item" href="" data-abc="true">Apple</a> </div>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" data-abc="true" aria-expanded="false">PCs</a>
                        <div class="dropdown-menu"> <a class="dropdown-item" href="" data-abc="true">Lenovo</a> <a class="dropdown-item" href="" data-abc="true">Dell</a> <a class="dropdown-item" href="" data-abc="true">HP</a> <a class="dropdown-item" href="" data-abc="true">Apple</a> </div>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" data-abc="true" aria-expanded="false">Mobiles</a>
                        <div class="dropdown-menu"> <a class="dropdown-item" href="" data-abc="true">Lenovo</a> <a class="dropdown-item" href="" data-abc="true">Dell</a> <a class="dropdown-item" href="" data-abc="true">HP</a> <a class="dropdown-item" href="" data-abc="true">Apple</a> </div>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="repair.php" data-abc="true">Repair</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="contact.php" data-abc="true">Contact</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="about.php" data-abc="true">About us</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="faq.php" data-abc="true">FAQ</a> </li>
                </ul>
            </div>
        </div>
    </nav>
</header>