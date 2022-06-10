<?php
session_start();

include('config/verificalogin.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DungeonPT - Perfil</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/CriadorPersonagem.css">
</head>

<style>
    #cores {
        background: #5e2129;
        color: #E4D1B9;
    }
</style>

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
                            <a href="painel.php"><b>Perfil</b></a>
                        </li>
                        <li>
                            <a href="config/logout.php"> <b>Sair</b></a>
                        </li>

                    <?php
                    endif;
                    ?>
                    <?php
                    if (!isset($_SESSION['usuario'])) :
                    ?>
                        <li>
                            <a href="R_login.php"><b>Entrar</b></a>
                        </li>

                    <?php
                    endif;
                    ?>

                </div>


            </ul>
        </nav>
    </div>
    <div style="margin-left: 10px">
        <?php

        // LoGIN USER NORMAL
        if ($_SESSION['usuario'] != "admin") {
            echo "<p>Todos os personagens criados por ti encontram-se aqui em baixo:</p>";
            echo "<div id='tabela'>";
            $url = "http://localhost/Projeto/API/Personagens/search.php?username=" . $_SESSION['usuario'];
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $result = curl_exec($curl);
            curl_close($curl);
            $json_object = json_decode($result);

            if ($json_object != null) {
                echo '<table cellspacing="0" cellpadding="0" border="1">';
                echo '
            <tr id="cores">
        <th> ID da Perso.        </th>
        <th> Username      </th>
        <th> Nome da Perso. </th>
        <th> Raça    </th>
        <th> Classe    </th>
        <th> Força      </th>
        <th> Inteligência </th>
        <th> Sabedoria     </th>
        <th> Destreza        </th>
        <th> Constituição     </th>
        <th> Carisma </th>

            </tr>';
                for ($i = 0; $i < count($json_object->records); $i++) {
                    echo '
            <tr>
        <td>' . $json_object->records[$i]->idperso           . '</td>
        <td>' . $json_object->records[$i]->username        . '</td>
        <td>' . $json_object->records[$i]->nome   . '</td>
        <td>' . $json_object->records[$i]->raca        . '</td>
        <td>' . $json_object->records[$i]->classe           . '</td>
        <td>' . $json_object->records[$i]->forca        . '</td>
        <td>' . $json_object->records[$i]->inteligencia   . '</td>
        <td>' . $json_object->records[$i]->sabedoria         . '</td>
        <td>' . $json_object->records[$i]->destreza            . '</td>
        <td>' . $json_object->records[$i]->constituicao          . '</td>
        <td>' . $json_object->records[$i]->carisma  . '</td>

            </tr>';
                }
                echo '</table>';
                echo "</div>";
            } else {

                echo "<p>Não existem personagens criadas na sua conta!</p>";
            }
            echo "<div id='tempo'>";
            echo "<p>Tem aqui o tempo na Covilhã:</p>";
            $city = "Covilhã";
            $apikey = "c8114fe70716582210f17ad59ae591f0";
            $api_url = "http://api.openweathermap.org/data/2.5/weather?q=" . $city . "&appid=" . $apikey;
            $tempo_data = json_decode(file_get_contents($api_url), true);
            $temp = $tempo_data['main']['temp'];
            $temp = round($temp - 273.15);
            $temperature_description = $tempo_data['weather'][0]['description'];
            $temperature_icon = $tempo_data['weather'][0]['icon'];
            $temperature_icon_url = "http://openweathermap.org/img/w/" . $temperature_icon . ".png";
            echo "<img src='$temperature_icon_url'>";
            echo "<p>Tempo em Covilhã: $temp graus, $temperature_description</p>";
            echo "<p>Aproveite se tiver um bom tempo para passar com seus amigos a jogar D&D!</p>";
            echo "</div>";
        }

        //ADMIN LOGIN
        //////////////////////////
        if ($_SESSION['usuario'] == "admin") {
            echo '<p>Todos as personagems criadas encontram-se aqui em baixo:</p>';
            echo "<div id='tabela'>";
            $url = "http://localhost/Projeto/API/Personagens/read.php";
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $result = curl_exec($curl);
            curl_close($curl);
            $json_object = json_decode($result);
            if ($json_object != null) {
                echo '<table cellspacing="0" cellpadding="0" border="1">';
                echo '
                <tr style="background:#5e2129; color: #E4D1B9;">
            <th> ID da Perso.        </th>
            <th> Username      </th>
            <th> Nome da Perso. </th>
            <th> Raça    </th>
            <th> Classe    </th>
            <th> Força      </th>
            <th> Inteligência </th>
            <th> Sabedoria     </th>
            <th> Destreza        </th>
            <th> Constituição     </th>
            <th> Carisma </th>
    
                </tr>';
                for ($i = 0; $i < count($json_object->records); $i++) {
                    echo '
                <tr>
            <td>' . $json_object->records[$i]->idperso           . '</td>
            <td>' . $json_object->records[$i]->username        . '</td>
            <td>' . $json_object->records[$i]->nome   . '</td>
            <td>' . $json_object->records[$i]->raca        . '</td>
            <td>' . $json_object->records[$i]->classe           . '</td>
            <td>' . $json_object->records[$i]->forca        . '</td>
            <td>' . $json_object->records[$i]->inteligencia   . '</td>
            <td>' . $json_object->records[$i]->sabedoria         . '</td>
            <td>' . $json_object->records[$i]->destreza            . '</td>
            <td>' . $json_object->records[$i]->constituicao          . '</td>
            <td>' . $json_object->records[$i]->carisma  . '</td>
    
                </tr>';
                }
                echo '</table>';
                echo "</div>";
            } else {
                echo "<p><b>Não existem personagens criadas!</b></p>";
            }
            // PHP INPUT Text
            echo '<p>Para apagar uma personagem insira o seu ID: </p>';
            echo '<form action="http://localhost/Projeto/API/Personagens/delete.php" method="post">';
            echo '<div class="input-group">';
            echo '<input type="text" name="id" required class="input"/>
                <label for="id" class="input-label">ID:</label>';
            echo '<p><input type="submit" value="Apagar" class="button-34"/></p>';
            echo '</div>';
            echo '</form>';

            echo "<p>Você é o administrador, você pode ver todos os utilizadores.</p>";
            echo "<div id='tabela'>";
            $url = "http://localhost/Projeto/API/Users/read.php";
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $result = curl_exec($curl);
            curl_close($curl);
            $json_object = json_decode($result);
            echo '<table cellspacing="0" cellpadding="0" border="1">';
            echo '
                <tr style="background:#5e2129; color: #E4D1B9;">
            <th> ID do user     </th>
            <th> Username      </th>
            <th> Email    </th>

        </tr>';
            for ($i = 0; $i < count($json_object->records); $i++) {
                echo '
                <tr>
            <td>' . $json_object->records[$i]->iduser         . '</td>
            <td>' . $json_object->records[$i]->username        . '</td>
            <td>' . $json_object->records[$i]->email        . '</td>

                </tr>';
            }
            echo '</table>';
            echo "</b></div> ";
        }

        ?>
    </div>
    <div class="footer"><b>DungeonPT.lmd all rights reserved</b></div>

</body>

</html>