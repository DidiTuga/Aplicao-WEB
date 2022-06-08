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
                <li style="text-align: center">
                    <a href="index.php">
                        Página Inicial
                    </a>
                </li>
                <li style="text-align: center">
                    <a href="classes.php">
                        Classes
                    </a>
                </li>

                <li style="text-align: center">
                    <a href="Raças.php">
                        Raças
                    </a>
                </li>

                <li style="text-align: center">
                    <a href="feitiços.php">
                        Feitiços
                    </a>
                </li>

                <li style="text-align: center">
                    <a href="armas.php">
                        Armas
                    </a>
                </li>

                <li style="text-align: center">
                    <a href="criaPersonagens.php">
                        Criador de Personagens
                    </a>
                </li>

                <div id="direita">

                    <?php
                    if (isset($_SESSION['usuario'])) :
                    ?>
                        <li style="text-align: center">
                            <a href="painel.php">Profile</a>
                        </li>
                        <li style="text-align: center">
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
        Aqui podes criar a tua personagem de Dungeons and Dragons, depois ao vim de criares vai te aparecer no teu profile!
        <div id="form" style="margin-top: 15px">
            <form action="API/Personagens/create.php" method='POST'>
                <div class="input-group">
                    <input type="text" name="nome" placeholder="Nome" required class="input">
                    <label for="nome" class="input-label">Nome da Personagem:</label>
                </div>

                <label>Escolhe a tua raça:</label>
                <select name="raca" id="raca">
                    <option value="Humano">Humano</option>
                    <option value="Anão">Anão</option>
                    <option value="Elfo">Elfo</option>
                </select>
                <br>
                <br>
                <label>Escolhe a tua classe:</label>
                <select name="classe" id="classe">
                    <option value="Lutador">Lutador</option>
                    <option value="Rogue">Rogue</option>
                    <option value="Feiticeiro">Feiticeiro</option>
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