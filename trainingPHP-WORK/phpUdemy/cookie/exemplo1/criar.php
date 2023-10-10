<?php

//criar um cookie
$nome = 'meu_cookie';
$valor = 'conteudo_do_cookie';
$expiracao = 3600; //1h de duração

setcookie($nome,$valor,time() + $expiracao); //seta o nome do cookie, valor e tempo de duração de um cookie

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'nav.php' ?>
    <h3>criar cookie</h3>
    <p>cookie criado c sucesso</p>
</body>
</html>