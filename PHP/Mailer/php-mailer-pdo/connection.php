<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "celke";
$port = "";

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
} catch (Exception $ex) {
    echo "Erro: Conexão com banco de dados não realizado com sucesso!";
}
