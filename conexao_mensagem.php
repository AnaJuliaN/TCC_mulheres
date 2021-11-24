<?php

$host = "85.10.205.173:3306";
$dbname = "tcc_mulheres";
$user = "yujuu_jinx";
$pass = "a738bc27f";
$port = "127.0.0.1";

try {
    $conn = new PDO("mysql:host=$host;port=$port; dbname=" . $dbname, $user, $pass);
    //echo "Conexão de banco de dados realizado com sucesso!";
} catch (Exception $ex) {
    echo "Erro: Conexão de banco de dados não realizado com sucesso!";
}

?>