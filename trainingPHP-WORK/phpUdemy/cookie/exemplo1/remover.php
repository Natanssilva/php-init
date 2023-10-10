<?php

$nome = 'meu_cookie';
setcookie($nome,'', time() - 1) //remove o cookie
//força ele a nao ter valor e o tempo d expiração vai ser o tempo atual -1 segundo

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
    <h1>remover</h1>
    <p>cookie removido</p>
</body>
</html>