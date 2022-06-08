<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/main.css">
    <meta charset="UTF-8">
    <title>DungeonPT</title>
</head>

<body style="font-family: 'Roboto', sans-serif;">

    <header>
        <img src="imagens/lostmines.jpg">
    </header>

    <div id="menu">
        <nav>
            <ul>
                <li>
                    <a href="index.php">
                        <b>Página Inicial</b>
                    </a>
                </li>
                <li>
                    <a href="classes.php">
                        <b>Classes<b>
                    </a>
                </li>

                <li>
                    <a href="Raças.php">
                        <b>Raças</b>
                    </a>
                </li>

                <li>
                    <a href="feitiços.php">
                        <b>Feitiços</b>
                    </a>
                </li>

                <li>
                    <a href="armas.php">
                        <b>Armas</b>
                    </a>
                </li>

                <li>
                    <a href="criaPersonagens.php">
                        <b>Criador de Personagens</b>
                    </a>
                </li>

                <div id="direita">

                    <?php
                    if (isset($_SESSION['usuario'])) :
                    ?>
                        <li>
                            <b><a href="painel.php">Profile</a></b>
                        </li>
                        <li>
                            <b><a href="config/logout.php"> Sair</a></b>
                        </li>

                    <?php
                    endif;
                    ?>
                    <?php
                    if (!isset($_SESSION['usuario'])) :
                    ?>
                        <li>
                            <b><a href="R_login.php">Entrar</a></b>
                        </li>

                    <?php
                    endif;
                    ?>

                </div>


            </ul>
        </nav>
    </div>

    <?php
    if (isset($_SESSION['iniciar'])) :
    ?>
        <div id="notificacao">
            <p>Tem que iniciar sessão para usufruir desse site!</p>
        </div>
    <?php
    endif;
    unset($_SESSION['iniciar']);
    ?>
    <div style="margin-left: 3%; margin-right: 3%;">
        <h3>Bem vindo ao Dungeon PT.</h3>
        O teu lugar de eleição para encontrares recursos sobre Dungeons and Dragons em portugês.
        Aqui podes obter a informação que procuras, desde feitiços mestriosos, a raças deste rpg de mesa, aos monstros que vai combater ou com os
        quais vais dificultar a vida aos teus jogadores, e muito mais, para isso temos essa informação a um click de distância.
        Se quiseres entrar neste mundo o sitio ideal é ires ao nosso criador de personagens onde podes fazer o teu primeiro PC
        pronto para a mesa de jogo.
        Hora de agarrar e nos dados e boa sorte nas tuas aventuras.
    </div>

    <div style="margin-left: 3%; margin-right: 3%;">
        <h3>O que é D&D?</h3>
        Dungeons and Dragons é um tabeltop RPG conhecido e jogado mundialmente.
        Este jogo de fantazia premite que embarques em histórias colétivas e aventuras inesqueciveis com os teus amigos. Dá asas à tua imaginação e deixa-te levar
        na imaginação dos teus colegas, para tal cira um personagem, junta um grupo, pega nos dados e toca a rolar.
        Para te ajudar a dar os primeiros passos disponibizamos neste site informação e ferramentas para facilitar o teu embarque neste mundo de histórias coletivas.

    </div>
    <div style="text-align: center; margin-top: 40px">
        <img src="imagens/mesa.jpg" style="border: 10px solid #581e00; padding: 3px">
    </div>
    <div style="text-align: center;">
        <h3>Junta-te à mesa.</h3>
    </div>
    <div style="text-align: center; margin-top: 30px">
        <img src="imagens/separator.png" style="width: 40%; height: 50%">
    </div>
    </br>

    <div class="footer">DungeonPT.lmd no rights reserved</div>

</body>

</html>