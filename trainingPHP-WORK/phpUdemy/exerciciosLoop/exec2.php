<?php
    //construir array com resultado da tabuada por 327 
    //apresentar os dados do array com foreach, apenas os resultados

    function showArray($array){
    echo "<pre>";

    print_r($array);

    echo "</pre>";
}
    
    $tabuada = [];
    //showArray($tabuada);
    for ($i=1; $i <= 10; $i++) { 
        $tabuada[] = 327 * $i;
        //showArray($tabuada);
        echo " <br>$i x 327  = " . $tabuada[$i - 1];
    }

   // showArray($tabuada);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exec2</title>
</head>
<body>
    <h1>RESULTADOS: <?php foreach ($tabuada as $result) {
        echo "<BR>$result";
    } ?></h1>
</body>
</html>