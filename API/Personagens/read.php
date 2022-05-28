<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// database connection will be here
//       |
//       v
// include database and object files
include_once '../config/database.php';
include_once '../objects/personagem.php';
  
// instantiate database and personagem object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$personagem = new Personagem($db);
  
// read personagems will be here
//       |
//       v
// query personagems
$stmt = $personagem->read();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // personagems array
    $personagems_arr=array();
    $personagems_arr["records"]=array();
  

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
  
        $personagem_item=array(
            "idperso" => $idperso,
            "username" => $username,
            "nome" => $nome,
            "raca" => $raca,
            "classe" => $classe,
            "forca" => $forca,
            "inteligencia" => $inteligencia,
            "sabedoria" => $sabedoria,
            "destreza" => $destreza,
            "constituicao" => $constituicao,
            "carisma" => $carisma,
        );
  
        array_push($personagems_arr["records"], $personagem_item);
    }
  
    // set response code - 200 OK
    http_response_code(200);
  
    // show personagems data in json format
    echo json_encode($personagems_arr);
}
  
// no personagems found will be here
else{
  
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user no personagems found
    echo json_encode(
        null
    );
}