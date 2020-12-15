<?php
// define('PRODUCTION', true);

if($_SERVER['HTTP_HOST'] =="localhost"){
    define('DB_HOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'techanics');

    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME );
    if ($conn == false){
        dir('Error: Database Connection Not Found');
        exit();
    };
}else{
    //Heroku connection information
    $cleardb_url      = parse_url("mysql://b6111d66c22e51:85ca2726@us-cdbr-east-02.cleardb.com/heroku_577fbf5fe0562bc?reconnect=true");
    $cleardb_server   = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db       = substr($cleardb_url["path"],1);
    $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db );
    if ($conn == false){
        dir('Error: Database Connection Not Found');
        exit();
    };


}
