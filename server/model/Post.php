<?php
class Post{
    private $conn;
    private $table = 'autobook';

    public $sn ;
    public $name;
    public $address;
    public $dob;
    public $pet;
    public $actor;
    public $actress;
    public $image;
    public $description;

    public function __construct($db){
        $this->conn = $db;
    }

    public function read(){

        $query = 'SELECT 
                 sn, name, address, dob, pet, actor, actress, image, description
                FROM ' . $this->table;

        $stmt = $this->conn->prepare($query);
        
        $stmt->execute();

        echo var_dump($stmt->fetch(PDO::FETCH_OBJ)) .'<br>';
        
        return $stmt;

    }
}
?>