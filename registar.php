<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registar D</title>
    <link rel="stylesheet" href="CSS/login.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="login-form">

        <form action="API/Users/create.php" method="POST">
            <h1>Registar</h1>
            <div class="content">
                <?php
                session_start();
                if (isset($_SESSION['passwordDiff'])) :
                ?>
                    <div class="notification">
                        <p id="erro">Passwords diferentes! Por favor meta a password igual.</p>
                    </div>

                <?php
                endif;
                unset($_SESSION['passwordDiff']);
                ?>
                <?php
                if (isset($_SESSION['existe'])) :
                ?>
                    <div class="notification">
                        <p>Já existe um utilizador com esse nome/email! </p>
                    </div>

                <?php
                endif;
                unset($_SESSION['existe']);
                ?>
                <div class="input-field">
                    <input type="texto" placeholder="Usuário" name="user" autocomplete="nope required" required>
                </div>
                <div class="input-field">
                    <input type="email" placeholder="email@email.pt" name="email" autocomplete="nope" required>
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Password" name="password" autocomplete="new-password" required>
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Confirmar password" name="confpassword" autocomplete="new-password" required>
                </div>
            </div>
            <div class="action">
                <button type="submit" class="button is-block is-link is-large is-fullwidth">Registar</button>
            </div>
        </form>
    </div>


</body>

</html>