<?php
// include '..collections/Constants.php';
// use App\Collections\Constants;
class Product {
    public $id;
    public $type;

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

    public function find($id){
        $this->id = $id;
        $sqlQuery = "SELECT * from product where p_id ='" . $this->id . "' ";
        $result = mysqli_query($this->conn, $sqlQuery);
        if (mysqli_num_rows($result) > 0){
            $rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
            return $rows;
        }
    }

    public function findSimilar(int $id){
        $sqlQuery = "SELECT * from product where p_id ='" . $id . "' ";
        $result = mysqli_query($this->conn, $sqlQuery);
        if (mysqli_num_rows($result) > 0){
            $rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
            
            // search criteria
            $category = $rows['p_category'];
            $ram = $rows['p_ram'];

            $sqlQuerySimilar = "SELECT p_salePrice, p_productName, p_productDesc, p_img1,p_id from product where p_category like'%" . $category . "%' and p_ram like '%" . $ram . "%' ";
            $similarResult = mysqli_query($this->conn, $sqlQuerySimilar);
            if (mysqli_num_rows($similarResult) > 0){
                $row = mysqli_fetch_all($similarResult, MYSQLI_ASSOC);
                return $row;
            }
        }
    }


    public function getRam($type){
        if ($type == "buy")
        {
            $sqlQuery = "SELECT p_ram FROM PRODUCT where p_ram <> '' AND p_sale <> 0";
        }else
        {
            $sqlQuery = "SELECT p_ram FROM PRODUCT where p_ram <> '' AND p_rent <> 0";
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
            $sqlQuery = "SELECT p_ramType FROM PRODUCT where p_ramType <> '' AND p_sale <> 0";
        }else
        {
            $sqlQuery = "SELECT p_ramType FROM PRODUCT where p_ramType <> '' AND p_rent <> 0";
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
            $sqlQuery = "SELECT p_procName FROM PRODUCT where p_procName <> '' AND p_sale <> 0";
        }else
        {
            $sqlQuery = "SELECT p_procName FROM PRODUCT where p_procName <> '' AND p_rent <> 0";
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
            $sqlQuery = "SELECT p_brandName FROM PRODUCT where p_brandName <> '' AND p_sale <> 0";
        }else
        {
            $sqlQuery = "SELECT p_brandName FROM PRODUCT where p_brandName <> '' AND p_rent <> 0";
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
            $sqlQuery = "SELECT p_ssdCpty FROM PRODUCT where p_ssdCpty <> '' AND p_sale <> 0";
        }else
        {
            $sqlQuery = "SELECT p_ssdCpty FROM PRODUCT where p_ssdCpty <> '' AND p_rent <> 0";
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

    public function hasDiscount(int $id){
        $sqlQuery = "SELECT p_discount from product WHERE p_discount > 0 and p_id = '". $id ."'";
        // var_dump($sqlQuery);
        $query_check = mysqli_query($this->conn, $sqlQuery);
        if (mysqli_num_rows($query_check)> 0){
            return true;
        }
        return false;
    }

    public function discount(int $id){
            $sqlQuery = "SELECT p_discount, p_salePrice, p_productPrice from product WHERE p_id = '". $id ."'";
            $query_check = mysqli_query($this->conn, $sqlQuery);
            $result = mysqli_fetch_row($query_check);
            $discount_rate = floatval($result[0])/100;
            $discounted_amt = $result[1] * $discount_rate;
            return number_format($discounted_amt, 2);
    }

    public function discountAmt(int $id){
            $sqlQuery = "SELECT p_discount, p_salePrice, p_productPrice from product WHERE p_id = '". $id ."'";
            $query_check = mysqli_query($this->conn, $sqlQuery);
            $result = mysqli_fetch_row($query_check);
            $discount_rate = floatval($result[0])/100;
            $discounted_amt = $result[1] * $discount_rate;
            $discount_price = $result[1] - $discounted_amt;
            return number_format($discount_price, 2);
    }

}