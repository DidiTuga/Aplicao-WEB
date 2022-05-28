<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// database connection will be here
//       |
//       v
// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';
  
// instantiate database and user object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$user = new User($db);
  
// read users will be here
//       |
//       v
// query users
$stmt = $user->readAll();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // users array
    $users_arr=array();
    $users_arr["records"]=array();
  

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
        $user_item=array(
            "iduser" => $iduser,
            "username" => $username,
            "password" => $password,
            "email" => $email,
        );
  
        array_push($users_arr["records"], $user_item);
    }
  
    // set response code - 200 OK
    http_response_code(200);
  
    // show users data in json format
    echo json_encode($users_arr);
}
  
// no users found will be here
else{
  
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user no users found
    echo json_encode(
        array("message" => "Não há usuários registados"));
}