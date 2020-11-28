<?php
class Cart{

    public $query;
    public $userID;
    public $productID;
    public static $increment = 1;
    public $id;

    public function __construct($conn){
        $this->conn = $conn;
    }
    public function addToCart($userID, $productID){
        if (!$this->find($userID, $productID)){
            $sqlQuery ="INSERT INTO cart values(NULL, '$this->userID', '$this->productID','1','1')";
            $success = mysqli_query($this->conn, $sqlQuery);
            if ($success){
                return true;
            }else{
                return false;
            }
        }
        return false;
    }

    public function find($userID, $productID){
        $this->userID = $userID;
        $this->productID = $productID;
        $sqlQuery ="SELECT * FROM cart WHERE c_userid = '" .$this->userID. "' AND c_productid = '".$this->productID."' ";
        $query = mysqli_query($this->conn, $sqlQuery);
        if (mysqli_num_rows($query) > 0){
            return true;
        }else{

            return false;
        }

    }
    public function allCart($query){
        $this->query = $query;
        $query_check = mysqli_query($this->conn, $this->query);
        if (mysqli_num_rows($query_check) > 0){
            $result = mysqli_fetch_all($query_check, MYSQLI_ASSOC);
            return $result;
        }
    }

    public function getQuantity($id){
        $this->id = $id;
        $sqlQuery = "Select c_qty from cart where c_id = '". $this->id ."' ";
        $query_check = mysqli_query($this->conn, $sqlQuery);
        if (mysqli_num_rows($query_check) > 0){
            $row = mysqli_fetch_row($query_check);
            return $row[0];
        }
        
    }

    public function increaseCart($id){
        $this->getQuantity($id);
        $newQty = $this->getQuantity($id) + self::$increment;
        $sqlQuery = "Update cart set c_qty ='".$newQty."' where c_id = '". $this->id ."' ";
        $success = mysqli_query($this->conn, $sqlQuery);


    }

    public function decreaseCart($id){
        $this->getQuantity($id);
        if ($this->getQuantity($id) > 1){

            $newQty = $this->getQuantity($id) - self::$increment;
            $sqlQuery = "Update cart set c_qty ='".$newQty."' where c_id = '". $this->id ."' ";
            $success = mysqli_query($this->conn, $sqlQuery);
            if(!$success){
                return false;
            }
            return true;
        }
        

    }

    public function delete($id){
        $this->id = $id;
        $sqlQuery = "Delete from cart where c_id = '". $this->id ."' ";
        $success = mysqli_query($this->conn, $sqlQuery);
        if(!$success){
            return false;
        }
        return true;
    }

    public function __destruct(){
        mysqli_close($this->conn);
    }
}