<?php
class Rating{

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function productId($id){
        $sqlQuery = "SELECT * from product where p_id ='" . $id . "' ";
        $result = mysqli_query($this->conn, $sqlQuery);
        if (mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            return $row['p_productId'];
        }
    }
    public function ratingCount(int $id){
        $productCode = $this->productId($id);
        $sqlQuery = "SELECT count(*) from product_review where rvue_rating > 0 AND rvue_productid= '". $productCode . "'";
        $result = mysqli_query($this->conn, $sqlQuery);
        if (isset($result)){

            if (mysqli_num_rows($result) > 0){
                $rows = mysqli_fetch_row($result);
                return $rows[0];
            }
            return 0;
        }
    }


    public function productStar(int $id){
        $productCode = $this->productId($id);
        $sqlQuery = "SELECT AVG(rvue_rating) from product_review where rvue_productid = '". $productCode . "'";
        $result = mysqli_query($this->conn, $sqlQuery);
        if($result){
            $row = mysqli_fetch_row($result);
            $answer = number_format(floatval($row[0]), 1);
            return $answer;
        }
        return 0;
    }

    public function reviewCount(int $id){
        $productCode = $this->productId($id);
        $sqlQuery = "SELECT count(*) from product_review where rvue_msg <> '' AND rvue_productid= '". $productCode . "'";
        $result = mysqli_query($this->conn, $sqlQuery);
        if (isset($result)){

            if (mysqli_num_rows($result) > 0){
                $rows = mysqli_fetch_row($result);
                return $rows[0];
            }
            return 0;
        }
    }

    public function allReviews(int $id){
        $productCode = $this->productId($id);
        $sqlQuery = "SELECT * from product_review where rvue_productid= '". $productCode . "'";
        $result = mysqli_query($this->conn, $sqlQuery);
        if (isset($result)){

            if (mysqli_num_rows($result) > 0){
                $rows = mysqli_fetch_array($result);
                return $rows;
            }

            return 0;
        }
    }
    
}