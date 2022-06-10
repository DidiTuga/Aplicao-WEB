<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DungeonPT - Classes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/raças.css">
</head>


<body >

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
<div style="margin-left: 3%; margin-right: 3%;">
    <table cellspacing="0" cellpadding="0" border="0" style="text-justify: auto;">
        <tr>
            <td class="imagens">

                <img src="imagens/warrior.png">

            </td>
            <td colspan="2" class="texto">
                <h2><b>Lutador</b></h2>
                Um Lutador está sempre pronto para combate. Capaz de usar qualquer arma que deste espadas, machados e lanças a arcos para combate a
                longa distância. Não lhe faltam capacidades ofensivas mas também não lhe faltam defensivas, armadura e escudos são icónicos deste personagem.
                Se queres ser um dos melhores guerreiros cujo nome é conhecido em toda a terra por onde passas esta classe permite isso.
                Para tal estas são as tuas habilidades iniciais:
                <ul>
                    <li>
                        <h3>Second Wind:</h3>
                        No teu turno podes usar uma ação bónus para ganhar pontos de vida iguais a 1d10 + o teu nível.
                        <br>Para poderes a voltar a usar esta habilidade tens de fazer um descanso curto ou um descanso longo.
                    </li>
                    <li>
                        <h3>Escolhes também o teu estilo de combate da seguinte lista:</h3>
                        <ul>
                            <li>
                                <b>Archery:</b> Ganhas +2 pontos de bónus em ataques com armas de longo alcance.<br><br>
                            </li>
                            <li>
                                <b>Defense:</b> Enquanto usas armadura ganha +1 na tua AC(Classe de Armadura)<br><br>
                            </li>
                            <li>
                                <b>Dueling:</b> Ao usar uma arma de corpo a corpo numa só mão e sem outras armas ganha um bónus de +2 ao dano que dás.<br><br>
                            </li>
                            <li>
                                <b>Great Weapon Fighting:</b> Se te sair nos dados de dano 1 ou 2 e se estiveres a usar uma arma corpo a corpo com as duas mãos,
                                podes voltar a laçar os dados, mas tens de usar este novo valor independentemente do resultado. A arma tem de ter as propriedades
                                de versátil ou uso em duas mãos. <br><br>
                            </li>
                            <li>
                                <b>Protection:</b> Se uma criatura ataca outro alvo para além de ti e se está a 5ft de ti podes usar a tua reação para lhe causar
                                disvantagem no lançamento de ataque. Tens de estar a usar um escudo.<br><br>
                            </li>
                            <li>
                                <b>Tow-Weapon Fighting:</b> Quando estás a usar duas armas em combate adicionas o teu modificador de habilidade ao dano do teu segundo ataque.<br><br>
                            </li>
                        </ul>
                    </li>
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
                <h2><b>Rogue</b></h2>
                Mestres da furtividade, engano, espionagem, o rogue tem uma destreza enorme que lhe permite brilhar é muitas situações, desde batedores a assassinos.
                Estes personagens são capazes de encontrar uma solução a quase todos os problemas. Ninguém sabe bem a origem destes indivíduos, mas podes ter a certeza
                que te vais cruzar com uns quantos deles nas tuas aventuras.
                <br>Se andar pelas sombras sem ninguém saber, espiar os teus alvos e descobrir o método mais rápido para obteres o que queres então rogue é a tua classe.

                Para tal estas são as tuas habilidades iniciais:

                <ul>
                    <li>
                        <h3>Expertise:</h3>
                        Escolhe duas habilidades em que sejas proficiente ou uma em conjunto com proficiência em ferramentas de ladão.
                        <br>O teu bónus de habilidade é duplicado quando te é pedido uma verficação dessa habilidade.
                    </li>
                    <li>
                        <h3>Sneak Attack:</h3>
                        Uma vez por turno podes causar mais 1d6 de dano se acertares numa criatura sobre a qual tens vantagem
                        <br>no lançamento de ataque ou se um outro inimigo dessa criatura está a 5ft dela, se não tiveres desvantagem no lançamento de ataque.
                        <br>Tens de estar a usar uma arma com finesse ou uma arma de longo alcance.
                    </li>
                    <li>
                        <h3>Thieves Cant:</h3>
                        Conheces esta linguagem secreta dos rogues, podes comunicar e entender esta linguagem e perceber símbolos e pequenas mensagens escritas nesta linguagem.
                        <br>Para quem não conhece o que está a ser dito ou escrito não faz sentido.
                    </li>
                </ul>
            </td>
            <td class="imagens">
                <img src="imagens/rouge.png">
            </td>
        </tr>
        <tr>
            <td colspan="3" class="sparador">
                <img src="imagens/separator.png" style="width: 40%; height: 50%">
            </td>
        </tr>
        <tr>
            <td class="imagens">
                <img src="imagens/wizard-removebg-preview.png">
            </td>

            <td colspan="2" class="texto">
                <h2><b>Feiticeiro</b></h2>
                Poder flui nas mãos destes estudiosos que procuram desvendar todos os mistérios da magia. Dedicados ao estudo das artes arcanas, os feiticeiros têm acesso a uma
                variedades de feitiços que lhes abordar qualquer situação. Mas lá por serem estudiosos esta classe tem muito poder de fogo, capazes de dominar os elementos, criar
                ilusões poderosas, e ajudar os seus companheiros em combate ou com o seu vasto conhecimento.
                <br>Se dominar a magia, lançar feitiços poderosos e ter aventuras para cresceres os teus poderes e o teu conhecimento do arcano, então esta é a tua classe

                Para isso estas são as tuas habilidades iniciais:
                <ul>
                    <li>
                        <h3>Spellcasting:</h3>
                        Como um utilizador de magia e das artes arcanas, tens um livro de feitiços que te permite usar os feitiços da lista da tua classe.
                        Para começar o teu livro contem 6 feitiços de nível 1, este livro é o teu repositório de feitiços que à medida que evoluis vai conter mais e mais feitiços,
                        conheces também 3 catrips.

                    </li>
                    <li>
                        <h3>Arcane Recovery:</h3>
                        Quando acabas um descanso curto podes recuperar alguns dos teus slots de feitiços, a soma do nível dos slots recuperados não pode ser igual ou maior que
                        o teu nível, também não podes recuperar os teus slots de nível 6 ou superior.
                    </li>
                </ul>
            </td>
        </tr>
    </table>
</div>

    <div class="footer"><b>DungeonPT.lmd no rights reserved</b></div>

</body>

</html>