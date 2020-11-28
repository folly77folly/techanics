 <?php
 session_start();
require 'index_header.php';
?>  

  <!-- ======= Top Bar ======= -->
  <!-- ======= Header ======= -->

  
  <section class="des pt-0">
    <div id="demo" class="carousel slide" data-ride="carousel" style="width: 100%;">

        <!-- Indicators -->
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          
          <div class="carousel-item active">
            <div class="card1">
                <div class="row">
                    <div class="col-md-6 text-center align-self-center">
                        <img src = "assets/img/slide/img1.jpg" class="img-fluid mob1" id="thalap"> <!--today-->
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
                                    <input type="radio" name="products" value="laptop" checked id="pro"><!--today-->
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
                                    <input type="radio" name="products" value="laptop" id="pro"><!--today-->
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
                        <img src = "assets/img/slide/img1.jpg" class="img-fluid mob1" id="theImage" ><!--today-->
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
                                    <input type="radio" name="products1" value="laptop" checked id="pro"><!--today-->
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
                                    <input type="radio" name="products1" value="laptop" id="pro2"><!--today-->
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
</section> 

  <main id="main">
    <section class="header-factsheet">
      <div class="container py-4">
        <div class="section-title">
        <!-- <h2>WelcomeA <?php echo $_SESSION["user_id"] ?></h2> -->
          <h2>Services</h2>
        </div>
        <div class="row">
          <div class="col-lg-1 col-md-0">
            
          </div>
            
          <div class="col-lg-2 col-md-4">
            <div class="card text-center">
              <div class="card-body rotate-link">
                <a href="products_buy.php"><i class="rotate-icon fa-3x fas fa-shopping-cart"></i>
              <h2>SHOP</h2></a>
               
              </div>
            </div>
          </div>  
            
          <div class="col-lg-2 col-md-4">
            <div class="card text-center">
              <div class="card-body rotate-link">
              <a href="products_rent.php"><i class="rotate-icon fa-3x fas fa-hands-helping"></i>
             <h2>RENT</h2></a>
              </div>
            </div>
          </div>
          
          <div class="col-lg-2 col-md-4">
            <div class="card text-center">
              <div class="card-body rotate-link">
                 <a href="repair.php"><i class="rotate-icon fa-3x fas fa-tools"></i>
               <h2>REPAIR</h2></a>
              </div>
            </div>
          </div>
  
          <div class="col-lg-2 col-md-4">
            <div class="card text-center">
              <div class="card-body rotate-link">
                <a href="custom.php"><i class="rotate-icon fa-3x fas fa-desktop"></i>
                <h2>CUSTOM PC</h2></a>
                
              </div>
            </div>
          </div>
            
          <div class="col-lg-2 col-md-4">
            <div class="card text-center">
              <div class="card-body rotate-link">
                <a href="amc.php"><i class="rotate-icon fa-3x fas fa-shopping-cart"></i>
              <h2>AMC</h2></a>
               
              </div>
            </div>
          </div>
            
          <div class="col-lg-1 col-md-0">
            
          </div>
            
        </div>
        
      </div>
      </div>
    </section>

    <!-- <div class='container-fluid'>
      <div class="row mb-4">
      <div class="adv mx-auto col-md-4 col-10 mt-3"> <img class='img-thumbnail' src="assets/img/slide/7.png" style="height: auto; width: auto;">
          <div class="card-body text-center mx-auto">
                  <h5 class="card-title font-weight-bold">Yail wrist watch</h5>
                  <p class="card-text">$299</p> <a href="#" class="btn details px-auto">view details</a><br /> <a href="#" class="btn cartt px-auto">ADD TO CART</a>
          </div>
      </div>

      <div class="adv mx-auto col-md-4 col-10 mt-3"> <img class='img-thumbnail' src="assets/img/slide/8.png" style="height:auto;width: auto;"/>
        <div class="card-body text-center mx-auto">
                <h5 class="card-title font-weight-bold">Yail wrist watch</h5>
                <p class="card-text">$299</p> <a href="#" class="btn details px-auto">view details</a><br /> <a href="#" class="btn cartt px-auto">ADD TO CART</a>
        </div>
    </div>
      </div>
  </div> -->

    <section class="pt-5">
    <div class="row">
              <div class="col-12">
                  <div class="section-title">
                      <h2>Top-Deals</h2>
                  </div>
              </div>
    </div>
    <div class="container wrapper mb-5">
                
        <div class="row">
            <div class="col-lg-4 col-md-4">
         <div class="cardq text-center">
          <div class="image"> <img src="assets/img/slide/2.png" width="250"> </div>
          <div class="about-product text-center">
              <h3>oneplus 8</h3>
              <h4><span>&#8377;</span>38000</h4><a href="product.php"><button class="btn btn-success buy-now">Buy Now</button></a>
          </div>
         </div>
    </div>

    <div class="col-lg-4 col-md-4">
        <div class="cardq text-center second">
            <div class="image"> <img src="assets/img/slide/10.png" width="250"> </div>
            <div class="about-product text-center ">
                <h3>macbook air</h3>
                <h4><span>&#8377;</span>80000</h4><a href="product.php"><button class="btn btn-success buy-now">Buy Now</button></a>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="cardq text-center">
            <div class="image"> <img src="assets/img/slide/9.png" width="250"> </div>
            <div class="about-product text-center">
                <h3>Mivi pods</h3>
                <h4><span>&#8377;</span>2000</h4><a href="product.php"><button class="btn btn-success buy-now">Buy Now</button></a>
            </div>
        </div>
      </div>
      
    </div>
    </div>
    </section>

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
                          <a class="btn-small mr-2">₹ 879</a>
                          <a href="products_buy.php" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                         
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
                          <a href="products_buy.php" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                        
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
                          <a href="products_buy.php" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                          
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
                          <a href="products_buy.php" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                         
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </section>
    
  
  <section>
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
                        <a href="products_buy.php" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                       
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
                        <a href="products_buy.php" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                      
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
                        <a href="products_buy.php" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                        
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
                        <a href="products_buy.php" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                       
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="container-fluid px-1 pt-5 mx-auto row justify-content-center">
    <div class="col-xl-9 col-lg-10 col-sm-11 ">
        <div class="aadd pl-4 pl-md-5 pr-3">
            <div class="row">
                <div class="left-side col-md-6">
                    <p class="pt-5 mb-0">Converse All Star</p>
                    <h3 class="pb-3">Make Your Day Comfortable</h3> <button class="btn btn-blue mb-md-5">Shop Now</button>
                </div>
                <div class="right-side col-md-6"> <img class="shoe-img pl-5 pl-md-0" src="assets/img/slide/9.png"> </div>
            </div>
        </div>
    </div>
</div>
        
    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients mb-5">
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

