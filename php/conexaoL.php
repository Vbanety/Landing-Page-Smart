<?php
    define('HOST', '127.0.0.1');
    define('USUARIO', 'Manuel');
    define('SENHA', 'Manuel123');
    define('DB', 'users');

    //Criar a conexão
    $connexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar como banco.');

?>
