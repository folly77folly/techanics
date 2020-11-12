<?php
    require 'header_top.php';
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
								<tr>
									<td class="column22"> <img src="assets/img/slide/1.png" class="img-fluid mt-2 mb-2 mx-auto" style="
										width: 100px"></td>
									<td class="column3">iPhone X 64Gb Grey</td>
									<td class="column4">$999.00</td>
									<td class="column5 text-success">In Stock</td>
									<td class="column6"> <button class="btn themebtninv" type="button">Buy</button>
										<button class="btn themebtninv" type="button">Add To Cart</button>
                                                                                <button class="btn themebtninv" type="button">View</button>
                                                                        </td> 
									<td class="column7"><a href="#" class='btn themebtn'>Remove</a></td>
								</tr>
								<tr>
									<td class="column22"> <img src="assets/img/slide/1.png" class="img-fluid mt-2 mb-2 mx-auto" style="
										width: 100px"></td>
									<td class="column3">iPhone X 64Gb Grey</td>
									<td class="column4">$999.00</td>
									<td class="column5 text-danger">Out of Stock</td>
									<td class="column6"> <button class="btn themebtninv" type="button">Buy</button>
										<button class="btn themebtninv" type="button">Add To Cart</button>
                                                                                <button class="btn themebtninv" type="button">View</button>
                                                                        </td>
									<td class="column7"><a href="#" class='btn themebtn'>Remove</a></td>
								</tr>
								<tr>
									<td class="column22"> <img src="assets/img/slide/1.png" class="img-fluid mt-2 mb-2 mx-auto" style="
										width: 100px"></td>
									<td class="column3">iPhone X 64Gb Grey</td>
									<td class="column4">$999.00</td>
									<td class="column5 text-success">In Stock</td>
									<td class="column6"> <button class="btn themebtninv" type="button">Buy</button>
										<button class="btn themebtninv" type="button">Add To Cart</button>
                                                                                <button class="btn themebtninv" type="button">View</button>
                                                                        </td>
									<td class="column7"><a href="#" class='btn themebtn'>Remove</a></td>
								</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

<?php
    require 'footer.php';
?>