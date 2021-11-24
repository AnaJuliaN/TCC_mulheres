<?php
include_once './conexao_pdo.php';
require "verifica.php";

if(isset($_SESSION['cod_usuario']) && !empty($_SESSION['cod_usuario'])); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Para Elas</title>
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
</head>
<body>
  <header>
    <div class="container" id="nav-container">
      <!-- add essa class -->
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <a class="navbar-brand" href="area_admin.php">
          <img id="logo" src="img/logotipo.png" alt="Para elas"> Para Elas
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
          <div class="navbar-nav">
          <a class="nav-item nav-link" id="home-menu" href="area_admin.php">Início</span></a>
          <a class="nav-item nav-link" id="home-menu" href="relatos_admin.php">Relatos</span></a>
            <a class="nav-item nav-link" id="sobre-menu" href="verificacao.php">Verificação de Relatos</a>
            <i class="fas fa-user" style="color:white; font-size:30px; padding: 10px;width: 30px; "></i><a class="nav-item nav-link" id="login-menu" href="logout.php"><?php echo $nomeUser;  ?>/Logout</a>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <main>
    <div class="container-fluid">
      <!-- slider -->
      <div id="mainSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
          <li data-target="#mainSlider" data-slide-to="1"></li>
          <li data-target="#mainSlider" data-slide-to="2"></li>
          <li data-target="#mainSlider" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/slide1.png" class="d-block w-100" >
            <div class="carousel-caption d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slide2.png" class="d-block w-100">
            <div class="carousel-caption d-md-block">   <br />
            
              <a href="projetos.php" class="main-btn">CONHEÇA AGORA!</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slide3.png" class="d-block w-100">
            <div class="carousel-caption d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slide4.png" class="d-block w-100">
            <div class="carousel-caption d-md-block">
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Sobre a empresa -->
      <div id="about-area">
        <div class="container">
        <div class="row">
              <div class="col-md-6">
                <img class="img-fluid" src="img/logotipo.png" alt="para elas">
              </div>
              <div class="col-md-6">
                <p>Olá Admin! <br />
                Aqui você pode excluir comentários e validar relatos. 
                <br />
                <br />
                Clique <a href="relatos_admin.php" style="color: #8F26CC; font-weight: bold;">aqui</a> para ver os comentários.
                <br />
                <br />
                Clique <a href="verificacao.php" style="color: #8F26CC; font-weight: bold;">aqui</a> para ver um aviso sobre como fazer a verificação de relatos.
                <br />
              </div>
              </div>
            </div>
          </div>
      </div>
      
      <!-- Portfólio -->
      <div id="portfolio-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="main-title2">Conheça projetos sociais para mulheres</h3>
            </div>
            <div class="col-md-12" id="filter-btn-box">
              <button class="main-btn" id="call-btn" a href="https://secure.avaaz.org/community_petitions/po/pessoas_lgbtqia_e_apoiadores_da_causa_casa_nem_resite/">CasaNem</a></button>
              <button class="main-btn" id="call-btn" a href="#">Escola de você</a></button>
              <button class="main-btn" id="call-btn" a href="#">Rede ASTA</a></button>
              <button class="main-btn" id="call-btn" a href="https://antrabrasil.org">ANTRA</a></button>
            </div>
          </div>
        </div>
      </div>
      <!-- Call to Action -->
    </div>
  </main>
  <!-- Rodapé -->
  <footer>
    <div id="contact-area">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="main-title">Entre em contato</h3>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-phone"></i>
              <p><span class="contact-tile">Ligue para relizar denúncias na Central de Atendimento à Mulher:</span> 180 </p>
              <p><span class="contact-tile">Horários:</span> 24h</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-envelope"></i>
              <p><span class="contact-tile">Envie um email:</span> contato@paraelas.com.br</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-map-marker-alt"></i>
              <p><span class="contact-tile">Não sofra em silêncio:</span> Procure ajuda no lugar mais próximo de você</p>
            </div>
            <div class="col-md-6" id="msg-box">
              <p>Ou nos deixe uma mensagem:</p>
            </div>
            <div class="col-md-6" id="contact-form">
              <form action="" method="">
                <input type="text" class="form-control" placeholder="E-mail" name="email">
                <input type="text" class="form-control" placeholder="Assunto" name="assunto">
                <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="mensagem"></textarea>
                <input type="submit" class="main-btn" name="BTEnvia" value="Enviar">
              </form>
            </div>
          </div>
      </div>
    </div>
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