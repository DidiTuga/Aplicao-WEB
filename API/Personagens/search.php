<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// include database and object files
include_once '../config/core.php';
include_once '../config/database.php';
include_once '../objects/personagem.php';
  
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$personagem = new Personagem($db);
  
// get keywords
$keywords=isset($_GET["username"]) ? $_GET["username"] : "";

// query Personagens
$stmt = $personagem->search($keywords);

$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // Personagens array
    $personagens_arr=array();
    $personagens_arr["records"]=array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);

        $perso_item=array(
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
  
        array_push($personagens_arr["records"], $perso_item);
    }
  
    // set response code - 200 OK
    http_response_code(200);
  
    // show Personagens data
    echo json_encode($personagens_arr);
}
  
else{
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user no Personagens found
    echo json_encode(
        null
    );
}
?>