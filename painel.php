<?php
session_start();

include('config/verificalogin.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DungeonPT - Perfil</title>
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
            <tr>
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
                <tr>
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
        echo '<p>Apagar uma personagem: </p>';
        echo '<form action="http://localhost/Projeto/API/Personagens/delete.php" method="post">';
        echo '<p>ID da personagem: <input type="text" name="id" /></p>';
        echo '<p><input type="submit" value="Apagar" /></p>';
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
                <tr>
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
        echo "</div>";
    }

    ?>

    <div class="footer">DungeonPT.lmd all rights reserved</div>

</body>

</html>