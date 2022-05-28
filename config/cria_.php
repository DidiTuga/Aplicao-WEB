<?php
session_start();
require "conectar.php";

$name = $_POST['nome'];
$raca = $_POST['raca'];
$classe = $_POST['classe'];

//força | inteligência | sabedoria | destreza | constituição | carisma
$user = $_SESSION["usuario"];
$str = random_int(8, 18);
$int = random_int(8, 18);
$sab = random_int(8, 18);
$des = random_int(8, 18);
$cons = random_int(8, 18);
$car = random_int(8, 18);

if (empty($name)) {
    $_SESSION['name'] = true;
    header("Location: ../criaPersonagens.php");
    exit();
}
$sql = "Select idperso, username from pweb.personagem where nome = '{$name}'";

$result = mysqli_query($conectar, $sql);
$row = mysqli_num_rows($result);
if ($row > 0) {
    $_SESSION["existe"] = true;
    header("Location: ../criaPersonagens.php");
    exit();

} else {
    $sql = "INSERT INTO pweb.personagem (username, nome, raca, classe,forca, inteligencia, sabedoria, destreza, constituicao, carisma ) VALUES ('{$user}', '{$name}', '{$raca}', '{$classe}', $str, $int, '{$sab}', '{$des}', '{$cons}', '{$car}')";
    echo $sql;
    $result = mysqli_query($conectar, $sql);

    $_SESSION['usuario'] = $user;
    header("Location: ../criaPersonagens.php");
    exit();

}
?>