<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// include database and object file
include_once '../config/database.php';
include_once '../objects/personagem.php';
  
// get database connection
$database = new Database();
$db = $database->getConnection();
  
// prepare personagem object
$personagem = new Personagem($db);
  
// get personagem nome
$id= isset($_POST["id"]) ? $_POST["id"] : "";;
  
// set personagem nome to be deleted
$personagem->id = $id;
// delete the personagem
if ($personagem->delete()) {;
  
    // set response code - 200 ok
    http_response_code(200);

  
    // tell the user
    echo json_encode(array("message" => "personagem was deleted."));

  
// if unable to delete the personagem
}else{
  
    // set response code - 503 service unavailable

    http_response_code(503);

    // tell the user
    echo json_encode(array("message" => "Unable to delete personagem."));
}

header('Location: ../../painel.php');
exit();