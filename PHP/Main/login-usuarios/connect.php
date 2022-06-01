<?php

    $host       = 'localhost';
    $user       = 'user_main';
    $pass       = 'B5FaG1ci';
    $database   = 'modelos_web';
    $port       = '3306';
    $charset    = 'utf8';

    try
    {
        $connect = new PDO("mysql:host=$host;port=$port;dbname=$database;charset=$charset",$user, $pass);
    }
    catch (Exception $ex)
    {
        echo "Erro: Conexão com banco de dados! ", $ex->getMessage();
    }

?>