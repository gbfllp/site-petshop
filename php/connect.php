<?php
define('host', '127.0.0.1');
define('user', 'root');
define('userpw', '');
define('db', 'cadastro');

$conectar = mysqli_connect(host, user, userpw, db) or die('Erro na conexão com MySQL');

