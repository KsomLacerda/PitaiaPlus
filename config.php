<?php

    $dbHost = 'LocalHost';
    $dbUsername = 'root';
    $dbPassword = 'kleberson96';
    $dbName = 'LOGIN - PITAIAPLUS';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }

?>    