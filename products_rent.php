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
	background-color: #7eb3bd;
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
	color: #7eb3bd;
} 


#loading
{
 text-align:center; 
 background: url('./assets/loaders/Spinner-1s-200px.gif') no-repeat center; 
 width: 100%;
 height: 100vh;
}

#noproducts
{
    width: 100%;
    height: 100vh;
    text-align:center; 
}

#reset
{
    color: rgba(255, 0, 0, 0.7);
    display:none;
}
#reset:hover
{
    border-color: #ffffff;
    background-color:rgba(34,44,51,0.6);
    color: #fff;
}
.hover:hover
{
    border-color: #ffffff;
    background-color:rgba(34,44,51,0.6);
    color: #fff;
}

.icon-cog {
  color: red;
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
              <a href="contact.php" class="border-button">Contact Us</a>
            </div>
          </div>
        </div>
      </div>

    <div class="container-fluid mb-5 py-4">
        <div class="row g-2">
            <div class="col-md-3">
                <?php
                    require('sidebar.php')
                ?>
            </div>
            <div class="col-md-9 filter_data"> 

             </div> 
             <input type="hidden" id="page">
             <input type="hidden" value="rent" id="product_type">
        </div>
    </div>
</div>  
<?php
    require 'footer.php';
    include 'products_header_scripts.php';
?>