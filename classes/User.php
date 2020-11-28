<?php
class User{
    public $email;
    public $phoneNo;
    public $password;
    public static $minPassLength = 6;
    public static $minPhoneLength = 14;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function getUser($phoneNo){
        $this->phoneNo = $phoneNo;
        $sqlQuery = "SELECT u_id, u_phone, u_email from users where u_phone = '".$this->phoneNo."'";
        $query_check = mysqli_query($this->conn, $sqlQuery);
        if(mysqli_num_rows($query_check) > 0){
            $rows = mysqli_fetch_row($query_check);
            return $rows;
        }
    }

    public function existingUser($phoneNo){
        $this->phoneNo = $phoneNo;
        $sqlQuery = "SELECT u_phone from users where u_phone = '".$this->phoneNo."'";
        $query_check = mysqli_query($this->conn, $sqlQuery);
        if(mysqli_num_rows($query_check) > 0){
            return true;
        }
        return false;
    }

    public function signUp($phoneNo, $email, $password){
        $this->phoneNo = $phoneNo;
        $this->email = $email;
        $this->password = $password;
        $this->userId = strtoupper($this->secureCode());
        $result = $this->existingUser($phoneNo);
        var_dump($result);
        if (!$this->existingUser($phoneNo)){

            $sqlQuery = "INSERT INTO Users values(NULL, '$this->userId', 'null', '$this->email', '$this->phoneNo', '','','', CURRENT_TIMESTAMP, '1')";
            var_dump($sqlQuery);
            if(mysqli_query($this->conn, $sqlQuery)){
                return true;
            }
        }else{
            return false;
        }
    }

        public function signIn($phoneNo){
        $this->phoneNo = $phoneNo;
        
        if ($this->existingUser()){
                return true;
        }else{
            return false;
        }
    }

    public function secureCode(){
        return ('USER'. date('y') .date('d') . bin2hex(random_bytes(4)));
    }

}