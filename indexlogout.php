<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

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
</style>

<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a href="index.php"><img src="assets/img/mainlogo.jpeg" class="logo"></a>
      <form class="form-inline mr-auto">
        <input type="text" class="form-control mr-sm-2 searchbar" placeholder="Search">  
    </form>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li <?php if(isset($home))echo 'class="active"'; ?>><a href="index.php">Home</a></li>
          <li class="drop-down"><a href="">Services</a>
            <ul>
              <li><a href="products_buy.php">Buy</a></li>
              <li><a href="products_rent.php">On Rent</a></li>
              <li><a href="custom.php">Custom PC</a></li>
              <li><a href="amc.php">AMC</a></li>
            </ul>
          </li>
          <li><a href="login.php">Login/Signup</a></li>
          
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header>
  <!-- End Header -->
        


  <!-- End Header -->
        

  <!-- ======= Top Bar ======= -->
  <!-- ======= Header ======= -->
  
  <section class="des">
  <div class="container">
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        
      
        <!-- The slideshow -->
        <div class="carousel-inner">
          
          <div class="carousel-item active">
            <div class="card1">
                <div class="row">
                    <div class="col-md-6 text-center align-self-center">
                        <img src = "assets/img/slide/img1.jpg" class="img-fluid" style=" height:250px;
                        width: 85%;
                        padding: 1rem">
                    </div>
                    <div class="col-md-6 info">
                        <div class="row title mb-2">
                            <div class="col-md-9 col-12">
                                <h1>Apple macbook</h1>
                                <p>A display that never sleep.</p>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star-half-alt checked"></span>
                            </div>
                            <div class="col-md-3 col-12 text-right">
                                 <a href="#"><i class="fas fa-heart"></i></a>
                            </div>
                            
                            
                            <div class="row prices">
                                <label class="radio">
                                    <input type="radio" name="products" value="laptop" checked id="pro">
                                    <span>
                                        <div class="row1">
                                            <b>Mackbook pro</b>
                                        </div>
                                        <div class="row1">
                                            xxxx.xx
                                        </div>
                                    </span>
                                </label> 

                                <label class="radio">
                                    <input type="radio" name="products" value="laptop" id="pro">
                                    <span>
                                        <div class="row1">
                                            <b>Mackbook pro 2</b>
                                        </div>
                                        <div class="row1">
                                            xxxx.xx
                                        </div>
                                    </span>
                                </label> 

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row lower">
                    <div class="col">
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                           <i class="fas fa-arrow-left"></i>
                          </a>
                          <a class="carousel-control-next" href="#demo" data-slide="next">
                           <i class="fas fa-arrow-right"></i>
                          </a>
                    </div>
                    <div class="col text-right align-self-center">
                        <button class="btn">BUY NOW</button>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card1">
                <div class="row">
                    <div class="col-md-6 text-center align-self-center">
                        <img src = "assets/img/slide/img1.jpg" class="img-fluid" style=" height:250px;
                        width: 85%;
                        padding: 1rem">
                    </div>
                    <div class="col-md-6 info">
                        <div class="row title mb-2">
                            <div class="col-md-9 col-12">
                                <h1>Apple macbook</h1>
                                <p>A display that never sleep.</p>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star-half-alt checked"></span>
                            </div>
                            <div class="col-md-3 col-12 text-right">
                                 <a href="#"><i class="fas fa-heart"></i></a>
                            </div>
                            
                            
                            <div class="row prices">
                                <label class="radio">
                                    <input type="radio" name="products" value="laptop" checked id="pro">
                                    <span>
                                        <div class="row1">
                                            <b>Mackbook pro</b>
                                        </div>
                                        <div class="row1">
                                            xxxx.xx
                                        </div>
                                    </span>
                                </label> 

                                <label class="radio">
                                    <input type="radio" name="products" value="laptop" id="pro">
                                    <span>
                                        <div class="row1">
                                            <b>Mackbook pro 2</b>
                                        </div>
                                        <div class="row1">
                                            xxxx.xx
                                        </div>
                                    </span>
                                </label> 

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row lower">
                    <div class="col">
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                           <i class="fas fa-arrow-left"></i>
                          </a>
                          <a class="carousel-control-next" href="#demo" data-slide="next">
                           <i class="fas fa-arrow-right"></i>
                          </a>
                    </div>
                    <div class="col text-right align-self-center">
                        <button class="btn">BUY NOW</button>
                    </div>
                </div>
            </div>
          </div>
        </div>
        </div>
  </div>
