<?php


require "verifica.php";

if(isset($_SESSION['cod_usuario']) && !empty($_SESSION['cod_usuario']));
$cod_usuario=$_SESSION['cod_usuario'];

/*session_start();*/
include "conexao2.php";
?>
<html>
<head>
<title>TCC</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/erro.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
        @font-face { font-family: 'Milky'; src: url('milkyroad.otf'); } 
        @font-face { font-family: 'Milky'; src: url('milkyroad.otf');}

        p{
            font-family: Milky;
            font-size: 3em;
            color: #fff;
        }
    </style>
</head>
<body>
<header>
    <div class="container" id="nav-container">
      <!-- add essa class -->
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <a class="navbar-brand" href="inicio.php">
          <img id="logo" src="img/logotipo.png" alt="Para Elas"> Para Elas
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
          <div class="navbar-nav">
          <a class="nav-item nav-link" id="home-menu" href="inicio.php">Início</span></a>
            <a class="nav-item nav-link" id="sobre-menu" href="faca_relato.php">Faça seu Relato</a>
            <a class="nav-item nav-link" id="sobre-menu" href="relatos.php">Relatos</a>
            <a class="nav-item nav-link" id="sobre-menu" href="tiposdeviolencia.php">Tipos de Violência</a>
            <a class="nav-item nav-link" id="portfolio-menu" href="denunciar.php">Denunciar</a>
            <a class="nav-item nav-link" id="login-menu" href="criar_projeto.php">Criar Projeto</a>
            <a class="nav-item nav-link" id="login-menu" href="projeto_inicio.php">Projeto</a>
            <i class="fas fa-user" style="color:white; font-size:30px; padding: 10px;width: 30px; "></i><a class="nav-item nav-link" id="login-menu" href="logout.php"><?php echo $nomeUser;  ?>/Logout</a>
          </div>
        </div>
      </nav>
    </div>
  </header>
<?php

$SendAddCom = filter_input(INPUT_POST, 'SendAddCom', FILTER_SANITIZE_STRING);
if($SendAddCom){
    //Receber os dados do formulário
    // $cod_comentario = filter_input(INPUT_POST, 'cod_comentario');
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $cod_r = filter_input(INPUT_POST, 'cod_r');
    
    //Inserir no BD
    $result_com = "INSERT INTO comentários (descricao, cod_relato, cod_usuario) VALUES ('$descricao', '$cod_r', $cod_usuario)";

    $insert_com = $pdo->prepare($result_com);
    // $insert_com->bindParam('cod_comentario', $cod_comentario);
    // $insert_com->bindParam('descricao', $descricao);
    // $insert_com->bindParam('cod_relato', $cod_relato);
    // $insert_com->bindParam('cod_usuario', $cod_usuario);
    $vai=$insert_com->execute();
    
    if($vai){
        echo "<br/><br/><br/><div class='mainbox'>
        <div class='msg' style='font-size: 20px;'><p>Comentário inserido com sucesso! <a href='relatos.php'>Voltar</a> ou <a href='ver_comentarios.php'>Ver outros comentários</a></p></div>
        <i class='far fa-check-circle'></i>
        </div>
        <br/></br/><br/></br/><br/></br/><br/><center><img width='500' height='500' src = 'img/sucesso.gif' /></center>";
       
    }
  }

?>
