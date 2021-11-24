<?php

session_start();

require "verifica.php";

if(isset($_SESSION['cod_usuario']) && !empty($_SESSION['cod_usuario'])); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Para Elas - Relatos</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
        @font-face { font-family: 'Milky'; src: url('milkyroad.otf'); } 
        @font-face { font-family: 'Milky'; src: url('milkyroad.otf');}

        h3{
            font-family: Milky;
            font-size: 3em;
        }
        center{
            font-family: Milky;
            font-size: 3em;
        }
        th{
            font-family: Milky;
            font-size: 3em;
        }

        #descricao {
            width: 900px;
            padding: 100px;
            margin: 130px;
        }

        #container-login100-form-btn {
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        #login100-form-btn {
            font-family: Poppins-Medium;
            font-size: 16px;
            color: #fff;
            line-height: 1.2;
        
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            min-width: 120px;
            height: 50px;
            border-radius: 25px;
        
            background: #9152f8;
            background: -webkit-linear-gradient(bottom, #7579ff, #b224ef);
            background: -o-linear-gradient(bottom, #7579ff, #b224ef);
            background: -moz-linear-gradient(bottom, #7579ff, #b224ef);
            background: linear-gradient(bottom, #7579ff, #b224ef);
            position: relative;
            z-index: 1;
        
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
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
  <main>
    <div class="container-fluid">
          <br />
          <br />
          <br />
          <br />
        <div class="container">
            <div class="row">
              <div class="col-12"> 
                <h3 class="main-title">Inserindo Comentários</h3>
                <br />
              </div>
                <form action="guarda_comentario.php" method="POST">
                    <input type="text" name="descricao" id="descricao" placeholder="Escreva aqui o seu comentário sobre este relato...">
                    <div id="container-login100-form-btn">
                        <input type="submit" name="SendAddCom" value="Enviar" id="login100-form-btn" >
                            </button>
                    </div>
                    <?php
                      $cod_r=0;
                      $cod_r=$_GET['cod_r'];
                      //echo $cod_r;
                      echo'<input type="hidden" value="'.$cod_r.'" name="cod_r">';
                    ?>
                </form>
					


              </div>
          </div>
      </div>
  </main>
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