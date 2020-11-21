<?php
require 'session_start_script.php';
require '../config.php';
require '../autoloader/class_autoloader.php';
$userId = $_SESSION["user_id"];
$wish = new Wishlist($conn);

if(isset($_POST['wish'])){
    $p_id = $_POST["productId"];
    if($wish->likeProduct($userId, $p_id)){
        echo 'true';
    }else{
        echo 'false';
    }

}
if(isset($_POST['remove'])){
    echo '<script>alert("ji")</script>';
    $wish->removeProduct($userId, $_POST['remove']);
    header("location: ../wishlist.php");
}