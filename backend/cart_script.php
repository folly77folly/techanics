<?php
session_start();
// require 'session_start_script.php';
require '../config.php';
require '../autoloader/class_autoloader.php';
$output = "";
if (isset($_GET['action']) && isset($_SESSION["user_id"])){
    $userId = $_SESSION["user_id"];
    $sqlQuery = "SELECT * FROM cart WHERE c_userid = '" .$userId. "'";
    $myCart = new Cart($conn);
    $myProduct_Id = new Product($conn);
    $cart = $myCart->allCart($sqlQuery);
    if ($cart){
        foreach ($cart as $item){
            $id = $myProduct_Id->getProduct_Id($item['c_productid']);
            $item_product = $myProduct_Id->find($id);
            $output .='
            <div class="col-12 col-md-4 item-display-'.$item['c_id'].'">
                <div class="main">
                    <div class="card-box">
                        <img src="'.$item_product['p_img1'].'" alt="img" style="width:100%;height:100%">
                        
                        <h1>'.$item_product['p_productName'].'</h1>
                        <h8>
                            <div id="'.$item['c_id'].'" class="btn btn-light btn-circle btn-sm increase">+</div>
                            <div id="'.$item['c_id'].'" class="btn btn-dark btn-circle btn-sm decrease">-</div>
                            <input type ="hidden" value="'.$item['c_id'].'" id="'.$item['c_id'].'"/>
                        </h8>
                        <p class="price">QTY '. $item['c_qty'].'</p>
                        ';
                        if ($myProduct_Id->hasDiscount($id)){
            $output .='<p class="price">Price '. number_format($myProduct_Id->discountAmt($id),2).'</p>';
                        }else{
            $output .='<p class="price">Price '. number_format($item_product['p_salePrice'],2).'</p>';
                        }
            $output .='
                        <button data-id="'.$item['c_id'].'" class="btn_remove remove">Remove</button></input>
                    </div>
                </div>
            </div>
            ';

        }

        echo $output;
        return;
    }
}

if(isset($_GET['cartSummary']) && isset($_SESSION["user_id"]) ){
    $cart_summary = array();
    $sqlQuery = "SELECT * FROM cart WHERE c_userid = '" .$_SESSION["user_id"]. "'";
    $myCart = new Cart($conn);
    $myProduct_Id = new Product($conn);
    $cart = $myCart->allCart($sqlQuery);
    if ($cart){
        foreach($cart as $item){
            $id = $myProduct_Id->getProduct_Id($item['c_productid']);
            $item_product = $myProduct_Id->find($id);
            $price = $myProduct_Id->orderPrice($id, $item['c_qty']);
            $cart_summary[$item_product["p_productName"]]  = $price;
        }
        // print_r($cart_summary); 
        $output .='<hr>';
        foreach($cart_summary as $summary=>$price){
            $output .='
            <h6> '.$summary.'
            <span class="price" style="color:black"><b>Rs. '.number_format($price, 2).'</b></span>
            </h6>';
        }
        $output .='
        <hr>
        <p>Total <span class="price" style="color:black"><b>Rs. '.number_format(array_sum($cart_summary),2).'</b></span></p>
        <hr>
        ';

        echo $output;
    }
}


if(isset($_POST['addCart'])){
    $cart = new Cart($conn);
    $cart->increaseCart($_POST['addCart']);
}

if(isset($_POST['minusCart'])){
    $cart = new Cart($conn);
    if(

        $cart->decreaseCart($_POST['minusCart'])
    ){
        echo "Successfully Minus Quantity";
    }
}

if(isset($_POST['removeItem'])){
    $cart = new Cart($conn);
    $result = $cart->delete($_POST['cartID']);
    if (!$result){
        echo "An Error Occurred Unable to Delete";
    }else{

        echo "Item Removed Successfully";
    }

}


if(isset($_POST["addToCart"]) && isset($_SESSION["user_id"]) ){
    $cart = new Cart($conn);
    $result = $cart->addToCart($_SESSION["user_id"], $_POST['productId']);
    if (!$result){
        echo "false";
    }else{
        echo 'true';
    }
}