<?php
require 'header_top.php';
?>

<style>
    body{
        background-color: #f0f0f0;
    }
    .super_container{
        margin-top: 100px;
        background-color: #f0f0f0;
    }
</style>
<script>
          $(document).ready(function() {
            $('[data-toggle="collapse"]').click(function() {
            $(this).toggleClass( "active" );
            if ($(this).hasClass("active")) {
                $(this).text("Read less");
            } else {
                $(this).text("More details about product");
            }
        });
    });
</script>
  <div class="super_container">
     <header class="header" style="display: none;">
        <div class="header_main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="#" class="header_search_form clearfix">
                                        <div class="custom_dropdown">
                                            <div class="custom_dropdown_list"> <span class="custom_dropdown_placeholder clc">All Categories</span> <i class="fas fa-chevron-down"></i>
                                                <ul class="custom_list clc">
                                                    <li><a class="clc" href="#">All Categories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> 
      
    <div class="single_product">
        <div class="container-fluid" style=" background-color: #f0f0f0; padding: 11px;">
            <div class="row">
               <div class="col-lg-1 order-lg-1 order-2">
                     <!-- <ul class="image_list">
                        <li data-image="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg"><img src="assets/img/slide/2.png" alt=""></li>
                       <li data-image="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_2.jpg"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_2.jpg" alt=""></li>
                       <li data-image="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_3.jpg"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_3.jpg" alt=""></li> 
                     </ul>  -->
                </div>
                <div class="col-lg-5 order-lg-2 order-1 design">
                    <div class="image_selected"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg" alt=""></div>
                </div>
                <div class="col-lg-6 order-3">
                    <div class="product_description">
                        <div class="product_name">Acer Aspire 3 Celeron Dual Core - (2 GB/500 GB HDD/Windows 10 Home) A315-33 Laptop (15.6 inch, Black, 2.1 kg)

                        </div>
                        <div class="product-rating">
                          <span class="badge badge-success"><i class="fa fa-star"></i> 4.5 Star</span> <span class="rating-review">35 Ratings & 45 Reviews</span>
                        </div>
                        <div> 
                          <span class="product_price">₹ 29,000</span> <strike class="product_discount"> <span style='color:black'>₹ 2,000<span> </strike> 
                          </div>
                        <div> 
                          <span class="product_saved">You Saved:</span> <span style='color:black'>₹ 2,000<span> 

                          </div>
                        <hr class="singleline">
                        <div> 
                          <span class="product_info"><span>2 in 1 Laptop, Power Adaptor, Active Stylus Pen, User Guide,<br> <span class="product_info"><b>Model Number:</b> ABC123<span><br> <span class="product_info"><b>Color: </b>black<span><br> <span class="product_info"><b>Brand:</b> Lenevo<span><br> <span class="product_info"><b>In Stock:</b> 25 units sold this week<span> 

                          </div>
                        <div>
                            <div class="row" style="margin-top: 12px;">
                                <div class="col-xs-6" style="margin-left: 15px;"> <span class="product_options">Ram Options</span><br> <button class="btn themebtn btn-sm"><b>4 GB</b></button> <button class="btn themebtn btn-sm"><b>8 GB</b></button></div>
                                <div class="col-xs-6" style="margin-left: 55px;"> <span class="product_options">Storage Options</span><br> <button class="btn themebtn btn-sm"><b>500 GB</b></button> <button class="btn themebtn btn-sm"><b>1 TB</b></button> </div>
                            </div>
                        </div>
                        <hr class="singleline">
                        <div class="order_info d-flex flex-row">
                            <form action="#">
                        </div>
                        <div class="row">
                             <div class="col-xs-6" style="margin-left: 13px;">
                                <button type="button" class="btn themebtninv shop-button">Add to Cart</button>
                                <button type="button" class="btn themebtninv shop-button">Buy Now</button>
                                
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
      
</div>

<section class="pt-0">
    <div class="container" style="margin-left: 48%;">
        <button class="btn themebtnborder shop-button" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            All Details 
        </button>
    </div>
    <div class="collapse" id="collapseExample">
        <div class="container">
            <div class="row row-underline">
                <div class="col-md-6"> <span class=" deal-text">Specifications</span> </div>
                    <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
                </div>
            <div class="row">
        <div class="col-md-12">
        <table class="col-md-12">
                <tbody>
                <tr class="row mt-8">
                    <td class="col-md-4"><span class="p_specification"><b>Sales Package :</b></span> </td>
                    <td class="col-md-8">
                        <ul>
                            <li>2 in 1 Laptop, Power Adaptor, Active Stylus Pen, User Guide, Warranty Documents</li>
                        </ul>
                    </td>
                </tr>
                <tr class="row mt-10">
                    <td class="col-md-4"><span class="p_specification"><b>Model Number :</b></span> </td>
                    <td class="col-md-8">
                        <ul>
                            <li> 14-dh0107TU </li>
                        </ul>
                    </td>
                </tr>
                <tr class="row mt-10">
                    <td class="col-md-4"><span class="p_specification"><b>Part Number :</b></span> </td>
                    <td class="col-md-8">
                        <ul>
                            <li>7AL87PA</li>
                        </ul>
                    </td>
                </tr>
                <tr class="row mt-10">
                    <td class="col-md-4"><span class="p_specification"><b>Color :</b></span> </td>
                    <td class="col-md-8">
                        <ul>
                            <li>Black</li>
                        </ul>
                    </td>
                </tr>
                <tr class="row mt-10">
                    <td class="col-md-4"><span class="p_specification"><b>Suitable for :</b></span> </td>
                    <td class="col-md-8">
                        <ul>
                            <li>Processing & Multitasking</li>
                        </ul>
                    </td>
                </tr>
                <tr class="row mt-10">
                    <td class="col-md-4"><span class="p_specification"><b>Processor Brand :</b></span> </td>
                    <td class="col-md-8">
                        <ul>
                            <li>Intel</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
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
                    <h2>Similar-Products</h2>
                </div>
            </div>
        </div>

        <div class="row">
           
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-product">
                    <div class="product-thumb">
                        <img src="assets/img/slide/1.png" alt="">
                    </div>
                    <div class="product-title">
                        <h3><a href="">Revolutionary Andriod oneplus</a></h3>
                    </div>
                    <div class="product-btns">
                        <a href="" class="btn-small mr-2"><span>&#8377;</span>879</a>
                        <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-product">
                    <div class="product-thumb">
                        <img src="assets/img/slide/1.png" alt="">
                    </div>
                    <div class="product-title">
                        <h3><a href="">Best collection casual pink shirt</a></h3>
                    </div>
                    <div class="product-btns">
                        <a href="" class="btn-small mr-2"><span>&#8377;</span>879</a>
                        <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-product">
                    <div class="product-thumb">
                        <img src="assets/img/slide/5.png" alt="">
                    </div>
                    <div class="product-title">
                        <h3><a href="">Formal Blue shirt for office purpose</a></h3>
                    </div>
                    <div class="product-btns">
                        <a href="" class="btn-small mr-2"><span>&#8377;</span>879</a>
                        <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-product">
                    <div class="product-thumb">
                        <img src="assets/img/slide/1.png" alt="">
                    </div>
                    <div class="product-title">
                        <h3><a href="">Sports white tshirt for long use</a></h3>
                    </div>
                    <div class="product-btns">
                        <a href="" class="btn-small mr-2"><span>&#8377;</span>879</a>
                        <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

<?php
require 'footer.php';
?>