<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DungeonPT - Feitiços</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/spells.css">
</head>
<body>

<header>
    <img src="imagens/lostmines.jpg">
</header>

<style>
    td{
        margin-left: 10px;
        margin-right: 10px;
        padding: 8px;
        text-align:left;
    }
</style>

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
                        <b>Classes</b>
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
                            <b><a href="painel.php">Profile</a><b>
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
                            <b><a href="R_login.php">Entrar</a><b>
                        </li>

                    <?php
                    endif;
                    ?>

                </div>


            </ul>
        </nav>
    </div>
<div style="margin-right: 3%; margin-left: 3%;">
<div>
    <h1 style="color: #581e00;"><b>Feitiços</b></h1>
    Quem controla a magia é capaz de tudo, feiticeiros e estudantes das artes arcanas aqui tendes a lista de feitiços que poderam usar para suportar
    os vossos companhios e derrotar os vossos inimigos.
</div>
<b>
    <h2 style="color: #581e00"><b>Cantrip</b></h2>
    <table border="" style="border-color: #581e00; border-width: 2px">
        <tr style="background: #5e2129;color: #E4D1B9;">
            <td>Nome</td><td>Cast</td><td>Range</td><td>Descrição</td>
        </tr>
        <tr>
            <td>Dancing Lights</td><td>1 action</td><td>120 feet</td><td>Crias até quatro luzes que podes controlar, cada luz ilumina um raio de 10 feet</td>
        </tr>
        <tr>
            <td>Mage Hand</td><td>1 action</td><td>30 feet</td><td>Uma mão fantasma  apareçe num local que escolhes, para controlar a mão, ou manipular objetos com ela gastas a tua action, não podes atacar com a mão</td>
        </tr>
        <tr>
            <td>Ray of Frost</td><td>1 action</td><td>60 feet</td><td>Um raio azul esbrnaquiçado sai das tuas mãos, se acertares fazes 1d8 de cold damage e o adversário só se pode mover 10 feet no proximo turno</td>
        </tr>
        <tr>
            <td>Shoking Grasp</td><td>1 action</td><td>Touch</td><td>Eletricidade sai da tua mão para o teu alvo, tens vantagem para acertar se o alvo tivera usar armadura de metal, fazes 1d8 de lightning damage</td>
        </tr>
    </table>
</div>

<div style="margin-right: 3%; margin-left: 3%;">
    <h2 style="color: #581e00"><b>Feitiços nivel 1</b></h2>
    <table border="1" style="border-color: #581e00; border-width: 2px">
        <tr style="background: #5e2129;color: #E4D1B9;">
            <td>Nome</td><td>Cast</td><td>Range</td><td>Descrição</td>
        </tr>
        <tr>
            <td>Burning Hands</td><td>1 action</td><td>15 foot cone</td><td>Juntas os teus polgares enquato estendes as tuas mão e chamas sãem para a area à tua frente, os inimigos apanhos no ataque fazem um Dexterity saving throw se passarem recebem metade do dano, sendo este 3d6 de fire damage</td>
        </tr>
        <tr>
            <td>Comprehend Language</td><td>1 action</td><td>self</td><td>Durante a proxima hora, consegues entender todas as linguagens, escritas ou faladas</td>
        </tr>
        <tr>
            <td>Detect Magic</td><td>1 action</td><td>self</td><td>Durante 10 min se mantiveres concentração podes detetar magia ao teu redor até 30 feet, consegues visualizar auras e descubrir a escola de magia a qual o feitiço pertence</td>
        </tr>
        <tr>
            <td>Mage Armor</td><td>1 action</td><td>Touch</td><td>Tocas numa criatura que não esteja a usar amadura e até o feitiço acabar esta ganha AC = 13 + o seu Dexterity modifier</td>
        </tr>
    </table>
</div>

<div style="margin-right: 3%; margin-left: 3%;">
    <h2 style="color: #581e00"><b>Feitiços nivel 2</b></h2>
    <table border="1" style="border-color: #581e00; border-width: 2px">
        <tr style="background: #5e2129;color: #E4D1B9;">
            <td>Nome</td><td>Cast</td><td>Range</td><td>Descrição</td>
        </tr>
        <tr>
            <td>Blur</td><td>1 action</td><td>Self</td><td>Fica blured a todos os que te vêm durante um minuto, todos os ataques contra ti têm devantagem.</td>
        </tr>
        <tr>
            <td>Hold Person</td><td>1 action</td><td>60 feet</td><td>Imobiliza um humanoide que esteja ao teu alcanse se falahar num Wisdom saving throw no inicio de cada turno deste ou se o tempo do feitiço acabar</td>
        </tr>
        <tr>
            <td>Misty Step</td><td>1 bonus action</td><td>Self</td><td>Envolto num nevoeiro prateado teleporta até 30 feet para um lugar que possas ver</td>
        </tr>
    </table>
</div>

<div style="margin-right: 3%; margin-left: 3%;">
    <h2 style="color: #581e00"><b>Feitiços nivel 3</b></h2>
    <table border="1" style="border-color: #581e00; border-width: 2px">
        <tr style="background:#5e2129;color: #E4D1B9;">
            <td>Nome</td><td>Cast</td><td>Range</td><td>Descrição</td>
        </tr>
        <tr>
            <td>Fierball</td><td>1 action</td><td>150 feet</td><td>Do teu dedo sai um pequeno flash que se transforma numa explosão de fogo num local que apontes. Todas as criaturas num raio de 20 foot da explosão Têm de fazer um Desterity saving throw se falharem recebem 8d6 de fire damage, se passarem recebem metade</td>
        </tr>
        <tr>
            <td>Fly</td><td>1 action</td><td>Touch</td><td>Ao tocares numa criatura esta ganha 60 feet de movimento no ar. Caso o feitiço acabe e a criatura estiver a voar esta cai podendo levar dano de queda</td>
        </tr>

    </table>
</div>
</div>
<div class="footer">DungeonPT.lmd no rights reserved</div>

</body>
</html>