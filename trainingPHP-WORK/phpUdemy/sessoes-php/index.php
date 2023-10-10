<?php
//todos scripts devem ter acesso a sessão
//antes de qualquer output do php

//esses 3 precisariam em todos scripts que tenham session start
session_name('minha_sessao');
session_set_cookie_params(10); //sempre em segundos
session_start();
// o valor de $nome e $apelido vai ser definido tendo
// em atenção a existencia ou nao das variaveis na super global $_SESSION
// exemplos de super globais: session,post,get,server

// SESSION trata-se de um array(coleção) de todas as variaveis q tem na sessão


//função unset() serve pra destruir uma variavel ou ate um indice em array, caso nao exista tbm nao causa erro
// session_unset(); //remove todas as VARIAVEIS DA SESSAO

// session_destroy(); //destrói a SESSÃO

$nome = !empty($_SESSION['nome']) ? $_SESSION['nome'] : '-'; 
$apelido = !empty($_SESSION['apelido']) ? $_SESSION['apelido'] : '-';
$nome = 'joao';
$apelido = 'teste';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>teste</h2>
    <p>nome : <?= $nome ?></p>
    <p>apelido : <?= $apelido ?></p>
</body>
</html>