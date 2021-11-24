<?php


require "verifica.php";

if(isset($_SESSION['cod_usuario']) && !empty($_SESSION['cod_usuario'])); 

session_start();
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
        <a class="navbar-brand" href="index.php">
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

$SendAddProj = filter_input(INPUT_POST, 'SendAddProj', FILTER_SANITIZE_STRING);
if($SendAddProj){
    //Receber os dados do formulário
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    $contato = filter_input(INPUT_POST, 'contato', FILTER_SANITIZE_STRING);
    $data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
    $local = filter_input(INPUT_POST, 'local', FILTER_SANITIZE_STRING);
    $duracao = filter_input(INPUT_POST, 'duracao', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    
    //Inserir no BD
    $result_proj = "INSERT INTO projeto (titulo, contato, data, local, duracao, descricao) VALUES (:titulo, :contato, :data, :local, :duracao, :descricao)";
    
    $insert_proj = $pdo->prepare($result_proj);
    $insert_proj->bindParam(':titulo', $titulo);
    $insert_proj->bindParam(':contato', $contato);
    $insert_proj->bindParam(':data', $data);
    $insert_proj->bindParam(':local', $local);
    $insert_proj->bindParam(':duracao', $duracao);
    $insert_proj->bindParam(':descricao', $descricao);
    
    if($insert_proj->execute()){
        echo "<br/><br/><br/><div class='mainbox'>
        <div class='msg'><p>Projeto criado com sucesso! <a href='criar_projeto.php'>Voltar</a> ou <a href='projeto_inicio.php'>Ver projetos</a></p></div>
        <i class='far fa-check-circle'></i>
        </div>
        <br/></br/><br/></br/><br/></br/><br/><center><img width='500' height='500' src = 'img/sucesso.gif' /></center>";
       
    }
  }

?>
