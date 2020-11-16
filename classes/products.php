<?php
// require __DIR__.'/collections/Constants.php';
// use App\Collections\Constants;
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

    public function getRam($type){
        if ($type == "buy")
        {
            $sqlQuery = "SELECT p_ram FROM PRODUCT where p_ram <> '' AND p_sell <> '0'";
        }else
        {
            $sqlQuery = "SELECT p_ram FROM PRODUCT where p_ram <> '' AND p_rent <> '0'";
        }

        $result = mysqli_query($this->conn, $sqlQuery);
        if (!$result){
            return;
        }
        if (mysqli_num_rows($result)> 0 ){
            $array_result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            //fetch to normal arrays
            $array_values = array_column($array_result, 'p_ram');
            // return an associative array
            return array_count_values($array_values);
        }
    }

    public function getRamType($type){
        if ($type == "buy")
        {
            $sqlQuery = "SELECT p_ramType FROM PRODUCT where p_ramType <> '' AND p_sell <> '0'";
        }else
        {
            $sqlQuery = "SELECT p_ramType FROM PRODUCT where p_ramType <> '' AND p_rent <> '0'";
        }

        $result = mysqli_query($this->conn, $sqlQuery);
        if (!$result){
            return;
        }
        if (mysqli_num_rows($result)> 0 ){
            $array_result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            //fetch to normal arrays
            $array_values = array_column($array_result, 'p_ramType');
            // return an associative array
            return array_count_values($array_values);
        }
    }

    public function getProcessor($type){
        if ($type == "buy")
        {
            $sqlQuery = "SELECT p_procName FROM PRODUCT where p_procName <> '' AND p_sell <> '0'";
        }else
        {
            $sqlQuery = "SELECT p_procName FROM PRODUCT where p_procName <> '' AND p_rent <> '0'";
        }
        $result = mysqli_query($this->conn, $sqlQuery);
        if (!$result){
            return;
        }
        if (mysqli_num_rows($result)> 0 ){
            $array_result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            //fetch to normal arrays
            $array_values = array_column($array_result, 'p_procName');
            // return an associative array
            return array_count_values($array_values);
        }
    }

    public function getBrands($type){
        if ($type == "buy")
        {
            $sqlQuery = "SELECT p_brandName FROM PRODUCT where p_brandName <> '' AND p_sell <> '0'";
        }else
        {
            $sqlQuery = "SELECT p_brandName FROM PRODUCT where p_brandName <> '' AND p_rent <> '0'";
        }
        $result = mysqli_query($this->conn, $sqlQuery);
        if(!$result){
            return;
        }
        if (mysqli_num_rows($result)> 0 ){
            $array_result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            //fetch to normal arrays
            $array_values = array_column($array_result, 'p_brandName');
            // return an associative array
            return array_count_values($array_values);
        }
    }

    public function getCapacity($type){
        if ($type == "buy")
        {
            $sqlQuery = "SELECT p_ssdCpty FROM PRODUCT where p_ssdCpty <> '' AND p_sell <> '0'";
        }else
        {
            $sqlQuery = "SELECT p_ssdCpty FROM PRODUCT where p_ssdCpty <> '' AND p_rent <> '0'";
        }

        $result = mysqli_query($this->conn, $sqlQuery);
        if(!$result){
            return;
        }
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