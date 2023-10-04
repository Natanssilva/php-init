<?php
//OPERADOR TERNÁRIO

//operador ternario é outra estrutura condicional e pode substituir um caso simples de if e else
//normalmente usado dentro do html por exemplo

$erro = true;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .erro{
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
    <div class="<?= $erro?'erro' : '' ?>">  <!-- avalia se $erro é verdadeiro, ? faz a pergunta, se for vdd executa a primeira opção antes dos : se for falsa executa a ultima  -->
        <h1>Tem um erro</h1>
    </div>
</body>
</html>

