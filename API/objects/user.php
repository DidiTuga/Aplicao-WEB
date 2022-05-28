<?php
class User{
  
    // database connection and table name
    private $conn;
    private $table_name = "user";
  
    // object properties
    public $id;
    public $name;
    public $password;
    public $email;
  
    public function __construct($db){
        $this->conn = $db;
    }
  
    // used by select drop-down list
    public function readAll(){
        //select all data
        $query = "SELECT  *  FROM " . $this->table_name ;
  
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
  
        return $stmt;
    }

  
    

}
?>