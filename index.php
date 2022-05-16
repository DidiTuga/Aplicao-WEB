
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Simple Login Form Example</title>

        <link rel="stylesheet" href="CSS/login.css">

    </head>
    <body>
        <!-- partial:index.partial.html -->
        <div class="login-form">

            <form action="login.php" method="POST">
                <h1>Login</h1>
                <div class="content">
                    <?php
                    session_start();
                    if (isset($_SESSION['dadosErrados'])):
                        ?>
                        <div class="erro">
                            <p>ERRO: Usuário ou senha inválidos.</p>
                        </div>

                        <?php
                    endif;
                    unset($_SESSION['dadosErrados']);
                    ?>
                    

                    <div class="input-field">
                        <input type="texto" placeholder="Usuário" name="user" autocomplete="nope">
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="Password" name="password" autocomplete="new-password">
                    </div>
                    Se ainda não tiver conta: <a href='registar.php'>Clique Aqui! </a>
                </div>
                <div class="action">
                    <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                </div>
            </form>
          
        </div>


    </body>
</html>

