<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Respostas</h1>
    <?php
        $numero =  $_GET["campo_numero"];
        $op = $_GET["op"]; 
        

        switch ($op) {
            case "dobro":
                $resultado = $numero * 2;
                break;
            
            case "cubo":
                $resultado = $numero ^ 3;
                break;

            case "raiz_quadrada":
                $resultado = sqrt($numero);  
        }

        echo "O operação escolhida foi $op e o resultado foi $resultado";     
    ?>

    <a href="index.html">VOLTAR</a>
</body>
</html>