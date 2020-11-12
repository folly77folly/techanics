<?php
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'pmanager');
define('DB_PASSWORD', 'pass');
define('DB_NAME', 'techanics');

$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME );

if ($conn == false){
    dir('Error: Database Connection Not Found');
    exit();
};
session_start();
