<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-kaique';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    if ($conexao->connect_errno) {
        echo "Erro na conexão: " . $conexao->connect_error;
        exit();
    }
    else {
        echo "Conexão efetuada com sucesso!";
    }
?>