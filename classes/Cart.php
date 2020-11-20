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