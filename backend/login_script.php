<?php
session_start();
require '../config.php';
require '../classes/User.php';

$user = new User($conn);

if (isset($_POST['action'])){
    $phoneNo = $_POST['phoneNo'];
    $Auth_User = $user->getUser($phoneNo);
    if($Auth_User){
        $_SESSION['user_id'] = $Auth_User[0];
        $_SESSION['phone_no'] = $Auth_User[1];
        $_SESSION['email'] = $Auth_User[2];
        echo 'true';
    }

}

if (isset($_POST['user'])){
    $phoneNo = $_POST['phoneNo'];
    if($user->existingUser($phoneNo)){
        echo 'true';
    }else{
        echo 'false';
    }


}