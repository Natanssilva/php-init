<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h1>Resultado de idade</h1>

    <?php
        $nome = isset($_GET["input_name"]) ? $_GET["input_name"] : "nao configurado"; // a função isset() julga se foi configurado e o operador ternário cria uma condição caso tenha ou nao sido configurado
        $idade = date("Y") - $_GET["input_nasc"];
        $genero = $_GET["sexo"];

        echo "Olá $nome,o seu genero é $genero e sua idade é $idade";

        // é possivel colocar valores php dentro de css TAMBEM
    ?>
</body>
</html>