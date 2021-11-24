<?php
include_once './conexao_pdo.php';
require "verifica.php";

if(isset($_SESSION['cod_usuario']) && !empty($_SESSION['cod_usuario'])); 
?>
<!DOCTYPE html> 
<html lang="en">
<head>
	<title>Faça seu Relato</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts2/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts2/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor2/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor2/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util2.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
    <link rel="stylesheet" href="css/styles.css">
<!--===============================================================================================-->
<style>
        @font-face { font-family: 'Milky'; src: url('milkyroad.otf'); } 
        @font-face { font-family: 'Milky'; src: url('milkyroad.otf');}

        h5{ 
            font-family: Milky;
            font-size: 1em;
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
  <br/>
  <br/>
  <br/>
  <br/>
	
	<div class="limiter">
		<div class="container-login100" style="background-color: #fff;">
			<div class="wrap-login100">
				<form action="guarda_relatos.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-logo">
                        <img id="logo" src="img/logotipo.png" alt="Para elas" >
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						<h5>Faça seu relato</h5>
					</span>

					<p style="color: white; font-size: 20px;">Nome 
					<div class="wrap-input100 validate-input" data-validate = "Insira o nome!"> 
						<input class="input100" type="text" name="nome_relato" placeholder="Nome real, nome fictício ou anônima...">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

          			<p style="color: white; font-size: 20px;">Escreva aqui seu relato
          			<div class="wrap-input100 validate-input" data-validate="Insira o texto!"> 
						<textarea class="input100" name="descricao" ></textarea>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
					<input type="submit" name="SendAddRel" value="Enviar" class="login100-form-btn" >
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
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