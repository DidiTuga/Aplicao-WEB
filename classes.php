<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DungeonPT - Classes</title>
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
<div>
    <h3>Lutador</h3>
    Um Lutador está sempre pronto para combate. Capáz de usar qualquer arma que deste espadas, machados e lanças a arcos para combate a
    longa distância. Não lhe falta capacidades ofencivas mas também não lhe faltam defencivas, armadura e escudos são icónicos em este personagem.
    Se queres ser um dos melhores guerreiros cujo nome é conecido em toda a terra por onde passas esta classe premite isso.

    Para tal estas são as tuas habilidades iniciais:
    <ul>
        <li>
            <h4>Second Wind:</h4>
                No teu turno podes usar uma ação bónus para ganhar pontos de vida iguais a 1d10 + o teu nivel.
                <br>Para poderes a voltar a usar esta habilidade tens de fazer um short rest ou um long rest.
        </li>
        <li>
            <h4>Escolhes também o teu estilo de de combate da seguinte lista:</h4>
            <ul>
                <li>
                    <h4>Archery:</h4> Ganhas +2 pontos de bónus em ataques com armas de longo alcance.
                </li>
                <li>
                    <h4>Defense:</h4> Enquanto usas armadura ganha +1 na tua AC(Armor Class)
                </li>
                <li>
                    <h4>Dueling:</h4> Ao usar uma arma de corpo a corpo numa só mão e sem outras armas ganha um bónus de +2 ao dano que dás.
                </li>
                <li>
                    <h4>Great Weapon Fighting:</h4> Ae no dano te sair nos dados 1 ou 2 e se estiveres a usar uma arma corpo a corpo com as duas mãos,
                    <br>podes voltar a laçar os dados, mas tens de usar este novo valor independentemente do resultado. A arma tem de ter as propriedades
                    <br> de versátil ou uso em duas mãos.
                </li>
                <li>
                    <h4>Protection:</h4> Ae uma criatura ataca outro alvo para além de ti e se está a 5ft de ti podes usar a tua reação para lhe causar
                    <br>disvantagem no lançamento de ataque. Tens de estar a usar um escudo.
                </li>
                <li>
                    <h4>Tow-Weapon Fighting:</h4> Quando estás a usar combate de duas armas adicionas o tue modificador de habilidade ao dano do teu segundo ataque.
                </li>
            </ul>
        </li>
    </ul>

</div>

<div>
    <h3>Rouge</h3>
    Mestres da fortividade, engano, espionagem, o rogue tem uma destresa enorme que lhe premite brilhar é muitas situações, desde batedores a assassinos.
    Estes personagens são capazes de encontrar uma solução a quase todos os problemas. Ninguem sabe bem a origem destes individuos, mas podes ter a certeza
    que te vais crusar com uns quantos deles nas tuas aventuras.
    <br>Se andar pelas sombras sem ninguém saber, espiar os teus alvos e descubrir o método mais rápido para obteres o que queres então rogue é a tua classe.

    Para tal estas são as tuas habilidades iniciais:

    <ul>
        <li>
            <h4>Expertise:</h4>
            Escolhe duas skill proficiencies ou uma em conjunto com proficiencie em ferramentas de ladão.
            <br>O teu bónus de habilidade é duplicado quando te é pedido um check dessa habilidade.
        </li>
        <li>
            <h4>Sneak Attack:</h4>
            Uma vez por turno podes causar mais 1d6 de dano se acertares numa criatura sobre a qual tens vantagem
            <br>no lançamento de ataque ou se um outro inimigo dessa criatura está a 5ft dela, se não tiveres desvantagem no lançamento de ataque.
            <br>Tens de estar a usar uma arma com finesse ou uma arma de longo alcance.
        </li>
        <li>
            <h4>Thieves Cant:</h4>
            Conheces esta liguagem secreta dos rogues, podes comunicar e entender esta linguagem e preceber simbulos e pequenas mensagens escritas nesta linguagem.
            <br>Para quem não conhece o que está a ser dito ou escrito não faz sentido.
        </li>
    </ul>
</div>


<div>
    <h3>Feiticeiro</h3>
    Poder flui nas mãos destes estudiosos que procuram desvendar todos os mistérios da magia. dedicados ao estudo das artes arcanas, os feiticeiros têm acesso a uma
    variedades de feitiços que lhes abordar qualquer situção. Mas lá por serem estudiosos esta classe tem muito poder de fogo, capazes de dominar os elementos, criar
    ilusões poderosas, e ajudar os seus companheiros em combate ou com o seu vasto conhecimento.
    <br>Se dominar a magia, lançar feitços poderosos e ter aventuras para cresceres os teus poderes e o teu conhecimento do arcano, então esta é a tua classe

    Para isso estas são as tuas habilidades iniciais:
    <ul>
        <li>
            <h4>Spellcasting:</h4>
            Como um utilizador de magia e das artes arcanas , tens um livro de feitiços que te premite usar os feitiços da lista da tua classe.
            Para começar o teu livro contem 6 feitiços de nivel 1, este livro é o teu repositório de feitiços que à medida que evoluis vai conter mais e mais feitiços,
            conheces também 3 catrips.

        </li>
        <li>
            <h4>Arcane Recovery:</h4>
            Quando acabas um descanso curto podes recuperear alguns dos teus slots de feitiços, a soma do nivel dos slots recuperados não pode ser igual ou maior que
            o teu nivel, também não podes recuperar os teus slots de nivel 6 ou superior.
        </li>
    </ul>
</div>

<div class="footer">DungeonPT.lmd no rights reserved</div>

</body>
</html>