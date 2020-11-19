<?php
class Message{

    // Please specify your Mail Server - Example: mail.example.com.
// ini_set("SMTP","mail.example.com");

// // Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
// ini_set("smtp_port","25");

// // Please specify the return address to use
// ini_set('sendmail_from', 'example@YourDomain.com');

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function Send($to, $subject, $text){
        try{
            mail($to, $subject, $text );
        }catch(\Throwable $th){
            echo "Not Sent";
        }
       
    }

    public function Create($name, $email, $subject, $text){
        // $sqlQuery = "INSERT INTO contact_us values('33'," .$name ."','A','A','A','A',CURRENT_TIMESTAMP,'1')";
        $cont_secure = "1234567";
        $sqlQuery ="
        INSERT INTO `contact_us` (`cont_secure`, `cont_name`, `cont_mail`, `cont_mobile`, `cont_sub`, `cont_message`) VALUES ('".$cont_secure."', '".$name."', '".$email."', '','".$subject."', '".$text."')
        ";
        
        $result = mysqli_query($this->conn, $sqlQuery);
        if ($result){

        }else{
            echo "error";
        }

    }
}