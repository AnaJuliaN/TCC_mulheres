<?php

session_start();

$host = "85.10.205.173:3306";
$dbname = "tcc_mulheres";
$user = "yujuu_jinx";
$pass = "a738bc27f";
$port = "127.0.0.1";


global $pdo;

try{

    //orientada a objetos com pdo
    $pdo = new PDO("mysql:dbname=".$dbname."; host=".$host, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}

?>