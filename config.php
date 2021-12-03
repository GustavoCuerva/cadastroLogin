<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassowrd = 'root';
    $dbName = 'cadastro';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassowrd,$dbName);

    /*if (!$conexao) {echo "Não foi possível conectar ao banco MySQL."; exit;}
    else {echo "Parabéns!! A conexão ao banco de dados ocorreu normalmente!.";}*/
?>