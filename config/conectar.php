<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'zaXXfbWqVDCNE29');
define('DB', 'pweb');

$conectar = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ("Não é possível conectar");