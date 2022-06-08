<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/login.css">

</head>

<body style=" font-family: 'Roboto', sans-serif;">
    <!-- partial:index.partial.html -->
    <div class="login-form">
        <form action="API/Users/login.php" method="POST">
            <h1>Login</h1>
            <div class="content">
                <?php
                session_start();
                if (isset($_SESSION['dadosErrados'])) :
                ?>
                    <div class="notification">
                        <p>Usuário ou senha inválidos.</p>
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