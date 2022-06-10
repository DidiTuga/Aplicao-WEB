<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DungeonPT - Raças</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/raças.css">
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
                <li>
                    <a href="pdf.php">
                        <b>Gerar PDF</b>
                    </a>
                </li>
                <div id="direita">

                    <?php
                    if (isset($_SESSION['usuario'])) :
                    ?>
                        <li>
                            <b><a href="painel.php">Perfil</a></b>
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
    <div style="margin-right: 3%; margin-left: 3%;">
        <table cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td class="imagens">

                    <img src="imagens/elf-removebg-preview.png">

                </td>
                <td colspan="2" class="texto">
                    <h2> <b>Elfos</b> </h2>
                    Uma raça magica ligada à natureza. Vivem em florestas antigas ou em torres prateadas que duram milénios, por isso são muito ligados à arte, à música e à poesia.
                    Por viverem durante muitos anos os elfos dão valor às coisas simples do mundo.
                    <p>
                        São admirados por várias raças pela sua beleza incomparável, as suas roupas enfatizam a sua beleza, no entanto, estas são mais simples em comparação ás das outras raças.
                        Um elfo pode ser difícil de lidar uma vez que são uma raça que se distância das outras, tento um orgulho que os torna perigosos, não se deve insultar um elfo sem esperar uma resposta deste.
                        Devido a estas características não é fácil criarem amizades com outras pessoas, no entanto esta característica também lhes permite criar inimigos.
                    </p>
                    <p>
                        Um elfo é uma mais-valia para qualquer grupo de aventureiros, pois as suas habilidades marciais são conhecidas por todo o mundo, se tiveres um elfo a teu lado este não te vai deixar mal.
                    </p>
                    <h3>Traços da Raça:</h3>
                    <ul>
                        <li>Habituados a viver nas florestas e a crepusculos o personagem desta raça tem darkvision.</li>
                        <li>Argeis e rápidos, personagens desta raça ganha +2 na destreza </li>
                    </ul>
                    <h3>Sub-raças</h3>
                    Alto Elfo
                    <ul>
                        <li>O valor de Wisdom do personagem aumenta em 1.</li>
                        <li>O máximo de pontos de vida do personagem aumenta em 1, e cada vez que sobe de nível, recebe 1 ponto de vida adicional</li>
                    </ul>

                    Elfo Da Floresta
                    <ul>
                        <li>O valor de sabedoria do personagem aumenta em 1.</li>
                        <li>O deslocamento do personagem aumenta para 35ft.</li>
                    </ul>

                    Elfo Negro
                    <ul>
                        <li>O valor de carisma do personagem aumenta em 1.</li>
                        <li>Banidos da supreficie, pela sua devoção à deusa Lolth os personagem desta raça tem darkvision.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="sparador">
                    <img src="imagens/separator.png" style="width: 40%; height: 50%">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="texto">
                    <h2> <b>Humano</b></h2>
                    Os humanos umas das raças comuns deste universo, com uma vida curta comparados a outras raças existentes. Por isso fazem o melhor com o pouco tempo que têm.
                    Por isso são uma raça inovadora e pioneira, tendo vastos impérios espalhados pelo mundo que duram eras e alguns nunca chegaram a ruir.
                    <p>
                        São uma raça que no geral mantêm boas relações com as outras raças do mundo o que os ajuda a fazer poderosos aliados e a estabelecer comercio por todos os cantos do mundo.
                    </p>
                    <p>
                        Muitos humanos quando se tornam aventureiros fazem no por desejarem riquezas e fama ou para deixarem um legado grandioso, cuja história nunca será capaz de esquecer.
                    </p>
                    <h3>Traços da Raça:</h3>
                    <ul>
                        <li>São capazes de falar várias linguas por isso um personagem humano sabe Comum e outra lingua à sua escolha</li>
                        <li>São bastante equilibrados por isso um personagem ganha +1 em todos os atributos </li>
                    </ul>
                </td>
                <td id="humano">
                    <img src="imagens/human2-removebg-preview.png">
                </td>
            </tr>
            <tr>
                <td colspan="3" class="sparador">
                    <img src="imagens/separator.png" style="width: 40%; height: 50%">
                </td>
            </tr>
            <tr>
                <td class="imagens">
                    <img src="imagens/dwarf-removebg-preview.png">
                </td>

                <td colspan="2" class="texto">
                    <h2><b>Anões</b></h2>
                    Reis e Lordes de reinos ricos de antiga grandeza, salões esculpidos no interiror das montanhas, o eco de picaretas nas minas mais profundas e martelos nas forjas ardentes conhecidas pelo mundo.
                    Orgulhosos da sua história e com um compromisso com o clã e a tradição os anões não esquecem o passado lutam até ao último suspiro para protegerem o que é seu.
                    <p>
                        Os anões são leais e fiéis à sua palavra têm um forte senso de justiça e demoram a se esquecer quem os erra. No entanto se um anão estiver ao lado este nunca te irá abandonar e lutará por ti até ao fim.
                        Trair um anão não é algo que seja sábio fazer, pois o sentido de justiça destes, torna a vingança de um anão na vingança do seu clã.
                    </p>

                    <h3>Traços da Raça:</h3>
                    <ul>
                        <li>Habituados a viver no interiror das montanhas o personagem desta raça tem darkvision.</li>
                        <li>Fortes e robustos personagens desta raça ganha +2 na constituição.</li>
                    </ul>
                    <h3>Sub-raças</h3>
                    Anão Da Colina
                    <ul>
                        <li>O valor de sabedoria do personagem aumenta em 1.</li>
                        <li>O máximo de pontos de vida do personagem aumenta em 1, e cada vez que sobe de nível, recebe 1 ponto de vida adicional</li>
                    </ul>
                    Anão da Montanha
                    <ul>
                        <li>O valor de sforça do personagem aumenta em 2.</li>
                        <li>O personagem tem proficiência em armaduras leves e médias.</li>
                    </ul>
                </td>
            </tr>
        </table>
    </div>

    <div class="footer"><b>DungeonPT.lmd no rights reserved</b></div>

</body>

</html>