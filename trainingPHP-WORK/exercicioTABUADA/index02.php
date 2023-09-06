<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //nesse código php eu faço um while pra criar a tabuada do numero do input vezes o contador até 10 que seria o padrao da tabuada    
    $num_tabuada = $_GET["valor_tabuada"];
    $resultado = 1;
    $contador2 = 0;
        echo "<h2> A tabuada de $num_tabuada é:</h2>";

        do {
            $contador2++;
            $resultado = $num_tabuada * $contador2;
            echo "<br> $num_tabuada X $contador2 = $resultado";
        } while ($contador2 < 10);
    ?>
</body>
</html>