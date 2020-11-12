<?php
    require 'header_top.php';
?>

<style>

@import url('https://fonts.googleapis.com/css2?family=Mulish:wght@200;300&display=swap');
body {
    background-color: #eee;
     font-family: 'Mulish', sans-serif;
}

.processor {
    background-color: #fff;
    margin-top: 5px;
    border-bottom: 1px solid #eee
}
.product img{
    height: 125px;
    width: 160px;
}
.brand,.Ram-type {
    background-color: #fff;
    border-bottom: 1px solid #eee
}

.type {
    background-color: #fff
}

.product {
    padding: 10px;
    background-color: #fff;
    border-radius: 5px;
    position: relative
}

.about span {
    color: #3d2f95;
    font-size: 16px
}

.cart-button button {
    font-size: 12px;
    color: #fff;
    background-color: #3d2f95;
    height: 38px
}

.cart-button button:focus,
button:active {
    font-size: 12px;
    color: #fff;
    background-color: #3d2f95;
    box-shadow: none
}

.product_fav i {
    line-height: 40px;
    color: #3d2f95;
    font-size: 15px
}

.product_fav {
    display: inline-block;
    width: 36px;
    height: 39px;
    background: #FFFFFF;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    border-radius: 11%;
    text-align: center;
    cursor: pointer;
    margin-left: 3px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.product_fav:hover {
    background: #3d2f95
}

.product_fav:hover i {
    color: #fff
}

.about {
    margin-top: 12px
}

.off {
    position: absolute;
    left: 65%;
    top: 6%;
    width: 80px;
    text-align: center;
    height: 30px;
    line-height: 8px;
    border-radius: 5px;
    font-size: 13px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    z-index: 10;
}


.product-btns
{
  display: flex;
  justify-content: center;
}

a {
  text-decoration: none;
  cursor: pointer;
  transition: .3s;
  color: #292929;
}

.btn-small {
  display: inline-block;
  font-size: 14px;
  font-weight: 700;
  text-transform: uppercase;
  padding: 8px 32px;
  border-radius: 50px;
  text-decoration: none;
  box-shadow: -2px -2px 8px white, 
  -2px -2px 12px rgba(255, 255, 255, 0.5), 
  inset 2px 2px 4px rgba(255, 255, 255, 0.1),
   2px 2px 8px rgba(0, 0, 0, 0.15);
}


.btn-round {
  display: inline-block;
  font-size: 14px;
  font-weight: 700;
  text-transform: uppercase;
  height: 45px;
  width: 45px;
  text-align: center;
  line-height: 45px;
  border-radius: 50%;
  text-decoration: none;
  box-shadow: -2px -2px 8px white, 
  -2px -2px 12px rgba(255, 255, 255, 0.5), 
  inset 2px 2px 4px rgba(255, 255, 255, 0.1),
   2px 2px 8px rgba(0, 0, 0, 0.15);
}


.btn-small:hover {
  box-shadow: -2px -2px 8px white,
   -2px -2px 12px rgba(255, 255, 255, 0.5),
    inset 2px 2px 4px rgba(255, 255, 255, 0.1),
     2px 2px 8px rgba(0, 0, 0, 0.15);
  color: #3d2f95;
  text-decoration: none;
  border: 0.04rem solid #3d2f95 ;
}

.btn-small:hover span {
  display: inline-block;
  transform: scale(0.98);
}
.btn-round:hover {
  box-shadow: inset -2px -2px 8px white,
   inset -2px -2px 12px rgba(255, 255, 255, 0.5),
    inset 2px 2px 4px rgba(255, 255, 255, 0.1),
     inset 2px 2px 8px rgba(0, 0, 0, 0.15);
  color:#3d2f95;
  border: 0.04rem solid #3d2f95;
}


.design{
    border-radius: 1rem;
    /* border: 2px solid black!important; */
}

.request-form {
	background-color: #5d4fb5;
	padding: 40px 0px;
	color: #fff;
}

.request-form h4 {
	font-size: 22px;
	font-weight: 600;
}

.request-form span {
	font-size: 15px;
	font-weight: 400;
	display: inline-block;
	margin-top: 10px;
}

.request-form a.border-button {
	margin-top: 12px;
	float: right;
}


.border-button {
	background-color: transparent;
	color: #fff;
	border: 2px solid #fff;
	font-size: 13px;
	text-transform: uppercase;
	font-weight: 700;
	padding: 10px 28px;
	border-radius: 30px;
	display: inline-block;
	transition: all 0.3s;
	outline: none;
	box-shadow: none;
	text-shadow: none;
	cursor: pointer;
}

.border-button:hover {
	background-color: #fff;
	color: #5d4fb5;
} 

</style>
<div class="minh">
<div class="request-form mt-5">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h4>Request a call back right now ?</h4>
            </div>
            <div class="col-md-4">
              <a href="contact.html" class="border-button">Contact Us</a>
            </div>
          </div>
        </div>
      </div>

    <div class="container-fluid mb-5 py-4">
        <div class="row g-2">
         <div class="col-md-3">
              
                
                <div class="processor p-2">
                    <div class="heading d-flex justify-content-between align-items-center">
                        <h6 class="text-uppercase">Processor</h6> <span>--</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Intel Core i7 </label> </div> <span>3</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"> <label class="form-check-label" for="flexCheckChecked"> Intel Core i6 </label> </div> <span>4</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"> <label class="form-check-label" for="flexCheckChecked"> Intel Core i3 </label> </div> <span>14</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"> <label class="form-check-label" for="flexCheckChecked"> Intel Centron </label> </div> <span>8</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"> <label class="form-check-label" for="flexCheckChecked"> Intel Pentinum </label> </div> <span>14</span>
                    </div>
                </div>
                <div class="Ram-type p-2">
                    <div class="heading d-flex justify-content-between align-items-center">
                        <h6 class="text-uppercase">Ram-Type</h6> <span>--</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault">DDR4</label> </div> <span>3</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault">DDR3</label> </div> <span>3</span>
                    </div>
                </div>
                <div class="brand p-2">
                    <div class="heading d-flex justify-content-between align-items-center">
                        <h6 class="text-uppercase">Brand</h6> <span>--</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Apple </label> </div> <span>13</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"> <label class="form-check-label" for="flexCheckChecked"> Asus </label> </div> <span>4</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"> <label class="form-check-label" for="flexCheckChecked"> Dell </label> </div> <span>24</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"> <label class="form-check-label" for="flexCheckChecked"> Lenovo </label> </div> <span>18</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"> <label class="form-check-label" for="flexCheckChecked"> Acer </label> </div> <span>44</span>
                    </div>
                </div>
                <div class="type p-2 mb-2">
                    <div class="heading d-flex justify-content-between align-items-center">
                        <h6 class="text-uppercase">Type</h6> <span>--</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Hybrid </label> </div> <span>23</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"> <label class="form-check-label" for="flexCheckChecked"> Laptop </label> </div> <span>24</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"> <label class="form-check-label" for="flexCheckChecked"> Desktop </label> </div> <span>14</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"> <label class="form-check-label" for="flexCheckChecked"> Touch </label> </div> <span>28</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"> <label class="form-check-label" for="flexCheckChecked"> Tablets </label> </div> <span>44</span>
                    </div>
                </div>
            </div>
            <div class="col-md-9"> 
                 <div class="row ">
                    <div class="col-md-4 ">
                        <div class="product py-4 design design"> <span class="off bg-danger">on rent</span>
                            <div class="text-center"> <img src="assets/img/slide/2.png" width="200"> </div>
                            <div class="about text-center">
                                <h5>One plus 7</h5>
                            </div>
                            <div class="product-btns py-1">
                                <a href="" class="btn-small mr-2"><span>&#8377;</span>879</a>
                            <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                            <a href="" class="btn-round"><i class="fa fa-location-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="product py-4 design"> <span class="off bg-danger">on rent</span>
                            <div class="text-center"> <img src="assets/img/slide/10.png" width="200"> </div>
                            <div class="about text-center">
                                 <h5>Acer aspire </h5>
                            </div>
                            <div class="product-btns py-1">
                                <a href="" class="btn-small mr-2"><span>&#8377;</span>879</a>
                            <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                            <a href="" class="btn-round"><i class="fa fa-location-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4 design"><span class="off bg-danger">10% off on rent </span>
                            <div class="text-center"> <img src="assets/img/slide/11.png" width="200"> </div>
                            <div class="about text-center">
                                <h5>noise smart watch</h5> 
                            </div>
                           <div class="product-btns py-1">
                                <a href="" class="btn-small mr-2"><span>&#8377;</span>879</a>
                            <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                            <a href="" class="btn-round"><i class="fa fa-location-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="product py-4 design"> <span class="off bg-success">-10% OFF</span>
                            <div class="text-center"> <img src="assets/img/slide/5.png" width="200"> </div>
                            <div class="about text-center">
                                <h5>pink t-shirt</h5>
                            </div>
                           <div class="product-btns py-1">
                                <a href="" class="btn-small mr-2"><span>&#8377;</span>879</a>
                            <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                            <a href="" class="btn-round"><i class="fa fa-location-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="product py-4 design">
                            <!-- <span class="off bg-success">-25% OFF</span> -->
                            <div class="text-center"> <img src="assets/img/slide/8.png" width="200"> </div>
                            <div class="about text-center">
                                <h5>Boat headphones</h5>
                            </div>
                           <div class="product-btns py-1">
                                <a href="" class="btn-small mr-2"><span>&#8377;</span>879</a>
                            <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                            <a href="" class="btn-round"><i class="fa fa-location-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="product py-4 design"> <span class="off bg-success">-5% OFF</span>
                            <div class="text-center"> <img src="assets/img/slide/dell-original-imafvwfmecnjpzzj.jpeg" width="200"> </div>
                            <div class="about text-center">
                                <h5>Dell laptop</h5> 
                            </div>
                           <div class="product-btns py-1">
                                <a href="" class="btn-small mr-2"><span>&#8377;</span>879</a>
                            <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                            <a href="" class="btn-round"><i class="fa fa-location-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                   
                 </div> 
             </div> 
        </div>
    </div>
</div>  
<?php
    require 'footer.php';
?>