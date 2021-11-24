<?php

require "verifica.php";

if(isset($_SESSION['cod_usuario']) && !empty($_SESSION['cod_usuario'])); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Para Elas - Tipos de Violência</title>
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
                <h3 class="main-title">Tipos de Violência</h3>
              </div>
            </div>
          </div>
      </div>
            <!-- Textos -->
            <div id="text-area" class="container-fluid" style="position:center; background-color: #8f26cc; width: 80%; height: 40%; padding-top:20px; padding-left: 20px; padding-right: 20px; padding-bottom: 10px; color: white;">
            <center> <strong> <i class="fas fa-exclamation-triangle"  style="font-size:60px;"></i> Violência Física: </strong> </center>
            <p style="text-align: justify; color: white; font-size: 20px;"> A violência física se dá por todo uso proposital da força contra a mulher em qualquer idade e aspecto, que pode ser cometida por meio de socos, empurrões, lançamento de objetos, chutes e qualquer outro ato que pode deixar marcas ou não no corpo. Este tipo de violência contra a mulher é a mais evidente e difícil de esconder. </p>
            </div>
            <br/>
            <div id="text-area" class="container-fluid" style="position:center; background-color: #8f26cc; width: 80%; height: 40%; padding-top:20px; padding-left: 20px; padding-right: 20px; padding-bottom: 10px; color: white;">
                <center> <strong><i class="fas fa-head-side-cough" style="font-size:60px;"></i> Violência Psicológica: </strong> </center>
                <p style="text-align: justify; color: white; font-size: 20px;"> Muitas vezes mascarada como ciúmes, a violência psicológica se dá pelo uso de palavras ou atos ofensivos como formas de ataque. É cometida por meio de ameaças, imposição de limites do direito de ir e vir e da comunicação com amigos e família, punições humilhantes, cobrança exagerada, chantagem, entre outros. </p>
            </div>
            <br/>
            <div id="text-area" class="container-fluid" style="position:center; background-color: #8f26cc; width: 80%; height: 40%; padding-top:20px; padding-left: 20px; padding-right: 20px; padding-bottom: 10px; color: white;">
                <center> <strong><i class="fas fa-home" style="font-size:60px;"></i> Violência Doméstica: </strong> </center>
                <p style="text-align: justify; color: white; font-size: 20px;"> A violência doméstica se dá por todo uso de violência que é cometida entre os parceiros que residem em um espaço familiar comum. Pode incluir diversos tipos de violência, como a física, psicológica e sexual, e abusos.</p>
            </div>
            <br/>
            <div id="text-area" class="container-fluid" style="position:center; background-color: #8f26cc; width: 80%; height: 40%; padding-top:20px; padding-left: 20px; padding-right: 20px; padding-bottom: 10px; color: white;">
                <center> <strong><i class="fas fa-dollar-sign" style="font-size:60px;"></i> Violência Financeira: </strong> </center>
                <p style="text-align: justify; color: white; font-size: 20px;"> A violência financeira ou econômica se dá pelo abuso de poder que é cometido pelo companheiro contra a mulher no ato de proibir alguma compra, mostrar como deve gastar seu dinheiro, impedi-la de trabalhar, atrasar ou negar pensão alimentícia propositalmente, ou seja, toda ação que envolva assunto monetário e que cause sofrimento, culpa e tristeza à mulher. </p>
            </div>
            <br/>
            <div id="text-area" class="container-fluid" style="position:center; background-color: #8f26cc; width: 80%; height: 40%; padding-top:20px; padding-left: 20px; padding-right: 20px; padding-bottom: 10px; color: white;">
                <center> <strong><i class="fas fa-frown" style="font-size:60px;"></i> Violência Sexual: </strong> </center>
                <p style="text-align: justify; color: white; font-size: 20px;"> A violência sexual se dá por todo ato sexual, exigências de caráter sexual e insinuações sexuais indesejadas e sem consentimento, em qualquer ambiente, seja o próprio lar ou o local de trabalho, por exemplo.  Estupro dentro do relacionamento, estupro por pessoas conhecidas ou desconhecidas, fertilização forçada, casamento pressionado e abuso sexual são exemplos de como essa violência é cometida.</p>
            </div>
            <br/>
            <div id="text-area" class="container-fluid" style="position:center; background-color: #8f26cc; width: 80%; height: 40%; padding-top:20px; padding-left: 20px; padding-right: 20px; padding-bottom: 10px; color: white;">
                <center> <strong><i class="fas fa-briefcase" style="font-size:60px;"></i> Violência no Trabalho: </strong> </center>
                <p style="text-align: justify; color: white; font-size: 20px;"> A violência no trabalho se dá por todo ato de uma pessoa ou um grupo de pessoas ocorrido no ambiente de trabalho ou que inclua relações estabelecidas no trabalho, que causem danos físicos ou psicológicos. É cometida por meio de situações humilhantes e constrangedoras, agressões, abusos verbais, xingamentos, brincadeiras, sabotagem, roubos, empurrões, entre outros.</p>
            </div>
    </div>
    <!--Tabela-->
    <table id="tabela" width="700px" border="0" cellspacing="100px" cellpadding="100px" class="table" align="center">
              
              <th>Tipo de Violência</th>
              <th>Características</th>
              <th>Exemplos de Atos</th>
               
              <tbody>
              <tr >
                  <td style="color:#fff; font-size: 20px;" >Violência Física</td>
                  <td width="20%" style="color:#fff; font-size: 20px;">Uso proposital da força que pode deixar marcas no corpo ou não.</td>
                  <td width="70%" style="color:#fff; font-size: 20px;"> 
                    <ul>  
                      <li style="color:#fff; font-size: 20px;"> Empurrões </li>
                      <li style="color:#fff; font-size: 20px;"> Beliscões </li>
                      <li style="color:#fff; font-size: 20px;"> Arremesso de objetos</li>
                    </ul> 
                  </td>
              </tr>
              <tr>
                  <td scope="row" style="color:#fff; font-size: 20px;">Violência Psicológica</td>
                  <td style="color:#fff; font-size: 20px;">Uso de palavras ou atos ofensivos como forma de ataque.</td>
                  <td> 
                    <ul> 
                      <li style="color:#fff; font-size: 20px;"> Ameaças </li>
                      <li style="color:#fff; font-size: 20px;"> Punições humilhantes </li>
                      <li style="color:#fff; font-size: 20px;"> Cobrança exagerada </li>
                    </ul>
                  </td>
              </tr>
              <tr>
                  <td scope="row" style="color:#fff; font-size: 20px;">Violência Doméstica</td>
                  <td style="color:#fff; font-size: 20px;">Uso da violência ou abuso num contexto doméstico, como por exemplo no residir em um espaço familiar comum. Pode incluir diversos tipos de violência e abusos. </td>
                  <td> 
                    <ul> 
                      <li style="color:#fff; font-size: 20px;"> Abusos físicos </li>
                      <li style="color:#fff; font-size: 20px;"> Abusos sexuais </li>
                      <li style="color:#fff; font-size: 20px;"> Abusos psicológicos </li>
                    </ul>
                  </td>
              </tr>
              <tr>
                  <td scope="row" style="color:#fff; font-size: 20px;">Violência Financeira</td>
                  <td style="color:#fff; font-size: 20px;">Abuso de poder que é cometido pelo companheiro contra a mulher.</td>
                  <td> 
                    <ul> 
                      <li style="color:#fff; font-size: 20px;"> Proibição de compras </li>
                      <li style="color:#fff; font-size: 20px;"> Proibição de trabalho </li>
                      <li style="color:#fff; font-size: 20px;"> Atrasar ou negar pensão 
                      <br /> alimentícia propositalmente</li>
                    </ul>
                  </td>
              </tr>
              <tr>
                  <td scope="row" style="color:#fff; font-size: 20px;">Violência Sexual</td>
                  <td style="color:#fff; font-size: 20px;">Todo ato sexual, exigências de caráter sexual e insinuações sexuais indesejadas e sem consentimento.
                  </td>
                  <td> 
                    <ul> 
                      <li style="color:#fff; font-size: 20px;"> Tentativas sexuais indesejadas </li>
                      <li style="color:#fff; font-size: 20px;"> Fertilização forçada</li>
                      <li style="color:#fff; font-size: 20px;"> Assédio sexual </li>
                    </ul>
                  </td>
              </tr>
              <tr>
                  <td scope="row" style="color:#fff; font-size: 20px;">Violência no Trabalho</td>
                  <td style="color:#fff; font-size: 20px;"> Todo ato de uma pessoa ou um grupo de pessoas ocorrido no ambiente 
                  <br /> de trabalho ou que inclua relações estabelecidas no trabalho, que causem danos físicos ou psicológicos.</td>
                  <td> 
                    <ul> 
                      <li style="color:#fff; font-size: 20px;"> Situações humilhantes e constrangedoras </li>
                      <li style="color:#fff; font-size: 20px;"> Agressões </li>
                      <li style="color:#fff; font-size: 20px;"> Abusos verbais </li>
                      <li style="color:#fff; font-size: 20px;"> Sabotagem </li>
                    </ul>
                  </td>
              </tr>
              </tbody>
              <br/>
            </table>
            <br />
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