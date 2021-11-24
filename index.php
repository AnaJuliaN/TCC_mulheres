<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'conexao2.php';
require './lib/vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
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
        <a class="navbar-brand" href="index.php">
          <img id="logo" src="img/logotipo.png" alt="Para elas"> Para Elas
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
          <div class="navbar-nav">
            <a class="nav-item nav-link" id="home-menu" href="index.php">Home</span></a>
            <a class="nav-item nav-link" id="sobre-menu" href="time.php">Time</a>
            <a class="nav-item nav-link" id="portfolio-menu" href="projetos.php">Projetos</a>
            <a class="nav-item nav-link" id="login-menu" href="cadastrar.php">Login</a>
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

            <!-- tirar classe d-none -->

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
       <!-- Call to Action -->
       <div id="call-area">
        <div class="container">
            <div class="row">
              <p>Vamos acabar com a violência? Denuncie.</p>
              <button class="main-btn" id="call-btn" href="login.php">Denunciar</button>
            </div>
          </div>
      </div>
    </div>
  </main>
      
      <!-- Sobre a empresa -->
      <div id="about-area">
        <div class="container">
            <div class="row">
              <div class="col-12"> 
                <h3 class="main-title">Sobre o Para Elas</h3>
              </div>
              <div class="col-md-6">
                <img class="img-fluid" src="img/logotipo.png" alt="Para Elas">
              </div>
              <div class="col-md-6">
                <h3 class="about-title">Uma página criada para ajudar mulheres</h3>
                <p>Aqui você pode ler relatos de outras mulheres.</p>
                <p>Saber mais sobre os tipos de violência cometidos contra a mulher.</p>
                <p>Fazer denúncias e procurar pontos de ajuda mais próximos de você.</p>
                <p>Mais informações:</p>
                <ul id="about-list">
                  <li><i class="fas fa-check"></i> Seus dados estão seguros conosco.</li>
                  <li><i class="fas fa-check"></i> Mantemos o seu anonimato.</li>
                </ul>
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
              <p><span class="contact-tile">Envie um email:</span> siteparaelas@gmail.com</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-map-marker-alt"></i>
              <p><span class="contact-tile">Não sofra em silêncio:</span> Procure ajuda no lugar mais próximo de você</p>
            </div>
            <div class="col-md-6" id="msg-box">
              <p>Ou nos deixe uma mensagem:</p>
            </div>
            <div class="col-md-6" id="contact-form">
              <?php
              $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
              
              if (!empty($data['BTEnvia'])){
                //var_dump($data);
                $query_msg = "INSERT INTO mensagem (name, email, mensagem, created) VALUES (:name, :email, :mensagem, NOW())";
                $add_msg = $pdo->prepare($query_msg);

                $add_msg->bindParam(':name', $data['name'], PDO::PARAM_STR);
                $add_msg->bindParam(':email', $data['email'], PDO::PARAM_STR);
                $add_msg->bindParam(':mensagem', $data['mensagem'], PDO::PARAM_STR);

                $add_msg->execute();

                if ($add_msg->rowCount()) {
                  $mail = new PHPMailer(true);
                  try {
                      $mail->CharSet = 'UTF-8';
                      $mail->isSMTP();
                      $mail->Host = 'smtp.mailtrap.io';
                      $mail->SMTPAuth = true;
                      $mail->Username = '9c1f16818eb26b';
                      $mail->Password = '4bdc84f6163609';
                      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                      $mail->Port = 2525;
  
                      //Enviar e-mail para o cliente
                      $mail->setFrom('atendimento@mulheres.com.br', 'Atendimento');
                      $mail->addAddress($data['email'], $data['name']);
  
                      $mail->isHTML(true);
                      $mail->Subject = 'Recebi a mensagem de contato';
                      $mail->Body = "Prezado(a) " . $data['name'] . "<br><br>Recebi o seu e-mail.<br>Será lido o mais rápido possível.<br>Em breve será respondido.<br><br>Conteúdo: " . $data['mensagem'];
                      $mail->AltBody = "Prezado(a) " . $data['name'] . "\n\nRecebi o seu e-mail.\nSerá lido o mais rápido possível.\nEm breve será respondido.\n\nConteúdo: " . $data['mensagem'];
  
                      $mail->send();
                      
                      $mail->clearAddresses();
  
                      //Enviar e-mail para o colaborador da empresa
                      $mail->setFrom('atendimento@mulheres.com.br', 'Atendimento');
                      $mail->addAddress('ana@mulheres.com.br', 'Ana');
  
                      $mail->isHTML(true);
                      $mail->Subject = $data['mensagem'];
                      $mail->Body = "Nome: " . $data['name'] . "<br>E-mail: " . $data['email'] .  "<br>Conteúdo: " . $data['mensagem'];
                      $mail->AltBody = "Nome: " . $data['name'] . "\nE-mail: " . $data['email'] .  "\nConteúdo: " . $data['mensagem'];
  
                      $mail->send();
                      unset($data);
                      echo "Mensagem de contato enviada com sucesso!<br>";                    
                  } catch (Exception $e) {
                      echo "Erro: Mensagem de contato não enviada com sucesso!<br>";
                  }
              } else {
                  echo "Erro: Mensagem de contato não enviada com sucesso!<br>";
              }
          }
              ?>
              <form name="add_msg" action="" method="POST">
                <input type="text" class="form-control" placeholder="Nome" name="name">
                <input type="email" class="form-control" placeholder="E-mail" name="email"> </br>
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