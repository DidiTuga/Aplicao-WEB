<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CSS/raças.css">
    <meta charset="UTF-8">
    <title>DungeonPT - Armas</title>
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
<div>
    <h2>Armas</h2>
    Para sobreviveres às tuas aventuras terás de estar bem equipado para todos os confrontos e perigos com os quais te poderás cruzar.
    Sem forma de se protegerem os aventureiros não são diferentes dos outros habitantes. Dá uma olhada a algumas das aramas com que te poderás cruzar.
</div>
<h3>Armas Simples</h3>
Estas podem ser usadas por qualquer personagem.
<br>
<br>
<table border="1">
    <tr>
        <td>Arma</td><td>Dano</td><td>Propriedades</td>
    </tr>
    <tr>
        <td>Club </td><td>1d4 bludgeoning</td><td>Light</td>
    </tr>
    <tr>
        <td>Dagger</td><td>1d4 piercing</td><td>Finesse, light, thrown (range 20/60)</td>
    </tr>
    <tr>
        <td>Greatclub</td><td>1d8 bludgeoning </td><td>Two-handed</td>
    </tr>
    <tr>
        <td>Handaxe</td><td>1d6 slashing</td><td>Light, thrown (range 20/60)</td>
    </tr>
    <tr>
        <td>Javelin</td><td>1d6 piercing</td><td>Thrown (range 30/120)</td>
    </tr>
    <tr>
        <td>Light Hammer</td><td>1d4 bludgeoning</td><td>PLight, thrown (range 20/60)</td>
    </tr>
    <tr>
        <td>Mace</td><td>1d6 bludgeoning</td><td>—</td>
    </tr>
    <tr>
        <td>Quarterstaff</td><td>1d6 bludgeoning</td><td>Versatile (1d8)</td>
    </tr>
    <tr>
        <td>Spear</td><td>1d6 piercing</td><td>Thrown (range 20/60), versatile (1d8)</td>
    </tr>
    <tr>
        <td>Crossbow</td><td>1d8 piercing</td><td>Loading, two-handed</td>
    </tr>
    <tr>
        <td>Shortbow</td><td>1d8 piercing</td><td>Two-handed</td>
    </tr>
</table>

<div>
    <h3>Armas Marciais</h3>
    Estas podem ser usadas por personagens que possuam essa habilidade.
    <br>
    <br>
    <table border="1">
        <tr>
            <td>Arma</td><td>Dano</td><td>Propriedades</td>
        </tr>
        <tr>
            <td>Battleaxe</td><td>1d8 slashing</td><td>Versatile (1d10)</td>
        </tr>
        <tr>
            <td>Greataxe</td><td>1d12 slashing</td><td>Heavy, two-handed</td>
        </tr>
        <tr>
            <td>Greatsword</td><td>2d6 slashing</td><td>Heavy, two-handed</td>
        </tr>
        <tr>
            <td>Longsword</td><td>1d8 slashin</td><td>Versatile (1d10)</td>
        </tr>
        <tr>
            <td>Maul</td><td>2d6 bludgeoning</td><td>Heavy, two-handed</td>
        </tr>
        <tr>
            <td>Morningstar</td><td>1d8 piercing</td><td>—</td>
        </tr>
        <tr>
            <td>Rapier</td><td>1d8 piercing</td><td>Finesse</td>
        </tr>
        <tr>
            <td>Scimitar</td><td>1d6 slashing </td><td>Finesse, light</td>
        </tr>
        <tr>
            <td>Shortsword</td><td>1d6 piercing </td><td>Finesse, light</td>
        </tr>
        <tr>
            <td>Trident</td><td>1d6 piercing</td><td>Thrown (range 20/60), versatile (1d8)</td>
        </tr>
        <tr>
            <td>Warhammer</td><td>1d8 bludgeoning</td><td>Versatile (1d10)</td>
        </tr>
    </table>

</div>

<div class="footer">DungeonPT.lmd no rights reserved</div>

</body>
</html>
