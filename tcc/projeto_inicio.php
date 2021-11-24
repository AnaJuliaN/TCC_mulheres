<?php

require "verifica.php";

if(isset($_SESSION['cod_usuario']) && !empty($_SESSION['cod_usuario'])); 

// definições de host, database, usuário e senha
include "conexao2.php";
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
        align: center;
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
            <i class="fas fa-user" style="color:white; font-size:30px; padding: 10px;width: 30px; ""></i><a class="nav-item nav-link" id="login-menu" href="logout.php"><?php echo $nomeUser;  ?>/Logout</a>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <main>
      <!-- Projetos -->
      <br/>
      <br/>
      <div id="about-area">
        <div class="container">
            <div class="row">
              <div class="col-12"> 
                <h3 class="main-title">Projetos de mulheres para mulheres</h3>
              </div>
              <table>
                    <tr>
                        <td><a href="https://www.mulheresqueinspiram.com"><img  width="300" height="180" src='img/projeto1.jpg'/></a></td>
                        <td><a href="https://www.mulheresqueinspiram.com"><font color=#8f26cc><b>MULHERES QUE INSPIRAM</b></font></a> </br>
                        Este projeto criado por Priscila Adduca, consiste em transformar mulheres criativas em donas de suas próprias
                        carreiras de negócios. Nesse projeto, seu objetivo, se baseia em apoiar artistas independentes para que cada vez
                        mais trabalhos cheios de personalidade e amor invadam o mercado.</td> 
                    </tr>
                    </br>
                    <tr>
                        <td><a href="https://www.escoladevoce.com.br/"><img  width="300" height="180" src='img/projeto2.jpg'/></td>
                        <td><a href="https://www.escoladevoce.com.br/"><font color=#8f26cc><b>ESCOLA DE VOCÊ</b></font></a> </br>
                        O projeto Escola de você, criado pelas jornalistas Ana Paula Padrão e Natalia Leite, é uma plataforma online com aulas
                        de autoconhecimento, empoderamento e empreendedorismos totalmente gratuitas. Seu objetivo é empoderar mulheres por meio 
                        de conhecimento para que assim possam construir uma verdadeira rede sororidade.</td> 
                    </tr> 
                    <tr>
                        <td><a href="https://www.redeasta.com.br/"><img  width="300" height="180" src='img/projeto3.jpg'/></td>
                        <td><a href="https://www.redeasta.com.br/"><font color=#8f26cc><b>REDE ASTA</b></font></a> </br>
                        Fundada por Alice Freitas e Rachel Schettino, a empresa Rede Asta tem como objetivo ajudar as pequenas artesãs brasileiras
                        a se tornarem grandes empreendedoras por meio da transformação de resíduos descartáveis em produtos feitos à mão, cheios de
                        carinho.</td> 
                    </tr> 
                    <tr>
                        <td><a href="https://consuladodamulher.org.br/"><img  width="300" height="180" src='img/projeto4.jpg'/></td>
                        <td><a href="https://consuladodamulher.org.br/"><font color=#8f26cc><b>O CONSULADO DA MULHER</b></font></a> </br>
                        Criado por um grupo de empreendedoras em 2002, O Consulado da Mulher se trata de um instituto que incentiva mulheres de baixa
                        renda e escolaridade a se aprofundarem no mundo do empreendedorismo. Seu objetivo é fazer com que essas mulheres se tornem 
                        confiantes e capacitadas a administrar seus próprios negócios.</td> 
                    </tr> 
                </table>
            </div>
          </div>
      </div>
    </div>
    <!-- Projetos usuarios -->

    <div id="about-area">
        <div class="container">
            <div class="row">
              <div class="col-12"> 
                <h3 class="main-title">Conheça projetos criados por usuários!</h3>
              </div>
             
                <?php 
                  $result_proj = "SELECT * FROM projeto";

                  $result_proj = $pdo->prepare($result_proj);
                  $result_proj->execute();

                  while ($row_proj = $result_proj->fetch(PDO::FETCH_ASSOC)) {  
                    echo "<container><fieldset class='fieldset'>
                    <legend><img  width='300' height='180' src='img/projetos_usuarios.png'/>
                     <font color=#8f26cc><b>&nbsp"  .$row_proj['titulo']. "</b></font></legend>
                         <b style='margin-left: 20px;'>Contato:</b>&nbsp"  .$row_proj['contato']. " <br />
                         <b style='margin-left: 20px;'>Data:</b>&nbsp"  .$row_proj['data']. " <br />
                         <b style='margin-left: 20px;'>Local:</b>&nbsp"  .$row_proj['local']. " <br />
                         <b style='margin-left: 20px;'>Duração:</b>&nbsp"  .$row_proj['duracao']. " <br />
                         <b style='margin-left: 20px;'>Descrição:</b>&nbsp"  .$row_proj['descricao']. "<br />
                   </br></fieldset>";
                   
                   }
                   ?>
                
       
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
