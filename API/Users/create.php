<?php
session_start();
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

 
// get database connection
include_once '../config/database.php';
  
// instantiate U$user object
include_once '../objects/user.php';
  
$database = new Database();
$db = $database->getConnection();
  
$user = new User($db);
  
// get posted data
$nome = $_POST["user"];
$email = $_POST["email"];
$password = $_POST["password"];
$confpass = $_POST["confpassword"];
  
// make sure data is not empty
if(   $password == $confpass){
    //verifica se o $user já existe
    $stmt = $user->searchNome($nome);
    $num = $stmt->rowCount();
    if($num == 0){


    // set $user property values
    $user->username=$nome;
    $user->password=$password;
    $user->email=$email;

    
    // create the U$user
    if($user->create()){
        $_SESSION["usuario"] = $user->username;
        header("Location: ../../painel.php");
        exit();
    }
  
    // if unable to create the U$user, tell the user
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to create user."));
    }
}else{
    // set response code - 503 service unavailable
    http_response_code(503);

    // tell the user
    echo json_encode(array("message" => "User já existe."));
    $_SESSION["existe"] = true;
    header("Location: ../../registar.php");
    exit();
}
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to create user. Data is incomplete."));
    $_SESSION['passwordDiff'] = true;
    header("Location: ../../registar.php");
    exit();
}
