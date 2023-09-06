<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero_tabuada = $_GET["numero_tabuada"];
        echo "<h1>Calculando tabuada de $numero_tabuada...</h1>";

        for ($cont=1; $cont <=10 ; $cont++) {
            $resultTabuada = $numero_tabuada * $cont;
            echo "<p>$numero_tabuada X $cont = $resultTabuada </p>";
        }
    ?>  
</body>
</html>