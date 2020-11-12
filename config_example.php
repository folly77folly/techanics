<?php
define('DB_HOST', 'your_locahost');
define('DB_USERNAME', 'your_username');
define('DB_PASSWORD', 'your_password');
define('DB_NAME', 'your_deb_name');

$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME );

if ($conn == false){
    dir('Error: Database Connection Not Found');
    exit();
};
session_start();
