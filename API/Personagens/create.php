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
  
// instantiate personagem object
include_once '../objects/personagem.php';
  
$database = new Database();
$db = $database->getConnection();
  
$personagem = new Personagem($db);
  
// get posted data
$nome = $_POST["nome"];
$classe = $_POST["classe"];
$raca = $_POST["raca"];
  
// make sure data is not empty
if(
    !empty($nome) &&
    !empty($classe) &&
    !empty($raca)
){
    //verifica se o personagem já existe
    $stmt = $personagem->searchNome($nome);
    $num = $stmt->rowCount();
    if($num == 0){


    // set personagem property values
    $personagem->username=$_SESSION["usuario"];
    $personagem->nome=$nome;
    $personagem->raca=$raca;
    $personagem->classe=$classe;
    $personagem->str=random_int(8, 18);
    $personagem->int=random_int(8, 18);
    $personagem->sab=random_int(8, 18);
    $personagem->des=random_int(8, 18);
    $personagem->cons=random_int(8, 18);
    $personagem->car=random_int(8, 18);
    
    // create the personagem
    if($personagem->create()){
  
        header("Location: ../../criaPersonagens.php");
        exit();
    }
  
    // if unable to create the personagem, tell the user
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to create personagem."));
    }
}else{
    // set response code - 503 service unavailable
    http_response_code(503);

    // tell the user
    echo json_encode(array("message" => "personagem já existe."));
    $_SESSION["existe"] = true;
    header("Location: ../../criaPersonagens.php");
    exit();
}
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to create personagem. Data is incomplete."));
    $_SESSION['name'] = true;
    header("Location: ../../criaPersonagens.php");
    exit();
}
