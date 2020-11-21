<?php
class Wishlist{
    public $id;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function find($user_id, $id){
        $sqlQuery = "SELECT * FROM wishlist WHERE user_id ='" .$user_id. "' and productId ='" .$id. "'";
        $result = mysqli_query($this->conn, $sqlQuery);
        if (mysqli_num_rows($result) > 0){
            $rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
            return $rows;
        }

        return false;
    }

    public function likeProduct($user_id, $id){
        if(!$this->find($user_id, $id)){
            $sqlQuery = "INSERT INTO wishlist values(NULL,'$user_id', '$id')";
            $success = mysqli_query($this->conn, $sqlQuery);
            if ($success){
                return true;
            }
        }else{
            $this->removeProduct($user_id, $id);
            return false;
        }
    }

    public function removeProduct($user_id, $id){
            $sqlQuery = "DELETE from wishlist where user_id ='" .$user_id. "' and productid = '" .$id. "'";
            var_dump($sqlQuery);
            $success = mysqli_query($this->conn, $sqlQuery);
            var_dump($success);
            return true;
    }


    public function allLikedProducts($user_id){
            $sqlQuery = "SELECT * FROM wishlist INNER JOIN product on wishlist.productId = product.p_id  WHERE user_id ='" .$user_id. "'";
            $result = mysqli_query($this->conn, $sqlQuery);
            if (mysqli_num_rows($result) > 0){
                $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return $rows;
            }
    }

    public function __destruct(){
        mysqli_close($this->conn);
    }
}