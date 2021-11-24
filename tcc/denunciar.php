<?php

require "verifica.php";

if(isset($_SESSION['cod_usuario']) && !empty($_SESSION['cod_usuario'])); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Para Elas - Projetos</title>
  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
  <!-- Progress Bar -->
  <script src="js/progressbar.min.js"></script>
  <!-- Parallax -->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
  <style>
        @font-face { font-family: 'Milky'; src: url('milkyroad.otf'); } 
        @font-face { font-family: 'Milky'; src: url('milkyroad.otf');}

        h3{
            font-family: Milky;
            font-size: 3em;
        }
    </style>
    <!-- Maps API Javascript -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBN9_9snligVleaguVUETqtAUOAlDm--LA&callback=initMap">
        </script>
       
</head>

<body class="denuncia">
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
  <main>
    <div class="container-fluid">
    <br/>
    <br/>
    <br/>
      <!-- Projetos -->
      <div id="about-area">
        <div class="container">
          <div class="row">
            <div class="col-12"> 
              <h3 class="main-title"> Denuncie </h3>
         <div id="denuncie" class="container-fluid" style="width: 90%; height: 90%; padding-top: 30px; color: white;">
        <ul>
            <li style="color:#FFF; font-size: 25px;" ><strong> Central de Atendimento à Mulher: </strong></li> 
                    <p style="color:#FFF;">Ligue 180: A ligação é gratuita e todos os serviços abaixo funcionam 24 horas por dia, todos os dias da semana.</p>
                    <br/>
            <li style="color:#FFF;font-size: 25px;"> <strong>Polícia Militar: </strong> </li> <p style="color:#FFF;">Em caso de emergência, se a mulher estiver presenciando alguma situação de violência, pode pedir ajuda por meio do telefone 190. Uma viatura da Polícia Militar é enviada imediatamente até o local para o atendimento. </p> 
                    <br/>
            <li style="color:#FFF;font-size: 25px;"> <strong>Delegacia Especial de Atendimento à Mulher:  </strong> </li> <p style="color:#FFF;">Diante de qualquer situação que configure violência doméstica, a mulher deve registrar a ocorrência em uma delegacia de polícia, preferencialmente nas Delegacias Especiais de Atendimento à Mulher – DEAM.</p></li>
            <br/>
            <li style="color:#FFF;font-size: 25px;"> <strong>Entre em contato pelo whatsapp e denuncie <a href = "https://api.whatsapp.com/send?phone=61996565008" target="_blank"> (61) 996565008 </a> </strong> </p> </li>
            <br/>
            <li style="color:#FFF;font-size: 25px;"> <strong>Entre em contato pelo telegram e denuncie pelo canal Direitoshumanosbrasilbot </strong></p> </li>
            <br/>
            <li style="color:#FFF;font-size: 25px;"> <strong>Baixe o aplicativo de direitos humanos para denúncia: <a href = "https://www.gov.br/mdh/pt-br/apps" target="_blank"> App - Direitos Humanos </a> </strong> </p> </li>
            <br/>
            <center> <a href="https://www.delegaciaeletronica.policiacivil.sp.gov.br/ssp-de-cidadao/home" target="_blank"> <button type="submit" class="btn btn-warning">FAZER UMA DENÚNCIA VIA ONLINE</button> </a></center>
        </ul>
        <br/>
        
        </div> 
          </div>
      </div>
    </div>
  </main>
  <!-- Rodapé -->
  <footer>
  <div id="copy-area">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <p>Desenvolvido por Para Elas &copy; 2021</p>
            </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
