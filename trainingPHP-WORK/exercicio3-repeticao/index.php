<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
  //$ini = isset($_GET["ini"])?$_GET["ini"]:0;
  //$fim = isset($_GET["fim"])?$_GET["fim"]:0;
  //$inc = isset($_GET["inc"])?$_GET["inc"]:0;

    $ini = $_GET["ini"];
    $fim = $_GET["fim"];
    $inc = $_GET["inc"];
  
  if ($ini < $fim){ // se o valor de inicio for menor que fim
   while ($ini <= $fim){ //vai criar um looping  enquanto for menor igual a fim
    echo "$ini "; //vai mostrar o inicio
    $ini += $inc; //aqui vai incrementar no inicio o valor de inc, quantidade q vai pular de numero em numero
   }
  }
  else{ //se nao
   while ($ini >= $fim){ // enquanto  ini for maior igual que fim vai fazer o porcessor inverso de decrementar
    echo "$ini ";
    $ini -= $inc; //decrementando e pulando d tras pra frente
   }
  }        
    ?>
    <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>

</div>
</body>
</html> 