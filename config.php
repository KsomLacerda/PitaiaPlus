<?php

    $dbHost = 'localhost'; 
    $dbUsername = 'root' ;
    $dbPassword = 'Kleberson96';
    $dbName = 'LOGIN - PITAIAPLUS';
    $port = '3306';
    
    $conexao = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName, $port) or die ('Não foi possivel fazer a conexão com o banco de dados!!!'); 
/* 
   /*  if($conexao->connect_errno)
    {
        echo "Erro ao se conectar ao banco de dados";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }


    if(!$dbHost){
        die ("Host incorreto!" . mysqli_connect_error());
    }
    else
    {
        echo "Host conectado com sucesso!";
    }

    print_r('<br>');

    if(!$dbUsername){
        die ("Username incorreto!" . mysqli_connect_error());
    }
    else
    {
        echo "Username conectado com sucesso!";
    }

    print_r('<br>');

    if(!$dbPassword){
        die ("Senha incorreto!" . mysqli_connect_error());
    }
    else
    {
        echo "Senha conectada com sucesso!";
    }

    print_r('<br>');

    if(!$dbName){
        die ("Nome do banco de dados incorreto!" . mysqli_connect_error());
    }
    else
    {
        echo "Nome do banco de dados conectado com sucesso!";
    }


    $conexao = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName) or die ('Não foi possivel fazer a conexão com o banco de dados!!!' . mysqli_connect_error()); */
?>    