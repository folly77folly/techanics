<?php
	require './backend/session_start_script.php';
	require 'config.php';
	require 'header_top.php';
	require './classes/Wishlist.php';
	require './classes/Product.php';
	$list = new Wishlist($conn);
	$product_item = new Product($conn);
	$productRecord = $list->allLikedProducts($_SESSION["user_id"]);
	// var_dump($productRecord);
?>
<style>
    .limiter{
        min-height: 80vh;
        padding-top: 80px;
    }
    @media (min-width:728px){
        .themebtninv{
        margin-left: 10px;
        }
    }
    .themebtninv{
        margin: 10px;
        border-radius: 15px;
    }
    .table100 td{
        text-align: center;
    }
</style>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column2 text-center">Product</th>
								<th class="column3 text-center">Name</th>
								<th class="column4 text-center">Price</th>
								<th class="column5 text-center">Availability</th>
								<th class="column6 text-center"></th>
								<th class="column7 text-center"></th>
							</tr>
						</thead>
						<tbody>
							<?php
							if($productRecord){

								foreach($productRecord as $wishItem){
									// var_dump($wishItem);
									?>
								<tr>
									<td class="column22"> <img src="<?= $wishItem['p_img1'] ?>" class="img-fluid mt-2 mb-2 mx-auto" style="
										width: 100px"></td>
									<td class="column3"><?= $wishItem['p_productName'] ?></td>
									<?php if( $product_item->hasDiscount($wishItem['p_id']) ){ ?>
									<td class="column4"><?= number_format($product_item->discountAmt($wishItem['p_id']),2) ?></td>
									<?php }else {?>
									<td class="column4"><?= number_format($wishItem['p_salePrice'], 2) ?></td>
									<?php } ?>
									<?php
									if($product_item->Quantity($wishItem['p_id']) < 1){?>
									<td class="column5 text-danger">Out of Stock</td>
									<?php }else{ ?>
										<td class="column5 text-success">In Stock</td>
									<?php
									}
									?>
									<td class="column6"> <a href="product?pid=<?=$wishItem['p_id'] ?>" class="btn themebtninv" type="button">Buy</a>
										<button data-id="<?=$wishItem['p_productId']  ?>" class="btn themebtninv cart" type="button">Add To Cart</button>
                                                                                <button class="btn themebtninv" type="button">View</button>
                                                                        </td>
									<td class="column7">
									<form action="backend/wishlist_script.php" method="POST">
									<input type="hidden" value="<?= $wishItem['p_id'] ?>" name="remove">
									<button type="submit" class='btn themebtn'>Remove</button>
									</form>
									</td>
								</tr>
							<?php
							}		
						}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

<?php
	require 'footer.php';
	require 'products_header_scripts.php'
?>