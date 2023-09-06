<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($contador=0; $contador <= 10 ; $contador++) { 
            echo "<br> $contador ";
        }
        echo "<br>";

        for ($contador=100; $contador >= 1 ; $contador-= 10) { 
            echo "<br> $contador ";
        }
        echo "<br>";

        for ($contador=0; $contador <= 50 ; $contador+= 10) { 
            echo "<br> $contador ";
        }

        echo "<br>";

        //criando um contador decrescente de 1000 até 100 pulando de 100 em 100

       for ($contador=1000; $contador >= 1; $contador-= 100) { // contador -= 100 = contador = contador - 100;
        echo "<br>$contador ";
       }
    ?>
</body>
</html>