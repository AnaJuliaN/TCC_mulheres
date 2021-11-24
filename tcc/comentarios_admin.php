<?php
include_once './conexao_pdo.php';
require "verifica.php";

if(isset($_SESSION['cod_usuario']) && !empty($_SESSION['cod_usuario'])); 
$cod_usuario=$_SESSION['cod_usuario'];
$descricao=$_SESSION['descricao'];
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
  <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
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
        legend{
            font-family: Milky;
        }
       
        fieldset {
        display: block;
        position: relative;
        border: 2px solid black;
        width: 900px;
        padding: 20px;
        margin: 20px;
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
        <a class="navbar-brand" href="index.php">
          <img id="logo" src="img/logotipo.png" alt="Para Elas"> Para Elas
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
          <br />
          <br />
          <br />
          <br />
        <div class="container">
            <div class="row">
              <div class="col-12"> 
                <h3 class="main-title">Comentários</h3>
                <br />
              </div>
              <?php
              //$cod_r=0;
              $cod_r=$_GET['cod_r'];
              //echo "CÓDIGO DO RELATO $cod_r";
              echo'<input type="hidden" value="'.$cod_r.'" name="cod_r">';
              //SQL para selecionar os registros
              $result_com = "SELECT usuario.nome, comentários.descricao, comentários.cod_relato, comentários.cod_comentario FROM usuario INNER JOIN comentários ON usuario.cod_usuario = comentários.cod_usuario WHERE comentários.cod_relato = '$cod_r'";

              //seleciona os registros
              $resultado_com = $conn->prepare($result_com); 
              $resultado_com->execute();
              
              while ($row_com = $resultado_com->fetch(PDO::FETCH_ASSOC)) {
                
               echo "<form action='remover.php' method='POST'>";
               echo "<container><fieldset class='fieldset'>";
               echo "<legend><img src='img/icone.png' width=100 height=100 />";
               echo "<b style='margin-left: 20px;'> &nbsp"  . $row_com['nome'] . " </legend>";
               echo "<b style='margin-left: 20px;'> &nbsp" . $row_com['descricao'] . " <br /><br />";
               echo "<input type='submit' value='Excluir' id='login100-form-btn' >
                            </button>";
              $cod_c = 0;
              $cod_c = $row_com['cod_comentario'];
              //echo "$cod_c";
               echo "<input type='hidden' value='".$cod_c."' name='cod_c'>";
               echo'<input type="hidden" value="'.$cod_r.'" name="cod_r">';
              echo "</form></fieldset>";
              
              /*$DelCom = filter_input(INPUT_POST, 'DelCom', FILTER_SANITIZE_STRING);
              if($DelCom){
               $sql = "DELETE usuario.nome, comentários.descricao, comentários.cod_relato FROM usuario INNER JOIN comentários ON usuario.cod_usuario = comentários.cod_usuario WHERE comentários.cod_relato = '$cod_r'";
               $delete_com = $pdo->prepare($sql);
                $vai=$delete_com->execute();
               if($vai){
                   echo "Cliente excluído";
                }   
              }*/
              }
              echo"<div class='container-login100-form-btn'>
              <a href='relatos_admin.php' class='dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30'><img src='img/flecha.png' width=10 height=10>
							Voltar
							
              </img></a></div>";

              
              ?>
              
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