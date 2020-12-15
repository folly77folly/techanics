
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport">

  <title>Techanics</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons 
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->

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
  <link rel="stylesheet" type="text/css" href="assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="assets/css/profile.css">
  <link rel="stylesheet" type="text/css" href="assets/css/prddesc.css">
  <link href="assets/css/style.css" rel="stylesheet">
  
</head>
<style>
    @media (max-width:768px){
        .searchbar{
            display: none;
        }
    }
    .searchbar{
        width:30% !important;
        min-width: 250px;
    }
    .container{
        width: 100% !important;
        margin: auto;
    }
    .search-button{
        background-color: #6c757d;
    }
</style>

<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a href=""><img src="assets/img/mainlogo.jpeg" class="logo"></a>
        <div class="col-lg-4 col-xl-5 col-sm-8 col-md-4 d-none d-md-block">
                    <form action="#" class="search-wrap" id="search">
                        <div class="input-group w-100"> <input type="text" id ="searchText" class="form-control search-form" style="width:35%;" placeholder="Search">
                            <div class="input-group-append"> <button id="search" class="btn search-button" type="submit"> <i class="fas fa fa-search" style="color: #fff;"></i> </button> </div>
                        </div>
                    </form>
        </div>
      <!--<form class="form-inline mr-auto">
        <input type="text" class="form-control mr-sm-2 searchbar" placeholder="Search">  
      </form>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
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
              <?php 
        
              if(isset($_SESSION['user_id'])){ ?>
                <li><a href="backend/logout_script.php">Logout</a></li>
              <?php 
            }
              ?>
              
            </ul>
          </li>
          
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header>
  <!-- End Header -->
        

