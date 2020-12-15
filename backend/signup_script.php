<?php
session_start();
require '../config.php';
require '../autoloader/class_autoloader.php';
if (isset($_POST["submit"])){
    $phoneNo = strip_tags(trim($_POST["phoneNo"])) ;
    $email = strip_tags(trim($_POST["email"])) ;
    $name = strip_tags(trim($_POST["name"])) ;
    if (isset($_SESSION["error"])){
        session_unset();
    }
    $user = new User($conn);
    if ($phoneNo === " " OR $email ===" " OR $name ===" "){
        $_SESSION["error"] = ["signup", "Fill all Fields to Complete Signup"];
        header("Location: ../login.php");
    }
    elseif(strlen($name) < $user::$minPassLength){
        $_SESSION["error"] = ["signup", "Minimum Name length is 6"];
        header("Location: ../login.php");
    }elseif(strlen($phoneNo) > $user::$minPhoneLength){
        $_SESSION["error"] = ["signup", "Minimum Mobile Phone length must be 13 digits"];
        header("Location: ../login.php");
    }else{
        if($user->signUp($phoneNo, $email, $name))
        {
            $_SESSION["success"] = ["signin", "Sign-Up Successful. Enter your details to login"];
            header("Location: ../login.php");
        }else{
            $_SESSION["error"] = ["signup", "Phone Number already exists."];
            header("Location: ../login.php");
        }
    }

}