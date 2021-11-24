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
        h1{
            font-family: Milky;
            font-size: 3em;
            text-align: center;
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
      
    </style>
</head>
<body>
  <header>
    <div class="container" id="nav-container">
      <!-- add essa class -->
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <a class="navbar-brand" href="area_admin.php">
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
                <h3 class="main-title">Relatos</h3>
                <br />
              </div>
              <?php
              
              //SQL para selecionar os registros
              $result_relato = "SELECT * FROM relato WHERE validar = '1'";

              //seleciona os registros
              $resultado_relato = $conn->prepare($result_relato); 
              $resultado_relato->execute();

              while ($row_relato = $resultado_relato->fetch(PDO::FETCH_ASSOC)) {
                echo "<container><fieldset class='fieldset'>";
                echo "<legend><img src='img/icone.png' width=100 height=100 />";
               echo "<b style='margin-left: 20px;'> &nbsp"  . $row_relato['nome_relato'] . "</legend>";
               echo "<b style='margin-left: 20px;'> &nbsp" . $row_relato['descricao'] . " <br /><br /> ";
               echo "<a href='comentarios_admin.php?cod_r=".$row_relato['cod_relato']."' style='color: #8f26cc;'> Ver Comentários </a> <br /><br />";
               echo"</fieldset>";
              }

             // if (empty($row_relato = $resultado_relato->fetch(PDO::FETCH_ASSOC))) {
                //echo "<br/><br/><br/><div class='mainbox'>
                //<div class='msg' style='font-size: 20px;'><h1>Não temos relatos ainda por aqui. Quer ser a primeira a fazer um relato? <a href='faca_relato.php'>Clique aqui!</a></h1></div>
                //<br/></br/><center><img width='500' height='500' src = 'img/sucesso.gif' /></center>";
              //}
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