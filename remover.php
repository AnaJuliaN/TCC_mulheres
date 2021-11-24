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
<?php

include_once './conexao_pdo.php';
require "verifica.php";
if(isset($_SESSION['cod_usuario']) && !empty($_SESSION['cod_usuario'])); 
$cod_usuario=$_SESSION['cod_usuario'];

//$cod_r=0;
$cod_c=$_POST['cod_c'];
$cod_r=0;
$cod_r=$_POST['cod_r'];
//echo "CÓDIGO DO RELATO $cod_r";

$sql = "DELETE FROM comentários WHERE cod_comentario = $cod_c"; 
$delete_com = $pdo->prepare($sql);
//$delete_com->bindParam(':cod_r', $_GET['cod_r'], PDO::PARAM_INT);   
$vai=$delete_com->execute();
if($vai){
    echo "<div class='mainbox'>
    <div class='msg' style='font-size: 20px;'><p>Comentário apagado com sucesso! <a href='comentarios_admin.php?cod_r=".$cod_r."'>Voltar</a></p></div>
    <i class='far fa-check-circle'></i><center><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <img width='500' height='500' src = 'img/erro.gif' /></center>
    </div>
    ";
   
}
?>