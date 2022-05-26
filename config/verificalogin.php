<?php

if (!$_SESSION["usuario"]) {
    header('Location: index.php');
    $_SESSION["iniciar"] = true;
    exit();
}
