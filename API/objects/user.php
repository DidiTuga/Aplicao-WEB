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
    //criar user
    public function create(){
      
          // query to insert record
          $query = "INSERT INTO
                      " . $this->table_name . "
                 SET
                      username=:name, password=md5(:password), email=:email";
      
          // prepare query
          $stmt = $this->conn->prepare($query);
      
          // sanitize
          $this->username=htmlspecialchars(strip_tags($this->username));
          $this->password=htmlspecialchars(strip_tags($this->password));
          $this->email=htmlspecialchars(strip_tags($this->email));
      
          // bind values
          $stmt->bindParam(":name", $this->username);
          $stmt->bindParam(":password", $this->password);
          $stmt->bindParam(":email", $this->email);
      
          // execute query
          if($stmt->execute()){
                return true;
          }
      
          return false;
             
    }
    //verificar se o user já existe
    public function searchNome($nome){
        // select all query
        $query = "SELECT  *  FROM " . $this->table_name . " WHERE username='".$nome."' and password=md5('".$this->password."')";
  
        // prepare query statement
        $stmt = $this->conn->prepare($query);
  
        // execute query
        $stmt->execute();
  
        return $stmt;
    }
  
    

}
?>