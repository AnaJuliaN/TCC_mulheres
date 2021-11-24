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
            font-size: 1em;
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

$SendAddRel = filter_input(INPUT_POST, 'SendAddRel', FILTER_SANITIZE_STRING);
if($SendAddRel){
    //Receber os dados do formulário
    $nome_relato = filter_input(INPUT_POST, 'nome_relato', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    
    //Inserir no BD
    $result_rel = "INSERT INTO relato (nome_relato, descricao) VALUES (:nome_relato, :descricao)";
    
    $insert_rel = $pdo->prepare($result_rel);
    $insert_rel->bindParam(':nome_relato', $nome_relato);
    $insert_rel->bindParam(':descricao', $descricao);
    
    if($insert_rel->execute()){
        echo "<br/><br/><br/><div class='mainbox'>
        <div class='msg'><p>Relato enviado com sucesso para verificação! Assim que o seu relato foi verificado ele será postado na página de relatos, por favor aguarde.<br/> 
        <a href='faca_relato.php'>Voltar</a> ou <a href='relatos.php'>Ver relatos</a></p></div>
        <i class='far fa-check-circle'></i>
        </div>
        <center><img width='500' height='500' src = 'img/sucesso.gif' /></center>";
       
    }
  }


?>