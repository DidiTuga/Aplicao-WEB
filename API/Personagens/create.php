<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// get database connection
include_once '../config/database.php';
  
// instantiate personagem object
include_once '../objects/personagem.php';
  
$database = new Database();
$db = $database->getConnection();
  
$personagem = new Personagem($db);
  
// get posted data
$data = json_decode(file_get_contents("php://input"));
  
// make sure data is not empty
if(
    !empty($data->nome) &&
    !empty($data->raca) &&
    !empty($data->classe) &&
    !empty($data->username)
){

    // set personagem property values
    $personagem->username=$data->username;
    $personagem->nome=$data->nome;
    $personagem->raca=$data->raca;
    $personagem->classe=$data->classe;

    $personagem->str=$data->str;
    $personagem->int=$data->int;
    $personagem->sab=$data->sab;
    $personagem->des=$data->des;
    $personagem->cons=$data->cons;
    $personagem->car=$data->car;
  
    // create the personagem
    if($personagem->create()){
  
        // set response code - 201 created
        http_response_code(201);
  
        // tell the user
        echo json_encode(array("message" => "personagem was created."));
    }
  
    // if unable to create the personagem, tell the user
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to create personagem."));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to create personagem. Data is incomplete."));
}
?>