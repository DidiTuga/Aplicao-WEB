<?php
include 'conectar.php';


if (empty(filter_input(INPUT_POST, 'user')) || empty(filter_input(INPUT_POST, 'password')) || empty(filter_input(INPUT_POST, 'email'))  || empty(filter_input(INPUT_POST, 'confpassword')) ) {
    session_start();
    $_SESSION['dadosVazios'] = true;
    header("Location: registar.php");
    exit();
}

$user = mysqli_real_escape_string($conectar, filter_input(INPUT_POST, 'user'));
$password = mysqli_real_escape_string($conectar, filter_input(INPUT_POST, 'password'));
$email = mysqli_real_escape_string($conectar,filter_input(INPUT_POST, 'email'));
$confpassword = mysqli_real_escape_string($conectar,filter_input(INPUT_POST, 'confpassword'));

if($password != $confpassword){
    session_start();
    $_SESSION['passwordDiff'] = true;
    header("Location: registar.php");
    exit();
}


$sql = "Select iduser, username from login.user where username = '{$user}' and email = '{$email}'";

$result = mysqli_query($conectar, $sql);
$row = mysqli_num_rows($result);
if ($row > 0) {
    session_start();
    $_SESSION["existe"] = true ;
    header('Location: registar.php');
    exit();
} else {
    $sql = "INSERT INTO login.user (username, password, email) VALUES ('{$user}', md5('{$password}'), '{$email}')";
    $result = mysqli_query($conectar, $sql);
    // FALTA O REGISTAR NA BASE DE DADOS!!! -- SE REGISTAR NA BASE DADOS FAZ ISTO 
    session_start();
    $_SESSION['usuario'] = $user;
    header("Location: painel.php");

    exit();
}

