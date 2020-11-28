<?php
// require 'header_top.php';
require 'config.php';
echo (dirname(__DIR__).'classes/Star.php');
require dirname(__DIR__).'classes/Star.php';
// require 'classes/Product.php';
$rate = new Star($conn);
$prod = new Product($conn);
$prodRecord = "";
if(!isset($_GET['pid']))
{
    echo "404";
}else{

    $prodRecord = $prod->find($_GET['pid']);
    $star = $rate->productStar($_GET['pid']);
    $review = $rate->reviewCount($_GET['pid']);
    $rate = $rate->ratingCount($_GET['pid']);
    // var_dump($review);
    
}

?>
<style>
body {
    background-color: #f0f0f0;
}

.super_container {
    margin-top: 100px;
    background-color: #f0f0f0;
}
</style>
<script>
$(document).ready(function() {
    $('[data-toggle="collapse"]').click(function() {
        $(this).toggleClass("active");
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
                                            <div class="custom_dropdown_list"> <span
                                                    class="custom_dropdown_placeholder clc">All Categories</span> <i
                                                    class="fas fa-chevron-down"></i>
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
                    <div class="image_selected"><img src="<?= $prodRecord['p_img1']?>" alt=""></div>
                </div>
                <div class="col-lg-6 order-3">
                    <div class="product_description">
                        <div class="product_name">
                            <?= $prodRecord['p_productName'] . " ". $prodRecord['p_productDesc']  ?>

                        </div>
                        <div class="product-rating">
                            <span class="badge badge-success"><i class="fa fa-star"></i> <?= $star ?> Star</span> <span
                                class="rating-review"><?= $rate?> Rating(s) & <?= $review ?> Review(s)</span>
                        </div>
                        <div>
                            <?php
                                if($prod->hasDiscount($_GET['pid'])){ ?>
                            <span class="product_price">₹ <?= $prod->discountAmt($_GET['pid']) ?></span> <strike
                                class="product_discount"> <span style='color:black'>₹
                                    <?= number_format($prodRecord['p_salePrice'], 2)?> <span> </strike>
                            <?php }else { ?>
                            <span class="product_price">₹ <?= $prodRecord['p_salePrice']?>
                                <?php }
                                ?>
                        </div>
                        <?php if($prod->hasDiscount($_GET['pid'])){ ?>
                        <span class="product_saved">You Saved:</span> <span style='color:black'>₹
                            <?= $prod->discount($_GET['pid']) ?><span>
                                <?php } ?>

                                <div>

                                </div>
                                <hr class="singleline">
                                <div>
                                    <span class="product_info"><span><?= ucwords($prodRecord['p_productDesc']) ?>,<br>
                                            <span class="product_info"><b>Model Number:</b>
                                                <?= $prodRecord['p_modelNo']?><span><br> <span
                                                        class="product_info"><b>Color:
                                                        </b><?= $prodRecord['p_color']?><span><br> <span
                                                                class="product_info"><b>Brand:</b>
                                                                <?=  $prodRecord['p_brandName']?><span><br> <span
                                                                        class="product_info"><b>In Stock:</b>
                                                                        <?=$prodRecord['p_quantity'] ?> Units<span>

                                </div>
                                <div>
                                    <div class="row" style="margin-top: 12px;">
                                        <div class="col-xs-6" style="margin-left: 15px;"> <span
                                                class="product_options">Ram Options</span><br> <button
                                                class="btn themebtn btn-sm"><b><?=  $prodRecord['p_ram']?>
                                                    GB</b></button> <button class="btn themebtn btn-sm"><b>8
                                                    GB</b></button></div>
                                        <div class="col-xs-6" style="margin-left: 55px;"> <span
                                                class="product_options">Storage Options</span><br> <button
                                                class="btn themebtn btn-sm"><b><?=  $prodRecord['p_ssdCpty']?>
                                                    GB</b></button> <button class="btn themebtn btn-sm"><b>1
                                                    TB</b></button> </div>
                                    </div>
                                </div>
                                <hr class="singleline">
                                <div class="order_info d-flex flex-row">
                                    <form action="#">
                                </div>
                                <div class="row">
                                    <div class="col-xs-6" style="margin-left: 13px;">
                                        <button data-id ="<?=$prodRecord['p_productId'] ?>" type="button" class="cart btn themebtninv shop-button">Add to Cart</button>
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
        <button class="btn themebtnborder shop-button" type="button" data-toggle="collapse"
            data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
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
                                        <li><?=  ucwords($prodRecord['p_salePackage'])?></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification"><b>Model Number :</b></span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li> <?=  $prodRecord['p_modelNo']?></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification"><b>Part Number :</b></span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li><?=  $prodRecord['p_partNo']?></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification"><b>Color :</b></span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li><?=  ucwords($prodRecord['p_color'])?></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification"><b>Suitable for :</b></span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li><?=  ucwords($prodRecord['p_suitableFor'])?></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification"><b>Processor Brand :</b></span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li><?=  ucwords($prodRecord['p_procBrand'])?></li>
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
            <?php require('similar_products.php')?>
        </div>
    </div>
</section>

<?php
require 'footer.php';
include 'products_header_scripts.php';
?>