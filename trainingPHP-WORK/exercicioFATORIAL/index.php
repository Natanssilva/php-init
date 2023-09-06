<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $numero = $_GET["numero_input"];
        echo "<h1>Calculando o fatorial de $numero </h1>";
        $fatorial = 1;
        $contador = $numero;
        $fatorial = 1;

        do{
            $fatorial *= $contador;
            $contador--;
        }while($contador >=1);
        echo "<h3>O fatorial de !$numero é $fatorial  ";

    ?>
</body>
</html>