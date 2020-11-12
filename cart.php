
<?php
    require 'header_top.php';
?>
<style>
.main
{
  float: left;
  display: flexbox auto;
  
}
.mycontainer{
    width: 95%;
    margin: auto;
}
.card-box {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 280px;
  margin-bottom: 20px;
  text-align: center;
  font-family: "Times New Roman", Times, serif!important;
}
.card-box .price {
  color: gray;
  font-size:15px;
  padding: 10px 0px 10px 0px;
}
.card-box .btn_remove {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #3d2f95;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  margin-bottom: 2px;

}
.card-box button:hover {
  opacity: 0.7;
}



.split {
  
  height: 100%;
  width: 100%;
  position: relative;
  overflow-x: hidden;
  padding: 10px,20px,10px,20px;

  background-color:white;
  
}

h1{ 
  color: gray;
  font-size: 20px;
  padding: 10px 0px 10px 0px;
}
/************/
body {
  font-family: Arial;
  font-size: 17px;
  padding: 0px;
}

.summary p{
  font-size: 20px;
}
.summary {
  background-color: white;
  padding: 10px  20px;
  border: 2px solid #3d2f95;
  color: #3d2f95;

}

span.price {
  float: right;
  color: gray;
  font-size: 15px;
}

h6{
  color: gray;
  padding-bottom: 10px;
}

.btn-circle.btn-sm { 
            width: 30px; 
            height: 30px; 
            padding: 10px 10px; 
            border-radius: 15px; 
            font-size: 1rem; 
            text-align: center; 
        } 
        .btn-circle.btn-md { 
            width: 50px; 
            height: 50px; 
            padding: 10px 10px; 
            border-radius: 25px; 
            font-size: 20px; 
            text-align: center; 
        }

        .btn_order{
          background-color: #3d2f95;
          color: white;
        width: 200px;
        height: 40px;
        border-radius: 50px;
        margin-bottom: 10px;
        }
        .moveside{
          display: flex;
  justify-content: center;
        }
        
        
         
</style>
 <!--cart items-->
 <div class="mycontainer">
 <div class="row minh">
  <div class="col-md-9 col-12">
  <div class="row">
      <div class="col-12 col-md-4">
          <div class="main">
                  <div class="card-box">
                      <img src="assets/img/blog-3.jpg" alt="img" style="width:100%;height:100%">
                      
                       <h1>Product Name</h1>
                      <h8>
                      <div class="btn btn-light btn-circle btn-sm">+</div>
                      <div class="btn btn-dark btn-circle btn-sm">-</div></h8>
                      <p class="price">Price 500</p>
                      <p><button class="btn_remove">Remove</button></p>
                    </div>
                  </div>
      </div>
      <div class="col-12 col-md-4">
          <div class="main">
                  <div class="card-box">
                      <img src="assets/img/blog-5.jpg" alt="img" style="width:100%;height:100%">
                      
                       <h1>Product Name</h1>
                      <h8>
                      <div class="btn btn-light btn-circle btn-sm">+</div>
                      <div class="btn btn-dark btn-circle btn-sm">-</div></h8>
                      <p class="price">Price 500</p>
                      <p><button class="btn_remove">Remove</button></p>
                    </div>
                  </div>
      </div>
      <div class="col-12 col-md-4">
          <div class="main">
                  <div class="card-box">
                      <img src="assets/img/blog-4.jpg" alt="img" style="width:100%;height:100%">
                      
                       <h1>Product Name</h1>
                      <h8>
                      <btn class="btn btn-light btn-circle btn-sm">+<btn>
                      <btn class="btn btn-dark btn-circle btn-sm">-</btn></h8>
                      <p class="price">Price 500</p>
                      <p><button class="btn_remove">Remove</button></p>
                    </div>
                  </div>
      </div>
      <div class="col-12 col-md-4">
          <div class="main">
                  <div class="card-box">
                      <img src="assets/img/blog-2.jpg" alt="img" style="width:100%;height:100%">
                      
                       <h1>Product Name</h1>
                      <h8>
                      <div class="btn btn-light btn-circle btn-sm">+</div>
                      <div class="btn btn-dark btn-circle btn-sm">-</div></h8>
                      <p class="price">Price 500</p>
                      <p><button class="btn_remove">Remove</button></p>
                    </div>
                  </div>
      </div>
      <div class="col-12 col-md-4">
          <div class="main">
                  <div class="card-box">
                      <img src="assets/img/blog-1.jpg" alt="img" style="width:100%;height:100%">
                      
                       <h1>Product Name</h1>
                      <h8>
                      <div class="btn btn-light btn-circle btn-sm">+</div>
                      <div class="btn btn-dark btn-circle btn-sm">-</div></h8>
                      <p class="price">Price 500</p>
                      <p><button class="btn_remove">Remove</button></p>
                    </div>
                  </div>
      </div>
                
 </div>
</div>
<!--cart summery-->
<div clasa="col-md-3">
<div class="summary">
  <div class="cente#3d2f95">

        <div class="col-25">
          <div class="container-flex">
            <h4>Cart summary
              <span class="price" style="color:black">
                <i class="fa fa-shopping-cart"></i>
                <b></b><br/>
              </span><br/><br/>
            </h4>
           
            <hr>
            <h6> Product Name 1
            <span class="price" style="color:black"><b>Rs. 200</b></span></h6>
            <h6> Product Name 1
            <span class="price" style="color:black"><b>Rs. 200</b></span></h6>
            <h6> Product Name 1
            <span class="price" style="color:black"><b>Rs. 200</b></span></h6>
            <hr>
                
            <p>Total <span class="price" style="color:black"><b>Rs. 65789</b></span></p>
            <hr>
            <div class="moveside">
            <button class="btn_order">Order</button></div>
          </div>
        </div>
      </form>
 </div>
</div>
</div>
</div>
 </div>
<?php
require 'footer.php';
?>
