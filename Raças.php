<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DungeonPT - Raças</title>
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
<table cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td class="imagens">

                <img src="imagens/elf-removebg-preview.png">

        </td>
        <td colspan="2" class="texto">
            <h3>Elfos</h3>
            Uma raça magica ligada à natureza. Vivem em florestas antigas ou em torres prateadas que duram milénios, por isso são muito ligados à arte, à música e à poesia.
            Por viverem durante muitos anos os elfos dão valor às coisas simples do mundo.
            <p>
                São admirados por várias raças pela sua beleza incomparavel, as suas roupas enfatizam a sua beleza, no entanto estas são mais simples em comparação às das outras raças.
                Um elfo pode ser dificil de lidar uma vez que são uma raça que se distância das outras, tento um orgulho que os torna perigosos, não se deve insultar um elfo sem esperar uma resposta deste.
                Devido a estas caracteristicas não é facil criarem amizades com outras pessoas no entanto esta caracteristica também lhes premite criar inimigos.
            </p>
            <p>
                Um elfo é uma mais valia para qualquer grupo de aventureiros, pois as suas habilidades marciais são conhecidas por todo o mundo, se tiveres um elfo a teu lado este não te vai deixar mal.
            </p>
            <h4>Traços da Raça:</h4>
            <ul>
                <li>Habituados a viver nas florestas e a crepusculos o personagem desta raça tem darkvision.</li>
                <li>Argeis e rápidos, personagens desta raça ganha +2 na Dexterity </li>
            </ul>
            <h4>Sub-raças</h4>
            Alto Elfo
            <ul>
                <li>O valor de Wisdom do personagem aumenta em 1.</li>
                <li>O máximo de pontos de vida do personagem aumenta em 1, e cada vez que sobe de nível, recebe 1 ponto de vida adicional</li>
            </ul>

            Elfo Da Floresta
            <ul>
                <li>O valor de Wisdom do personagem aumenta em 1.</li>
                <li>O deslocamento do personagem aumenta para 35 feet.</li>
            </ul>

            Elfo Negro
            <ul>
                <li>O valor de Charisma do personagem aumenta em 1.</li>
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
            <h3>Humano</h3>
            Os humanos umas das raças comuns deste universo, com uma vida curta comparados a outras raças existentes. Por isso fazem o melhor com o pouco tempo que têm.
            Por isso são uma raça inovadora e pioneira, tendo vástos impérios espalhados pelo mundo que duram eras e alguns nunca chegaram a ruir.
            <p>
                São uma raça que no geral mantem boas relações com as outras raças do mundo o que os ajuda a fazer poderosos aliados e a estabelcer comercio por todos os cantos do mundo.
            </p>
            <p>
                Muitos humanos quando se tornam aventureiros fazem no por desejarem riquezas e fama ou para deixarem um legado grandioso, cuja história nunca será capaz de esquecer.
            </p>
            <h4>Traços da Raça:</h4>
            <ul>
                <li>São capazes de falar várias linguas por isso um personagem humano sabe Comum e outra lingua à sua escolha</li>
                <li>São bastante equilibrados por isso um personagem ganha +1 em todos os atributos </li>
            </ul>
        </td>
        <td class="imagens">
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
                <h3>Anões</h3>
                Reis e Lordes de reinos ricos de antiga grandeza, salões esculpidos no interiror das montanhas, o eco de picaretas nas minas mais profundas e martelos nas forjas ardentes conhecidas pelo mundo.
                Orgulhosos da sua história e com um compromisso com o clã e a tradição os anões não quecem o passado lutam até ao ultimo suspiro para protegerem o que é seu.
                <p>
                    Os anões são leais e fiéis à sua palavra têm um forte senso de justiça e demoram a se esquecer quem os erra. No entantos se um anão estiver ao lado este nunca te irá abandonar e lutará por ti até ao fim.
                    Trair um anão não é algo que seja sábio fazer pois o sentido de justiça destes, torna a vingança de um anão na vingança do seu clã.
                </p>

                <h4>Traços da Raça:</h4>
                <ul>
                    <li>Habituados a viver no interiror das montanhas o personagem desta raça tem darkvision.</li>
                    <li>Fortes e robustos personagens desta raça ganha +2 na Constitution.</li>
                </ul>
                <h4>Sub-raças</h4>
                Anão Da Colina
                <ul>
                    <li>O valor de Wisdom do personagem aumenta em 1.</li>
                    <li>O máximo de pontos de vida do personagem aumenta em 1, e cada vez que sobe de nível, recebe 1 ponto de vida adicional</li>
                </ul>
                Anão da Montanha
                <ul>
                    <li>O valor de strengh do personagem aumenta em 2.</li>
                    <li>O personagem tem proficiência em armaduras leves e médias.</li>
                </ul>
        </td>
    </tr>
</table>




<div class="footer">DungeonPT.lmd no rights reserved</div>

</body>
</html>