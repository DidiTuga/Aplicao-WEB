<?php
session_start();

include ('./verificalogin.php');
$test = "<h2> Olá " . $_SESSION["usuario"] . "</h2>";
echo $test;
?>
<h2> <a href="logout.php"> Sair</a></h2>

