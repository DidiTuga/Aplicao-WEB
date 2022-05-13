<?php

include ('conectar.php');

if (empty(filter_input(INPUT_POST, 'user')) || empty(filter_input(INPUT_POST, 'password'))) {
    session_start();
    $_SESSION['dadosErrados'] = true;
    header("Location: index.php");
    exit();
}

$user = mysqli_real_escape_string($conectar, filter_input(INPUT_POST, 'user'));
$password = mysqli_real_escape_string($conectar, filter_input(INPUT_POST, 'password'));

$query = "Select user_id, user from user where user = '{$user}' and password = md5('{$password}')";

$result = mysqli_query($conectar, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    session_start();
    $_SESSION["usuario"] = $user;
    header('Location: painel.php');
    exit();
} else {
    session_start();
    $_SESSION['dadosErrados'] = true;
    header("Location: index.php");

    exit();
}