</section> 

  <main id="main">
    <section class="header-factsheet">
      <div class="container py-5">
        <div class="section-title">
          <h2>Services</h2>
        </div>
        <div class="row">
  
          <div class="col-lg-3 col-md-4">
            <div class="card text-center">
              <div class="card-body rotate-link">
                <i class="rotate-icon fa-3x fas fa-chart-line"></i>
                <h2>BUY</h2>
              </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4">
            <div class="card text-center">
              <div class="card-body rotate-link">
                <i class="rotate-icon fa-3x fas fa-tools"></i>
                <h2>ON RENT</h2>
               
              </div>
            </div>
          </div>
  
          <div class="col-lg-3 col-md-4">
            <div class="card text-center">
              <div class="card-body rotate-link">
                <i class="rotate-icon fa-3x fas fa-desktop"></i>
                <h2>CUSTOM PC</h2>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="card text-center">
              <div class="card-body rotate-link">
                <i class="rotate-icon fa-3x fas fa-shopping-cart"></i>
                <h2>AMC</h2>
               
              </div>
            </div>
          </div>
        </div>
        
      </div>
      </div>
    </section>

    <div class='container-fluid'>
      <div class="row mb-5 mt-5">
      <div class="adv mx-auto col-md-4 col-10 mt-3"> <img class='img-thumbnail' src="assets/img/slide/7.png" style="height: 250px;">
          <div class="card-body text-center mx-auto">
          
                  <h5 class="card-title font-weight-bold">Yail wrist watch</h5>
                  <p class="card-text">₹ 299</p> <a href="#" class="btn details px-auto">view details</a><br /> <a href="#" class="btn cartt px-auto">ADD TO CART</a>
              
          </div>
      </div>

      <div class="adv mx-auto col-md-4 col-10 mt-3"> <img class='img-thumbnail' src="assets/img/slide/8.png" style="height: 250px;"/>
        <div class="card-body text-center mx-auto">
            
                <h5 class="card-title font-weight-bold">Yail wrist watch</h5>
                <p class="card-text">₹ 299</p> <a href="#" class="btn details px-auto">view details</a><br /> <a href="#" class="btn cartt px-auto">ADD TO CART</a>
        
        </div>
    </div>
      </div>
  </div>


    <section class="section-bg">
      <div class="container">
         
          <div class="row">
              <div class="col-xl-12">
                  <div class="section-title">
                      <h2>Featured-Products</h2>
                  </div>
              </div>
          </div>

          <div class="row">
             
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="single-product">
                      <div class="product-thumb">
                          <img src="assets/img/slide/img1.jpg" alt="">
                      </div>
                      <div class="product-title">
                          <h3><a href="">Revolutionary Andriod oneplus</a></h3>
                      </div>
                      <div class="product-btns">
                          <a href="" class="btn-small mr-2">₹ 879</a>
                          <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                         
                      </div>
                  </div>
              </div>

              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="single-product">
                      <div class="product-thumb">
                          <img src="assets/img/slide/img1.jpg" alt="">
                      </div>
                      <div class="product-title">
                          <h3><a href="">Best collection casual pink shirt</a></h3>
                      </div>
                      <div class="product-btns">
                          <a href="" class="btn-small mr-2">₹ 879</a>
                          <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                        
                      </div>
                  </div>
              </div>

              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="single-product">
                      <div class="product-thumb">
                          <img src="assets/img/slide/img1.jpg" alt="">
                      </div>
                      <div class="product-title">
                          <h3><a href="">Formal Blue shirt for office purpose</a></h3>
                      </div>
                      <div class="product-btns">
                          <a href="" class="btn-small mr-2">₹ 79</a>
                          <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                          
                      </div>
                  </div>
              </div>

              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="single-product">
                      <div class="product-thumb">
                          <img src="assets/img/slide/img1.jpg" alt="">
                      </div>
                      <div class="product-title">
                          <h3><a href="">Sports white tshirt for long use</a></h3>
                      </div>
                      <div class="product-btns">
                          <a href="" class="btn-small mr-2">₹ 879</a>
                          <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                         
                      </div>
                  </div>
              </div>

          </div>

          <!-- <div class="row button-center">
              <div class="col-xl-6 centered">
                  <a href="" class="bttn-def"><span>Load more</span></a>
              </div>
          </div> -->

      </div>
  </section>
    
  
  <section class="section-bg">
    <div class="container">
       
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title">
                    <h2>Products with discount</h2>
                </div>
            </div>
        </div>

        <div class="row">
           
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-product">
                    <div class="product-thumb">
                        <img src="assets/img/slide/img1.jpg" alt="">
                    </div>
                    <div class="product-title">
                        <h3><a href="">Revolutionary Andriod oneplus</a></h3>
                    </div>
                    <div class="product-btns">
                        <a href="" class="btn-small mr-2">₹ 879</a>
                        <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                       
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-product">
                    <div class="product-thumb">
                        <img src="assets/img/slide/img1.jpg" alt="">
                    </div>
                    <div class="product-title">
                        <h3><a href="">Best collection casual pink shirt</a></h3>
                    </div>
                    <div class="product-btns">
                        <a href="" class="btn-small mr-2">₹ 879</a>
                        <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                      
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-product">
                    <div class="product-thumb">
                        <img src="assets/img/slide/img1.jpg" alt="">
                    </div>
                    <div class="product-title">
                        <h3><a href="">Formal Blue shirt for office purpose</a></h3>
                    </div>
                    <div class="product-btns">
                        <a href="" class="btn-small mr-2">₹ 879</a>
                        <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                        
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-product">
                    <div class="product-thumb">
                        <img src="assets/img/slide/img1.jpg" alt="">
                    </div>
                    <div class="product-title">
                        <h3><a href="">Sports white tshirt for long use</a></h3>
                    </div>
                    <div class="product-btns">
                        <a href="" class="btn-small mr-2">₹ 879</a>
                        <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                       
                    </div>
                </div>
            </div>

        </div>

        <!-- <div class="row button-center">
            <div class="col-xl-6 centered">
                <a href="" class="bttn-def"><span>Load more</span></a>
            </div>
        </div> -->

    </div>
</section>
  
        
    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Brands</h2>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="assets/img/clients/client-1.png" alt="">
          <img src="assets/img/clients/client-2.png" alt="">
          <img src="assets/img/clients/client-3.png" alt="">
          <img src="assets/img/clients/client-4.png" alt="">
          <img src="assets/img/clients/client-5.png" alt="">
          <img src="assets/img/clients/client-6.png" alt="">
          <img src="assets/img/clients/client-7.png" alt="">
          <img src="assets/img/clients/client-8.png" alt="">
        </div>

      </div>
    </section><!-- End Our Clients Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php
    require 'footer.php';
?>

