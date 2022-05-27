<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="CSS/raças.css">
    <meta charset="UTF-8">
    <title>DungeonPT</title>
</head>

<body>

    <header>
        <img src="imagens/lostmines.jpg">
    </header>

    <div id="menu">
        <nav>
            <ul>
                <li>
                    <a href="index.php">
                        Página Inicial
                    </a>
                </li>
                <li>
                    <a href="classes.php">
                        Classes
                    </a>
                </li>

                <li>
                    <a href="Raças.php">
                        Raças
                    </a>
                </li>

                <li>
                    <a href="feitiços.php">
                        Feitiços
                    </a>
                </li>

                <li>
                    <a href="armas.php">
                        Armas
                    </a>
                </li>

                <li>
                    <a href="criaPersonagens.php">
                        Criador de Personagens
                    </a>
                </li>

                <div id="direita">

                    <?php
                    if (isset($_SESSION['usuario'])) :
                    ?>
                        <li>
                            <a href="painel.php">Profile</a>
                        </li>
                        <li>
                            <a href="config/logout.php"> Sair</a>
                        </li>

                    <?php
                    endif;
                    ?>
                    <?php
                    if (!isset($_SESSION['usuario'])) :
                    ?>
                        <li>
                            <a href="R_login.php">Entrar</a>
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
    <div>
        <h3>Bem vindo ao Dungeon PT.</h3>
        O teu lugar de eleição para encontrares recursos sobre Dungeons and Dragons em portugês.
        Aqui podes obter a informação que procuras, desde feitiços mestriosos, a raças deste rpg de mesa, aos monstros que vai combater ou com os
        quais vais dificultar a vida aos teus jogadores, e muito mais, para isso temos essa informação a um click de distância.
        Se quiseres entrar neste mundo o sitio ideal é ires ao nosso criador de personagens onde podes fazer o teu primeiro PC
        pronto para a mesa de jogo.
        Hora de agarrar e nos dados e boa sorte nas tuas aventuras.
    </div>

    <div>
        <h3>O que é D&D?</h3>
        Dungeons and Dragons é um tabeltop RPG conhecido e jogado mundialmente.
        Este jogo de fantazia premite que embarques em histórias colétivas e aventuras inesqueciveis com os teus amigos. Dá asas à tua imaginação e deixa-te levar
        na imaginação dos teus colegas, para tal cira um personagem, junta um grupo, pega nos dados e toca a rolar.
        Para te ajudar a dar os primeiros passos disponibizamos neste site informação e ferramentas para facilitar o teu embarque neste mundo de histórias coletivas.

    </div>
    </br>

    <div class="footer">DungeonPT.lmd no rights reserved</div>

</body>

</html>