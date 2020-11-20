<?php
session_start();
$_SESSION['user_id'] = "1";
$_SESSION['email'] = "aqim@gmail.com";
header("location: ../index.php");