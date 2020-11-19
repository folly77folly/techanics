<?php
$similarRecord = "";
if(!isset($_GET['pid']))
{
    echo "404";
}else{
    $similarRecord = $product->findSimilar($_GET['pid']);
}

?>
<?php foreach($similarRecord as $record){?>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="single-product">
        <div class="product-thumb">
            <img src="<?=$record['p_img1'] ?>" alt="">
        </div>
        <div class="product-title">
            <h3><a href=""><?=$record['p_productName'] ?></a></h3>
        </div>
        <div class="product-btns">
            <a href="product.php?pid=<?=$record['p_id'] ?>" class="btn-small mr-2"><span>&#8377;</span><?=$record['p_salePrice'] ?></a>
            <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
        </div>
    </div>
</div>
<?php } ?>