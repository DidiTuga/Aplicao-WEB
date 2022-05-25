<?php
session_start();

include('config/verificalogin.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>raças</title>
    <link rel="stylesheet" href="CSS/raças.css">
</head>

<body>

    <header>
        <img src="imagens/tiamt.jpg">
    </header>
    <div id="menu">
        <nav>
            <ul>
                <li>
                    <a href="inicio.html">
                        Página Inicial
                    </a>
                </li>
                <li>
                    <a href="classes.html">
                        Classes
                    </a>
                </li>

                <li>
                    <a href="Raças.html">
                        Raças
                    </a>
                </li>

                <li>
                    <a href="feitiços.html">
                        Feitiços
                    </a>
                </li>

                <li>
                    <a href="armas.html">
                        Armas
                    </a>
                </li>

                <li>
                    <a href="cirador_personagens.html">
                        Criador de Personagens
                    </a>
                </li>

                <div id="direita">
                    <li>
                        <a href="painel.php">Profile</a>
                    </li>
                    <li>
                        <a href="config/logout.php"> Sair</a>
                    </li>
                </div>


            </ul>
        </nav>
    </div>
    <div>
        <h2> Bem vindo, <?php
                        $test = $_SESSION["usuario"];
                        echo $test ?>!!</h2>

    </div>



    <div class="footer">DungeonPT.lmd all rights reserved</div>

</body>

</html>