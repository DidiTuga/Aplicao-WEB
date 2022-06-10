<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/spells.css">
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
    <b>
        <div style="margin-left: 3%; margin-right: 3%;">
            <h2 style="color: #581e00;">Armas</h2>
            Para sobreviveres às tuas aventuras terás de estar bem equipado para todos os confrontos e perigos com os quais te poderás cruzar.
            Sem forma de se protegerem os aventureiros não são diferentes dos outros habitantes. Dá uma olhada a algumas das aramas com que te poderás cruzar.
        </div>
        <div style="margin-left: 7%; margin-right: 3%;">
            <h3>Armas Simples</h3>
            <p>Estas podem ser usadas por qualquer personagem.</p>
        </div>

        <div style="display: flex; flex-wrap: wrap">

            <table border="1" style="border-color: #581e00; border-width: 2px; margin-left: 7%;width: 50%;">
                <tr style="background:#5e2129; color: #E4D1B9;">
                    <td>Arma</td>
                    <td>Dano</td>
                    <td>Propriedades</td>
                </tr>
                <tr>
                    <td>Club </td>
                    <td>1d4 bludgeoning</td>
                    <td>Light</td>
                </tr>
                <tr>
                    <td>Dagger</td>
                    <td>1d4 piercing</td>
                    <td>Finesse, light, thrown (range 20/60)</td>
                </tr>
                <tr>
                    <td>Greatclub</td>
                    <td>1d8 bludgeoning </td>
                    <td>Two-handed</td>
                </tr>
                <tr>
                    <td>Handaxe</td>
                    <td>1d6 slashing</td>
                    <td>Light, thrown (range 20/60)</td>
                </tr>
                <tr>
                    <td>Javelin</td>
                    <td>1d6 piercing</td>
                    <td>Thrown (range 30/120)</td>
                </tr>
                <tr>
                    <td>Light Hammer</td>
                    <td>1d4 bludgeoning</td>
                    <td>PLight, thrown (range 20/60)</td>
                </tr>
                <tr>
                    <td>Mace</td>
                    <td>1d6 bludgeoning</td>
                    <td>—</td>
                </tr>
                <tr>
                    <td>Quarterstaff</td>
                    <td>1d6 bludgeoning</td>
                    <td>Versatile (1d8)</td>
                </tr>
                <tr>
                    <td>Spear</td>
                    <td>1d6 piercing</td>
                    <td>Thrown (range 20/60), versatile (1d8)</td>
                </tr>
                <tr>
                    <td>Crossbow</td>
                    <td>1d8 piercing</td>
                    <td>Loading, two-handed</td>
                </tr>
                <tr>
                    <td>Shortbow</td>
                    <td>1d8 piercing</td>
                    <td>Two-handed</td>
                </tr>
            </table>


            <img src="imagens/spear-removebg-preview.png" style="margin-left: 15px; width: 25%">
        </div>

        <div style="text-align: center;"><img src="imagens/separator.png" style="width: 40%; height: 50%; margin-top: 2%"></div>




        <div style="margin-left: 7%; margin-right: 3%;">
            <h3>Armas Marciais</h3>
            <p>Estas podem ser usadas por personagens que possuam essa habilidade.</p>
        </div>

        <div style="display: flex; flex-wrap: wrap">

            <table border="1" style="border-color: #581e00; border-width: 2px; margin-left: 7%;width: 50%;">
                <tr style="background:#5e2129;color: #E4D1B9;">
                    <td>Arma</td>
                    <td>Dano</td>
                    <td>Propriedades</td>
                </tr>
                <tr>
                    <td>Battleaxe</td>
                    <td>1d8 slashing</td>
                    <td>Versatile (1d10)</td>
                </tr>
                <tr>
                    <td>Greataxe</td>
                    <td>1d12 slashing</td>
                    <td>Heavy, two-handed</td>
                </tr>
                <tr>
                    <td>Greatsword</td>
                    <td>2d6 slashing</td>
                    <td>Heavy, two-handed</td>
                </tr>
                <tr>
                    <td>Longsword</td>
                    <td>1d8 slashin</td>
                    <td>Versatile (1d10)</td>
                </tr>
                <tr>
                    <td>Maul</td>
                    <td>2d6 bludgeoning</td>
                    <td>Heavy, two-handed</td>
                </tr>
                <tr>
                    <td>Morningstar</td>
                    <td>1d8 piercing</td>
                    <td>—</td>
                </tr>
                <tr>
                    <td>Rapier</td>
                    <td>1d8 piercing</td>
                    <td>Finesse</td>
                </tr>
                <tr>
                    <td>Scimitar</td>
                    <td>1d6 slashing </td>
                    <td>Finesse, light</td>
                </tr>
                <tr>
                    <td>Shortsword</td>
                    <td>1d6 piercing </td>
                    <td>Finesse, light</td>
                </tr>
                <tr>
                    <td>Trident</td>
                    <td>1d6 piercing</td>
                    <td>Thrown (range 20/60), versatile (1d8)</td>
                </tr>
                <tr>
                    <td>Warhammer</td>
                    <td>1d8 bludgeoning</td>
                    <td>Versatile (1d10)</td>
                </tr>
            </table>


            <img src="imagens/dsword-removebg-preview.png" style="margin-left: 10px; width: 25%">
        </div>

        <div style="text-align: center;"><img src="imagens/separator.png" style="width: 40%; height: 50%; margin-top: 2%"></div>

    </b>
    <div class="footer"><b>DungeonPT.lmd no rights reserved</b></div>

</body>

</html>