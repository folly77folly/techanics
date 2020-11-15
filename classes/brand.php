<?php
class Brands {
    protected $b_id;
    protected $b_name;
    protected $b_pic;
    protected $b_status;


    public function __construct($conn){
        $this->conn = $conn;
    }

    public function create($b_name, $b_pic, $b_status){
        $sqlQuery = "INSERT into brand values('". $b_name ."','". $b_pic ."','". $b_status ."')";
        $result  = mysqli_query($this->conn, $sqlQuery);
        
    }

}