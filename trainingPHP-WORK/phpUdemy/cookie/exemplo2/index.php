<?php

//verificar se existe um cookie com o thema

$theme = !empty($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
//criando a variavel e verificando que se cookie['theme'] nao estiver vazio, vai receber o valor de
//$_COOKIE['theme'], se NAO recebe light

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darkmode</title>
    <style>
        .dark{
            background-color: black;
            color: white;
        }

        .light{
            background-color: wheat;
            color: black;
        }
    </style>
</head>
<body class="<?= $theme ?>">    <!-- colocando a variavel q pega o cookie pra mudar a classe-->
    <a href="dark.php">THEME DARK</a>
    <a href="light.php">THEME LIGHT</a>
    <h1>Exemplo de darkmode</h1>
</body>
</html>