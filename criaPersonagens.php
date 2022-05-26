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

    <div id="body">
        Aqui podes criar a tua personagem de Dungeons and Dragons, depois ao vim de criares vai te aparecer no teu profile!
        <div id="form">
            <form action="/action_page.php">
                <p><label>Nome da Personagem:</label>
                    <input type="text" id="nome" placeholder="Nome">
                </p>

                <label>Escolhe a tua raça:</label>
                <select name="raca" id="raca">
                    <option value="humano">Humana</option>
                    <option value="anão">Anão</option>
                    <option value="elfo">Elfo</option>
                </select>
                <br>
                <br>
                <label>Escolhe a tua classe:</label>
                <select name="raca" id="raca">
                    <option value="humano">Lutador</option>
                    <option value="anão">Rogue</option>
                    <option value="elfo">Feiticeiro</option>
                </select>
                <br>
                <br>
                <p>Status: força | inteligência | sabedoria | destreza | constituição | carisma</p>
                <p>Os seus status vão ser gerados aleatoriamente! Depois podes ver no teu perfil quais foram os que te calharam!</p>
                <input type="submit" value="Submit" name="Criar">
            </form>

        </div>

    </div>



    <div class="footer">DungeonPT.lmd all rights reserved</div>

</body>

</html>