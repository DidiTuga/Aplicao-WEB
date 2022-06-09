<?php
session_start();

include('config/verificalogin.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DungeonPT - Criador de Personagens</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/CriadorPersonagem.css">
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
                if (isset($_SESSION['name'])) :
                ?>
                    <div id="notificacao">
                        <p id="erro">Tem que colocar um nome na personagem!</p>
                    </div>

                <?php
                endif;
                unset($_SESSION['name']);
                ?>
                <?php
                if (isset($_SESSION['existe'])) :
                ?>
                    <div id="notificacao">
                        <p>Já existe uma personagem com esse nome!</p>
                    </div>

                <?php
                endif;
                unset($_SESSION['existe']);
                ?>
    <div id="body">
        <div style="display: flex; flex-wrap: wrap;margin-left: 5%">
            <div style="width: 60%;">
            <div id="form" style="margin-top: 15px;">
                Aqui podes criar a tua personagem de Dungeons and Dragons, depois ao vim de criares vai te aparecer no teu profile!
                <br>
                <br>
            <form action="API/Personagens/create.php" method='POST'>
                <div class="input-group">
                    <input type="text" name="nome" required class="input">
                    <label for="nome" class="input-label">Nome:</label>
                </div>
                <br>
                <br>
                <label>Escolhe a tua raça:</label>
                <br>
                <br>
                <div class="select-dropdown">
                <select name="raca" id="raca">
                    <option value="Humano">Humano</option>
                    <option value="Anão">Anão</option>
                    <option value="Elfo">Elfo</option>
                </select>
                </div>
                <br>
                <br>
                <label>Escolhe a tua classe:</label>
                <br>
                <br>
                <div class="select-dropdown">
                    <select name="classe" id="classe">
                        <option value="Lutador">Lutador</option>
                        <option value="Rogue">Rogue</option>
                        <option value="Feiticeiro">Feiticeiro</option>
                    </select>
                </div>
                <br>
                <p>Status: força | inteligência | sabedoria | destreza | constituição | carisma</p>
                <p>Os seus status vão ser gerados aleatoriamente! Depois podes ver no teu perfil quais foram os que te calharam!</p>
                <input type="submit" value="Submit" name="Criar" class="button-34">
            </form>

        </div>
            </div>
            <img src="imagens/book-magic-removebg-preview.png" style="margin-left: 15px; width: 25%">
        </div>
        </div>


    <div class="footer">DungeonPT.lmd all rights reserved</div>

</body>

</html>