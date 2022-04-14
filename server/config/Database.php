<?php

class Database{
    public $host = 'localhost';
    private $db_name = 'fsdDB';
    private $user = 'root';
    private $pass = '';
    private $conn;

    public function connect(){
        $this->conn = null;
        try {
            $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->db_name,
            $this->user,$this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo " Connection Error: ". $e->getMessage();
        }
        return $this->conn;
    }

}
?>
