<?php
class Product {
    protected $p_id;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function getAllProducts(){
        $sqlQuery = "SELECT * from product LIMIT 50";
        $result = mysqli_query($this->conn, $sqlQuery);
        if (mysqli_num_rows($result) > 0){
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $rows;
        }
    }

    public function getRam(){
        $sqlQuery = "SELECT p_ram FROM PRODUCT where p_ram <> ''";
        $result = mysqli_query($this->conn, $sqlQuery);
        if (mysqli_num_rows($result)> 0 ){
            $array_result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            //fetch to normal arrays
            $array_values = array_column($array_result, 'p_ram');
            // return an associative array
            return array_count_values($array_values);
        }
    }

    public function getRamType(){
        $sqlQuery = "SELECT p_ramType FROM PRODUCT where p_ramType <> ''";
        $result = mysqli_query($this->conn, $sqlQuery);
        if (mysqli_num_rows($result)> 0 ){
            $array_result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            //fetch to normal arrays
            $array_values = array_column($array_result, 'p_ramType');
            // return an associative array
            return array_count_values($array_values);
        }
    }

    public function getProcessor(){
        $sqlQuery = "SELECT p_procName FROM PRODUCT where p_procName <> ''";
        $result = mysqli_query($this->conn, $sqlQuery);
        if (mysqli_num_rows($result)> 0 ){
            $array_result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            //fetch to normal arrays
            $array_values = array_column($array_result, 'p_procName');
            // return an associative array
            return array_count_values($array_values);
        }
    }

    public function getBrands(){
        $sqlQuery = "SELECT p_brandName  FROM PRODUCT where p_brandName  <> ''";
        $result = mysqli_query($this->conn, $sqlQuery);
        if (mysqli_num_rows($result)> 0 ){
            $array_result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            //fetch to normal arrays
            $array_values = array_column($array_result, 'p_brandName');
            // return an associative array
            return array_count_values($array_values);
        }
    }

    public function getCapacity(){
        $sqlQuery = "SELECT p_ssdCpty  FROM PRODUCT where p_ssdCpty  <> ''";
        $result = mysqli_query($this->conn, $sqlQuery);
        if (mysqli_num_rows($result)> 0 ){
            $array_result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            //fetch to normal arrays
            $array_values = array_column($array_result, 'p_ssdCpty');
            // return an associative array
            return array_count_values($array_values);
        }
    }

    public function getAjaxSearch($query){
        $result = mysqli_query($this->conn, $query);
        if (mysqli_num_rows($result)> 0 ){
            $array_result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $array_result;
        }
    }

    public function getQueryCount($query){
        $result = mysqli_query($this->conn, $query);
        $count = mysqli_num_rows($result);
        return $count;
    }
}