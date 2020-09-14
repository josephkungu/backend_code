<?php
class Database{
 

 // codeofaninja.com/2017/02/create-simple-rest-api-in-php.html  --->>Reference
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "data";
    private $username = "root";
    private $password = "";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
            echo "Not connected";
        }
 
        return $this->conn;
    }
}
?>