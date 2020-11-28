<?php
// require '../header_top.php';
session_start();
// require 'session_start_script.php';
require '../config.php';
require '../autoloader/class_autoloader.php';
if(isset($_POST["addToCart"]) && isset($_SESSION["user_id"]) ){
    $cart = new Cart($conn);
    $result = $cart->addToCart($_SESSION["user_id"], $_POST['productId']);
    if ($result == false){
        echo "false";
    }else{
        echo 'true';
    }
}else{
    echo 'login';
}