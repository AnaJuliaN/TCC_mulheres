<?php 
//credenciais de acesso ao BD

define('HOST', '85.10.205.173:3306');
define('USER', 'yujuu_jinx');
define('PASS', 'a738bc27f');
define('DBNAME', 'tcc_mulheres');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);
?>