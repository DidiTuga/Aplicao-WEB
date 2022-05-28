<?php
class Personagem
{

    // database connection and table name
    private $conn;
    private $table_name = "personagem";

    // object properties
    public $idperso;
    public $username;
    public $nome;
    public $raca;
    public $classe;
    public $str;
    public $int;
    public $sab;
    public $des;
    public $cons;
    public $car;

    // database conectar
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // ler personagens
    function read()
    {

        // select all query
        $query = "SELECT * FROM " . $this->table_name;


        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }


    // cirar personagem
    function create()
    {

        // query to insert record
        $query = "INSERT INTO " . $this->table_name . " (username, nome, raça, classe, força, inteligência, sabedoria, destreza, constituição, carisma ) VALUES (:user, :name, :raca, :classe, :str, :int, :sab, :des, :cons, :car)";
        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->idperso = htmlspecialchars(strip_tags($this->idperso));
        $this->username = htmlspecialchars(strip_tags($this->username));
        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->raca = htmlspecialchars(strip_tags($this->raca));
        $this->classe = htmlspecialchars(strip_tags($this->classe));
        $this->str = htmlspecialchars(strip_tags($this->str));
        $this->int = htmlspecialchars(strip_tags($this->int));
        $this->sab = htmlspecialchars(strip_tags($this->sab));
        $this->des = htmlspecialchars(strip_tags($this->des));
        $this->cons = htmlspecialchars(strip_tags($this->cons));
        $this->car = htmlspecialchars(strip_tags($this->car));
        $stmt->bindParam(":user", $this->username);
        $stmt->bindParam(":name", $this->nome);
        $stmt->bindParam(":raca", $this->raca);
        $stmt->bindParam(":classe", $this->classe);
        $stmt->bindParam(":str", $this->str);
        $stmt->bindParam(":int", $this->int);
        $stmt->bindParam(":sab", $this->sab);
        $stmt->bindParam(":des", $this->des);
        $stmt->bindParam(":cons", $this->cons);
        $stmt->bindParam(":car", $this->car);

        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }


    // delete the product
    function delete()
    {

        // delete query
        $query = "DELETE FROM " . $this->table_name . " WHERE idperso = ?";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize

        // bind id of record to delete
        $stmt->bindParam(1, $this->id);

        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }



    // procurar Personagens 
    function search($keywords)
    {

        // select all query


        $query = "Select * From " . $this->table_name . " Where username = ?";
        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // sanitize
        $keywords = htmlspecialchars(strip_tags($keywords));

        // bind
        $stmt->bindParam(1, $keywords);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}
