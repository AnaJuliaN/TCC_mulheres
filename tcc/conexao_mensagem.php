<?php

$host = "localhost";
$dbname = "tcc_mulheres";
$user = "root";
$pass = "";
$port = "127.0.0.1";

try {
    $conn = new PDO("mysql:host=$host;port=$port; dbname=" . $dbname, $user, $pass);
    //echo "Conexão de banco de dados realizado com sucesso!";
} catch (Exception $ex) {
    echo "Erro: Conexão de banco de dados não realizado com sucesso!";
}

?>