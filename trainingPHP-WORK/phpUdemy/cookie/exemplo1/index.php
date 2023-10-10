<?php
 $valor = 'nao tem cookie';

 if (!empty($_COOKIE['meu_cookie'])) { //verifica se existe o cookie esperado
    $valor = $_COOKIE['meu_cookie'];
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'nav.php'?>
    <hr>
    <h1>Inicio</h1>
    <p>O valor do cookie é: <?= $valor?></p>
</body>
</html>