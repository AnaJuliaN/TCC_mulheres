<?php
 
require "conexao2.php";

if(isset($_SESSION['cod_usuario']) && !empty($_SESSION['cod_usuario'])){

    require_once 'Usuario.class.php';
    $u = new Usuario();

    $listLogado = $u->logado($_SESSION['cod_usuario']);
    $nomeUser = $listLogado['nome'];

}else{
    header("Location: login.php");
}

?>