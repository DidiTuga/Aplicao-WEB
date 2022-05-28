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

if (empty(filter_input(INPUT_POST, 'user')) || empty(filter_input(INPUT_POST, 'password'))) {
    $_SESSION['dadosErrados'] = true;
    header("Location: ../../R_login.php");
    exit();
}
$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$user->username = filter_input(INPUT_POST, 'user');
$user->password = filter_input(INPUT_POST, 'password');


$num = $user->searchNome($user->username)->rowCount();


if ($num == 1) {
    $_SESSION["usuario"] = $user->username;
    header('Location: ../../painel.php');
    exit();
} else {
    $_SESSION['dadosErrados'] = true;
    header("Location: ../../R_login.php");

    exit();
}
